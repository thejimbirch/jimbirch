<?php
/**
 * @file
 * makeup_line_deluxe.bean.inc
 */

/**
 * Implements hook_bean_admin_ui_types().
 */
function makeup_line_deluxe_bean_admin_ui_types() {
  $export = array();

  $bean_type = new stdClass();
  $bean_type->disabled = FALSE; /* Edit this to true to make a default bean_type disabled initially */
  $bean_type->api_version = 5;
  $bean_type->name = 'skin_block';
  $bean_type->label = 'Skin block';
  $bean_type->options = '';
  $bean_type->description = 'A block to skin my pages.';
  $export['skin_block'] = $bean_type;

  return $export;
}