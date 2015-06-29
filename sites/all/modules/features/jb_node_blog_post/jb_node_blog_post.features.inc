<?php
/**
 * @file
 * jb_node_blog_post.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function jb_node_blog_post_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "field_group" && $api == "field_group") {
    return array("version" => "1");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function jb_node_blog_post_node_info() {
  $items = array(
    'blog_post' => array(
      'name' => t('Blog Post'),
      'base' => 'node_content',
      'description' => t('Create an article, or blog post for the site.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => t('<p>Please be sure to schedule, or hit publish when the post is ready.  The default setting is that this content type is not published.</p>

<p>This is a <a href="">Link</a> to another piece of content.</a></p>'),
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
