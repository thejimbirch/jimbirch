<?php

/**
 * Class DropSharkCollectorBase.
 */
abstract class DropSharkCollectorBase implements DropSharkCollectorInterface {

  /**
   * An array of information from the collector's definition.
   *
   * @var array
   */
  protected $definition;

  /**
   * Event types which the collector will respond.
   *
   * @var array
   */
  protected $events = array();

  /**
   * The queue for handling collected data.
   *
   * @var \DropSharkQueueInterface
   */
  protected $queue;

  /**
   * The site ID.
   *
   * @var string
   */
  protected $siteId;

  /**
   * A machine name indicating the collector's type.
   *
   * @var string|null
   */
  protected $type = NULL;

  /**
   * DropSharkCollector constructor.
   *
   * @param array $definition
   *   Collector definition obtained from hook_dropshark_collector_info().
   * @param \DropSharkQueueInterface $queue
   *   The queue used for handling collected data.
   * @param string $siteId
   *   The site ID.
   */
  public function __construct(array $definition, DropSharkQueueInterface $queue, $siteId) {
    $this->definition = $definition;
    $this->queue = $queue;
    $this->siteId = $siteId;
  }

  /**
   * {@inheritdoc}
   */
  public function finalize() {
    // Default to performing no action.
  }

  /**
   * Determine if the collector will respond to an event.
   *
   * This is a simple check of the event compared to a white list consisting of
   * the collector's $events property plus the value 'all'.
   *
   * Each collector extending this class should add its applicable event types
   * to the $events property and utilize this method for checking applicability.
   *
   * Alternatively, an extending collector may override this method to perform
   * more sophisticated logic or elect to not use this check.
   *
   * @param string $event
   *   The event or type of event for which the collector is being polled.
   *
   * @return bool
   *   A value indicating if the collector will respond.
   */
  protected function respond($event) {
    $types = $this->events;
    $types[] = 'all';
    return in_array($event, $types);
  }

  /**
   * The server where the data is being collected.
   *
   * Metrics specific to a server should specify which server they're collected
   * from.
   *
   * @return string
   *   The server identifier.
   */
  public function getServer() {
    // TODO: make this dynamic, configurable.
    return 'default';
  }

  /**
   * A default value to be used for a collector's result.
   *
   * This contains the properties needed to report a valid result. Collectors
   * will add and overwrite properties as needed.
   *
   * Note: 'ds_timestamp' and 'ds_fingerprint' properties gets added when the
   * collected data is queued.
   *
   * @param string $type
   *   The type indicator of the data being collected.
   *
   * @return array
   *   A generic result array.
   */
  protected function defaultResult($type = NULL) {
    $result = array();

    if (!$type) {
      $type = $this->type;
    }

    $result['site_id'] = $this->siteId;
    $result['type'] = $type;
    $result['server'] = $this->getServer();
    $result['ds_collector_id'] = "{$result['type']}|{$result['server']}";
    $result['code'] = 'unknown_error';
    $result['fingerprint'] = dropshark_site_fingerprint();
    $result['ds_api_version'] = DROPSHARK_API_VERSION;

    return $result;
  }

}
