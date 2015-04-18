<?php

/**
 * @file
 * dev.settings.php (Drupal 7.x)
 *
 * This settings file is intended to contain settings specific to a development
 * environment, by overriding options set in settings.php.
 */

// Allow anyone to run update.php.
$update_free_access = TRUE;

// Set error reporting level to ignore notices and deprecated warnings. These
// should be turned back on during development to clean up any code that
// generates them.
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

// Note that these options can also be moved into index.php, so that errors
// that occur before settings.php will also be reported.
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

// Save email messages to the log instead of sending them out. This is to
// prevent accidental email sends from a development site.
$conf['mail_system'] = array('default-system' => 'DevelMailLog');

// Disable Secure Pages and Secure Site module functionality
$conf['securepages_enable'] = 0;
$conf['securesite_enabled'] = 0;

// Use a test payment gateway to prevent real transactions
// $conf['uc_payment_credit_gateway'] = 'test_gateway';

// Lower the search indexing per cron run to prevent long cron runs
$conf['search_cron_limit'] = 5;

// Disable preprocessing of CSS and JS.
$conf['preprocess_css'] = 0;
$conf['preprocess_js'] = 0;

// Use environment indicator, if available.
$conf['environment_indicator_overwrite'] = TRUE;
$conf['environment_indicator_overwritten_name'] = 'LOCAL DEVELOPMENT';
$conf['environment_indicator_overwritten_color'] = '#bb0000';

$conf['nodesquirrel_secret_key'] = '';

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

// Devel settings
if ($_use_devel) {
  $conf['dev_query'] = 1;
  $conf['devel_query_display'] = 1;
  $conf['devel_query_sort'] = 0;
  $conf['devel_execution'] = 5;
  $conf['devel_store_queries'] = 0;
  $conf['devel_store_random'] = 1;
  $conf['devel_redirect_page'] = 0;

  // Enable xhprof profiling of each page request.
  // $conf['devel_xhprof_enabled'] = 0;
  // $conf['devel_xhprof_directory'] =  "/var/www/xhprof";
  // $conf['devel_xhprof_url'] =  "http://localhost/xhprof/xhprof_html";
}
