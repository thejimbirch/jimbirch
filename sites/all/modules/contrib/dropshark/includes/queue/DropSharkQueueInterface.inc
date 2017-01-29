<?php

/**
 * Interface DropSharkQueueInterface.
 */
interface DropSharkQueueInterface {

  /**
   * DropSharkQueue constructor.
   *
   * @param \DropSharkRequestInterface $request
   *   A request used by the queue.
   * @param integer $site_id
   *   The DropShark site ID.
   */
  public function __construct($request, $site_id);

  /**
   * Add items to the DropShark queue.
   *
   * @param array $data
   *   Data to be added to the queue.
   */
  public function add($data);

  /**
   * Indicates if the queue has deferred collectors.
   *
   * @return bool
   */
  public function hasDeferred();

  /**
   * Indicates if the queue should be immediately transmitted.
   *
   * Immediate means as the end of the current HTTP request. Alternatively data
   * will be held until a collector indicates its data must be transmitted
   * immediately or some other process initiates a transmission.
   *
   * @return bool
   */
  public function needsImmediateTransmit();

  /**
   * Moves collected items to persistent storage.
   */
  public function persist();

  /**
   * Process deferred collectors.
   */
  public function processDeferred();

  /**
   * Queue a deferred check.
   *
   * @param \DropSharkCollectorInterface $collector
   *   The collector to queue for deferred check.
   */
  public function setDeferred($collector);

  /**
   * Set the queue to be transmitted immediately.
   */
  public function setImmediateTransmit();

  /**
   * Process items from the queue to the DropShark backend.
   */
  public function transmit();

}
