<?php
/**
 * @file
 * stage.settings.php (Drupal 7.x)
 *
 * This settings file is intended to contain settings specific to a staging
 * environment, by overriding options set in settings.php.
 */

// Use environment indicator, if available.
$conf['environment_indicator_overwrite'] = TRUE;
$conf['environment_indicator_overwritten_name'] = 'STAGING SERVER';
$conf['environment_indicator_overwritten_color'] = '#00bb00';

 /**
 * This enables you use the same session over HTTP and HTTPS both --
 *   but with two cookies where the HTTPS cookie is sent over HTTPS only.
 */
$conf['https'] = TRUE;

// Use memcache if available & enabled.
$_memcache_inc = $_contrib_path . '/memcache/memcache.inc';
if ($_use_memcache && is_file($_memcache_inc)) {
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

$conf['nodesquirrel_secret_key'] = '';
