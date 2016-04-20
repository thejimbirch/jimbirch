<?php

abstract class DropSharkLinfoCollector extends DropSharkCollectorBase {

  /** @var \Linfo\Linfo */
  protected $linfo;

  protected $parser;

  public function __construct($definition) {
    parent::__construct($definition);

    if ($this->linfo = dropshark_get_linfo()) {
      $this->parser = $this->linfo->getParser();
    }
  }

  /**
   * Check for Linfo library report error if not available.
   *
   * @para array $data
   *   Collector result array.
   *
   * @return boolean
   *   Indicates whether or not Linfo is available.
   */
  protected function checkLinfo($data) {
    if (!$this->hasLinfo()) {
      $data['code'] = 'linfo_library_not_available';
      dropshark_queue_data($data);
      return FALSE;
    }

    return TRUE;
  }

  protected function hasLinfo() {
    return $this->linfo && $this->parser;
  }

}
