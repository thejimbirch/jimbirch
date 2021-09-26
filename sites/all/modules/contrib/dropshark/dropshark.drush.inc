<?php

/**
 * @file
 * DropShark drush integration.
 */

/**
 * Implements hook_drush_command().
 */
function dropshark_drush_command() {
  $commands['dropshark-collect'] = array(
    'description' => 'Collect and send data to the DropShark service.',
    'options' => array(
      'debug' => 'Provide debug messaging.',
      'url' => 'The base URL of the site.',
    ),
    'aliases' => array('drpshrk'),
  );

  return $commands;
}

/**
 * Drush worker callback for collecting and sending data.
 */
function drush_dropshark_collect() {
  if (!$url = drush_get_option('url', FALSE)) {
    $url = url('', array('absolute' => TRUE));
    if ($url == 'http://default/') {
      return drush_set_error(dt('Unable to determine site URL.'));
    }
  }

  if (!valid_url($url)) {
    return drush_set_error(dt('Invalid site URL.'));
  }

  $debug = drush_get_option('debug', FALSE);
  if ($debug) {
    drush_log(dt('Attempting HTTP request to initiate data collection.'), 'ok');
  }

  $key = variable_get('dropshark_site_id');
  $token = variable_get('dropshark_site_token');

  // Need site_id and site_token.
  if (!$key || !$token) {
    return drush_set_error(dt('DropShark not properly registered.'));
  }

  if (!$key = variable_get('dropshark_site_id')) {
    return drush_set_error(dt('DropShark not properly registered.'));
  }

  $params['key'] = $key;
  $params['t'] = time();
  $url = rtrim($url, '/') . '/dropshark/collect?' . drupal_http_build_query($params);

  $result = drupal_http_request($url);
  if ($debug) {
    drush_log(print_r($result, TRUE), 'ok');
  }
  if ($result->code != 200) {
    return drush_set_error(dt('HTTP request failed !code.', array('!code' => $result->code)));
  }

  if ($debug) {
    drush_log(dt('Sending data to DropShark.'), 'ok');
  }

  $queue = dropshark_get_queue();
  $queue->transmit();

  drush_log(dt('Collection complete.'), 'ok');
}
