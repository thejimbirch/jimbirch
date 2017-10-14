<?php

/**
 * @file
 * DropShark page callbacks.
 */

/**
 * Data collection page.
 */
function dropshark_collect_page() {
  drupal_page_is_cacheable(FALSE);

  $key = variable_get('dropshark_site_id');
  $token = variable_get('dropshark_site_token');

  // Ensure key, site ID, and token are all present.
  if (empty($_GET['key']) || empty($key) || empty($token)) {
    return MENU_NOT_FOUND;
  }

  // Validate key matches site ID.
  if ($_GET['key'] != $key) {
    return MENU_NOT_FOUND;
  }

  dropshark_handle_event('all');

  drupal_json_output(array(
    'code' => 200,
    'result' => 'Data collection complete.',
  ));

  drupal_exit();
}
