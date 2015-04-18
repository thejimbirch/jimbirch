<?php
/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('Home'),
  'category' => t('Jim Birch'),
  'icon' => 'home.png',
  'theme' => 'panels-home',
  'css' => 'home.css',
  'regions' => array(
      'row-1' => t('Row 1'),
      'row-2' => t('Row 2'),
      'row-3' => t('Row 3')
  ),
);