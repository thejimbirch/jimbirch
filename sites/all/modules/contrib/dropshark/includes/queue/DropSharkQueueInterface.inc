<?php

/**
 * Interface DropSharkQueueInterface.
 */
interface DropSharkQueueInterface {

  /**
   * DropSharkQueue constructor.
   *
   * @param \DropSharkRequestInterface $request
   *   A request used by the queue.
   * @param int $siteId
   *   The DropShark site ID.
   */
  public function __construct(DropSharkRequestInterface $request, $siteId);

  /**
   * Add items to the DropShark queue.
   *
   * @param array $data
   *   Data to be added to the queue.
   */
  public function add(array $data);

  /**
   * Indicates if the queue has deferred collectors.
   *
   * @return bool
   *   Indicates if the queue contains collectors which have deferred
   *   collection.
   */
  public function hasDeferred();

  /**
   * Indicates if the queue should be immediately transmitted.
   *
   * Immediate means as the end of the current HTTP request. Alternatively data
   * will be held until a collector indicates its data must be transmitted
   * immediately or some other process initiates a transmission.
   *
   * @return bool
   *   Indicates if the data should be transmitted to the backend as a part of
   *   the current request. If any collector in the current request indicates it
   *   should be immediately transmitted or the process that invokes the
   *   collection requires it, the data will be sent to the backend as the
   *   request completes. Otherwise, the data will be saved to the persistent
   *   queue and will be transmitted to the backend upon subsequent data
   *   collections requiring transmit.
   */
  public function needsImmediateTransmit();

  /**
   * Moves collected items to persistent storage.
   */
  public function persist();

  /**
   * Process deferred collectors.
   */
  public function processDeferred();

  /**
   * Queue a deferred check.
   *
   * @param \DropSharkCollectorInterface $collector
   *   The collector to queue for deferred check.
   */
  public function setDeferred(DropSharkCollectorInterface $collector);

  /**
   * Set the queue to be transmitted immediately.
   */
  public function setImmediateTransmit();

  /**
   * Process items from the queue to the DropShark backend.
   */
  public function transmit();

}
