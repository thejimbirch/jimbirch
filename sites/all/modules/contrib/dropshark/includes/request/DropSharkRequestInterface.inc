<?php

/**
 * Interface DropSharkRequestInterface.
 */
interface DropSharkRequestInterface {

  /**
   * Get the hostname of the DropShark server.
   *
   * @return string
   *   The hostname of the DropShark server.
   */
  public function getHost();

  /**
   * Get data from DropShark.
   *
   * @param string $endpoint
   *   The endpoint to get data.
   * @param array $data
   *   Data to be sent in the request.
   *
   * @return object
   *   The response for the request, see `drupal_http_request`.
   */
  public function get($endpoint, array $data = array());

  /**
   * Post data to DropShark.
   *
   * @param string $endpoint
   *   The endpoint to post data.
   * @param array $data
   *   Data to be sent in the request.
   *
   * @return object
   *   The response for the request, see `drupal_http_request`.
   */
  public function post($endpoint, array $data = array());

  /**
   * Set the authorization token.
   *
   * @param string|null $token
   *   The token or NULL to clear the token.
   *
   * @return $this
   */
  public function setToken($token);

}
