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
    "custom" => array(),
  );

  // Go over Themes
  if (variable_get('system_status_do_match_contrib', '1')) {
     foreach($system_themes as $theme) {
        if(isset($theme->info['package']) && $theme->info['package'] == 'Core')
          continue;

        if(isset($theme->info['version']))
          $res['contrib'][$theme->name] = array("version" => $theme->info['version']);
     }
  }

  // Go over Modules
  foreach ($system_modules as $module => $module_info) {
    $filename = $module_info->filename;

    // Match for custom modules.
    if (variable_get('system_status_do_match_custom', '0')) {
      $regex = variable_get('system_status_preg_match_custom', '{^sites\/([A-z,\.,\-]+)\/modules\/custom\/*}');
      if (preg_match($regex, $filename)) {
        // if this is part of a project, only set the project.
        if(isset($module_info->info['project'])) {
          $res['custom'][$module_info->info['project']] = array("version" => $module_info->info['version']);
        }
        else {
          $res['custom'][$module] = array("version" => $module_info->info['version']);
        }
      }
    }
    else {
      $res['custom'] = "disabled";
    }

    // Match for contrib modules.
    if (variable_get('system_status_do_match_contrib', '1')) {
      if (variable_get('system_status_match_contrib_mode', 0) == 0) {
        $regex = '{^sites\/([A-z,\.,\-]+)\/modules\/*}';
      }
      elseif (variable_get('system_status_match_contrib_mode', 0) == 1) {
        $regex = '{^sites\/([A-z,\.,\-]+)\/modules\/contrib\/*}';
      }
      else {
        $regex = variable_get('system_status_preg_match_contrib', '{^sites\/([A-z,\.,\-]+)\/modules\/contrib\/*}');
      }

      if (preg_match($regex, $filename)) {
        // if this is part of a project, only set the project.
        if(isset($module_info->info['project'])) {
          $res['contrib'][$module_info->info['project']] = array("version" => $module_info->info['version']);
        }
        else {
          $res['contrib'][$module] = array("version" => $module_info->info['version']);
        }
      }
    }
    else {
      $res['contrib'] = "disabled";
    }

    // Core modules.
    if (variable_get('system_status_do_match_core', '1')) {
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
    else {
      $res['core'] = "disabled";
    }
  }

  if ((variable_get('system_status_need_encryption', 0) == 1 || variable_get('system_status_service_allow_drupalstatus', 1) == 1) && extension_loaded('mcrypt')) {
    $res = SystemStatusEncryption::encrypt(drupal_json_encode(array("system_status" => $res)));
    drupal_json_output(array("system_status" => "encrypted", "data" => $res));
  }
  else {
    drupal_json_output(array("system_status" => $res));
  }
}
