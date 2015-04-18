<?php
/**
 * @file
 * makeup_line_deluxe.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function makeup_line_deluxe_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'view bean page'.
  $permissions['view bean page'] = array(
    'name' => 'view bean page',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'bean',
  );

  return $permissions;
}
