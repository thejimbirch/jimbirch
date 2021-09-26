<?php
/**
 * @file
 * Golocal Drush integration - alter the site for local development.
 */

/**
 * Implements hook_drush_command().
 *
 * @return
 *   An associative array describing your command(s).
 */
function go_local_drush_command() {
  return array(
    'go-local' => array(
      'callback' => 'go_local_dev',
      'description' => dt('Puts your site in local development mode.'),
    ),
    'go-staging' => array(
      'callback' => 'go_local_staging',
      'description' => dt('Puts your site in production mode.'),
    ),
  );
}

/**
 * Put the site in local development mode.
 */
function go_local_dev() {
  drush_log('*****************************************************************', 'ok');
  drush_log('*** Modifying the site for local development - please wait... ***', 'ok');
  drush_log('*****************************************************************', 'ok');
  drush_log(' ', 'ok');

  // Enable dev friendly modules.
  $enable = array('devel', 'reroute_email', 'dblog', 'update', 'diff', 'field_ui', 'stage_file_proxy');
  module_enable($enable, TRUE);
  drush_log(dt('Developer modules enabled: @modules', array('@modules' => implode(', ', $enable))), 'ok');

  // Disable any production modules that you don't want to run locally, like
  // CDN.
  $disable = array('new_relic_rpm', 'apachesolr_exclude', 'apachesolr_og', 'apachesolr_panels', 'apachesolr_search', 'apachesolr', 'memcache', 'securesite', 'securepages', 'varnish');
  module_disable($disable);
  drush_log(dt('Production modules disabled: @modules', array('@modules' => implode(', ', $disable))), 'ok');

  // Make sure the rerouting of email is turned on so we don't send emails to
  // actual users from our local installations.
  if(module_exists('reroute_email')) {
    variable_set('reroute_email_enable', 1);
    variable_set('reroute_email_address', 'drupalsites@xenomedia.com');
    drush_log("Email is being rerouted to drupalsites@xenomedia.com by the reroute_email module.", 'ok');
  } else {
    drush_log('Reroute_email module note present. Emails will be sent to users!', 'warning');
  }

  // Allow everyone to see devel messages like dpm().
  if(module_exists('devel')) {
    user_role_grant_permissions(1, array('access devel information'));
    user_role_grant_permissions(2, array('access devel information'));
  }

  // Set all donation forms to testing gateway

  // Add the devel block to the admin menu
  $admin_toolbar = variable_get('admin_toolbar', array());
  $admin_toolbar['blocks']['admin-devel'] = 1;
  variable_set('admin_toolbar', $admin_toolbar);

  // Set some dev-friendly settings
  variable_set('cache', "0");
  variable_set('block_cache', "0");
  variable_set('error_level', "2");
  variable_set('preprocess_js', "0");
  variable_set('preprocess_css', "0");
  variable_set('page_compression', "0");
  drush_log('Page cache, page compression, JS optimization, and CSS optimization disabled.', 'ok');
  drush_log(' ', 'ok');
  drush_log('Flushing caches now...', 'ok');
  drupal_flush_all_caches();
  drush_log('All caches cleared.', 'ok');
  drush_log(' ', 'ok');
  drush_log('*****************************************************************', 'ok');
  drush_log('***          Site ready for development  - game on!           ***', 'ok');
  drush_log('*****************************************************************', 'ok');
}

/**
 * Put the site in staging mode.
 */
function go_local_staging() {
  drush_log('*****************************************************************', 'ok');
  drush_log('*** Modifying the site for staging - please wait...           ***', 'ok');
  drush_log('*****************************************************************', 'ok');
  drush_log(' ', 'ok');

  // Enable dev friendly modules.
  $enable = array('devel', 'reroute_email', 'dblog', 'update', 'diff', 'field_ui', 'stage_file_proxy');
  module_enable($enable, TRUE);
  drush_log(dt('Developer modules enabled: @modules', array('@modules' => implode(', ', $enable))), 'ok');

  // Disable any production modules that you don't want to run locally, like
  // CDN.
  $disable = array('new_relic_rpm', 'apachesolr_exclude', 'apachesolr_og', 'apachesolr_panels', 'apachesolr_search', 'apachesolr', 'memcache', 'securepages', 'varnish');
  module_disable($disable);
  drush_log(dt('Production modules disabled: @modules', array('@modules' => implode(', ', $disable))), 'ok');

  // Make sure the rerouting of email is turned on so we don't send emails to
  // actual users from our local installations.
  if(module_exists('reroute_email')) {
    variable_set('reroute_email_enable', 1);
    variable_set('reroute_email_address', 'drupalsites@xenomedia.com');
    drush_log("Email is being rerouted to drupalsites@xenomedia.com by the reroute_email module.", 'ok');
  } else {
    drush_log('Reroute_email module note present. Emails will be sent to users!', 'warning');
  }

  // Allow everyone to see devel messages like dpm().
  if(module_exists('devel')) {
    // @TODO: this is for 7, we need the equivalent in 6
    // user_role_grant_permissions(1, array('access devel information'));
    // user_role_grant_permissions(2, array('access devel information'));
  }

  // Set all donation forms to testing gateway

  // Add the devel block to the admin menu
  $admin_toolbar = variable_get('admin_toolbar', array());
  $admin_toolbar['blocks']['admin-devel'] = 1;
  variable_set('admin_toolbar', $admin_toolbar);

  // Clear caches
  drush_log('Flushing caches now...', 'ok');
  drupal_flush_all_caches();
  drush_log('All caches cleared.', 'ok');
  drush_log(' ', 'ok');
  drush_log('*****************************************************************', 'ok');
  drush_log('***          Site ready for staging  - game on!           ***', 'ok');
  drush_log('*****************************************************************', 'ok');
}

