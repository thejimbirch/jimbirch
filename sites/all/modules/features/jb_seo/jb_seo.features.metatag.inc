<?php

/**
 * @file
 * jb_seo.features.metatag.inc
 */

/**
 * Implements hook_metatag_export_default().
 */
function jb_seo_metatag_export_default() {
  $config = array();

  // Exported Metatag config instance: global.
  $config['global'] = array(
    'instance' => 'global',
    'disabled' => FALSE,
    'config' => array(
      'title' => array(
        'value' => '[current-page:title] | [site:name]',
      ),
      'description' => array(
        'value' => '',
      ),
      'abstract' => array(
        'value' => '',
      ),
      'keywords' => array(
        'value' => '',
      ),
      'robots' => array(
        'value' => array(
          'index' => 0,
          'follow' => 0,
          'noindex' => 0,
          'nofollow' => 0,
          'noarchive' => 0,
          'nosnippet' => 0,
          'noodp' => 0,
          'noydir' => 0,
          'noimageindex' => 0,
          'notranslate' => 0,
        ),
      ),
      'news_keywords' => array(
        'value' => '',
      ),
      'standout' => array(
        'value' => '',
      ),
      'generator' => array(
        'value' => '',
      ),
      'rights' => array(
        'value' => '',
      ),
      'image_src' => array(
        'value' => '',
      ),
      'canonical' => array(
        'value' => '[current-page:url:absolute]',
      ),
      'shortlink' => array(
        'value' => '',
      ),
      'publisher' => array(
        'value' => '',
      ),
      'author' => array(
        'value' => '',
      ),
      'original-source' => array(
        'value' => '',
      ),
      'revisit-after' => array(
        'value' => '',
        'period' => '',
      ),
      'content-language' => array(
        'value' => '',
      ),
    ),
  );

  // Exported Metatag config instance: global:403.
  $config['global:403'] = array(
    'instance' => 'global:403',
    'disabled' => FALSE,
    'config' => array(
      'canonical' => array(
        'value' => '[site:url]',
      ),
      'shortlink' => array(
        'value' => '[site:url]',
      ),
    ),
  );

  // Exported Metatag config instance: global:404.
  $config['global:404'] = array(
    'instance' => 'global:404',
    'disabled' => FALSE,
    'config' => array(
      'canonical' => array(
        'value' => '[site:url]',
      ),
      'shortlink' => array(
        'value' => '[site:url]',
      ),
    ),
  );

  // Exported Metatag config instance: global:frontpage.
  $config['global:frontpage'] = array(
    'instance' => 'global:frontpage',
    'disabled' => FALSE,
    'config' => array(
      'title' => array(
        'value' => '[site:name]',
      ),
      'description' => array(
        'value' => 'The incredible website of Jim Birch.',
      ),
      'canonical' => array(
        'value' => '[site:url]',
      ),
      'itemtype' => array(
        'value' => 'Person',
      ),
      'itemprop:name' => array(
        'value' => 'Jim Birch',
      ),
      'itemprop:description' => array(
        'value' => 'The incredible website of Jim Birch.',
      ),
      'og:site_name' => array(
        'value' => '[site:name]',
      ),
      'og:type' => array(
        'value' => 'public_figure',
      ),
      'og:url' => array(
        'value' => '[current-page:url]',
      ),
      'og:title' => array(
        'value' => '[site:name]',
      ),
      'og:description' => array(
        'value' => 'The incredible website of Jim Birch.',
      ),
      'twitter:site' => array(
        'value' => '@thejimbirch',
      ),
      'twitter:site:id' => array(
        'value' => 2989027096,
      ),
      'twitter:creator' => array(
        'value' => '@thejimbirch',
      ),
      'twitter:creator:id' => array(
        'value' => 2989027096,
      ),
      'twitter:url' => array(
        'value' => '[current-page:url]',
      ),
      'twitter:title' => array(
        'value' => '[site:name]',
      ),
      'twitter:description' => array(
        'value' => 'The incredible website of Jim Birch.',
      ),
    ),
  );

  // Exported Metatag config instance: node.
  $config['node'] = array(
    'instance' => 'node',
    'disabled' => FALSE,
    'config' => array(
      'description' => array(
        'value' => '[node:summary]',
      ),
      'itemtype' => array(
        'value' => 'Person',
      ),
      'itemprop:name' => array(
        'value' => '[node:title]',
      ),
      'itemprop:description' => array(
        'value' => '[node:summary]',
      ),
      'itemprop:image' => array(
        'value' => '[node:field_featured_image]',
      ),
      'og:type' => array(
        'value' => 'website',
      ),
      'og:url' => array(
        'value' => '[current-page:url]',
      ),
      'og:title' => array(
        'value' => '[node:title]',
      ),
      'og:description' => array(
        'value' => '[node:summary]',
      ),
      'og:image' => array(
        'value' => '[node:field_featured_image]',
      ),
      'twitter:card' => array(
        'value' => 'summary',
      ),
      'twitter:creator' => array(
        'value' => '@thejimbirch',
      ),
      'twitter:creator:id' => array(
        'value' => 2989027096,
      ),
      'twitter:url' => array(
        'value' => '[current-page:url]',
      ),
      'twitter:title' => array(
        'value' => '[node:title]',
      ),
      'twitter:description' => array(
        'value' => '[node:summary]',
      ),
      'twitter:image' => array(
        'value' => '[node:field_featured_image]',
      ),
    ),
  );

  // Exported Metatag config instance: taxonomy_term.
  $config['taxonomy_term'] = array(
    'instance' => 'taxonomy_term',
    'disabled' => FALSE,
    'config' => array(
      'title' => array(
        'value' => '[term:name] | [site:name]',
      ),
      'description' => array(
        'value' => '[term:description]',
      ),
    ),
  );

  // Exported Metatag config instance: user.
  $config['user'] = array(
    'instance' => 'user',
    'disabled' => FALSE,
    'config' => array(
      'title' => array(
        'value' => '[user:name] | [site:name]',
      ),
    ),
  );

  return $config;
}
