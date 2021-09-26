<?php
/**
 * @file
 * Admin function for the slack_to_drupal module.
 */

/**
 * Slack to Drupal configruation form.
 */
function slack_to_drupal_admin_config($form, &$form_state) {
  $form['slack_to_drupal_client_id'] = array(
    '#type' => 'textfield',
    '#title' => t('Slack Client ID'),
    '#description' => t('The client id can be found on your app\'s credentials page'),
    '#default_value' => variable_get('slack_to_drupal_client_id'),
    '#required' => TRUE,
  );

  $form['slack_to_drupal_client_secret'] = array(
    '#type' => 'textfield',
    '#title' => t('Slack Client Secret'),
    '#description' => t('The client secret can be found on your app\'s credentials page'),
    '#default_value' => variable_get('slack_to_drupal_client_secret'),
    '#required' => TRUE,
  );

  $form['slack_to_drupal_folder_name'] = array(
    '#type' => 'textfield',
    '#title' => t('Local path to files'),
    '#description' => t('Path where you would like to save your slack images. Example: slack (will be saved at /sites/default/files/slack)'),
    '#default_value' => variable_get('slack_to_drupal_folder_name'),
    '#required' => TRUE,
  );

  $form['slack_to_drupal_token'] = array(
    '#type' => 'textfield',
    '#title' => t('Slack Client Token'),
    '#description' => t('The token that Slack Provides.'),
    '#default_value' => variable_get('slack_to_drupal_token', ''),
    '#disabled' => TRUE,
  );

  $form['slack_to_drupal_channel_id'] = array(
    '#type' => 'textfield',
    '#title' => t('Slack Channel ID'),
    '#description' => t('The channel ID or if blank all channels.'),
    '#default_value' => variable_get('slack_to_drupal_channel_id', ''),
    '#disabled' => TRUE,
  );

  $form = system_settings_form($form);

  $form['#submit'][] = 'slack_to_drupal_admin_config_submit';

  return $form;
}

/**
 * Submit handler for slack_to_drupal_admin_config().
 */
function slack_to_drupal_admin_config_submit($form, &$form_state) {
  global $base_url;

  // If file path doesn't exist, create it.
  $file_path = 'public://' . variable_get('slack_to_drupal_folder_name');
  file_prepare_directory($file_path, FILE_CREATE_DIRECTORY);

  $query = array(
    'client_id' => variable_get('slack_to_drupal_client_id'),
    'scope' => 'files:read,channels:read,users:read',
    'redirect_uri' => $base_url . '/admin/config/services/slack_to_drupal/token',
  );

  $path = 'https://slack.com/oauth/authorize?' . drupal_http_build_query($query);
  drupal_goto($path);
}

/**
 * Sets the Slack token.
 */
function slack_to_drupal_admin_token_config() {
  global $base_url;

  // Get the token from the temporary code.
  if (isset($_GET['code'])) {
    $query = array(
      'client_id' => variable_get('slack_to_drupal_client_id'),
      'client_secret' => variable_get('slack_to_drupal_client_secret'),
      'code' => $_GET['code'],
      'redirect_uri' => $base_url . '/admin/config/services/slack_to_drupal/token',
    );

    $result = drupal_http_request('https://slack.com/api/oauth.access?' . drupal_http_build_query($query));
    if ($result->code == 200) {
      $data = json_decode($result->data);
      if ($data->ok == TRUE) {
        variable_set('slack_to_drupal_token', $data->access_token);
      }
      else {
        drupal_set_message(t('%error', array('%error' => $data->error)), 'error');
      }
    }
  }

  drupal_goto($base_url . '/admin/config/services/slack_to_drupal/channel');

  return '';
}

/**
 * Sets channel.
 */
function slack_to_drupal_admin_channel_config($form, &$form_state) {
  // Get Slack channels.
  $default = array(
    '' => 'All Channels',
  );
  $channels = $default + slack_to_drupal_get_channels();

  $form['slack_to_drupal_channel_id'] = array(
    '#options' => $channels,
    '#type' => 'select',
    '#title' => t('Slack Channel'),
    '#description' => t('Select the Channel you would like to integrate to.'),
    '#default_value' => variable_get('slack_to_drupal_channel_id'),
  );

  $form = system_settings_form($form);

  $form['#submit'][] = 'slack_to_drupal_admin_config_channel_submit';

  return $form;
}

/**
 * Submit handler for slack_to_drupal_admin_channel_config().
 */
function slack_to_drupal_admin_config_channel_submit() {
  global $base_url;
  drupal_goto($base_url . '/admin/config/services/slack_to_drupal/configuration');
}

/**
 * Approve images form.
 */
function slack_to_drupal_approve() {
  $query = new EntityFieldQuery();
  $ids = array();
  $results = array();

  $query->entityCondition('entity_type', 'file')
    ->propertyCondition('type', 'slack_image')
    ->fieldCondition('slack_image_approved', 'value', '0', '=');
  $result = $query->execute();

  if (isset($result['file'])) {
    $ids = array_keys($result['file']);
    // Adds CSS.
    drupal_add_css(drupal_get_path('module', 'slack_to_drupal') . '/css/slack_to_drupal.css');
  }

  $fids = array();
  $count = 0;

  $form['file'] = array(
    '#type' => 'fieldset',
  );

  foreach ($ids as $id) {
    $file = file_load($id);

    $form['file'][$id] = array(
      '#type' => 'fieldset',
      '#collapsible' => FALSE,
      '#collapsed' => FALSE,
      '#tree' => TRUE,
    );

    $form['file'][$id]['checkbox'] = array(
      '#type' => 'checkbox',
    );

    $form['file'][$id]['image'] = array(
      '#markup' => theme('image_style', array('path' => $file->uri, 'style_name' => 'medium')),
    );

    $form['file'][$id]['image_name'] = array(
      '#markup' => $file->filename,
    );

    $form['file'][$id]['caption'] = array(
      '#title' => 'Caption',
      '#type' => 'textarea',
      '#default_value' => $file->slack_image_title_text['und'][0]['value'],
      '#attributes' => array(
        'placeholder' => t('Enter image caption'),
      ),
    );

    $form['file'][$id]['slack_user'] = array(
      '#title' => 'User',
      '#type' => 'textfield',
      '#default_value' => $file->slack_user['und'][0]['value'],
      '#attributes' => array(
        'placeholder' => t('Enter user'),
      ),
    );
  }

  $form['approve'] = array(
    '#type' => 'submit',
    '#value' => t('Approve'),
  );

  $form['delete'] = array(
    '#type' => 'submit',
    '#value' => t('Delete'),
  );

  return $form;
}

/**
 * Submit handler for slack_to_drupal_approve().
 */
function slack_to_drupal_approve_submit($form, &$form_state) {
  foreach ($form_state['input'] as $id => $file) {
    if (isset($file['checkbox']) && $file['checkbox'] == 1) {
      $image = file_load($id);
      if ($form_state['values']['op'] == 'Approve') {
        $image->slack_image_approved['und']['0']['value'] = 1;
        $image->slack_image_title_text['und'][0]['value'] = $file['caption'];
        $image->slack_user['und'][0]['value'] = $file['slack_user'];
        file_save($image);
      }
      else {
        file_delete($image);
      }
    }
  }

  if ($form_state['values']['op'] == 'Approve') {
    drupal_set_message(t('Selected files were approved'));
  }
  else {
    drupal_set_message(t('Selected files were removed'));
  }
}
