<?php
/**
 * @file
 * jb_panels.pm_existing_pages.inc
 */

/**
 * Implements hook_pm_existing_pages_info().
 */
function jb_panels_pm_existing_pages_info() {
  $export = array();

  $pm_existing_page = new stdClass();
  $pm_existing_page->api_version = 1;
  $pm_existing_page->name = 'node_add';
  $pm_existing_page->label = 'Node Add';
  $pm_existing_page->context = 'entity|node|nid';
  $pm_existing_page->paths = 'node/add';
  $export['node_add'] = $pm_existing_page;

  $pm_existing_page = new stdClass();
  $pm_existing_page->api_version = 1;
  $pm_existing_page->name = 'node_overview';
  $pm_existing_page->label = 'Node overview';
  $pm_existing_page->context = '';
  $pm_existing_page->paths = 'node';
  $export['node_overview'] = $pm_existing_page;

  $pm_existing_page = new stdClass();
  $pm_existing_page->api_version = 1;
  $pm_existing_page->name = 'node_webform';
  $pm_existing_page->label = 'Node Webform';
  $pm_existing_page->context = '';
  $pm_existing_page->paths = 'node/%webform_menu/webform';
  $export['node_webform'] = $pm_existing_page;

  $pm_existing_page = new stdClass();
  $pm_existing_page->api_version = 1;
  $pm_existing_page->name = 'style_guide';
  $pm_existing_page->label = 'Style Guide';
  $pm_existing_page->context = 'entity|node|nid';
  $pm_existing_page->paths = 'admin/appearance/styleguide';
  $export['style_guide'] = $pm_existing_page;

  return $export;
}
