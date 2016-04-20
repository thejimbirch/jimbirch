<?php

class DropSharkDrupalStatusCollector extends DropSharkCollectorBase {

  protected $events = array('drupal');
  protected $type = 'drupal_status';

  /**
   * {@inheritdoc}
   */
  public function collect($event, $data = array()) {

    if (!$this->respond($event)) {
      return DropSharkCollector::RESPONSE_NONE;
    }

    $data = $this->defaultResult();

    // Load .install files
    include_once DRUPAL_ROOT . '/includes/install.inc';
    drupal_load_updates();

    // Check run-time requirements and status information.
    $requirements = module_invoke_all('requirements', 'runtime');
    ksort($requirements);

    // Count number of requirements at each status.
    $severities = array(
      'error' => 0,
      'info' => 0,
      'ok' => 0,
      'warning' => 0,
      'none' => 0,
    );
    $severities_map = array(
      REQUIREMENT_ERROR => 'error',
      REQUIREMENT_INFO => 'info',
      REQUIREMENT_OK => 'ok',
      REQUIREMENT_WARNING => 'warning',
      'none' => 0,
    );
    foreach ($requirements as $requirement) {
      if (isset($requirement['severity'])) {
        $key = $severities_map[$requirement['severity']];
        $severities[$key]++;
      } else {
        $severities['none']++;
      }
    }

    $data['code'] = 0;
    $data['requirements'] = $requirements;
    $data['severity'] = $severities;

    dropshark_queue_data($data);
    return DropSharkCollector::RESPONSE_COMPLETE;
  }

}
