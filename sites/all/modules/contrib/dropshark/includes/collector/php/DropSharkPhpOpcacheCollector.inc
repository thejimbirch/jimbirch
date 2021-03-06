<?php

/**
 * Class DropSharkPhpOpcacheCollector.
 *
 * Collects data pertaining to OpCache usage.
 */
class DropSharkPhpOpcacheCollector extends DropSharkCollectorBase {

  protected $events = array('system');
  protected $type = 'opcache';

  /**
   * {@inheritdoc}
   */
  public function collect($event, array $data = array()) {
    if (!$this->respond($event)) {
      return;
    }

    $data = $this->defaultResult();

    if (!function_exists('opcache_get_status')) {
      $data['code'] = 'no_opcache';
      $this->queue->add($data);
      return;
    }

    if (!$status = opcache_get_status(FALSE)) {
      $data['code'] = 'opcache_not_enabled';
      $this->queue->add($data);
      return;
    }

    $data += $status;
    $data['code'] = DropSharkCollectorInterface::STATUS_SUCCESS;
    $this->queue->add($data);
  }

}
