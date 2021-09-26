<?php

/**
 * Interface DropSharkCollectorInterface.
 */
interface DropSharkCollectorInterface {

  /**
   * Indicates a successful collection of data.
   *
   * A non-zero return value indicates the collection did not occur properly.
   */
  const STATUS_SUCCESS = 0;

  /**
   * Collect data.
   *
   * @param string $event
   *   A value indicating an event or type of an event to which the collector
   *   may respond.
   * @param array $data
   *   Optional data necessary for the collector to perform its collection. This
   *   is likely information to indicate which server on which a collection is
   *   being ran, or to indicate which instance of a collection is being ran.
   */
  public function collect($event, array $data = array());

  /**
   * Perform any processing upon finalizing the page request.
   *
   * This is generally used for computing metrics after potentially many changes
   * occurred, in order to avoid processing on each change. For instance,
   * counting the number of users per role after hundreds of users were granted
   * the role.
   */
  public function finalize();

}
