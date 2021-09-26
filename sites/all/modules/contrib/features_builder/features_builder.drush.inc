<?php

/**
 * @file
 * Features Builder Drush integration.
 */

/**
 * Implements hook_drush_command().
 */
function features_builder_drush_command() {
  $commands['features-build'] = array(
    'description' => dt('Build Features from current config.'),
    'aliases' => array('fb'),
    'options' => array(
      'enable' => dt('Enable the features after building.'),
    ),
  );

  $commands['features-builder-exportables'] = array(
    'description' => dt('Provide a list of exportables which may be managed by Features Builder.'),
    'aliases' => array('fbx'),
    'arguments' => array(
      'type' => dt('Restrict the listing to components of a specific type.'),
      'status' => dt('Restrict the listing to components at a specifc status.'),
    ),
  );

  $commands['features-builder'] = array(
    'description' => dt('Provide a list of exportables which will be included in a feature.'),
    'aliases' => array('fbld'),
    'arguments' => array(
      'feature' => dt('The feature to analyze.'),
    ),
  );

  return $commands;
}

/**
 * Drush command to build Features.
 */
function drush_features_builder_features_build() {
  if (!drush_confirm(dt('Are you sure you want to build your features?'))) {
    return drush_user_abort();
  }

  $options['enable'] = drush_get_option('enable', FALSE);
  if (!$batch = features_builder_prep_batch($options)) {
    drush_log(dt('Features Builder does not include any builders, install the "Features Builder Default" module to utilize the standard configuration packaging methodology.'), 'error');
    return FALSE;
  }
  $batch['progressive'] = FALSE;
  batch_set($batch);
  drush_backend_batch_process();
}

/**
 * Drush command for listing exportables.
 */
function drush_features_builder_exportables($type = NULL, $status = NULL) {
  $exportables = features_builder_get_exportables();
  unset($exportables['dependencies']);
  unset($exportables['field']);

  $options = array('all') + array_keys($exportables);
  $options = array_combine($options, $options);
  if (!in_array($type, $options)) {
    $type = drush_choice($options, dt('Select a component type'));
    if ($type === FALSE) {
      return drush_log(dt('Aborting.'));
    }
  }

  $options = array('all', 'included', 'duplicated', 'not_included');
  $options = array_combine($options, $options);
  if (!in_array($status, $options)) {
    $status = drush_choice($options, dt('Select a status'));
    if ($status === FALSE) {
      return drush_log(dt('Aborting.'));
    }
  }

  $included = features_builder_get_included_exportables();

  // Header.
  $rows[] = array(dt('Component'), dt('Provided by'));

  // Iterate over all types, and components. Add row for matching component
  // type and status.
  foreach ($exportables as $component_type => $components) {
    // Filter by type.
    if ($type == $component_type || $type == 'all') {
      foreach ($components as $component => $name) {
        if (empty($included[$component_type][$name])) {
          $provider = '';
          $component_status = 'not_included';
        } elseif (count($included[$component_type][$name]) == 1) {
          $provider = reset($included[$component_type][$name]);
          $component_status = 'included';
        } else {
          $provider = implode(', ', $included[$component_type][$name]);
          $component_status = 'duplicated';
        }

        // Filter by status.
        if ($status == 'all' || $status == $component_status) {
          $rows[] = array($component_type . ':' . $component, $provider);
        }
      }
    }
  }

  if (count($rows) > 1) {
    drush_print_table($rows, TRUE);
  }
}

/**
 * Drush command for analyzing a builder.
 */
function drush_features_builder($feature = NULL) {
  $builder_info = features_builder_get_builders();
  $features = array();

  foreach ($builder_info as $name => $info) {
    $features += $info['class']::listFeatures();
  }
  $features = array_keys($features);

  if (!in_array($feature, $features)) {
    $feature = drush_choice(array_combine($features, $features), dt('Select a feature'));
    if ($feature === FALSE) {
      return drush_log(dt('Aborting.'));
    }
  }

  $builders = features_builder_get_features();
  $builder_class = features_builder_get_class($builders[$feature], $feature);
  $included_components = $builder_class->components();

  $rows[] = array('Components');

  foreach ($included_components as $component_type => $components) {
    foreach ($components as $name => $component) {
      $rows[] = array($component_type . ':' . $name);
    }
  }

  if (count($rows) > 1) {
    drush_print_table($rows, TRUE);
  }
}
