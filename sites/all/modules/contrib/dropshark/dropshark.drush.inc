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
      drush_log(dt('Unable to determine site URL.'), 'error');
      return;
    }
  }

  if (!valid_url($url)) {
    drush_log(dt('Invalid site URL.'), 'error');
    return;
  }

  $debug = drush_get_option('debug', FALSE);
  if ($debug) {
    drush_log(dt('Attempting HTTP request to initiate data collection.'), 'ok');
  }

  if (!$key = variable_get('dropshark_site_id')) {
    drush_log(dt('Invalid site URL.'), 'error');
    return;
  }

  $params['key'] = $key;
  $params['t'] = time();
  $url = rtrim($url, '/') . '/dropshark/collect?' . drupal_http_build_query($params);

  $result = drupal_http_request($url);
  if ($debug) {
    drush_log(print_r($result, TRUE), 'ok');
  }
  if ($result->code != 200) {
    drush_log(dt('HTTP request failed !code.', array('!code' => $result->code)), 'error');
    return;
  }

  if ($debug) {
    drush_log(dt('Sending data to DropShark.'), 'ok');
  }

  dropshark_queue_process();
  drush_log(dt('Collection complete.'), 'ok');
}
