<?php

/**
 * Class DropSharkPhpApcCollector.
 */
class DropSharkPhpApcCollector extends DropSharkCollectorBase {

  protected $events = array('system');
  protected $type = 'apc';

  public function collect($event, $data = array()) {
    if (!$this->respond($event)) {
      return DropSharkCollector::RESPONSE_NONE;
    }

    $data = $this->defaultResult();

    if (!function_exists('apc_cache_info')) {
      $data['code'] = 'no_apc';
      dropshark_queue_data($data);
      return DropSharkCollector::RESPONSE_COMPLETE;
    }

    if (!$info = apc_cache_info('', TRUE)) {
      $data['code'] = 'apc_not_enabled';
      dropshark_queue_data($data);
      return DropSharkCollector::RESPONSE_COMPLETE;
    }

    $data += $info;
    $data['sma'] = apc_sma_info(TRUE);
    $data['code'] = 0;

    dropshark_queue_data($data);
    return DropSharkCollector::RESPONSE_COMPLETE;
  }

}
