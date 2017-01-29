<?php

/**
 * Class DropSharkUserPassResetCollector.
 */
class DropSharkUserPassResetCollector extends DropSharkCollectorBase {
  protected $events = array('user_pass_reset');
  protected $type = 'user_pass_reset';

  /**
   * {@inheritdoc}
   */
  public function collect($event, $account = array()) {
    if (!$this->respond($event)) {
      return;
    }

    $data = $this->defaultResult();
    $data['account'] = $account;
    $data['code'] = DropSharkCollectorInterface::STATUS_SUCCESS;
    $data['log'] = TRUE;
    $this->queue->add($data);
  }

}
