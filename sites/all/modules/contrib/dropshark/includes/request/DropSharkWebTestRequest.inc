<?php

/**
 * Class DropSharkWebTestRequest.
 */
class DropSharkWebTestRequest extends DropSharkRequest {

  /**
   * {@inheritdoc}
   */
  protected function execute($url, array $options = array()) {
    $options = $this->setAuth($options);

    if (isset($options['method']) && $options['method'] == 'POST') {
      return $this->handlePost($url, $options);
    }
    else {
      return $this->handleGet($url, $options);
    }
  }

  /**
   * Route GET requests.
   *
   * @param string $url
   *   The URL being queried.
   * @param array $options
   *   Request options.
   *
   * @return object
   *   The response object.
   */
  protected function handleGet($url, array $options) {
    $parts = parse_url($url);
    $result = new stdClass();
    $result->code = 200;

    switch ($parts['path']) {
      case '/sites/token':
        $result = $this->getSiteToken($options, $result);
        break;

      default:
        $result->code = 404;
        $result->error = 'Not Found';
    }

    return $result;
  }

  /**
   * Route POST requests.
   *
   * @param string $url
   *   The URL being queried.
   * @param array $options
   *   Request options.
   *
   * @return object
   *   The response object.
   */
  protected function handlePost($url, array $options) {
    $parts = parse_url($url);
    $result = new stdClass();
    $result->code = 200;

    if (!empty($options['data'])) {
      parse_str($options['data'], $options['data']);
    }
    else {
      $options['data'] = array();
    }

    switch ($parts['path']) {
      case '/data':
        $result = $this->postData($options, $result);
        break;

      case '/sites/token':
        $result = $this->postSiteToken($options, $result);
        break;

      default:
        $result->code = 404;
        $result->error = 'Not Found';
    }

    return $result;
  }

  /**
   * Simulate a request submit site data.
   *
   * @param array $options
   *   Request options.
   * @param object $result
   *   A successful result object.
   *
   * @return object
   *   The result object after validation and processing.
   */
  protected function postData(array $options, $result) {
    if (empty($options['headers']['Authorization']) || $options['headers']['Authorization'] != 'valid_token') {
      $result->code = 400;
      $result->error = 'Bad Request';
      return $result;
    }

    $data = new stdClass();
    $result->data = $data;
    return $result;
  }

  /**
   * Simulate a request to verify a site token.
   *
   * @param array $options
   *   Request options.
   * @param object $result
   *   A successful result object.
   *
   * @return object
   *   The result object after validation and processing.
   */
  protected function getSiteToken(array $options, $result) {
    if (empty($options['headers']['Authorization']) || $options['headers']['Authorization'] != 'valid_token') {
      $result->code = 400;
      $result->error = 'Bad Request';
      return $result;
    }

    $data = new stdClass();
    $data->site_id = '0bb250ce-ffd5-4563-81fa-c8a165cd6af8';
    $result->data = $data;
    return $result;
  }

  /**
   * Simulate a request to obtain a site token.
   *
   * @param array $options
   *   Request options.
   * @param object $result
   *   A successful result object.
   *
   * @return object
   *   The result object after validation and processing.
   */
  protected function postSiteToken(array $options, $result) {
    if (empty($options['data']['user']) || empty($options['data']['password']) || empty($options['data']['site_id'])) {
      $result->code = 400;
      $result->error = 'Bad Request';
      return $result;
    }

    if ($options['data']['user'] != 'test_user' || $options['data']['password'] != 'password' ||  $options['data']['site_id'] != '0bb250ce-ffd5-4563-81fa-c8a165cd6af8') {
      $result->code = 403;
      $result->error = 'Forbidden';
      return $result;
    }

    $data = new stdClass();
    $data->token = 'valid_token';
    $result->data = $data;
    return $result;
  }

}
