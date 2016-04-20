<?php

/**
 * Interface DropSharkQueue.
 */
interface DropSharkQueue {

  /**
   * DropSharkQueue constructor.
   *
   * @param DropSharkRequest $request
   * @param integer $site_id
   */
  public function __construct($request, $site_id);

  /**
   * Add items to the DropShark queue.
   *
   * @param array $data
   *   Data to be added to the queue.
   */
  public function add($data);

  /**
   * Process items from the DropShark queue.
   */
  public function process();

  /**
   * Clear expired locks from queue items.
   *
   * @param $timestamp
   *   The timestamp for which to check lock expiration, defaults to current
   *   time minus the lock expiration configuration.
   */
  public function clearLocks($timestamp = NULL);

}
