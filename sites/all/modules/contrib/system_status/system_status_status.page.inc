<?php
/**
 * @file
 * Logic for system_status output
 */

/**
 * Return JSON formatted module information.
 */
function system_status_status_page() {
  $system_modules = system_list('module_enabled');
  $system_themes = list_themes(TRUE);

  // Needless initialisation, but hey.
  $res = array(
    "core" => array(),
    "contrib" => array(),
    "custom" => "disabled",
  );

  // Go over Themes
  foreach($system_themes as $theme) {
    if(isset($theme->info['package']) && $theme->info['package'] == 'Core')
      continue;

    if(isset($theme->info['version']))
      $res['contrib'][$theme->name] = array("version" => $theme->info['version']);
  }

  // Go over Modules
  foreach ($system_modules as $module => $module_info) {
    $filename = $module_info->filename;

    // Match for contrib modules.
    $regex = '{^sites\/([A-z,\.,\-]+)\/modules\/*}';
    if (preg_match($regex, $filename)) {
      // if this is part of a project, only set the project.
      if(isset($module_info->info['project'])) {
        $res['contrib'][$module_info->info['project']] = array("version" => $module_info->info['version']);
      }
      else {
        $res['contrib'][$module] = array("version" => $module_info->info['version']);
      }
    }

    // Match for core modules.
    if (strtolower($module_info->info['package']) == "core") {
      // if this is part of a project, only set the project.
      if(isset($module_info->info['project'])) {
        $res['core'][$module_info->info['project']] = array("version" => $module_info->info['version']);
      }
      else {
        $res['core'][$module] = array("version" => $module_info->info['version']);
      }
    }

    // doublecheck if drupal version is reported, if not add bootstrap define
    if(!isset($res['core']['drupal'])) {
       $res['core']['drupal'] = array("version" => VERSION);
    }
  }

  if (extension_loaded('mcrypt')) {
    $res = SystemStatusEncryption::encrypt(drupal_json_encode(array("system_status" => $res)));
    drupal_json_output(array("system_status" => "encrypted", "data" => $res, "drupal_version" => "7"));
  }
  else {
    drupal_json_output(array("system_status" => $res, "drupal_version" => "7"));
  }
}
