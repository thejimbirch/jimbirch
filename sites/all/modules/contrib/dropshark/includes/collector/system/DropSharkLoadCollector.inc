<?php

/**
 * Class DropSharkLoadCollector.
 *
 * Collects CPU load information.
 */
class DropSharkLoadCollector extends DropSharkLinfoCollector {

  protected $events = array('system');
  protected $type = 'load';

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

    if (!$load = $this->parser->getLoad()) {
      $data['code'] = 'unable_to_determine_load';
      $this->queue->add($data);
      return;
    }

    $data = array_merge($data, $load);
    $data['code'] = DropSharkCollectorInterface::STATUS_SUCCESS;
    $this->queue->add($data);
  }

}
