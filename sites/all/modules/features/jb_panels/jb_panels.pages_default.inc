<?php

/**
 * @file
 * jb_panels.pages_default.inc
 */

/**
 * Implements hook_default_page_manager_handlers().
 */
function jb_panels_default_page_manager_handlers() {
  $export = array();

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'node_edit__panel_context_384319b8-a0f8-4b70-af56-25833f179708';
  $handler->task = 'node_edit';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Panel',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'name' => '',
    'access' => array(
      'plugins' => array(),
      'logic' => 'and',
    ),
  );
  $display = new panels_display();
  $display->layout = 'main';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'row-1' => NULL,
      'row-2' => NULL,
      'row-3' => NULL,
      'system-content' => NULL,
      'clear-content' => NULL,
      'page-sidebar' => NULL,
      'main-content' => NULL,
      'content-sidebar' => NULL,
      'background-image' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = '5e2735c2-94dd-4dcb-b02e-d94a08ddeb1b';
  $display->storage_type = 'page_manager';
  $display->storage_id = 'node_edit__panel_context_384319b8-a0f8-4b70-af56-25833f179708';
  $display->content = array();
  $display->panels = array();
  $pane = new stdClass();
  $pane->pid = 'new-c8bff1e7-15a9-4ad1-9f55-76c9eac2b07b';
  $pane->panel = 'background-image';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:field_featured_image';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'label' => 'hidden',
    'formatter' => 'makeupimg_infilecss',
    'delta_limit' => 0,
    'delta_offset' => '0',
    'delta_reversed' => FALSE,
    'formatter_settings' => array(
      'default' => array(
        'settings' => array(
          'default-sameas' => '',
          'default-selector' => 'html',
          'default-image_style' => 'background',
          'default-color' => '',
          'default-repeat' => 'no-repeat',
          'default-attachment' => 'fixed',
          'default-horizontal_position' => 'center',
          'default-vertical_position' => 'center',
          'default-important' => 0,
          'default-width' => 0,
          'default-height' => 0,
          'default-img' => 0,
        ),
      ),
    ),
    'context' => 'argument_node_edit_1',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = 'c8bff1e7-15a9-4ad1-9f55-76c9eac2b07b';
  $display->content['new-c8bff1e7-15a9-4ad1-9f55-76c9eac2b07b'] = $pane;
  $display->panels['background-image'][0] = 'new-c8bff1e7-15a9-4ad1-9f55-76c9eac2b07b';
  $pane = new stdClass();
  $pane->pid = 'new-d9e0f944-a0dc-4fa4-beb1-0a152c2aa83f';
  $pane->panel = 'main-content';
  $pane->type = 'form';
  $pane->subtype = 'form';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'context' => 'argument_node_edit_1',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = 'd9e0f944-a0dc-4fa4-beb1-0a152c2aa83f';
  $display->content['new-d9e0f944-a0dc-4fa4-beb1-0a152c2aa83f'] = $pane;
  $display->panels['main-content'][0] = 'new-d9e0f944-a0dc-4fa4-beb1-0a152c2aa83f';
  $pane = new stdClass();
  $pane->pid = 'new-98b27e32-8595-4015-94b1-ff51f1310bdf';
  $pane->panel = 'system-content';
  $pane->type = 'page_tabs';
  $pane->subtype = 'page_tabs';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'type' => 'both',
    'id' => 'tabs',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = '98b27e32-8595-4015-94b1-ff51f1310bdf';
  $display->content['new-98b27e32-8595-4015-94b1-ff51f1310bdf'] = $pane;
  $display->panels['system-content'][0] = 'new-98b27e32-8595-4015-94b1-ff51f1310bdf';
  $pane = new stdClass();
  $pane->pid = 'new-11da0946-e63b-4ca8-ad0a-25e06e49c274';
  $pane->panel = 'system-content';
  $pane->type = 'page_actions';
  $pane->subtype = 'page_actions';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array();
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 1;
  $pane->locks = array();
  $pane->uuid = '11da0946-e63b-4ca8-ad0a-25e06e49c274';
  $display->content['new-11da0946-e63b-4ca8-ad0a-25e06e49c274'] = $pane;
  $display->panels['system-content'][1] = 'new-11da0946-e63b-4ca8-ad0a-25e06e49c274';
  $pane = new stdClass();
  $pane->pid = 'new-7cc409bd-00fc-425d-91ee-c0c453d7f511';
  $pane->panel = 'system-content';
  $pane->type = 'page_help';
  $pane->subtype = 'page_help';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array();
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 2;
  $pane->locks = array();
  $pane->uuid = '7cc409bd-00fc-425d-91ee-c0c453d7f511';
  $display->content['new-7cc409bd-00fc-425d-91ee-c0c453d7f511'] = $pane;
  $display->panels['system-content'][2] = 'new-7cc409bd-00fc-425d-91ee-c0c453d7f511';
  $pane = new stdClass();
  $pane->pid = 'new-3d098742-7658-4cea-8f9b-d7efd9fcdbd1';
  $pane->panel = 'system-content';
  $pane->type = 'page_messages';
  $pane->subtype = 'page_messages';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array();
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 3;
  $pane->locks = array();
  $pane->uuid = '3d098742-7658-4cea-8f9b-d7efd9fcdbd1';
  $display->content['new-3d098742-7658-4cea-8f9b-d7efd9fcdbd1'] = $pane;
  $display->panels['system-content'][3] = 'new-3d098742-7658-4cea-8f9b-d7efd9fcdbd1';
  $pane = new stdClass();
  $pane->pid = 'new-d70e1bac-3c42-4867-a413-74af9c9483f2';
  $pane->panel = 'system-content';
  $pane->type = 'block';
  $pane->subtype = 'system-help';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 4;
  $pane->locks = array();
  $pane->uuid = 'd70e1bac-3c42-4867-a413-74af9c9483f2';
  $display->content['new-d70e1bac-3c42-4867-a413-74af9c9483f2'] = $pane;
  $display->panels['system-content'][4] = 'new-d70e1bac-3c42-4867-a413-74af9c9483f2';
  $pane = new stdClass();
  $pane->pid = 'new-3c156c9d-976e-46c5-8396-e51e0715a1c8';
  $pane->panel = 'system-content';
  $pane->type = 'page_primary_links';
  $pane->subtype = 'page_primary_links';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 5;
  $pane->locks = array();
  $pane->uuid = '3c156c9d-976e-46c5-8396-e51e0715a1c8';
  $display->content['new-3c156c9d-976e-46c5-8396-e51e0715a1c8'] = $pane;
  $display->panels['system-content'][5] = 'new-3c156c9d-976e-46c5-8396-e51e0715a1c8';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $export['node_edit__panel_context_384319b8-a0f8-4b70-af56-25833f179708'] = $handler;

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'node_view__blog';
  $handler->task = 'node_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = -28;
  $handler->conf = array(
    'title' => 'Blog',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => 'no-sidebars page-node- node-type-page not-logged-in html logged-in one-sidebar sidebar-first not-front',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'name' => 'blog',
    'access' => array(
      'plugins' => array(
        0 => array(
          'name' => 'path_visibility',
          'settings' => array(
            'visibility_setting' => '1',
            'paths' => 'blog',
          ),
          'context' => 'empty',
          'not' => FALSE,
        ),
      ),
      'logic' => 'and',
    ),
  );
  $display = new panels_display();
  $display->layout = 'contentarea';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'main-content' => NULL,
      'content-sidebar' => NULL,
      'background-image' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = 'ec6c3e4e-bb38-4e06-a71c-368982c3541b';
  $display->storage_type = 'page_manager';
  $display->storage_id = 'node_view__blog';
  $display->content = array();
  $display->panels = array();
  $pane = new stdClass();
  $pane->pid = 'new-12b8b4c8-b729-42d1-a2da-538336a6365f';
  $pane->panel = 'background-image';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:field_featured_image';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'label' => 'hidden',
    'formatter' => 'makeupimg_inlinecss',
    'delta_limit' => 0,
    'delta_offset' => '0',
    'delta_reversed' => FALSE,
    'formatter_settings' => array(
      'default' => array(
        'settings' => array(
          'default-sameas' => '',
          'default-selector' => 'html',
          'default-image_style' => 'background',
          'default-color' => '',
          'default-repeat' => 'no-repeat',
          'default-attachment' => 'fixed',
          'default-horizontal_position' => 'center',
          'default-vertical_position' => 'bottom',
          'default-important' => 0,
          'default-width' => 0,
          'default-height' => 0,
          'default-img' => 0,
        ),
      ),
    ),
    'context' => 'argument_entity_id:node_1',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = '12b8b4c8-b729-42d1-a2da-538336a6365f';
  $display->content['new-12b8b4c8-b729-42d1-a2da-538336a6365f'] = $pane;
  $display->panels['background-image'][0] = 'new-12b8b4c8-b729-42d1-a2da-538336a6365f';
  $pane = new stdClass();
  $pane->pid = 'new-3ecef2ed-2288-4d3e-a38b-be12e80f1e82';
  $pane->panel = 'main-content';
  $pane->type = 'custom';
  $pane->subtype = 'custom';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'admin_title' => '',
    'title' => '',
    'body' => '<div class="pull-right">Subscribe by <a href="/blog.xml">RSS</a> or <a href="/subscribe">Email</a></div>',
    'format' => 'full_html',
    'substitute' => 1,
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = '3ecef2ed-2288-4d3e-a38b-be12e80f1e82';
  $display->content['new-3ecef2ed-2288-4d3e-a38b-be12e80f1e82'] = $pane;
  $display->panels['main-content'][0] = 'new-3ecef2ed-2288-4d3e-a38b-be12e80f1e82';
  $pane = new stdClass();
  $pane->pid = 'new-09e3d180-b18f-4049-82bf-8cb118204e89';
  $pane->panel = 'main-content';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:title_field';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'label' => 'hidden',
    'formatter' => 'title_linked',
    'delta_limit' => 0,
    'delta_offset' => '0',
    'delta_reversed' => FALSE,
    'formatter_settings' => array(
      'title_style' => 'h1',
      'title_link' => '',
      'title_class' => '',
    ),
    'context' => 'argument_entity_id:node_1',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 1;
  $pane->locks = array();
  $pane->uuid = '09e3d180-b18f-4049-82bf-8cb118204e89';
  $display->content['new-09e3d180-b18f-4049-82bf-8cb118204e89'] = $pane;
  $display->panels['main-content'][1] = 'new-09e3d180-b18f-4049-82bf-8cb118204e89';
  $pane = new stdClass();
  $pane->pid = 'new-33fd7152-fc78-4787-8981-a42fca66d34e';
  $pane->panel = 'main-content';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:body';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'label' => 'hidden',
    'formatter' => 'text_default',
    'delta_limit' => 0,
    'delta_offset' => '0',
    'delta_reversed' => FALSE,
    'formatter_settings' => array(),
    'context' => 'argument_entity_id:node_1',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 2;
  $pane->locks = array();
  $pane->uuid = '33fd7152-fc78-4787-8981-a42fca66d34e';
  $display->content['new-33fd7152-fc78-4787-8981-a42fca66d34e'] = $pane;
  $display->panels['main-content'][2] = 'new-33fd7152-fc78-4787-8981-a42fca66d34e';
  $pane = new stdClass();
  $pane->pid = 'new-e69b3717-5cc3-487e-8d3c-f2808edb5dc1';
  $pane->panel = 'main-content';
  $pane->type = 'entity_field_extra';
  $pane->subtype = 'node:webform';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'view_mode' => 'full',
    'context' => 'argument_entity_id:node_1',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 3;
  $pane->locks = array();
  $pane->uuid = 'e69b3717-5cc3-487e-8d3c-f2808edb5dc1';
  $display->content['new-e69b3717-5cc3-487e-8d3c-f2808edb5dc1'] = $pane;
  $display->panels['main-content'][3] = 'new-e69b3717-5cc3-487e-8d3c-f2808edb5dc1';
  $pane = new stdClass();
  $pane->pid = 'new-7010c68e-5121-4807-9a20-6829ddf1d2df';
  $pane->panel = 'main-content';
  $pane->type = 'views_panes';
  $pane->subtype = 'blog-blog_pane';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array();
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 4;
  $pane->locks = array();
  $pane->uuid = '7010c68e-5121-4807-9a20-6829ddf1d2df';
  $display->content['new-7010c68e-5121-4807-9a20-6829ddf1d2df'] = $pane;
  $display->panels['main-content'][4] = 'new-7010c68e-5121-4807-9a20-6829ddf1d2df';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = 'new-12b8b4c8-b729-42d1-a2da-538336a6365f';
  $handler->conf['display'] = $display;
  $export['node_view__blog'] = $handler;

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'node_view__blog_posts';
  $handler->task = 'node_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = -27;
  $handler->conf = array(
    'title' => 'Blog Posts',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => 'no-sidebars blog-node- node-type-blog not-logged-in html logged-in one-sidebar sidebar-first not-front',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'name' => 'blog_posts',
    'access' => array(
      'plugins' => array(
        0 => array(
          'name' => 'node_type',
          'settings' => array(
            'type' => array(
              'blog_post' => 'blog_post',
            ),
          ),
          'context' => 'argument_entity_id:node_1',
          'not' => FALSE,
        ),
      ),
      'logic' => 'and',
    ),
    'metatag_panels' => array(
      'enabled' => 1,
      'metatags' => array(
        'description' => array(
          'value' => '[node:original:metatag:description]',
        ),
        'itemtype' => array(
          'value' => 'Article',
        ),
        'itemprop:name' => array(
          'value' => '[current-page:title]',
        ),
        'itemprop:description' => array(
          'value' => '[node:original:metatag:description]',
        ),
        'itemprop:image' => array(
          'value' => '[node:field_featured_image]',
        ),
        'og:site_name' => array(
          'value' => 'jimbir.ch',
        ),
        'og:type' => array(
          'value' => 'public_figure',
        ),
        'og:url' => array(
          'value' => '[current-page:url]',
        ),
        'og:title' => array(
          'value' => '[current-page:title]',
        ),
        'og:description' => array(
          'value' => '[node:original:metatag:description]',
        ),
        'og:image' => array(
          'value' => '[node:field_featured_image]',
        ),
        'twitter:card' => array(
          'value' => 'summary_large_image',
        ),
        'twitter:site' => array(
          'value' => '@thejimbirch',
        ),
        'twitter:site:id' => array(
          'value' => '2989027096',
        ),
        'twitter:creator' => array(
          'value' => '@thejimbirch',
        ),
        'twitter:creator:id' => array(
          'value' => '2989027096',
        ),
        'twitter:url' => array(
          'value' => '[current-page:url]',
        ),
        'twitter:title' => array(
          'value' => '[current-page:title]',
        ),
        'twitter:description' => array(
          'value' => '[node:original:metatag:description]',
        ),
        'twitter:image:src' => array(
          'value' => '[node:field_featured_image]',
        ),
      ),
    ),
  );
  $display = new panels_display();
  $display->layout = 'contentarea';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'main-content' => NULL,
      'content-sidebar' => NULL,
      'background-image' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = '80296b9d-360f-4e85-aca7-dbfcc5052432';
  $display->storage_type = 'page_manager';
  $display->storage_id = 'node_view__blog_posts';
  $display->content = array();
  $display->panels = array();
  $pane = new stdClass();
  $pane->pid = 'new-ebd873e0-8ebe-4174-b323-30c11103be4c';
  $pane->panel = 'background-image';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:field_featured_image';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'label' => 'hidden',
    'formatter' => 'makeupimg_inlinecss',
    'delta_limit' => 0,
    'delta_offset' => '0',
    'delta_reversed' => FALSE,
    'formatter_settings' => array(
      'default' => array(
        'settings' => array(
          'default-sameas' => '',
          'default-selector' => 'html',
          'default-image_style' => 'background',
          'default-color' => '',
          'default-repeat' => 'no-repeat',
          'default-attachment' => 'fixed',
          'default-horizontal_position' => 'center',
          'default-vertical_position' => 'bottom',
          'default-important' => 0,
          'default-width' => 0,
          'default-height' => 0,
          'default-img' => 0,
        ),
      ),
    ),
    'context' => 'argument_entity_id:node_1',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = 'ebd873e0-8ebe-4174-b323-30c11103be4c';
  $display->content['new-ebd873e0-8ebe-4174-b323-30c11103be4c'] = $pane;
  $display->panels['background-image'][0] = 'new-ebd873e0-8ebe-4174-b323-30c11103be4c';
  $pane = new stdClass();
  $pane->pid = 'new-8974711e-ec03-4028-8b56-98fcb68f7efc';
  $pane->panel = 'main-content';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:title_field';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'label' => 'hidden',
    'formatter' => 'title_linked',
    'delta_limit' => 0,
    'delta_offset' => '0',
    'delta_reversed' => FALSE,
    'formatter_settings' => array(
      'title_style' => 'h1',
      'title_link' => '',
      'title_class' => '',
    ),
    'context' => 'argument_entity_id:node_1',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = '8974711e-ec03-4028-8b56-98fcb68f7efc';
  $display->content['new-8974711e-ec03-4028-8b56-98fcb68f7efc'] = $pane;
  $display->panels['main-content'][0] = 'new-8974711e-ec03-4028-8b56-98fcb68f7efc';
  $pane = new stdClass();
  $pane->pid = 'new-68ce08f2-be86-4344-8d86-20b84e6abb94';
  $pane->panel = 'main-content';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:body';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'label' => 'hidden',
    'formatter' => 'text_default',
    'delta_limit' => 0,
    'delta_offset' => '0',
    'delta_reversed' => FALSE,
    'formatter_settings' => array(),
    'context' => 'argument_entity_id:node_1',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 1;
  $pane->locks = array();
  $pane->uuid = '68ce08f2-be86-4344-8d86-20b84e6abb94';
  $display->content['new-68ce08f2-be86-4344-8d86-20b84e6abb94'] = $pane;
  $display->panels['main-content'][1] = 'new-68ce08f2-be86-4344-8d86-20b84e6abb94';
  $pane = new stdClass();
  $pane->pid = 'new-b6f5fcbc-b6e2-45be-a203-9d1e0947c57b';
  $pane->panel = 'main-content';
  $pane->type = 'block';
  $pane->subtype = 'disqus-disqus_comments';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 2;
  $pane->locks = array();
  $pane->uuid = 'b6f5fcbc-b6e2-45be-a203-9d1e0947c57b';
  $display->content['new-b6f5fcbc-b6e2-45be-a203-9d1e0947c57b'] = $pane;
  $display->panels['main-content'][2] = 'new-b6f5fcbc-b6e2-45be-a203-9d1e0947c57b';
  $pane = new stdClass();
  $pane->pid = 'new-d365c405-86c2-4bcc-8755-fab1973a654f';
  $pane->panel = 'main-content';
  $pane->type = 'entity_field_extra';
  $pane->subtype = 'node:webform';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'view_mode' => 'full',
    'context' => 'argument_entity_id:node_1',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 3;
  $pane->locks = array();
  $pane->uuid = 'd365c405-86c2-4bcc-8755-fab1973a654f';
  $display->content['new-d365c405-86c2-4bcc-8755-fab1973a654f'] = $pane;
  $display->panels['main-content'][3] = 'new-d365c405-86c2-4bcc-8755-fab1973a654f';
  $pane = new stdClass();
  $pane->pid = 'new-34f6adb7-682c-4be0-89d2-f63f8c949c77';
  $pane->panel = 'main-content';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:field_new_field';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'label' => 'hidden',
    'formatter' => 'title_linked',
    'delta_limit' => 0,
    'delta_offset' => '0',
    'delta_reversed' => FALSE,
    'formatter_settings' => array(
      'title_style' => 'div',
      'title_link' => '',
      'title_class' => '',
    ),
    'context' => 'argument_entity_id:node_1',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 4;
  $pane->locks = array();
  $pane->uuid = '34f6adb7-682c-4be0-89d2-f63f8c949c77';
  $display->content['new-34f6adb7-682c-4be0-89d2-f63f8c949c77'] = $pane;
  $display->panels['main-content'][4] = 'new-34f6adb7-682c-4be0-89d2-f63f8c949c77';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = 'new-ebd873e0-8ebe-4174-b323-30c11103be4c';
  $handler->conf['display'] = $display;
  $export['node_view__blog_posts'] = $handler;

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'node_view__page';
  $handler->task = 'node_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = -29;
  $handler->conf = array(
    'title' => 'Page',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => 'no-sidebars page-node- node-type-page not-logged-in html logged-in one-sidebar sidebar-first not-front',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'name' => 'page',
    'access' => array(
      'logic' => 'and',
      'plugins' => array(
        0 => array(
          'name' => 'path_visibility',
          'settings' => array(
            'visibility_setting' => '1',
            'paths' => 'blog
thejimbirch',
          ),
          'context' => 'empty',
          'not' => TRUE,
        ),
        2 => array(
          'name' => 'node_type',
          'settings' => array(
            'type' => array(
              'page' => 'page',
            ),
          ),
          'context' => 'argument_entity_id:node_1',
          'not' => FALSE,
        ),
      ),
    ),
  );
  $display = new panels_display();
  $display->layout = 'contentarea';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'system-content' => NULL,
      'clear-content' => NULL,
      'page-sidebar' => NULL,
      'main-content' => NULL,
      'content-sidebar' => NULL,
      'background-image' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = 'e2b54d76-7b2e-46b8-81ce-649e3800142a';
  $display->storage_type = 'page_manager';
  $display->storage_id = 'node_view__page';
  $display->content = array();
  $display->panels = array();
  $pane = new stdClass();
  $pane->pid = 'new-a8375cc5-e6cf-4ae5-ba14-f76fb2c5d152';
  $pane->panel = 'background-image';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:field_featured_image';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'label' => 'hidden',
    'formatter' => 'makeupimg_inlinecss',
    'delta_limit' => 0,
    'delta_offset' => '0',
    'delta_reversed' => FALSE,
    'formatter_settings' => array(
      'default' => array(
        'settings' => array(
          'default-sameas' => '',
          'default-selector' => 'html',
          'default-image_style' => 'background',
          'default-color' => '',
          'default-repeat' => 'no-repeat',
          'default-attachment' => 'fixed',
          'default-horizontal_position' => 'center',
          'default-vertical_position' => 'bottom',
          'default-important' => 0,
          'default-width' => 0,
          'default-height' => 0,
          'default-img' => 0,
        ),
      ),
    ),
    'context' => 'argument_entity_id:node_1',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = 'a8375cc5-e6cf-4ae5-ba14-f76fb2c5d152';
  $display->content['new-a8375cc5-e6cf-4ae5-ba14-f76fb2c5d152'] = $pane;
  $display->panels['background-image'][0] = 'new-a8375cc5-e6cf-4ae5-ba14-f76fb2c5d152';
  $pane = new stdClass();
  $pane->pid = 'new-4f405d21-f744-419a-ad05-eaaa0d675e81';
  $pane->panel = 'main-content';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:title_field';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'label' => 'hidden',
    'formatter' => 'title_linked',
    'delta_limit' => 0,
    'delta_offset' => '0',
    'delta_reversed' => FALSE,
    'formatter_settings' => array(
      'title_style' => 'h1',
      'title_link' => '',
      'title_class' => '',
    ),
    'context' => 'argument_entity_id:node_1',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = '4f405d21-f744-419a-ad05-eaaa0d675e81';
  $display->content['new-4f405d21-f744-419a-ad05-eaaa0d675e81'] = $pane;
  $display->panels['main-content'][0] = 'new-4f405d21-f744-419a-ad05-eaaa0d675e81';
  $pane = new stdClass();
  $pane->pid = 'new-1430f6ec-5c32-4231-9185-4780c79e64fc';
  $pane->panel = 'main-content';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:body';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'label' => 'hidden',
    'formatter' => 'text_default',
    'delta_limit' => 0,
    'delta_offset' => '0',
    'delta_reversed' => FALSE,
    'formatter_settings' => array(),
    'context' => 'argument_entity_id:node_1',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 1;
  $pane->locks = array();
  $pane->uuid = '1430f6ec-5c32-4231-9185-4780c79e64fc';
  $display->content['new-1430f6ec-5c32-4231-9185-4780c79e64fc'] = $pane;
  $display->panels['main-content'][1] = 'new-1430f6ec-5c32-4231-9185-4780c79e64fc';
  $pane = new stdClass();
  $pane->pid = 'new-e99e7e9e-56f2-4f64-9465-bb6bf689aeeb';
  $pane->panel = 'main-content';
  $pane->type = 'entity_field_extra';
  $pane->subtype = 'node:webform';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'view_mode' => 'full',
    'context' => 'argument_entity_id:node_1',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 2;
  $pane->locks = array();
  $pane->uuid = 'e99e7e9e-56f2-4f64-9465-bb6bf689aeeb';
  $display->content['new-e99e7e9e-56f2-4f64-9465-bb6bf689aeeb'] = $pane;
  $display->panels['main-content'][2] = 'new-e99e7e9e-56f2-4f64-9465-bb6bf689aeeb';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = 'new-4f405d21-f744-419a-ad05-eaaa0d675e81';
  $handler->conf['display'] = $display;
  $export['node_view__page'] = $handler;

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'node_view__twitter';
  $handler->task = 'node_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = -26;
  $handler->conf = array(
    'title' => 'Twitter',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => 'no-sidebars page-node- node-type-page not-logged-in html logged-in one-sidebar sidebar-first not-front',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'name' => 'twitter',
    'access' => array(
      'plugins' => array(
        0 => array(
          'name' => 'path_visibility',
          'settings' => array(
            'visibility_setting' => '1',
            'paths' => 'thejimbirch',
          ),
          'context' => 'empty',
          'not' => FALSE,
        ),
      ),
      'logic' => 'and',
    ),
  );
  $display = new panels_display();
  $display->layout = 'contentarea';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'center' => NULL,
      'main-content' => NULL,
      'content-sidebar' => NULL,
      'background-image' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = 'b73589ee-d43f-469d-8f30-b29b1c823485';
  $display->storage_type = 'page_manager';
  $display->storage_id = 'node_view__twitter';
  $display->content = array();
  $display->panels = array();
  $pane = new stdClass();
  $pane->pid = 'new-cb982d25-8f48-458d-806b-28c493d3cb66';
  $pane->panel = 'background-image';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:field_featured_image';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'label' => 'hidden',
    'formatter' => 'makeupimg_inlinecss',
    'delta_limit' => 0,
    'delta_offset' => '0',
    'delta_reversed' => FALSE,
    'formatter_settings' => array(
      'default' => array(
        'settings' => array(
          'default-sameas' => '',
          'default-selector' => 'html',
          'default-image_style' => 'background',
          'default-color' => '',
          'default-repeat' => 'no-repeat',
          'default-attachment' => 'fixed',
          'default-horizontal_position' => 'center',
          'default-vertical_position' => 'bottom',
          'default-important' => 0,
          'default-width' => 0,
          'default-height' => 0,
          'default-img' => 0,
        ),
      ),
    ),
    'context' => 'argument_entity_id:node_1',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = 'cb982d25-8f48-458d-806b-28c493d3cb66';
  $display->content['new-cb982d25-8f48-458d-806b-28c493d3cb66'] = $pane;
  $display->panels['background-image'][0] = 'new-cb982d25-8f48-458d-806b-28c493d3cb66';
  $pane = new stdClass();
  $pane->pid = 'new-9cff011b-9933-4e46-aaa6-4e58e30f872b';
  $pane->panel = 'main-content';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:title_field';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'label' => 'hidden',
    'formatter' => 'title_linked',
    'delta_limit' => 0,
    'delta_offset' => '0',
    'delta_reversed' => FALSE,
    'formatter_settings' => array(
      'title_style' => 'h1',
      'title_link' => '',
      'title_class' => '',
    ),
    'context' => 'argument_entity_id:node_1',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = '9cff011b-9933-4e46-aaa6-4e58e30f872b';
  $display->content['new-9cff011b-9933-4e46-aaa6-4e58e30f872b'] = $pane;
  $display->panels['main-content'][0] = 'new-9cff011b-9933-4e46-aaa6-4e58e30f872b';
  $pane = new stdClass();
  $pane->pid = 'new-772c4ecb-48ef-4062-812b-0326d189ccf1';
  $pane->panel = 'main-content';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:body';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'label' => 'hidden',
    'formatter' => 'text_default',
    'delta_limit' => 0,
    'delta_offset' => '0',
    'delta_reversed' => FALSE,
    'formatter_settings' => array(),
    'context' => 'argument_entity_id:node_1',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 1;
  $pane->locks = array();
  $pane->uuid = '772c4ecb-48ef-4062-812b-0326d189ccf1';
  $display->content['new-772c4ecb-48ef-4062-812b-0326d189ccf1'] = $pane;
  $display->panels['main-content'][1] = 'new-772c4ecb-48ef-4062-812b-0326d189ccf1';
  $pane = new stdClass();
  $pane->pid = 'new-93b351cc-5e12-4d0d-aeb3-d27aa8de6fd3';
  $pane->panel = 'main-content';
  $pane->type = 'entity_field_extra';
  $pane->subtype = 'node:webform';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'view_mode' => 'full',
    'context' => 'argument_entity_id:node_1',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 2;
  $pane->locks = array();
  $pane->uuid = '93b351cc-5e12-4d0d-aeb3-d27aa8de6fd3';
  $display->content['new-93b351cc-5e12-4d0d-aeb3-d27aa8de6fd3'] = $pane;
  $display->panels['main-content'][2] = 'new-93b351cc-5e12-4d0d-aeb3-d27aa8de6fd3';
  $pane = new stdClass();
  $pane->pid = 'new-c6f318e8-4d0b-4655-9771-772f458c9d74';
  $pane->panel = 'main-content';
  $pane->type = 'views_panes';
  $pane->subtype = 'twitter_view-twitter_pane';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array();
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 3;
  $pane->locks = array();
  $pane->uuid = 'c6f318e8-4d0b-4655-9771-772f458c9d74';
  $display->content['new-c6f318e8-4d0b-4655-9771-772f458c9d74'] = $pane;
  $display->panels['main-content'][3] = 'new-c6f318e8-4d0b-4655-9771-772f458c9d74';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $export['node_view__twitter'] = $handler;

  $handler = new stdClass();
  $handler->disabled = TRUE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'node_view_panelizer';
  $handler->task = 'node_view';
  $handler->subtask = '';
  $handler->handler = 'panelizer_node';
  $handler->weight = -30;
  $handler->conf = array(
    'title' => 'Node panelizer',
    'context' => 'argument_entity_id:node_1',
    'access' => array(),
    'panels_everywhere_site_template' => 'site_template__default',
  );
  $export['node_view_panelizer'] = $handler;

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'pm_existing_pages_node_add__panel_context_b7c9f387-87d7-43ef-94cd-5f93f6438db3';
  $handler->task = 'pm_existing_pages';
  $handler->subtask = 'node_add';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Panel',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => 'no-sidebars page-node- node-type-page not-logged-in not-front html',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'name' => '',
  );
  $display = new panels_display();
  $display->layout = 'main';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'center' => NULL,
      'system-content' => NULL,
      'clear-content' => NULL,
      'page-sidebar' => NULL,
      'main-content' => NULL,
      'content-sidebar' => NULL,
      'background-image' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = 'c005ac09-e49c-4d9e-8099-04ceb553f67e';
  $display->storage_type = 'page_manager';
  $display->storage_id = 'pm_existing_pages_node_add__panel_context_b7c9f387-87d7-43ef-94cd-5f93f6438db3';
  $display->content = array();
  $display->panels = array();
  $pane = new stdClass();
  $pane->pid = 'new-c6257115-da2d-4b78-8abe-f9815fc19740';
  $pane->panel = 'main-content';
  $pane->type = 'page_title';
  $pane->subtype = 'page_title';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'markup' => 'h1',
    'class' => '',
    'id' => '',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = 'c6257115-da2d-4b78-8abe-f9815fc19740';
  $display->content['new-c6257115-da2d-4b78-8abe-f9815fc19740'] = $pane;
  $display->panels['main-content'][0] = 'new-c6257115-da2d-4b78-8abe-f9815fc19740';
  $pane = new stdClass();
  $pane->pid = 'new-7481f92f-e4e4-4afe-b18b-59e31ab47d4d';
  $pane->panel = 'main-content';
  $pane->type = 'pm_existing_pages';
  $pane->subtype = 'pm_existing_pages';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    0 => 'task_id',
    'task_id' => 'node_add',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 1;
  $pane->locks = array();
  $pane->uuid = '7481f92f-e4e4-4afe-b18b-59e31ab47d4d';
  $display->content['new-7481f92f-e4e4-4afe-b18b-59e31ab47d4d'] = $pane;
  $display->panels['main-content'][1] = 'new-7481f92f-e4e4-4afe-b18b-59e31ab47d4d';
  $pane = new stdClass();
  $pane->pid = 'new-26c2c49e-2657-46e5-864c-41e4cb1439c3';
  $pane->panel = 'system-content';
  $pane->type = 'page_tabs';
  $pane->subtype = 'page_tabs';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'type' => 'both',
    'id' => 'tabs',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = '26c2c49e-2657-46e5-864c-41e4cb1439c3';
  $display->content['new-26c2c49e-2657-46e5-864c-41e4cb1439c3'] = $pane;
  $display->panels['system-content'][0] = 'new-26c2c49e-2657-46e5-864c-41e4cb1439c3';
  $pane = new stdClass();
  $pane->pid = 'new-12aba0f8-5911-4a69-96c7-e472e756ceb2';
  $pane->panel = 'system-content';
  $pane->type = 'page_actions';
  $pane->subtype = 'page_actions';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array();
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 1;
  $pane->locks = array();
  $pane->uuid = '12aba0f8-5911-4a69-96c7-e472e756ceb2';
  $display->content['new-12aba0f8-5911-4a69-96c7-e472e756ceb2'] = $pane;
  $display->panels['system-content'][1] = 'new-12aba0f8-5911-4a69-96c7-e472e756ceb2';
  $pane = new stdClass();
  $pane->pid = 'new-cfd7a720-4925-47e6-ac66-c5fc7fe58ec2';
  $pane->panel = 'system-content';
  $pane->type = 'page_help';
  $pane->subtype = 'page_help';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array();
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 2;
  $pane->locks = array();
  $pane->uuid = 'cfd7a720-4925-47e6-ac66-c5fc7fe58ec2';
  $display->content['new-cfd7a720-4925-47e6-ac66-c5fc7fe58ec2'] = $pane;
  $display->panels['system-content'][2] = 'new-cfd7a720-4925-47e6-ac66-c5fc7fe58ec2';
  $pane = new stdClass();
  $pane->pid = 'new-12c02b26-7bfd-4a64-b4f3-ad8ce5015b83';
  $pane->panel = 'system-content';
  $pane->type = 'page_messages';
  $pane->subtype = 'page_messages';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array();
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 3;
  $pane->locks = array();
  $pane->uuid = '12c02b26-7bfd-4a64-b4f3-ad8ce5015b83';
  $display->content['new-12c02b26-7bfd-4a64-b4f3-ad8ce5015b83'] = $pane;
  $display->panels['system-content'][3] = 'new-12c02b26-7bfd-4a64-b4f3-ad8ce5015b83';
  $pane = new stdClass();
  $pane->pid = 'new-468f2423-24e9-4b7a-b0de-1727f397bafb';
  $pane->panel = 'system-content';
  $pane->type = 'block';
  $pane->subtype = 'system-help';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 4;
  $pane->locks = array();
  $pane->uuid = '468f2423-24e9-4b7a-b0de-1727f397bafb';
  $display->content['new-468f2423-24e9-4b7a-b0de-1727f397bafb'] = $pane;
  $display->panels['system-content'][4] = 'new-468f2423-24e9-4b7a-b0de-1727f397bafb';
  $pane = new stdClass();
  $pane->pid = 'new-10ae3efe-33dd-495f-8a50-4ccebab0eb49';
  $pane->panel = 'system-content';
  $pane->type = 'page_primary_links';
  $pane->subtype = 'page_primary_links';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 5;
  $pane->locks = array();
  $pane->uuid = '10ae3efe-33dd-495f-8a50-4ccebab0eb49';
  $display->content['new-10ae3efe-33dd-495f-8a50-4ccebab0eb49'] = $pane;
  $display->panels['system-content'][5] = 'new-10ae3efe-33dd-495f-8a50-4ccebab0eb49';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $export['pm_existing_pages_node_add__panel_context_b7c9f387-87d7-43ef-94cd-5f93f6438db3'] = $handler;

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'pm_existing_pages_node_webform__panel_context_e83c4c65-01b7-44c5-b6e8-b3ed2ffe20ec';
  $handler->task = 'pm_existing_pages';
  $handler->subtask = 'node_webform';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Panel',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => 'no-sidebars page-node- node-type-page not-logged-in not-front html',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'name' => '',
  );
  $display = new panels_display();
  $display->layout = 'main';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'system-content' => NULL,
      'clear-content' => NULL,
      'page-sidebar' => NULL,
      'main-content' => NULL,
      'content-sidebar' => NULL,
      'background-image' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = 'f0628dbf-9078-46b8-addb-c34350f6d31b';
  $display->storage_type = 'page_manager';
  $display->storage_id = 'pm_existing_pages_node_webform__panel_context_e83c4c65-01b7-44c5-b6e8-b3ed2ffe20ec';
  $display->content = array();
  $display->panels = array();
  $pane = new stdClass();
  $pane->pid = 'new-e324f17e-ecbe-4019-b2f4-6a3fd03c9fe3';
  $pane->panel = 'main-content';
  $pane->type = 'pm_existing_pages';
  $pane->subtype = 'pm_existing_pages';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    0 => 'task_id',
    'task_id' => 'node_webform',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = 'e324f17e-ecbe-4019-b2f4-6a3fd03c9fe3';
  $display->content['new-e324f17e-ecbe-4019-b2f4-6a3fd03c9fe3'] = $pane;
  $display->panels['main-content'][0] = 'new-e324f17e-ecbe-4019-b2f4-6a3fd03c9fe3';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = 'new-e324f17e-ecbe-4019-b2f4-6a3fd03c9fe3';
  $handler->conf['display'] = $display;
  $export['pm_existing_pages_node_webform__panel_context_e83c4c65-01b7-44c5-b6e8-b3ed2ffe20ec'] = $handler;

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'pm_existing_pages_style_guide__panel_context_7529e05a-1810-4a39-a3dc-cf958f22c42a';
  $handler->task = 'pm_existing_pages';
  $handler->subtask = 'style_guide';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Panel',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => 'html not-front logged-in no-sidebars',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'name' => '',
  );
  $display = new panels_display();
  $display->layout = 'main';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'system-content' => NULL,
      'clear-content' => NULL,
      'page-sidebar' => NULL,
      'main-content' => NULL,
      'content-sidebar' => NULL,
      'background-image' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = 'bdba041a-aeb3-4dd9-ab1e-6be831931e13';
  $display->storage_type = 'page_manager';
  $display->storage_id = 'pm_existing_pages_style_guide__panel_context_7529e05a-1810-4a39-a3dc-cf958f22c42a';
  $display->content = array();
  $display->panels = array();
  $pane = new stdClass();
  $pane->pid = 'new-f072c8b6-b0f6-4771-9b30-c058502d5a8f';
  $pane->panel = 'main-content';
  $pane->type = 'pm_existing_pages';
  $pane->subtype = 'pm_existing_pages';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    0 => 'task_id',
    'task_id' => 'style_guide',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = 'f072c8b6-b0f6-4771-9b30-c058502d5a8f';
  $display->content['new-f072c8b6-b0f6-4771-9b30-c058502d5a8f'] = $pane;
  $display->panels['main-content'][0] = 'new-f072c8b6-b0f6-4771-9b30-c058502d5a8f';
  $pane = new stdClass();
  $pane->pid = 'new-037b805c-445e-4ade-bd6c-48921f8cf544';
  $pane->panel = 'system-content';
  $pane->type = 'page_tabs';
  $pane->subtype = 'page_tabs';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'type' => 'both',
    'id' => 'tabs',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = '037b805c-445e-4ade-bd6c-48921f8cf544';
  $display->content['new-037b805c-445e-4ade-bd6c-48921f8cf544'] = $pane;
  $display->panels['system-content'][0] = 'new-037b805c-445e-4ade-bd6c-48921f8cf544';
  $pane = new stdClass();
  $pane->pid = 'new-dda67648-299a-4de0-8c5e-46dcec27b8dc';
  $pane->panel = 'system-content';
  $pane->type = 'page_actions';
  $pane->subtype = 'page_actions';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array();
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 1;
  $pane->locks = array();
  $pane->uuid = 'dda67648-299a-4de0-8c5e-46dcec27b8dc';
  $display->content['new-dda67648-299a-4de0-8c5e-46dcec27b8dc'] = $pane;
  $display->panels['system-content'][1] = 'new-dda67648-299a-4de0-8c5e-46dcec27b8dc';
  $pane = new stdClass();
  $pane->pid = 'new-c32c3375-262f-47e5-a992-acb03f02ded2';
  $pane->panel = 'system-content';
  $pane->type = 'page_help';
  $pane->subtype = 'page_help';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array();
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 2;
  $pane->locks = array();
  $pane->uuid = 'c32c3375-262f-47e5-a992-acb03f02ded2';
  $display->content['new-c32c3375-262f-47e5-a992-acb03f02ded2'] = $pane;
  $display->panels['system-content'][2] = 'new-c32c3375-262f-47e5-a992-acb03f02ded2';
  $pane = new stdClass();
  $pane->pid = 'new-6d33c77b-a4fb-4838-8628-095a166855b6';
  $pane->panel = 'system-content';
  $pane->type = 'page_messages';
  $pane->subtype = 'page_messages';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array();
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 3;
  $pane->locks = array();
  $pane->uuid = '6d33c77b-a4fb-4838-8628-095a166855b6';
  $display->content['new-6d33c77b-a4fb-4838-8628-095a166855b6'] = $pane;
  $display->panels['system-content'][3] = 'new-6d33c77b-a4fb-4838-8628-095a166855b6';
  $pane = new stdClass();
  $pane->pid = 'new-5e51acf9-b812-4ce9-b34e-49ffa232886f';
  $pane->panel = 'system-content';
  $pane->type = 'block';
  $pane->subtype = 'system-help';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 4;
  $pane->locks = array();
  $pane->uuid = '5e51acf9-b812-4ce9-b34e-49ffa232886f';
  $display->content['new-5e51acf9-b812-4ce9-b34e-49ffa232886f'] = $pane;
  $display->panels['system-content'][4] = 'new-5e51acf9-b812-4ce9-b34e-49ffa232886f';
  $pane = new stdClass();
  $pane->pid = 'new-df229f5e-bcd2-4d1c-b2b9-7a5d06359198';
  $pane->panel = 'system-content';
  $pane->type = 'page_primary_links';
  $pane->subtype = 'page_primary_links';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 5;
  $pane->locks = array();
  $pane->uuid = 'df229f5e-bcd2-4d1c-b2b9-7a5d06359198';
  $display->content['new-df229f5e-bcd2-4d1c-b2b9-7a5d06359198'] = $pane;
  $display->panels['system-content'][5] = 'new-df229f5e-bcd2-4d1c-b2b9-7a5d06359198';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $export['pm_existing_pages_style_guide__panel_context_7529e05a-1810-4a39-a3dc-cf958f22c42a'] = $handler;

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'site_template__default';
  $handler->task = 'site_template';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Default',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => 'no-sidebars page-node- node-type-page not-logged-in html logged-in one-sidebar sidebar-first not-front',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'name' => 'default',
    'access' => array(
      'logic' => 'or',
    ),
  );
  $display = new panels_display();
  $display->layout = 'everywhere';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'system-content' => NULL,
      'clear-content' => NULL,
      'page-sidebar' => NULL,
      'main-content' => NULL,
      'content-sidebar' => NULL,
      'background-image' => NULL,
      'header' => NULL,
      'system' => NULL,
      'content' => NULL,
      'footer' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = 'e1977b8b-aa06-47a5-883a-10e30a25b5a5';
  $display->storage_type = 'page_manager';
  $display->storage_id = 'site_template__default';
  $display->content = array();
  $display->panels = array();
  $pane = new stdClass();
  $pane->pid = 'new-989133a8-b58f-47c3-9909-c59f8e52c17a';
  $pane->panel = 'content';
  $pane->type = 'page_content';
  $pane->subtype = 'page_content';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'context' => 'argument_page_content_1',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = '989133a8-b58f-47c3-9909-c59f8e52c17a';
  $display->content['new-989133a8-b58f-47c3-9909-c59f8e52c17a'] = $pane;
  $display->panels['content'][0] = 'new-989133a8-b58f-47c3-9909-c59f8e52c17a';
  $pane = new stdClass();
  $pane->pid = 'new-bb9a79e9-225e-4a9e-9bdb-8d8747db14e5';
  $pane->panel = 'header';
  $pane->type = 'page_primary_links';
  $pane->subtype = 'page_primary_links';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = 'bb9a79e9-225e-4a9e-9bdb-8d8747db14e5';
  $display->content['new-bb9a79e9-225e-4a9e-9bdb-8d8747db14e5'] = $pane;
  $display->panels['header'][0] = 'new-bb9a79e9-225e-4a9e-9bdb-8d8747db14e5';
  $pane = new stdClass();
  $pane->pid = 'new-d973d61c-c13a-49eb-b51c-f41a49163633';
  $pane->panel = 'system';
  $pane->type = 'pane_messages';
  $pane->subtype = 'pane_messages';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array();
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = 'd973d61c-c13a-49eb-b51c-f41a49163633';
  $display->content['new-d973d61c-c13a-49eb-b51c-f41a49163633'] = $pane;
  $display->panels['system'][0] = 'new-d973d61c-c13a-49eb-b51c-f41a49163633';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $export['site_template__default'] = $handler;

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'user_edit__panel_context_5af2862e-097d-41bc-bf8c-a5a31116c9a8';
  $handler->task = 'user_edit';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Panel',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => 'html not-front logged-in no-sidebars page-user- page-user-edit',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'name' => '',
  );
  $display = new panels_display();
  $display->layout = 'main';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'system-content' => NULL,
      'clear-content' => NULL,
      'page-sidebar' => NULL,
      'main-content' => NULL,
      'content-sidebar' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = '561f9f53-9a75-4628-afe1-f98eed3b0d47';
  $display->storage_type = 'page_manager';
  $display->storage_id = 'user_edit__panel_context_5af2862e-097d-41bc-bf8c-a5a31116c9a8';
  $display->content = array();
  $display->panels = array();
  $pane = new stdClass();
  $pane->pid = 'new-9e9da417-1083-4f6c-94c2-7f5114be8761';
  $pane->panel = 'clear-content';
  $pane->type = 'page_primary_links';
  $pane->subtype = 'page_primary_links';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = '9e9da417-1083-4f6c-94c2-7f5114be8761';
  $display->content['new-9e9da417-1083-4f6c-94c2-7f5114be8761'] = $pane;
  $display->panels['clear-content'][0] = 'new-9e9da417-1083-4f6c-94c2-7f5114be8761';
  $pane = new stdClass();
  $pane->pid = 'new-ca3d3bf5-01e5-4bb5-8765-23f30f0bd308';
  $pane->panel = 'main-content';
  $pane->type = 'form';
  $pane->subtype = 'form';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'context' => 'argument_user_edit_1',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = 'ca3d3bf5-01e5-4bb5-8765-23f30f0bd308';
  $display->content['new-ca3d3bf5-01e5-4bb5-8765-23f30f0bd308'] = $pane;
  $display->panels['main-content'][0] = 'new-ca3d3bf5-01e5-4bb5-8765-23f30f0bd308';
  $pane = new stdClass();
  $pane->pid = 'new-118930fc-3e4c-428e-a608-a3a300f7ae87';
  $pane->panel = 'system-content';
  $pane->type = 'page_tabs';
  $pane->subtype = 'page_tabs';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'type' => 'both',
    'id' => '',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = '118930fc-3e4c-428e-a608-a3a300f7ae87';
  $display->content['new-118930fc-3e4c-428e-a608-a3a300f7ae87'] = $pane;
  $display->panels['system-content'][0] = 'new-118930fc-3e4c-428e-a608-a3a300f7ae87';
  $pane = new stdClass();
  $pane->pid = 'new-4d8c09b3-d0ef-4391-93ed-8935f8092dc5';
  $pane->panel = 'system-content';
  $pane->type = 'page_actions';
  $pane->subtype = 'page_actions';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array();
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 1;
  $pane->locks = array();
  $pane->uuid = '4d8c09b3-d0ef-4391-93ed-8935f8092dc5';
  $display->content['new-4d8c09b3-d0ef-4391-93ed-8935f8092dc5'] = $pane;
  $display->panels['system-content'][1] = 'new-4d8c09b3-d0ef-4391-93ed-8935f8092dc5';
  $pane = new stdClass();
  $pane->pid = 'new-3a74932b-4f49-45ef-9dd7-9a56caffc97c';
  $pane->panel = 'system-content';
  $pane->type = 'page_help';
  $pane->subtype = 'page_help';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array();
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 2;
  $pane->locks = array();
  $pane->uuid = '3a74932b-4f49-45ef-9dd7-9a56caffc97c';
  $display->content['new-3a74932b-4f49-45ef-9dd7-9a56caffc97c'] = $pane;
  $display->panels['system-content'][2] = 'new-3a74932b-4f49-45ef-9dd7-9a56caffc97c';
  $pane = new stdClass();
  $pane->pid = 'new-fd092727-8051-4830-b573-eecfb31bf7d2';
  $pane->panel = 'system-content';
  $pane->type = 'page_messages';
  $pane->subtype = 'page_messages';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array();
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 3;
  $pane->locks = array();
  $pane->uuid = 'fd092727-8051-4830-b573-eecfb31bf7d2';
  $display->content['new-fd092727-8051-4830-b573-eecfb31bf7d2'] = $pane;
  $display->panels['system-content'][3] = 'new-fd092727-8051-4830-b573-eecfb31bf7d2';
  $pane = new stdClass();
  $pane->pid = 'new-0fadec01-d65b-4f3c-8b3f-a36e19932613';
  $pane->panel = 'system-content';
  $pane->type = 'block';
  $pane->subtype = 'system-help';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 4;
  $pane->locks = array();
  $pane->uuid = '0fadec01-d65b-4f3c-8b3f-a36e19932613';
  $display->content['new-0fadec01-d65b-4f3c-8b3f-a36e19932613'] = $pane;
  $display->panels['system-content'][4] = 'new-0fadec01-d65b-4f3c-8b3f-a36e19932613';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = 'new-ca3d3bf5-01e5-4bb5-8765-23f30f0bd308';
  $handler->conf['display'] = $display;
  $export['user_edit__panel_context_5af2862e-097d-41bc-bf8c-a5a31116c9a8'] = $handler;

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'user_login__panel_context_3341e085-1275-4404-a471-0c63715b9a24';
  $handler->task = 'user_login';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Panel',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => 'html not-front logged-in no-sidebars page-user- page-user-edit',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'name' => '',
    'metatag_panels' => array(
      'enabled' => 1,
      'metatags' => array(),
    ),
  );
  $display = new panels_display();
  $display->layout = 'contentarea';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'system-content' => NULL,
      'clear-content' => NULL,
      'page-sidebar' => NULL,
      'main-content' => NULL,
      'content-sidebar' => NULL,
      'background-image' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = '2e3b3573-0cc8-4236-8483-692b51b9abd2';
  $display->storage_type = 'page_manager';
  $display->storage_id = 'user_login__panel_context_3341e085-1275-4404-a471-0c63715b9a24';
  $display->content = array();
  $display->panels = array();
  $pane = new stdClass();
  $pane->pid = 'new-d15820fe-ecee-4198-8ba6-5d1074fc7c41';
  $pane->panel = 'main-content';
  $pane->type = 'user_login_form';
  $pane->subtype = 'user_login_form';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'override_title' => 1,
    'override_title_heading' => 'h2',
    'form_build_id' => 'form-BrADqJt0aD-U2uAkB9wSjHsPM7rHTNqOYlfGOVKge6M',
    'form_token' => 'P7tLvTjXlEUN5ckxLPsBavWOWXzYl65AN3pwzCqyyLc',
    'form_id' => 'ctools_user_login_form_content_type_edit_form',
    'override_title_text' => '',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = 'd15820fe-ecee-4198-8ba6-5d1074fc7c41';
  $display->content['new-d15820fe-ecee-4198-8ba6-5d1074fc7c41'] = $pane;
  $display->panels['main-content'][0] = 'new-d15820fe-ecee-4198-8ba6-5d1074fc7c41';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $export['user_login__panel_context_3341e085-1275-4404-a471-0c63715b9a24'] = $handler;

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'user_password__panel_context_a9203783-3d49-4084-8839-d30206f7f83a';
  $handler->task = 'user_password';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Panel',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => 'html not-front logged-in no-sidebars page-user- page-user-edit',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'name' => '',
  );
  $display = new panels_display();
  $display->layout = 'contentarea';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'system-content' => NULL,
      'clear-content' => NULL,
      'page-sidebar' => NULL,
      'main-content' => NULL,
      'content-sidebar' => NULL,
      'background-image' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = '2e9ae477-68f7-4f6c-8d70-aef3944426eb';
  $display->storage_type = 'page_manager';
  $display->storage_id = 'user_password__panel_context_a9203783-3d49-4084-8839-d30206f7f83a';
  $display->content = array();
  $display->panels = array();
  $pane = new stdClass();
  $pane->pid = 'new-f73387fb-4216-4863-b1b8-1cc585730388';
  $pane->panel = 'main-content';
  $pane->type = 'user_password_form';
  $pane->subtype = 'user_password_form';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'override_title' => 1,
    'override_title_heading' => 'h2',
    'form_build_id' => 'form-TbCHOzRIbJ0OXuuacAS4fzZ9aSxS-tTW2-2lqPGEfAQ',
    'form_token' => 'Nb5OBFYFEcF8iohWSxfY8llz1XlC4vUhEYdUVHfICfM',
    'form_id' => 'ctools_user_password_form_content_type_edit_form',
    'override_title_text' => '',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = 'f73387fb-4216-4863-b1b8-1cc585730388';
  $display->content['new-f73387fb-4216-4863-b1b8-1cc585730388'] = $pane;
  $display->panels['main-content'][0] = 'new-f73387fb-4216-4863-b1b8-1cc585730388';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $export['user_password__panel_context_a9203783-3d49-4084-8839-d30206f7f83a'] = $handler;

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'user_register__panel_context_24cb7016-8ded-4156-9c4f-c4b3eb993c36';
  $handler->task = 'user_register';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Panel',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => 'html not-front logged-in no-sidebars page-user- page-user-edit',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'name' => '',
  );
  $display = new panels_display();
  $display->layout = 'main';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'system-content' => NULL,
      'clear-content' => NULL,
      'page-sidebar' => NULL,
      'main-content' => NULL,
      'content-sidebar' => NULL,
      'background-image' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = 'cf0a90ab-4a8e-4f0e-b197-8d9e15ce844a';
  $display->storage_type = 'page_manager';
  $display->storage_id = 'user_register__panel_context_24cb7016-8ded-4156-9c4f-c4b3eb993c36';
  $display->content = array();
  $display->panels = array();
  $pane = new stdClass();
  $pane->pid = 'new-3ac03ed8-bb75-4e2f-af0a-b3f41f8a34ff';
  $pane->panel = 'clear-content';
  $pane->type = 'page_primary_links';
  $pane->subtype = 'page_primary_links';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = '3ac03ed8-bb75-4e2f-af0a-b3f41f8a34ff';
  $display->content['new-3ac03ed8-bb75-4e2f-af0a-b3f41f8a34ff'] = $pane;
  $display->panels['clear-content'][0] = 'new-3ac03ed8-bb75-4e2f-af0a-b3f41f8a34ff';
  $pane = new stdClass();
  $pane->pid = 'new-72223087-0fbd-4d5f-bc1c-da51f7d6ab21';
  $pane->panel = 'main-content';
  $pane->type = 'user_register_form';
  $pane->subtype = 'user_register_form';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'override_title_heading' => 'h2',
    'form_build_id' => 'form-aLf_P4qMA3N625VhsP0kVNlNtobCcR9F_bmITMKRl6Y',
    'form_token' => 'Gz5Q58u-4FZRGKvLhSQioHROqiTTEaaldc14CCzzW-Q',
    'form_id' => 'ctools_user_register_form_content_type_edit_form',
    'override_title' => 0,
    'override_title_text' => '',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = '72223087-0fbd-4d5f-bc1c-da51f7d6ab21';
  $display->content['new-72223087-0fbd-4d5f-bc1c-da51f7d6ab21'] = $pane;
  $display->panels['main-content'][0] = 'new-72223087-0fbd-4d5f-bc1c-da51f7d6ab21';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = 'new-3ac03ed8-bb75-4e2f-af0a-b3f41f8a34ff';
  $handler->conf['display'] = $display;
  $export['user_register__panel_context_24cb7016-8ded-4156-9c4f-c4b3eb993c36'] = $handler;

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'user_view__panel_context_d7969b3f-9673-4bd0-ba86-98d4797bd04c';
  $handler->task = 'user_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Panel',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => 'html not-front logged-in no-sidebars page-user-',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'name' => '',
    'access' => array(
      'plugins' => array(),
      'logic' => 'and',
    ),
  );
  $display = new panels_display();
  $display->layout = 'main';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'system-content' => NULL,
      'clear-content' => NULL,
      'page-sidebar' => NULL,
      'main-content' => NULL,
      'content-sidebar' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = '4455b950-33bf-49c1-9fcc-7322bad496c3';
  $display->storage_type = 'page_manager';
  $display->storage_id = 'user_view__panel_context_d7969b3f-9673-4bd0-ba86-98d4797bd04c';
  $display->content = array();
  $display->panels = array();
  $pane = new stdClass();
  $pane->pid = 'new-aead4e34-954c-4c7c-9e62-92c4d1ae6e0d';
  $pane->panel = 'clear-content';
  $pane->type = 'page_primary_links';
  $pane->subtype = 'page_primary_links';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = 'aead4e34-954c-4c7c-9e62-92c4d1ae6e0d';
  $display->content['new-aead4e34-954c-4c7c-9e62-92c4d1ae6e0d'] = $pane;
  $display->panels['clear-content'][0] = 'new-aead4e34-954c-4c7c-9e62-92c4d1ae6e0d';
  $pane = new stdClass();
  $pane->pid = 'new-58eca403-cbb9-4038-a256-af0758275a2c';
  $pane->panel = 'main-content';
  $pane->type = 'block';
  $pane->subtype = 'user-login';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = '58eca403-cbb9-4038-a256-af0758275a2c';
  $display->content['new-58eca403-cbb9-4038-a256-af0758275a2c'] = $pane;
  $display->panels['main-content'][0] = 'new-58eca403-cbb9-4038-a256-af0758275a2c';
  $pane = new stdClass();
  $pane->pid = 'new-58b7dcc9-525f-41c1-8c5e-d7b45a0d70bb';
  $pane->panel = 'main-content';
  $pane->type = 'user_profile';
  $pane->subtype = 'user_profile';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'view_mode' => 'full',
    'context' => 'argument_entity_id:user_1',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 1;
  $pane->locks = array();
  $pane->uuid = '58b7dcc9-525f-41c1-8c5e-d7b45a0d70bb';
  $display->content['new-58b7dcc9-525f-41c1-8c5e-d7b45a0d70bb'] = $pane;
  $display->panels['main-content'][1] = 'new-58b7dcc9-525f-41c1-8c5e-d7b45a0d70bb';
  $pane = new stdClass();
  $pane->pid = 'new-afc2e344-d2c9-4f0a-8e56-ba16d42d3139';
  $pane->panel = 'system-content';
  $pane->type = 'page_tabs';
  $pane->subtype = 'page_tabs';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'type' => 'both',
    'id' => '',
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = 'afc2e344-d2c9-4f0a-8e56-ba16d42d3139';
  $display->content['new-afc2e344-d2c9-4f0a-8e56-ba16d42d3139'] = $pane;
  $display->panels['system-content'][0] = 'new-afc2e344-d2c9-4f0a-8e56-ba16d42d3139';
  $pane = new stdClass();
  $pane->pid = 'new-c8ac8be2-8d33-4a32-a68a-f50f66a8748a';
  $pane->panel = 'system-content';
  $pane->type = 'page_actions';
  $pane->subtype = 'page_actions';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array();
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 1;
  $pane->locks = array();
  $pane->uuid = 'c8ac8be2-8d33-4a32-a68a-f50f66a8748a';
  $display->content['new-c8ac8be2-8d33-4a32-a68a-f50f66a8748a'] = $pane;
  $display->panels['system-content'][1] = 'new-c8ac8be2-8d33-4a32-a68a-f50f66a8748a';
  $pane = new stdClass();
  $pane->pid = 'new-7e0193c4-e27c-45d0-81b0-52521e2932d4';
  $pane->panel = 'system-content';
  $pane->type = 'page_help';
  $pane->subtype = 'page_help';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array();
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 2;
  $pane->locks = array();
  $pane->uuid = '7e0193c4-e27c-45d0-81b0-52521e2932d4';
  $display->content['new-7e0193c4-e27c-45d0-81b0-52521e2932d4'] = $pane;
  $display->panels['system-content'][2] = 'new-7e0193c4-e27c-45d0-81b0-52521e2932d4';
  $pane = new stdClass();
  $pane->pid = 'new-4c9abdbb-3a69-4471-ad19-29a7d71b91b4';
  $pane->panel = 'system-content';
  $pane->type = 'page_messages';
  $pane->subtype = 'page_messages';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array();
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 3;
  $pane->locks = array();
  $pane->uuid = '4c9abdbb-3a69-4471-ad19-29a7d71b91b4';
  $display->content['new-4c9abdbb-3a69-4471-ad19-29a7d71b91b4'] = $pane;
  $display->panels['system-content'][3] = 'new-4c9abdbb-3a69-4471-ad19-29a7d71b91b4';
  $pane = new stdClass();
  $pane->pid = 'new-e62fb7b9-68cb-4671-94d7-83b7886c96c0';
  $pane->panel = 'system-content';
  $pane->type = 'block';
  $pane->subtype = 'system-help';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'override_title' => 0,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 4;
  $pane->locks = array();
  $pane->uuid = 'e62fb7b9-68cb-4671-94d7-83b7886c96c0';
  $display->content['new-e62fb7b9-68cb-4671-94d7-83b7886c96c0'] = $pane;
  $display->panels['system-content'][4] = 'new-e62fb7b9-68cb-4671-94d7-83b7886c96c0';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = 'new-afc2e344-d2c9-4f0a-8e56-ba16d42d3139';
  $handler->conf['display'] = $display;
  $export['user_view__panel_context_d7969b3f-9673-4bd0-ba86-98d4797bd04c'] = $handler;

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'users__panel_context_c57f9609-5746-4dcc-8757-850f56d994ff';
  $handler->task = 'users';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Panel',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => 'no-sidebars page-node- node-type-page not-logged-in html logged-in one-sidebar sidebar-first not-front',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'name' => '',
  );
  $display = new panels_display();
  $display->layout = 'contentarea';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'main-content' => NULL,
      'content-sidebar' => NULL,
      'background-image' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = 'a0c8a22c-6b22-4c78-829d-84f939d37c47';
  $display->storage_type = 'page_manager';
  $display->storage_id = 'users__panel_context_c57f9609-5746-4dcc-8757-850f56d994ff';
  $display->content = array();
  $display->panels = array();
  $pane = new stdClass();
  $pane->pid = 'new-ea4972cf-91a1-4be3-8c09-eb3bc08d52a1';
  $pane->panel = 'main-content';
  $pane->type = 'user_login_form';
  $pane->subtype = 'user_login_form';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'override_title' => 1,
    'override_title_heading' => 'h2',
    'form_build_id' => 'form-N8sQOTEaOtSqVmrAXF9lbem9ZoqE5DFhwSS-JAAKYFM',
    'form_token' => 'P7tLvTjXlEUN5ckxLPsBavWOWXzYl65AN3pwzCqyyLc',
    'form_id' => 'ctools_user_login_form_content_type_edit_form',
    'override_title_text' => '',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = 'ea4972cf-91a1-4be3-8c09-eb3bc08d52a1';
  $display->content['new-ea4972cf-91a1-4be3-8c09-eb3bc08d52a1'] = $pane;
  $display->panels['main-content'][0] = 'new-ea4972cf-91a1-4be3-8c09-eb3bc08d52a1';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = 'new-ea4972cf-91a1-4be3-8c09-eb3bc08d52a1';
  $handler->conf['display'] = $display;
  $export['users__panel_context_c57f9609-5746-4dcc-8757-850f56d994ff'] = $handler;

  return $export;
}

/**
 * Implements hook_default_page_manager_pages().
 */
function jb_panels_default_page_manager_pages() {
  $page = new stdClass();
  $page->disabled = FALSE; /* Edit this to true to make a default page disabled initially */
  $page->api_version = 1;
  $page->name = 'anchor_menu_demo';
  $page->task = 'page';
  $page->admin_title = 'Table of Contents Example';
  $page->admin_description = '';
  $page->path = 'blog/drupal-7-anchor-menu/demo';
  $page->access = array();
  $page->menu = array();
  $page->arguments = array();
  $page->conf = array(
    'admin_paths' => FALSE,
  );
  $page->default_handlers = array();
  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'page_anchor_menu_demo__panel';
  $handler->task = 'page';
  $handler->subtask = 'anchor_menu_demo';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Panel',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => 'html not-front logged-in no-sidebars page-node page-node-',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'name' => 'panel',
    'metatag_panels' => array(
      'enabled' => 1,
      'metatags' => array(
        'title' => array(
          'value' => 'Add an Anchor Menu/Table of Contents to Drupal 7 Demo | [site:name]',
        ),
        'description' => array(
          'value' => 'Demo for the Add an Anchor Menu/Table of Contents to Drupal 7 blog post.',
        ),
        'og:site_name' => array(
          'value' => 'jimbir.ch',
        ),
        'og:type' => array(
          'value' => 'public_figure',
        ),
        'og:title' => array(
          'value' => 'Add an Anchor Menu/Table of Contents to Drupal 7 Demo | [site:name]',
        ),
        'og:description' => array(
          'value' => 'Demo for the Add an Anchor Menu/Table of Contents to Drupal 7 blog post.',
        ),
      ),
    ),
  );
  $display = new panels_display();
  $display->layout = 'contentarea';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'main-content' => NULL,
      'content-sidebar' => NULL,
      'background-image' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = 'a3a49622-6523-407a-b487-7446709f21c8';
  $display->storage_type = 'page_manager';
  $display->storage_id = 'page_anchor_menu_demo__panel';
  $display->content = array();
  $display->panels = array();
  $pane = new stdClass();
  $pane->pid = 'new-5587fe05-7a2d-46a6-8043-acf77615d072';
  $pane->panel = 'main-content';
  $pane->type = 'views_panes';
  $pane->subtype = 'toc-panel_pane_1';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array();
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = '5587fe05-7a2d-46a6-8043-acf77615d072';
  $display->content['new-5587fe05-7a2d-46a6-8043-acf77615d072'] = $pane;
  $display->panels['main-content'][0] = 'new-5587fe05-7a2d-46a6-8043-acf77615d072';
  $pane = new stdClass();
  $pane->pid = 'new-5d19c40b-e194-4420-a698-60111070318d';
  $pane->panel = 'main-content';
  $pane->type = 'views_panes';
  $pane->subtype = 'toc-panel_pane_2';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array();
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 1;
  $pane->locks = array();
  $pane->uuid = '5d19c40b-e194-4420-a698-60111070318d';
  $display->content['new-5d19c40b-e194-4420-a698-60111070318d'] = $pane;
  $display->panels['main-content'][1] = 'new-5d19c40b-e194-4420-a698-60111070318d';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = 'new-5587fe05-7a2d-46a6-8043-acf77615d072';
  $handler->conf['display'] = $display;
  $page->default_handlers[$handler->name] = $handler;
  $pages['anchor_menu_demo'] = $page;

  return $pages;

}
