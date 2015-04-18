<?php
/**
 * @file
 * makeup_line_deluxe.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function makeup_line_deluxe_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "bean_admin_ui" && $api == "bean") {
    return array("version" => "5");
  }
  if ($module == "semantic_fields" && $api == "semantic_fields") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function makeup_line_deluxe_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_image_default_styles().
 */
function makeup_line_deluxe_image_default_styles() {
  $styles = array();

  // Exported image style: makeup_3cols.
  $styles['makeup_3cols'] = array(
    'name' => 'makeup_3cols',
    'label' => 'MakeUp 3cols',
    'effects' => array(
      1 => array(
        'label' => 'Scale and crop',
        'help' => 'Scale and crop will maintain the aspect-ratio of the original image, then crop the larger dimension. This is most useful for creating perfectly square thumbnails without stretching the image.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 200,
          'height' => 200,
        ),
        'weight' => 1,
      ),
    ),
  );

  return $styles;
}

/**
 * Implements hook_node_info().
 */
function makeup_line_deluxe_node_info() {
  $items = array(
    'hubpage' => array(
      'name' => t('Hub page'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
