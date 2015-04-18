<?php
/**
 * @file
 * prod.settings.php (Drupal 7.x)
 *
 * This settings file is intended to contain settings specific to a production
 * environment, by overriding options set in settings.php.
 */

// Use environment indicator, if available.
$conf['environment_indicator_overwrite'] = TRUE;
$conf['environment_indicator_overwritten_name'] = 'PRODUCTION';
$conf['environment_indicator_overwritten_color'] = '#0000bb';

 /**
 * This enables you use the same session over HTTP and HTTPS both --
 *   but with two cookies where the HTTPS cookie is sent over HTTPS only.
 */
$conf['https'] = TRUE;

// No non-admin updates
$update_free_access = FALSE;

// Use memcache if available & enabled.
$_memcache_inc = $_contrib_path . '/memcache/memcache.inc';
if (is_file($_memcache_inc)) {
  // Configure memcache locally
  $conf['memcache_servers'] = array(
    'localhost:11211' => 'default',
  );
  $conf['memcache_bins'] = array(
    'cache' => 'default',
  );
  $conf['memcache_key_prefix'] = $_db_name;
  $conf['cache_inc'] = $_memcache_inc;
}
else {
  // Revert to Drupal core caching in case settings.php
  // is configured to use Memcache.
  $conf['cache_inc'] = 'includes/cache.inc';
}

// NodeSquirrel
if ($_use_nodesquirrel) {
  // Secret Key
  $conf['nodesquirrel_secret_key'] = '';

  // Backup every 30 minutes and keep last 48 backups
  $conf['backup_migrate_schedules_defaults'] = array(
    'prod_30min' => array(
      'schedule_id' => 'prod_30min',
      'name' => '[conf] 30 min',
      'source_id' => 'db',
      'destination_id' => 'nodesquirrel',
      'profile_id' => 'default',
      'keep' => '48',
      'period' => '1800', // 30min in seconds
      'enabled' => '1',
      'cron' => '0',
    ),
  );
}
