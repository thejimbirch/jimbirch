<?php
/**
 * @file drushrc.php
 * See http://drush.ws/examples/example.drushrc.php for more info
 */

 /**
 * Check whether Drush is 6.x or better.
 */
if (preg_match('/^[0-5]\./', DRUSH_VERSION)) {
  drush_set_error("This drushrc.php not compatible with Drush versions older than 6.x. Please upgrade.");
}

/**
 * Useful shell aliases:
 *
 * Drush shell aliases act similar to git aliases.  For best results, define
 * aliases in one of the drushrc file locations between #3 through #6 above.
 * More information on shell aliases can be found via:
 * `drush topic docs-shell-aliases` on the command line.
 *
 * @see https://git.wiki.kernel.org/articles/a/l/i/Aliases.html#Advanced.
 */
#$options['shell-aliases']['pull'] = '!git pull'; // We've all done it.
#$options['shell-aliases']['pulldb'] = '!git pull && drush updatedb';
#$options['shell-aliases']['hist'] = '!git log --pretty=format:"%h %ad | %s%d [%an]" --graph --date=short';
$options['shell-aliases']['nc'] = 'pm-list --no-core';
$options['shell-aliases']['nc-on'] = '!drush pml --no-core --type=module --status=enabled --pipe';
$options['shell-aliases']['nc-dis'] = '!drush -y dis $(drush pml --status=enabled --type=module --no-core --pipe)';
$options['shell-aliases']['wipe'] = 'cache-clear all';
$options['shell-aliases']['offline'] = 'variable-set -y --always-set maintenance_mode 1';
$options['shell-aliases']['online'] = 'variable-delete -y --exact maintenance_mode';
$options['shell-aliases']['get-db'] = 'sql-dump --structure-tables-key=common+xeno --skip-tables-key=common';

/**
 * Structure tables - DB tables that need to have their structure migrated, but
 * NOT their data. We break this up into common and springboard for convenience,
 * and then call both for our shortcuts.
 */
// Common tables
$options['structure-tables']['common'] = array(
  // Advagg tables
  'advagg_bundles',
  // Cache tables
  'cache*',
  // Other core tables
  'history',
  'sessions',
  'watchdog',
  // Devel query log
  'devel*',
  // User profile data
  'profile_values',
  // Search tables
  'search*',
);

// client tables here
$options['structure-tables']['xeno'] = array(
  // array of tables to not get data from, e.g. 'ubercart_orders'
);

// Combined
$options['structure-tables']['common+xeno'] = array_merge(
  $options['structure-tables']['common'],
  $options['structure-tables']['xeno']
);

/**
 * Skip tables array - these are tables which need to be skipped entirely. This
 * is especially useful for mysql views
 */
$options['skip-tables']['common'] = array();
