<?php
/**
 * @file
 * jb_users.features.user_role.inc
 */

/**
 * Implements hook_user_default_roles().
 */
function jb_users_user_default_roles() {
  $roles = array();

  // Exported role: Administrator.
  $roles['Administrator'] = array(
    'name' => 'Administrator',
    'weight' => 2,
  );

  // Exported role: Webmaster.
  $roles['Webmaster'] = array(
    'name' => 'Webmaster',
    'weight' => 3,
  );

  return $roles;
}
