<?php

/**
 * @file
 * DropShark administrative pages.
 */

/**
 * Administrative configuration page.
 */
function dropshark_admin_config($form, &$form_state) {

  if (!$token = variable_get('dropshark_site_token')) {
    $form['instructions']['#markup'] = t('In order to register your site with the DropShark service, you\'ll need to enter your credentials and site identifier.');
    $form['instructions']['#prefix'] = '<p>';
    $form['instructions']['#suffix'] = '</p>';

    $form['email'] = array(
      '#type' => 'textfield',
      '#title' => t('Email address'),
      '#description' => t('Enter the email address which you\'ve registered for DropShark.'),
      '#required' => TRUE,
    );

    $form['password'] = array(
      '#type' => 'password',
      '#title' => t('DropShark password'),
      '#description' => t('Enter your DropShark password.'),
      '#required' => TRUE,
    );

    $form['site_id'] = array(
      '#type' => 'textfield',
      '#title' => t('Site ID'),
      '#description' => t('Find your site identifier on your DropShark dashboard.'),
      '#default_value' => variable_get('dropshark_site_id'),
      '#required' => TRUE,
    );

    $form['submit'] = array(
      '#value' => t('Register site'),
      '#type' => 'submit',
      '#element_validate' => array('dropshark_admin_config_register_validate'),
    );
  } else {
    $params['!link'] = l('DropShark', 'http://app.dropshark.io');
    $form['instructions']['#markup'] = t('Your site is registered and will send data to DropShark. Log in to !link to analyze your data.', $params);
    $form['instructions']['#prefix'] = '<p>';
    $form['instructions']['#suffix'] = '</p>';

    $form['status'] = array(
      '#type' => 'item',
      '#title' => t('Site ID'),
      '#markup' => check_plain(variable_get('dropshark_site_id')),
    );

    $form['check'] = array(
      '#title' => t('Check connection'),
      '#type' => 'fieldset',
    );
    $form['check']['instructions']['#markup'] = t('Verify that your site is able to submit data to DropShark.');
    $form['check']['instructions']['#prefix'] = '<p>';
    $form['check']['instructions']['#suffix'] = '</p>';
    $form['check']['submit'] = array(
      '#value' => t('Check'),
      '#type' => 'submit',
      '#submit' => array('dropshark_admin_config_check_submit'),
    );

    $form['reset'] = array(
      '#title' => t('Reset token'),
      '#type' => 'fieldset',
    );
    $form['reset']['instructions']['#markup'] = t('If you\'re having trouble connecting to DropShark, try resetting the token then re-registering the site.');
    $form['reset']['instructions']['#prefix'] = '<p>';
    $form['reset']['instructions']['#suffix'] = '</p>';
    $form['reset']['submit'] = array(
      '#value' => t('Reset'),
      '#type' => 'submit',
      '#submit' => array('dropshark_admin_config_reset_submit'),
    );

    $form['collect'] = array(
      '#title' => t('Collect'),
      '#type' => 'fieldset',
    );
    $form['collect']['instructions'][0]['#markup'] = t('DropShark will attempt to submit your data during Drupal\'s cron. You may also want to set up a dedicated cron task dedicated to collecting DropShark data.');
    $form['collect']['instructions'][0]['#prefix'] = '<p>';
    $form['collect']['instructions'][0]['#suffix'] = '</p>';
    $form['collect']['instructions'][1]['#markup'] = t('Use this function to perform a real time collection of data from your site.');
    $form['collect']['instructions'][1]['#prefix'] = '<p>';
    $form['collect']['instructions'][1]['#suffix'] = '</p>';
    $form['collect']['submit'] = array(
      '#value' => t('Collect'),
      '#type' => 'submit',
      '#submit' => array('dropshark_admin_config_collect_submit'),
    );
  }

  return $form;
}

/**
 * Form validation for dropshark_admin_config.
 */
function dropshark_admin_config_register_validate($form, &$form_state) {

  if (!empty($form_state['values']['email']) && !empty($form_state['values']['password']) && !empty($form_state['values']['site_id'])) {
    $r = dropshark_get_request();
    $data['user'] = $form_state['values']['email'];
    $data['password'] = $form_state['values']['password'];
    $data['site_id'] = $form_state['values']['site_id'];
    $data['fingerprint'] = dropshark_site_fingerprint();
    $result = $r->post('sites/token', $data);

    if (empty($result->data->token)) {
      if (!empty($result->data->error)) {
        $params['@message'] = $result->data->error;
        $message = t('Unable to register your site: @message. Please check your information and try again. If you continue to experience issues, please contact DropShark support.', $params);
      } else {
        $message = t('Unable to register your site, please check your information and try again. If you continue to experience issues, please contact DropShark support.');
      }
      form_set_error('', $message);
    } else {
      $form_state['storage']['token'] = $result->data->token;
      drupal_set_message(t('Your site has been registered with DropShark.'));
    }
  }

}

/**
 * Form submit handler for dropshark_admin_config.
 */
function dropshark_admin_config_submit(&$element, &$form_state) {
  variable_set('dropshark_site_id', $form_state['values']['site_id']);
  variable_set('dropshark_site_token', $form_state['storage']['token']);
}

/**
 * Form submit handler for checking the site token on dropshark_admin_config.
 */
function dropshark_admin_config_check_submit() {
  $r = dropshark_get_request();
  $result = $r->get('sites/token');

  if (empty($result->data->site_id)) {
    drupal_set_message(t('Unable to verify the site connection.'), 'error');
  } else {
    drupal_set_message(t('Connection successfully verified.'));
  }
}

/**
 * Form submit handler for resetting the site token on dropshark_admin_config.
 */
function dropshark_admin_config_reset_submit() {
  variable_del('dropshark_site_token');
}

/**
 * Form submit handler for performing a data collection and submission.
 */
function dropshark_admin_config_collect_submit() {
  dropshark_handle_event('all');
  dropshark_queue_process();
  drupal_set_message(t('Data collection complete.'));
}
