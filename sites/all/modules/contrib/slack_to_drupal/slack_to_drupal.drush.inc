<?php

/**
 * @file
 * Drush file for the slack_to_drupal module.
 */

/**
 * Implementation of hook_drush_command().
 */
function slack_to_drupal_drush_command() {
  $items = array();
  // Name of the drush command.
  $items['import-slack-images'] = array(
    'description' => 'Import slack images',
    'callback' => 'drush_import_slack_images',
  );

  return $items;
}

/**
 * Import images.
 *
 * @see  slack_to_drupal_import_images().
 */
function drush_import_slack_images() {
  slack_to_drupal_import_images();
}
