<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('Content Area'),
  'category' => t('Jim Birch'),
  'icon' => 'contentarea.png',
  'theme' => 'panels-contentarea',
  'css' => 'contentarea.css',
  'regions' => array(
      'main-content' => t('Main Content Well'),
      'content-sidebar' => t('Content Sidebar Well'),
      'background-image' => t('Background Image')
  ),
);
