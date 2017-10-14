<?php

/**
 * Class DropSharkLinfoCollector.
 *
 * Base class for collectors which utilize the Linfo library for collecting
 * server stats.
 */
abstract class DropSharkLinfoCollector extends DropSharkCollectorBase {

  /**
   * The Linfo object.
   *
   * @var \Linfo\Linfo
   */
  protected $linfo;

  /**
   * The Linfo parser object.
   *
   * @var mixed
   */
  protected $parser;

  /**
   * {@inheritdoc}
   */
  public function __construct($definition, $queue, $siteId) {
    parent::__construct($definition, $queue, $siteId);

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
   * @return bool
   *   Indicates whether or not Linfo is available.
   */
  protected function checkLinfo($data) {
    if (!$this->hasLinfo()) {
      $data['code'] = 'linfo_library_not_available';
      $this->queue->add($data);
      return FALSE;
    }

    return TRUE;
  }

  /**
   * Determines if the Linfo library is available.
   *
   * @return bool
   *   Indicates if the Linfo library is available.
   */
  protected function hasLinfo() {
    return $this->linfo && $this->parser;
  }

}
