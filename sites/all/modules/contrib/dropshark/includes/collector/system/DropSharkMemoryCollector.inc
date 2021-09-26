<?php

/**
 * Class DropSharkMemoryCollector.
 *
 * Collects memory usage information.
 */
class DropSharkMemoryCollector extends DropSharkLinfoCollector {

  protected $events = array('system');
  protected $type = 'memory';

  /**
   * {@inheritdoc}
   */
  public function collect($event, array $data = array()) {

    if (!$this->respond($event)) {
      return;
    }

    $data = $this->defaultResult();

    if (!$this->checkLinfo($data)) {
      return;
    }

    $memory = $this->getData();

    if (empty($memory)) {
      $data['code'] = 'unable_to_determine_memory';
      $this->queue->add($data);
      return;
    }

    $data['code'] = DropSharkCollectorInterface::STATUS_SUCCESS;
    $data['free'] = $memory['free'];
    $data['total'] = $memory['total'];
    $data['used_percent'] = 1 - $memory['free'] / $memory['total'];
    $this->queue->add($data);
  }

  /**
   * Get memory usage information from the OS.
   *
   * @return array
   *   Memory usage information, keyed by type ("Mem:", "Swap:").
   */
  protected function getData() {
    static $data = NULL;

    if ($data === NULL) {
      $data = $this->parser->getRam();
    }

    return $data;
  }

}
