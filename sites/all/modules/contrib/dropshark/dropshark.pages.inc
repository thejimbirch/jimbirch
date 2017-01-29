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

  if (empty($_GET['key']) || variable_get('dropshark_site_id', NULL) != $_GET['key']) {
    return MENU_NOT_FOUND;
  }

  dropshark_handle_event('all');

  drupal_json_output(array(
    'code' => 200,
    'result' => 'Data collection complete.',
  ));

  drupal_exit();
}
