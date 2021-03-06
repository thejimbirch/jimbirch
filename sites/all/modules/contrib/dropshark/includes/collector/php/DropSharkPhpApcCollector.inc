<?php

/**
 * Class DropSharkPhpApcCollector.
 *
 * Collects data pertaining to APC usage.
 */
class DropSharkPhpApcCollector extends DropSharkCollectorBase {

  protected $events = array('system');
  protected $type = 'apc';

  /**
   * {@inheritdoc}
   */
  public function collect($event, array $data = array()) {
    if (!$this->respond($event)) {
      return;
    }

    $data = $this->defaultResult();

    if (!function_exists('apc_cache_info')) {
      $data['code'] = 'no_apc';
      $this->queue->add($data);
      return;
    }

    if (!$info = @apc_cache_info('', TRUE)) {
      $data['code'] = 'apc_not_enabled';
      $this->queue->add($data);
      return;
    }

    $data += $info;
    $data['sma'] = apc_sma_info(TRUE);
    $data['code'] = DropSharkCollectorInterface::STATUS_SUCCESS;
    $this->queue->add($data);
  }

}
