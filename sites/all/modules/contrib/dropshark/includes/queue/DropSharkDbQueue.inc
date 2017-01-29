<?php

/**
 * Class DropSharkDbQueue.
 */
class DropSharkDbQueue implements DropSharkQueueInterface {

  /**
   * The lock currently in use.
   *
   * @var string
   */
  protected $currentLock;

  /**
   * Data collected throughout the request.
   *
   * @var array
   */
  protected $data = array();

  /**
   * Deferred collectors.
   *
   * @var \DropSharkCollectorInterface[]
   */
  protected $deferred;

  /**
   * Indicates that the queue should transmit during the current HTTP request.
   *
   * @var bool
   */
  protected $immediateTransmit = FALSE;

  /**
   * The request object.
   *
   * @var \DropSharkRequestInterface
   */
  protected $request;

  /**
   * The site ID.
   *
   * @var string
   */
  protected $site_id;

  /**
   * {@inheritdoc}
   */
  public function __construct($request, $site_id) {
    $this->request = $request;
    $this->site_id = $site_id;
  }

  /**
   * {@inheritdoc}
   */
  public function add($item) {
    $item['ds_timestamp'] = time();
    $data['data'] = $item;
    $data['created'] = $this->timestamp();
    $this->data[] = $data;
  }

  /**
   * Clear expired locks from queue items.
   *
   * @param $timestamp
   *   The timestamp for which to check lock expiration, defaults to current
   *   time minus the lock expiration configuration.
   */
  public function clearLocks($timestamp = NULL) {
    if (!$timestamp) {
      $timestamp = $this->timestamp() - variable_get('dropshark_queue_lock_duration_max', DROPSHARK_QUEUE_LOCK_MAX_DEFAULT);
    }
    $query = 'UPDATE {dropshark_queue} SET lock_id = NULL , lock_time = NULL WHERE lock_time < ?';
    db_query($query, array($timestamp));
  }

  /**
   * Gets items from persistent storage.
   *
   * @return array
   */
  protected function getItems() {
    // Lock the next X items.
    $this->currentLock = $this->lock();

    $query = 'SELECT data FROM {dropshark_queue} WHERE lock_id = ? ORDER BY created';

    $data = array();
    foreach (db_query($query, array($this->currentLock)) as $item) {
      $data[] = array(
        'type' => 'persistent',
        'data' => json_decode($item->data),
      );
    }

    return $data;
  }

  /**
   * {@inheritdoc}
   */
  public function hasDeferred() {
    return !empty($this->deferred);
  }

  /**
   * Lock a set of items to prevent duplicate processing.
   *
   * @return string
   *   The key of the locked items.
   */
  protected function lock() {
    mt_srand(time() / __LINE__);
    $key = md5(__METHOD__ . microtime() . mt_rand(0, 999999));

    $query = 'UPDATE {dropshark_queue} SET lock_id = ? , lock_time = ? WHERE lock_id IS NULL ORDER BY CREATED';
    db_query($query, array($key, $this->timestamp()));

    return $key;
  }

  /**
   * {@inheritdoc}
   */
  public function needsImmediateTransmit() {
    return $this->immediateTransmit;
  }

  /**
   * {@inheritdoc}
   */
  public function persist() {
    // @TODO: write these in a batch or batches.
    foreach ($this->data as $item) {
      $record = new stdClass();
      $record->created = $item['created'];
      $record->data = json_encode($item['data']);
      drupal_write_record('dropshark_queue', $record);
    }

    $this->data = array();
  }

  /**
   * {@inheritdoc}
   */
  public function processDeferred() {
    foreach ($this->deferred as $collector) {
      $collector->finalize();
    }
    $this->deferred = array();
  }

  /**
   * Removes items from the queue by lock.
   */
  protected function removeItems() {
    if (!$this->currentLock) {
      return;
    }

    $query = 'DELETE FROM {dropshark_queue} WHERE lock_id = ?';
    db_query($query, array($this->currentLock));
    $this->currentLock = NULL;
  }

  /**
   * {@inheritdoc}
   */
  public function setDeferred($collector) {
    $this->deferred[] = $collector;
  }

  /**
   * {@inheritdoc}
   */
  public function setImmediateTransmit() {
    $this->immediateTransmit = TRUE;
  }

  /**
   * Provides a timestamp for queue entries.
   *
   * @return int
   *   Unix type timestamp of when the queue item was added.
   */
  protected function timestamp() {
    return time();
  }

  /**
   * {@inheritdoc}
   */
  public function transmit() {
    // Clear any old stuff that didn't finish processing.
    $this->clearLocks();

    // Get persisted items, merge with static items.
    $items = array_merge($this->getItems(), $this->data);
    $data = array();
    foreach ($items as $item) {
      $data[] = $item['data'];
    }

    // Attempt to transmit.
    $result = $this->transmitItems($data);
    if ($result->code != 200) {
      // Handle error.
      $this->unlock();
      $this->persist();
    }
    else {
      // On success clear data from queue.
      $this->removeItems();
      $this->data = array();
    }

    $this->deferred = array();
    $this->immediateTransmit = FALSE;
  }

  /**
   * Process queued items.
   *
   * @param array $items
   *   Data to be transmitted.
   *
   * @return stdClass
   *   Result of drupal_http_request() from the data submission.
   */
  protected function transmitItems($items) {
    $params['data'] = json_encode($items);
    $params['site_id'] = $this->site_id;
    return $this->request->post('data', $params);
  }

  /**
   * Unlock queued items.
   */
  protected function unlock() {
    if (!$this->currentLock) {
      return;
    }

    $query = 'UPDATE {dropshark_queue} SET lock_id = NULL WHERE lock_id = ?';
    db_query($query, array($this->currentLock));
    $this->currentLock = NULL;
  }

}
