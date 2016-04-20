<?php

/**
 * Class DropSharkCollectorBase.
 */
abstract class DropSharkCollectorBase implements DropSharkCollector {

  protected $definition;
  protected $events = array();
  protected $type = NULL;

  /**
   * {@inheritdoc}
   */
  public function __construct($definition) {
    $this->definition = $definition;
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
   * @param $event
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
   * Note: 'ds_timestamp' property gets added when the collected data is queued.
   *
   * @return array
   */
  protected function defaultResult() {
    $result = array();

    $result['type'] = $this->type;
    $result['server'] = $this->getServer();
    $result['ds_collector_id'] = "{$result['type']}|{$result['server']}";
    $result['code'] = 'unknown_error';
    $result['fingerprint'] = dropshark_site_fingerprint();

    return $result;
  }

}
