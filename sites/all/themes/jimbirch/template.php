<?php

/**
 * @file
 * template.php
 */

/**
 * Removing Empty div.panel-separator
 * http://drupal.stackexchange.com/questions/23652/how-to-remove-panel-separator-css-in-mini-panels
 */
function jimbirch_panels_default_style_render_region($vars) {
    $output = '';
    $output .= implode('', $vars['panes']);
    return $output;
}

/**
 * Removing H2 Invisibles from Tab Menus
 */
function jimbirch_menu_local_tasks(&$variables) {
  $output = '';

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '';
    $variables['primary']['#prefix'] = '<ul class="nav nav-tabs">';
    $variables['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['primary']);
  }

  if (!empty($variables['secondary'])) {
    $variables['primary']['#prefix'] = '';
    $variables['secondary']['#prefix'] = '<ul class="nav nav-pills">';
    $variables['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['secondary']);
  }

  return $output;
}


/**
 * Display the list of available node types for node creation.
 *
 * @ingroup themeable
 */
function jimbirch_node_add_list($content) {
  $output = '';

  if ($content) {
    $output = '<div id="main-content" class="full-width"><div class="container"><div class="row"><div class="col-sm-8 well well-lg"><dl class="node-type-list">';
    foreach ($content as $item) {
      $output .= '<dt>'. l($item['title'], $item['href'], $item['localized_options']) .'</dt>';      
      $output .= '<dd>'. filter_xss_admin($item['description']) .'</dd>';
    }
    $output .= '</dl></div></div></div></div>';
  }
  return $output;
}
