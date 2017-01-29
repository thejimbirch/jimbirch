<?php

/**
 * Class DropSharkRequest.
 */
class DropSharkRequest implements DropSharkRequestInterface {

  /**
   * Authentication token.
   *
   * @var string
   */
  protected $auth;

  /**
   * The DropShark backend host.
   *
   * @var string
   */
  protected $host;

  /**
   * DropSharkRequest constructor.
   *
   * @param string $host
   *   The DropShark backend host.
   * @param string $auth
   *   Authentication token.
   */
  public function __construct($host, $auth) {
    $this->host = $host;
    $this->auth = $auth;
  }

  /**
   * {@inheritdoc}
   */
  public function getHost() {
    return $this->host;
  }

  /**
   * {@inheritdoc}
   */
  public function get($endpoint, $data = array()) {
    $url = $this->host . '/' . $endpoint;

    if ($data) {
      $url .= '?' . drupal_http_build_query($data);
    }

    return $this->execute($url);
  }

  /**
   * {@inheritdoc}
   */
  public function post($endpoint, $data = array()) {
    $url = $this->host . '/' . $endpoint;
    $options['method'] = 'POST';
    $options['headers']['Content-Type'] = 'application/x-www-form-urlencoded';

    if ($data) {
      $options['data'] = drupal_http_build_query($data);
    }

    return $this->execute($url, $options);
  }

  /**
   * Execute the HTTP request.
   *
   * @param $url
   *   The URL which is being requested.
   * @param array $options
   *   An array of options to send to drupal_http_request().
   *
   * @return object
   *   The result from drupal_http_request().
   */
  protected function execute($url, $options = array()) {
    $options = $this->setAuth($options);
    $result = drupal_http_request($url, $options);
    if (isset($result->data)) {
      $result->data = json_decode($result->data);
    }
    return $result;
  }

  /**
   * Sets the site token into the request header.
   *
   * @param $options
   *   The drupal_http_request() $options array.
   *
   * @return mixed
   *   The resulting drupal_http_request() $options array.
   */
  protected function setAuth($options) {
    if ($this->auth) {
      $options['headers']['Authorization'] = $this->auth;
    }

    return $options;
  }

}
