<?php
/**
 * @file
 * Site Sync Drush integration - refresh the local dev.
 */

/**
 * Implements hook_drush_command().
 *
 * @return
 *   An associative array describing your command(s).
 */
function sync_site_drush_command() {
  return array(
    'sync-site' => array(
      'callback' => 'sync_site_full',
      'description' => dt('Refresh your local db and reset for development.'),
    ),
    'sync-db' => array(
      'callback' => 'sync_site_db',
      'description' => dt('Refresh your local db and reset for development.'),
      'drush dependencies' => array('sql'),
    ),
    'sync-files' => array(
      'callback' => 'sync_site_files',
      'description' => dt('Refresh your local db and reset for development.'),
      'drush dependencies' => array('core'),
    ),
  );
}

/**
 * Run a series of drush commands to reset local dev
 */
function sync_site_full() {
  drush_log('*****************************************************************', 'ok');
  drush_log('*** Refreshing local DB and files - it begins...              ***', 'ok');
  drush_log('*****************************************************************', 'ok');
  drush_log(' ', 'ok');
  // Sync the DB
  sync_site_db();
  // Run the golocal
  go_local_dev();
}

/**
 * Update the local DB from production
 */
function sync_site_db() {
  // Include required files
  require_once DRUSH_BASE_PATH . '/commands/sql/sync.sql.inc';
  require_once DRUSH_BASE_PATH . '/commands/core/rsync.core.inc';
  // @TODO: Save the local SF connection vars & put them back after
  // Set options
  drush_set_option('structure-tables-key', 'common+springboard');
  drush_set_option('skip-tables-key', 'common');
  drush_set_option('cache', TRUE);
  // @TODO: make this work    drush_set_option('sanitize', TRUE);
  // Initiate the sync
  drush_log('*** Starting DB sync from production to local*** ', 'ok');
  drush_sql_sync('@prod', '@self');
  drush_log('*** DB sync complete *** ', 'ok');
}

/**
 * Update the local files from production
 */
function sync_site_files() {
  // Set options
  $options = array (
    'delete' => TRUE,
    'exclude' => '*.js:*.css:*.pdf:*.zip',
    'progress' => TRUE,
    'stats' => TRUE,
    'mode' => 'arhzO',
  );
  // Call drush rsync
  drush_log('*** Starting File sync from production to local *** ', 'ok');
  drush_core_rsync('@prod:%files', '@self:%files', $options);
  drush_log('*** File sync complete *** ', 'ok');
}
