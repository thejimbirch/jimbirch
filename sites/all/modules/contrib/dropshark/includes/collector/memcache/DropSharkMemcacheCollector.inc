<?php

class DropSharkMemcacheCollector extends DropSharkCollectorBase {

  protected $events = array('system');
  protected $type = 'memcache';

  /**
   * {@inheritdoc}
   */
  public function collect($event, $data = array()) {

    if (!$this->respond($event)) {
      return;
    }

    $data = $this->defaultResult();

    if (!module_exists('memcache')) {
      $data['code'] = 'memcache_module_not_exists';
      $this->queue->add($data);
      return;
    }

    $mc = dmemcache_object('default');
    if ($mc instanceof Memcached) {
      $extension = 'Memcached';
    } elseif ($mc instanceof Memcache) {
      $extension = 'Memcache';
    } else {
      $data['code'] = 'unknown_pecl_extension';
      $this->queue->add($data);
      return;
    }

    $stats = dmemcache_stats('cache', 'default', TRUE);
    $stats = $stats['cache'];

    if (empty($stats)) {
      $data['code'] = 'memcache_module_config';
      $this->queue->add($data);
      return;
    }

    $total = array_pop($stats);
    $data['extension'] = $extension;
    $data['version'] = phpversion($extension);
    $data['code'] = DropSharkCollectorInterface::STATUS_SUCCESS;
    $data['total'] = $total;
    $data['servers'] = $stats;
    $this->queue->add($data);
  }

}
