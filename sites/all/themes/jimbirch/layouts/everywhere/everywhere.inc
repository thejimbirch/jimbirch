<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('Everywhere'),
  'category' => t('Jim Birch'),
  'icon' => 'everywhere.png',
  'theme' => 'panels-everywhere',
  'css' => 'everywhere.css',
  'regions' => array(
      'header' => t('Header'),
      'system' => t('System'),
      'content' => t('Content'),
      'footer' => t('Footer')
  ),
);
