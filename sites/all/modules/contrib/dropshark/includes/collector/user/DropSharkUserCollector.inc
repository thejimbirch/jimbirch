<?php

/**
 * Class DropSharkUserCollector.
 */
class DropSharkUserCollector extends DropSharkCollectorBase {
  protected $events = array('user_insert', 'user_update', 'user_cancel');
  protected $type = 'user_';

  /**
   * {@inheritdoc}
   */
  public function collect($event, $data = array()) {
    if (!$this->respond($event)) {
      return;
    }

    $data = array_merge($data, $this->defaultResult($event));
    $data['code'] = DropSharkCollectorInterface::STATUS_SUCCESS;
    $data['log'] = TRUE;
    $this->queue->add($data);
    $this->queue->setDeferred($this);
  }

  /**
   * {@inheritdoc}
   */
  public function finalize() {
    $this->byRole();
    $this->byStatus();
    $this->byAge();
    $this->countPending();
    $this->countNoLogin();
  }

  /**
   * Collect counts of users by role.
   */
  protected function byRole() {
    $data = $this->defaultResult('users_by_role');
    $query = "SELECT COUNT(*) AS c, r.name FROM {users} AS u
      INNER JOIN {users_roles} AS ur ON u.uid = ur.uid
      INNER JOIN {role} AS r ON r.rid = ur.rid
      WHERE u.status = ?
      GROUP BY r.rid";
    $data['users_roles'] = db_query($query, array(1))->fetchAllKeyed(1, 0);
    $data['code'] = DropSharkCollectorInterface::STATUS_SUCCESS;
    $this->queue->add($data);
  }

  /**
   * Collect counts of users by status.
   */
  protected function byStatus() {
    $data = $this->defaultResult('users_by_status');
    $query = "SELECT COUNT(*) AS c, u.status FROM {users} AS u 
      WHERE u.uid > ? GROUP BY u.status";
    $data['users_status'] = db_query($query, array(0))->fetchAllKeyed(1, 0);
    $data['code'] = DropSharkCollectorInterface::STATUS_SUCCESS;
    $this->queue->add($data);
  }

  /**
   * Collect counts of users by age.
   */
  protected function byAge() {
    $data = $this->defaultResult('users_by_age');

    $query = "SELECT COUNT(*) AS c FROM {users} AS u WHERE u.uid > ? AND u.status = ?";
    $data['total'] = db_query($query, array(0, 1))->fetchField();

    // @TODO: make these configurable.
    $ages = array(
      '1 day',
      '2 days',
      '3 days',
      '4 days',
      '5 days',
      '6 days',
      '1 weeks',
      '2 weeks',
      '3 weeks',
      '4 weeks',
      '1 months',
      '2 months',
      '3 months',
      '6 months',
      '1 year',
    );

    foreach ($ages as $val) {
      $query = "SELECT COUNT(*) AS c FROM {users} AS u 
        WHERE u.created > ? AND u.uid > ? AND u.status = ?";
      $timestamp = strtotime('now -' . $val);
      $data['users_age_under'][$val] = db_query($query, array($timestamp, 0, 1))->fetchField();
      $data['users_age_over'][$val] = $data['total'] - $data['users_age_under'][$val];
    }

    $data['code'] = DropSharkCollectorInterface::STATUS_SUCCESS;
    $this->queue->add($data);
  }

  /**
   * Count users pending approval.
   */
  protected function countPending() {
    $data = $this->defaultResult('users_pending');
    $query = "SELECT COUNT(*) AS c FROM {users} AS u
      WHERE u.uid > ? AND u.access = ? AND u.status = ?";
    $data['pending'] = db_query($query, array(0, 0, 0))->fetchField();
    $data['code'] = DropSharkCollectorInterface::STATUS_SUCCESS;
    $this->queue->add($data);
  }

  /**
   * Count users who have not logged in.
   */
  protected function countNoLogin() {
    $data = $this->defaultResult('users_never_logged_in');
    $query = "SELECT COUNT(*) AS c FROM {users} AS u
      WHERE u.uid > ? AND u.access = ? AND u.status = ?";
    $data['never_logged_in'] = db_query($query, array(0, 0, 1))->fetchField();
    $data['code'] = DropSharkCollectorInterface::STATUS_SUCCESS;
    $this->queue->add($data);
  }

}
