<?php

/**
 * Class DropSharkDrupalUpdateStatusCollector.
 *
 * Collects updates status for Drupal core and contrib projects.
 */
class DropSharkDrupalUpdateStatusCollector extends DropSharkCollectorBase {

  protected $events = array('drupal');
  protected $type = 'drupal_updates';

  /**
   * {@inheritdoc}
   */
  public function collect($event, array $data = array()) {

    if (!$this->respond($event)) {
      return;
    }

    $data = $this->defaultResult();

    if (!module_exists('update')) {
      $data['code'] = 'update_not_enabled';
      $this->queue->add($data);
      return;
    }

    $data['projects'] = array();
    $data['status'] = array();

    if ($available = update_get_available(TRUE)) {
      module_load_include('inc', 'update', 'update.compare');
      $data['projects'] = update_calculate_project_data($available);

      $status_map = array(
        1 => 'not_secure',
        2 => 'revoked',
        3 => 'not_supported',
        4 => 'not_current',
        5 => 'current',
        -1 => 'not_checked',
        -2 => 'unknown',
        -3 => 'not_fetched',
        -4 => 'fetch_pending',
      );

      foreach ($data['projects'] as $project) {
        $status = $project['status'];
        if (isset($status_map[$status])) {
          $data['status'][$status_map[$status]][] = $project['name'];
        }
      }
      $data['code'] = DropSharkCollectorInterface::STATUS_SUCCESS;
    }
    else {
      $data['code'] = 'unable_to_get_update_data';
    }

    $this->queue->add($data);
  }

}
