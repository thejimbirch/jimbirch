<?php

/**
 * @file
 * jb_media.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function jb_media_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "file_entity" && $api == "file_default_displays") {
    return array("version" => "1");
  }
  if ($module == "file_entity" && $api == "file_type") {
    return array("version" => "1");
  }
  if ($module == "linkit" && $api == "linkit_profiles") {
    return array("version" => "1");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_image_default_styles().
 */
function jb_media_image_default_styles() {
  $styles = array();

  // Exported image style: background.
  $styles['background'] = array(
    'label' => 'Background',
    'effects' => array(
      3 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 1920,
          'height' => 1440,
        ),
        'weight' => 1,
      ),
      5 => array(
        'name' => 'imagemagick_strip',
        'data' => array(),
        'weight' => 2,
      ),
      8 => array(
        'name' => 'imagemagick_sharpen',
        'data' => array(),
        'weight' => 3,
      ),
    ),
  );

  // Exported image style: blog_feed.
  $styles['blog_feed'] = array(
    'label' => 'Blog Feed',
    'effects' => array(
      4 => array(
        'name' => 'image_scale',
        'data' => array(
          'width' => 600,
          'height' => '',
          'upscale' => 0,
        ),
        'weight' => 1,
      ),
      9 => array(
        'name' => 'imagemagick_strip',
        'data' => array(),
        'weight' => 2,
      ),
      10 => array(
        'name' => 'imagemagick_sharpen',
        'data' => array(),
        'weight' => 3,
      ),
    ),
  );

  // Exported image style: drupal_planet.
  $styles['drupal_planet'] = array(
    'label' => 'Drupal Planet',
    'effects' => array(
      2 => array(
        'name' => 'image_scale',
        'data' => array(
          'width' => 620,
          'height' => '',
          'upscale' => 0,
        ),
        'weight' => 1,
      ),
      6 => array(
        'name' => 'imagemagick_strip',
        'data' => array(),
        'weight' => 2,
      ),
      7 => array(
        'name' => 'imagemagick_sharpen',
        'data' => array(),
        'weight' => 3,
      ),
    ),
  );

  // Exported image style: large.
  $styles['large'] = array(
    'label' => 'Large (480x480)',
    'effects' => array(
      0 => array(
        'name' => 'image_scale',
        'data' => array(
          'width' => 480,
          'height' => 480,
          'upscale' => 0,
        ),
        'weight' => 0,
      ),
    ),
  );

  // Exported image style: linkit_thumb.
  $styles['linkit_thumb'] = array(
    'effects' => array(
      0 => array(
        'name' => 'image_scale',
        'data' => array(
          'width' => 50,
          'height' => 50,
          'upscale' => 0,
        ),
        'weight' => 0,
      ),
    ),
    'label' => 'linkit_thumb',
  );

  // Exported image style: media_thumbnail.
  $styles['media_thumbnail'] = array(
    'label' => 'Media thumbnail (100x100)',
    'effects' => array(
      0 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 100,
          'height' => 100,
        ),
        'weight' => 0,
      ),
    ),
  );

  // Exported image style: medium.
  $styles['medium'] = array(
    'label' => 'Medium (220x220)',
    'effects' => array(
      0 => array(
        'name' => 'image_scale',
        'data' => array(
          'width' => 220,
          'height' => 220,
          'upscale' => 1,
        ),
        'weight' => 0,
      ),
    ),
  );

  // Exported image style: square_thumbnail.
  $styles['square_thumbnail'] = array(
    'label' => 'square_thumbnail',
    'effects' => array(
      1 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 100,
          'height' => 100,
          'weight' => 0,
        ),
        'weight' => 0,
      ),
    ),
  );

  // Exported image style: teaser.
  $styles['teaser'] = array(
    'label' => 'Teaser',
    'effects' => array(
      1 => array(
        'name' => 'image_scale',
        'data' => array(
          'width' => 800,
          'height' => '',
          'upscale' => 1,
        ),
        'weight' => -10,
      ),
      12 => array(
        'name' => 'imagemagick_strip',
        'data' => array(),
        'weight' => -9,
      ),
      11 => array(
        'name' => 'imagemagick_sharpen',
        'data' => array(),
        'weight' => -8,
      ),
    ),
  );

  // Exported image style: thumbnail.
  $styles['thumbnail'] = array(
    'label' => 'Thumbnail (100x100)',
    'effects' => array(
      0 => array(
        'name' => 'image_scale',
        'data' => array(
          'width' => 100,
          'height' => 100,
          'upscale' => 1,
        ),
        'weight' => 0,
      ),
    ),
  );

  return $styles;
}
