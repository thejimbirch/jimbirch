<?php

/**
 * @file
 * jb_taxonomy.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function jb_taxonomy_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}
