<?php

/**
 * Class DropSharkSwapCollector.
 */
class DropSharkSwapCollector extends DropSharkMemoryCollector {

  protected $events = array('system');
  protected $type = 'swap';

  /**
   * {@inheritdoc}
   */
  public function collect($event, $data = array()) {

    if (!$this->respond($event)) {
      return;
    }

    $data = $this->defaultResult();

    if (!$this->checkLinfo($data)) {
      return;
    }

    $memory = $this->getData();

    if (empty($memory['swapInfo'][0])) {
      $data['code'] = 'unable_to_determine_swap';
      $this->queue->add($data);
      return;
    }

    $swap = $memory['swapInfo'][0];

    $data['code'] = DropSharkCollectorInterface::STATUS_SUCCESS;
    $data['used'] = $swap['used'];
    $data['size'] = $swap['size'];
    $data['used_percent'] = $swap['size'] ? $swap['used'] / $swap['size'] : NULL;
    $this->queue->add($data);
  }

}
