<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('Main'),
  'category' => t('Jim Birch'),
  'icon' => 'main.png',
  'theme' => 'panels-main',
  'css' => 'main.css',
  'regions' => array(
      'system-content' => t('System Content'),
      'clear-content' => t('Clear Content'),
      'page-sidebar' => t('Page Sidebar'),
      'main-content' => t('Main Content Well'),
      'content-sidebar' => t('Content Sidebar Well'),
      'background-image' => t('Background Image')
  ),
);
