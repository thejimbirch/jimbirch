<?php
/**
 * @file
 * jb_media.linkit_profiles.inc
 */

/**
 * Implements hook_default_linkit_profiles().
 */
function jb_media_default_linkit_profiles() {
  $export = array();

  $linkit_profile = new LinkitProfile();
  $linkit_profile->disabled = FALSE; /* Edit this to true to make a default linkit_profile disabled initially */
  $linkit_profile->api_version = 1;
  $linkit_profile->name = 'content_creator';
  $linkit_profile->admin_title = 'Content Creator';
  $linkit_profile->admin_description = 'This is the Linkit profile for the content creators of the site.';
  $linkit_profile->profile_type = '2';
  $linkit_profile->data = array(
    'search_plugins' => array(
      'entity:file' => array(
        'enabled' => 0,
        'weight' => '-10',
      ),
      'entity:node' => array(
        'enabled' => 1,
        'weight' => '-10',
      ),
      'entity:taxonomy_term' => array(
        'enabled' => 1,
        'weight' => '-10',
      ),
      'entity:user' => array(
        'enabled' => 0,
        'weight' => '-10',
      ),
    ),
    'entity:node' => array(
      'result_description' => '',
      'bundles' => array(
        'blog_post' => 'blog_post',
        'page' => 'page',
        'webform' => 0,
      ),
      'group_by_bundle' => 1,
      'include_unpublished' => 0,
    ),
    'entity:taxonomy_term' => array(
      'result_description' => '',
      'bundles' => array(
        'blog_categories' => 'blog_categories',
        'blog_tag' => 'blog_tag',
        'drupal_projects' => 'drupal_projects',
      ),
      'group_by_bundle' => 1,
    ),
    'entity:file' => array(
      'result_description' => '',
      'show_scheme' => 0,
      'group_by_scheme' => 0,
      'url_type' => 'direct',
      'image_extra_info' => array(
        'thumbnail' => 'thumbnail',
        'dimensions' => 'dimensions',
      ),
    ),
    'entity:user' => array(
      'result_description' => '',
    ),
    'insert_plugin' => array(
      'plugin' => 'html_link',
      'url_method' => '2',
    ),
    'attribute_plugins' => array(
      'class' => array(
        'enabled' => 0,
        'weight' => '-10',
      ),
      'target' => array(
        'enabled' => 0,
        'weight' => '-10',
      ),
      'id' => array(
        'enabled' => 0,
        'weight' => '-10',
      ),
      'title' => array(
        'enabled' => 0,
        'weight' => '-10',
      ),
      'accesskey' => array(
        'enabled' => 0,
        'weight' => '-10',
      ),
      'rel' => array(
        'enabled' => 0,
        'weight' => '-10',
      ),
    ),
    'imce' => 0,
    'autocomplete' => array(
      'charLimit' => '3',
      'wait' => '350',
      'remoteTimeout' => '10000',
    ),
  );
  $export['content_creator'] = $linkit_profile;

  return $export;
}
