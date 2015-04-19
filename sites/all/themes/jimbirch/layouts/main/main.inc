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
      'row-1' => t('Row 1'),
      'row-2' => t('Row 2 Alt'),
      'row-3' => t('Row 3 Well')
  ),
);
