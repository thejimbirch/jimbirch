<?php

/**
 * Class DropSharkNodeCollector.
 */
class DropSharkNodeCollector extends DropSharkCollectorBase {
  protected $events = array('node_insert', 'node_update', 'node_delete');
  protected $type = 'node_';

  /**
   * {@inheritdoc}
   */
  public function collect($event, $node = array()) {
    if (!$this->respond($event)) {
      return;
    }

    $data = $this->defaultResult($event);
    $data['node'] = $node;
    $data['code'] = DropSharkCollectorInterface::STATUS_SUCCESS;
    $data['log'] = TRUE;
    $this->queue->add($data);
  }

  /**
   * {@inheritdoc}
   */
  public function finalize() {
    $this->byAge();
    $this->getNodes();
    $this->byRole();
  }

  /**
   * Collect counts of content by age.
   */
  protected function byAge() {
    $data = $this->defaultResult('node_by_age');

    $query = "SELECT COUNT(*) AS c FROM {node} AS n WHERE n.status = ?";
    $data['total'] = db_query($query, array(1))->fetchField();

    $data['total_unpublished'] = db_query($query, array(0))->fetchField();

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

    $query = "SELECT COUNT(*) AS c FROM {node} AS n WHERE n.created > ? AND n.status = ?";
    foreach ($ages as $val) {
      $timestamp = strtotime('now -' . $val);

      $data['node_age_under'][$val] = db_query($query, array($timestamp, 1))->fetchField();
      $data['node_age_over'][$val] = $data['total'] - $data['node_age_under'][$val];

      $data['node_age_under_unpublished'][$val] = db_query($query, array($timestamp, 0))->fetchField();
      $data['node_age_over_unpublished'][$val] = $data['total_unpublished'] - $data['node_age_under_unpublished'][$val];
    }

    $data['code'] = DropSharkCollectorInterface::STATUS_SUCCESS;
    $this->queue->add($data);
  }

  /**
   * Collect counts of content by status and type.
   */
  protected function getNodes() {
    $data = $this->defaultResult('node');

    $query = "SELECT COUNT(*) AS c FROM {node}";
    $data['count'] = db_query($query)->fetchField();

    $data['status'][NODE_NOT_PUBLISHED] = 0;
    $data['status'][NODE_PUBLISHED] = 0;

    $data['type_labels'] = array();

    // Prepopulate.
    foreach (node_type_get_types() as $name => $type) {
      $data['type_labels'][$name] = $type->name;
      $data['types'][$name] = 0;
      $data['type_status'][$name][NODE_NOT_PUBLISHED] = 0;
      $data['type_status'][$name][NODE_PUBLISHED] = 0;
    }

    $query = "SELECT n.status, n.type, COUNT(*) AS c FROM {node} AS n GROUP BY n.status, n.type";
    foreach (db_query($query)->fetchAll() as $row) {
      $data['status'][$row->status] += $row->c;
      $data['types'][$row->type] += $row->c;
      $data['type_status'][$row->type][$row->status] += $row->c;
    }

    $data['code'] = DropSharkCollectorInterface::STATUS_SUCCESS;
    $this->queue->add($data);
  }

  /**
   * Collect counts of content by status and type per author role.
   */
  protected function byRole() {
    $data = $this->defaultResult('node_by_role');

    $query = "SELECT COUNT(*) AS c FROM {node}";
    $data['count'] = db_query($query)->fetchField();

    $data['roles'] = user_roles();

    // Prepopulate.
    foreach ($data['roles'] as $role) {
      $data['role'][$role] = 0;

      foreach (array(NODE_NOT_PUBLISHED, NODE_PUBLISHED) as $status) {
        foreach (array_keys(node_type_get_types()) as $type) {
          $data['role_status_type'][$role][$status][$type] = 0;
        }
        $data['role_status'][$role][$status] = 0;
      }

      foreach (array_keys(node_type_get_types()) as $type) {
        $data['role_type'][$role][$type] = 0;
      }
    }

    $query = "SELECT r.name, n.status, n.type, COUNT(*) AS c FROM {node} AS n
      INNER JOIN {users} AS u ON n.uid = u.uid
      INNER JOIN {users_roles} AS ur ON u.uid = ur.uid
      INNER JOIN {role} AS r ON ur.rid = r.rid
      GROUP BY n.status, n.type, r.name";

    foreach (db_query($query)->fetchAll() as $row) {
      $data['role'][$row->name] += $row->c;
      $data['role_status'][$row->name][$row->status] += $row->c;
      $data['role_type'][$row->name][$row->type] += $row->c;
      $data['role_status_type'][$row->name][$row->status][$row->type] += $row->c;
    }

    $data['code'] = DropSharkCollectorInterface::STATUS_SUCCESS;
    $this->queue->add($data);
  }

}
