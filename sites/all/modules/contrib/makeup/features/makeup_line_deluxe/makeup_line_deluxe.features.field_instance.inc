<?php
/**
 * @file
 * makeup_line_deluxe.features.field_instance.inc
 */

/**
 * Implements hook_field_default_field_instances().
 */
function makeup_line_deluxe_field_default_field_instances() {
  $field_instances = array();

  // Exported field_instance: 'bean-skin_block-field_css'
  $field_instances['bean-skin_block-field_css'] = array(
    'bundle' => 'skin_block',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => '',
    'display' => array(
      'default' => array(
        'label' => 'hidden',
        'module' => 'makeupcss',
        'settings' => array(
          'semantic_field_format' => 0,
        ),
        'type' => 'makeup_inlinecss',
        'weight' => 0,
      ),
    ),
    'entity_type' => 'bean',
    'field_name' => 'field_css',
    'label' => 'CSS',
    'required' => 0,
    'settings' => array(
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 0,
      'module' => 'makeup',
      'settings' => array(
        'rows' => 5,
      ),
      'type' => 'makeup_textarea',
      'weight' => 12,
    ),
  );

  // Exported field_instance: 'node-hubpage-body'
  $field_instances['node-hubpage-body'] = array(
    'bundle' => 'hubpage',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => '',
    'display' => array(
      '4col_media' => array(
        'label' => 'hidden',
        'module' => 'text',
        'settings' => array(
          'semantic_field_format' => 'none',
          'trim_length' => 200,
        ),
        'type' => 'text_trimmed',
        'weight' => 3,
      ),
      '4col_simple' => array(
        'label' => 'hidden',
        'module' => 'text',
        'settings' => array(
          'semantic_field_format' => 'none',
          'trim_length' => 100,
        ),
        'type' => 'text_trimmed',
        'weight' => 2,
      ),
      'default' => array(
        'label' => 'hidden',
        'module' => 'text',
        'settings' => array(
          'semantic_field_format' => 'none',
        ),
        'type' => 'text_default',
        'weight' => 0,
      ),
      'er_search' => array(
        'label' => 'hidden',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 6,
      ),
      'teaser' => array(
        'label' => 'hidden',
        'module' => 'text',
        'settings' => array(
          'semantic_field_format' => 0,
          'trim_length' => 600,
        ),
        'type' => 'text_summary_or_trimmed',
        'weight' => 0,
      ),
    ),
    'entity_type' => 'node',
    'field_name' => 'body',
    'label' => 'Body',
    'required' => 0,
    'settings' => array(
      'display_summary' => 1,
      'text_processing' => 1,
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'text',
      'settings' => array(
        'rows' => 5,
        'summary_rows' => 5,
      ),
      'type' => 'text_textarea_with_summary',
      'weight' => 3,
    ),
  );

  // Exported field_instance: 'node-hubpage-field_banner'
  $field_instances['node-hubpage-field_banner'] = array(
    'bundle' => 'hubpage',
    'deleted' => 0,
    'description' => '',
    'display' => array(
      '4col_media' => array(
        'label' => 'hidden',
        'module' => 'image',
        'settings' => array(
          'image_link' => '',
          'image_style' => 'makeup_3cols',
          'semantic_field_format' => 'none',
        ),
        'type' => 'image',
        'weight' => 1,
      ),
      '4col_simple' => array(
        'label' => 'hidden',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 5,
      ),
      'default' => array(
        'label' => 'hidden',
        'module' => 'makeupimg',
        'settings' => array(
          'default' => array(
            'settings' => array(
              'default-attachment' => 'local',
              'default-color' => '',
              'default-height' => 0,
              'default-horizontal_position' => 'center',
              'default-image_style' => '',
              'default-img' => 0,
              'default-important' => 1,
              'default-repeat' => 'no-repeat',
              'default-sameas' => '',
              'default-selector' => 'body',
              'default-vertical_position' => 'top',
              'default-width' => 0,
            ),
          ),
          'semantic_field_format' => 'none',
        ),
        'type' => 'makeupimg_infilecss',
        'weight' => 3,
      ),
      'er_search' => array(
        'label' => 'hidden',
        'module' => 'image',
        'settings' => array(
          'image_link' => '',
          'image_style' => 'makeup_3cols',
          'semantic_field_format' => 'none',
        ),
        'type' => 'image',
        'weight' => 0,
      ),
      'teaser' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 0,
      ),
    ),
    'entity_type' => 'node',
    'field_name' => 'field_banner',
    'label' => 'Banner',
    'required' => 0,
    'settings' => array(
      'alt_field' => 0,
      'default_image' => 0,
      'file_directory' => '',
      'file_extensions' => 'png gif jpg jpeg',
      'max_filesize' => '',
      'max_resolution' => '',
      'min_resolution' => '',
      'title_field' => 0,
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'image',
      'settings' => array(
        'preview_image_style' => 'thumbnail',
        'progress_indicator' => 'bar',
      ),
      'type' => 'image_image',
      'weight' => 4,
    ),
  );

  // Exported field_instance: 'node-hubpage-field_css'
  $field_instances['node-hubpage-field_css'] = array(
    'bundle' => 'hubpage',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => '',
    'display' => array(
      '4col_media' => array(
        'label' => 'hidden',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 5,
      ),
      '4col_simple' => array(
        'label' => 'hidden',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 6,
      ),
      'default' => array(
        'label' => 'hidden',
        'module' => 'makeupcss',
        'settings' => array(
          'semantic_field_format' => 'none',
        ),
        'type' => 'makeup_inlinecss',
        'weight' => 4,
      ),
      'er_search' => array(
        'label' => 'hidden',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 4,
      ),
      'teaser' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 0,
      ),
    ),
    'entity_type' => 'node',
    'field_name' => 'field_css',
    'label' => 'CSS',
    'required' => 0,
    'settings' => array(
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 0,
      'module' => 'makeup',
      'settings' => array(
        'rows' => 5,
      ),
      'type' => 'makeup_textarea',
      'weight' => 5,
    ),
  );

  // Exported field_instance: 'node-hubpage-field_line_title'
  $field_instances['node-hubpage-field_line_title'] = array(
    'bundle' => 'hubpage',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => '',
    'display' => array(
      '4col_media' => array(
        'label' => 'hidden',
        'module' => 'text',
        'settings' => array(
          'semantic_field_format' => 'h4',
        ),
        'type' => 'text_default',
        'weight' => 0,
      ),
      '4col_simple' => array(
        'label' => 'hidden',
        'module' => 'text',
        'settings' => array(
          'semantic_field_format' => 'h4',
        ),
        'type' => 'text_default',
        'weight' => 0,
      ),
      'default' => array(
        'label' => 'hidden',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 6,
      ),
      'er_search' => array(
        'label' => 'hidden',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 5,
      ),
      'teaser' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 0,
      ),
    ),
    'entity_type' => 'node',
    'field_name' => 'field_line_title',
    'label' => 'Block Title',
    'required' => 0,
    'settings' => array(
      'text_processing' => 0,
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'text',
      'settings' => array(
        'size' => 60,
      ),
      'type' => 'text_textfield',
      'weight' => 2,
    ),
  );

  // Exported field_instance: 'node-hubpage-field_lines'
  $field_instances['node-hubpage-field_lines'] = array(
    'bundle' => 'hubpage',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => '',
    'display' => array(
      '4col_media' => array(
        'label' => 'hidden',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 4,
      ),
      '4col_simple' => array(
        'label' => 'hidden',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 4,
      ),
      'default' => array(
        'label' => 'hidden',
        'module' => 'field_collection',
        'settings' => array(
          'add' => 'Add',
          'delete' => 'Delete',
          'description' => TRUE,
          'edit' => 'Edit',
          'semantic_field_format' => 'none',
          'view_mode' => 'full',
        ),
        'type' => 'field_collection_view',
        'weight' => 2,
      ),
      'er_search' => array(
        'label' => 'hidden',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 3,
      ),
      'teaser' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 0,
      ),
    ),
    'entity_type' => 'node',
    'field_name' => 'field_lines',
    'label' => 'Lines',
    'required' => 0,
    'settings' => array(
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 0,
      'module' => 'field_collection',
      'settings' => array(),
      'type' => 'field_collection_embed',
      'weight' => 1,
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Banner');
  t('Block Title');
  t('Body');
  t('CSS');
  t('Lines');

  return $field_instances;
}
