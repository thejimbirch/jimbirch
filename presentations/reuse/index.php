<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Creating reusable functionality across projects | Web Development Presentation</title>
    <meta name="description" content="This session explores the idea of creating reusable components in Drupal 8 using modules."/>
    <link rel="canonical" href="https://jimbir.ch/presentations/reuse/"/>
    <meta property="og:site_name" content="Jim Birch"/>
    <meta property="og:type" content="public_figure"/>
    <meta property="og:url" content="https://jimbir.ch/presentations/reuse/"/>
    <meta property="og:title" content="Creating reusable functionality across projects | Web Development Presentation"/>
    <meta property="og:description" content="This session explores the idea of creating reusable components in Drupal 8 using modules."/>
    <meta property="og:image" content="https://jimbir.ch/presentations/reuse/img/reuse-presentation-1200.jpg"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@thejimbirch"/>
    <meta name="twitter:site:id" content="2989027096"/>
    <meta name="twitter:creator" content="@thejimbirch"/>
    <meta name="twitter:creator:id" content="2989027096"/>
    <meta name="twitter:url" content="https://jimbir.ch/presentations/reuse/"/>
    <meta name="twitter:title" content="Creating reusable functionality across projects | Web Development Presentation"/>
    <meta name="twitter:description" content="This session explores the idea of creating reusable components in Drupal 8 using modules."/>
    <meta name="twitter:image:src" content="https://jimbir.ch/presentations/reuse/img/reuse-presentation-1200.jpg"/>
    <meta itemprop="name" content="Creating reusable functionality across projects | Web Development Presentation"/>
    <meta itemprop="description" content="This session explores the idea of creating reusable components in Drupal 8 using modules."/>
    <meta itemprop="image" content="https://jimbir.ch/presentations/reuse/img/reuse-presentation-1200.jpg"/>
    <meta name="author" content="Jim Birch">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">

    <link rel="apple-touch-icon" sizes="57x57" href="/sites/all/themes/jimbirch/icons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/sites/all/themes/jimbirch/icons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/sites/all/themes/jimbirch/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/sites/all/themes/jimbirch/icons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/sites/all/themes/jimbirch/icons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/sites/all/themes/jimbirch/icons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/sites/all/themes/jimbirch/icons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/sites/all/themes/jimbirch/icons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/sites/all/themes/jimbirch/icons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/sites/all/themes/jimbirch/icons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/sites/all/themes/jimbirch/icons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/sites/all/themes/jimbirch/icons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/sites/all/themes/jimbirch/icons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/sites/all/themes/jimbirch/icons/manifest.json">
    <link rel="mask-icon" href="/sites/all/themes/jimbirch/icons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/sites/all/themes/jimbirch/icons/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="css/reveal.css">
    <link rel="stylesheet" href="css/theme/white.css" id="theme">
    <!-- Code syntax highlighting -->
    <link rel="stylesheet" href="lib/css/zenburn.css">
    <!-- Printing and PDF exports -->
    <script>
      var link = document.createElement( 'link' );
      link.rel = 'stylesheet';
      link.type = 'text/css';
      link.href = window.location.search.match( /print-pdf/gi ) ? 'css/print/pdf.css' : 'css/print/paper.css';
      document.getElementsByTagName( 'head' )[0].appendChild( link );
    </script>
    <!--[if lt IE 9]>
    <script src="lib/js/html5shiv.js"></script>
    <![endif]-->
    <style type="text/css">
      .reveal h1, .reveal h2, .reveal h3, .reveal h4, .reveal h5, .reveal h6 {
        background: rgba(0, 0, 0, 0.7) none repeat scroll 0 0;
        color: #fff;
        padding: 20px;
        text-shadow: 1px 1px 1px rgba(0,0,0,0.4)
      }
      .reveal h1 {
        font-size: 1.5em;
      }

      .reveal .box {
        background: rgba(0, 0, 0, 0.7) none repeat scroll 0 0;
        color: #fff;
        padding: 20px;
        width: fit-content;
      }

      .reveal .box a,
      .fixed-footer a,
      .reveal h1 a,
      .reveal h2 a,
      .reveal h3 a,
      .reveal h4 a {
        color: #97d217;
      }

      .reveal .box a:hover,
      .fixed-footer a:hover,
      .reveal h1 a {
        color: #fff;
      }

      .backgrounds .slide-background {
        background-position: bottom center;
      }

      .reveal .controls {
        bottom: 14px;
      }

      .navigate-down, .navigate-up {
        display: none;
      }

      .fixed-footer {
        color: #428440;
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        margin: 0 auto;
        z-index: 1000;
        background: rgba(255, 255, 255, 0.7) none repeat scroll 0 0;
      }

      .fixed-footer .fixed-footer__first {
        float: left;
        font-size: 16px;
        padding: 14px 0 8px 20px;
      }

      .fixed-footer .fixed-footer__first a {
        margin-right: 20px;
      }

      .fixed-footer .fixed-footer__second {
        float: right;
        padding: 4px 20px 2px 0;
      }

      .fixed-footer > div > a {
        color: #428440;
      }

      .fixed-footer > div > a:hover {
        color: #00553f;
      }

      .fixed-footer > div img {
        height: 32px;
        width: auto;
      }

      @media print {
        .fixed-footer {
          display: none;
        }
      }

      .reveal .columns {
        clear: left;
      }

      .reveal .column--50 {
        float: left;
        margin-left: 2%;
        width: 49%;
      }

      .reveal .column--50:first-child {
        margin-left: 0;
      }

      .reveal .column--75-25 {
        float: left;
        width: 74%;
      }

      .reveal .column--25-75 {
        float: left;
        margin-left: 2%;
        width: 24%;
      }

      code {
        color: #666666;
      }

      h1 code,
      h2 code,
      h3 code,
      h4 code {
        color: #ededed;
      }

      .reveal pre {
        margin: 0 auto 0 -12.5%;
        width: 125%;
      }

      .reveal pre code {
        max-height: none;
      }

      section.image--byline.present {
        bottom: 0;
        top: auto !important;
        text-align: right;
      }

      .diff .hljs-deletion, .hljs-string, .hljs-tag .hljs-value, .hljs-preprocessor, .hljs-pragma, .hljs-built_in, .sql .hljs-aggregate, .hljs-javadoc, .smalltalk .hljs-class, .smalltalk .hljs-localvars, .smalltalk .hljs-array, .css .hljs-rules .hljs-value, .hljs-attr_selector, .hljs-pseudo, .apache .hljs-cbracket, .tex .hljs-formula, .coffeescript .hljs-attribute {
        color: #fff;
      }
    </style>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-9711088-12', 'auto');
      ga('send', 'pageview');

    </script>
  </head>
  <body>
    <div class="reveal">
      <div class="fixed-footer">
        <div class="fixed-footer__first"><a href="https://jimbir.ch/presentations/reuse/">jimbir.ch/reuse</a> <a href="https://www.twitter.com/thejimbirch" title="@thejimbirch">@thejimbirch</a></div>
        <div class="fixed-footer__second"><a href="https://www.kanopistudios.com/"><img src="img/kanopi-logo.png" alt="Kanopi Studios"></a></div>
      </div>
      <!-- Any section element inside of this container is displayed as a slide -->
      <div class="slides">
        <section style="text-align:left;" data-background="img/Lego-Uncle-Jim-At-Lake-Michigan.jpg" data-transition="zoom-in fade-out">
          <h1 style="width:55%;">Creating reusable functionality across projects</h1>
          <div class="box">
            <a href="https://jimbir.ch">Jim Birch</a><br>
            <a href="https://twitter.com/thejimbirch">@thejimbirch</a><br>
            <a href="https://jimbir.ch/presentations/reuse/">jimbir.ch/reuse</a>
          </div>
        </section>

        <section>
          <h2>How many times have you built...</h2>
          <ul class="fragment">
            <li>Three Column Component</li>
            <li>Text and Image Component</li>
            <li>Slideshow Component</li>
            <li>Simple Text Component</li>
          </ul>
        </section>

        <section>
          <p>How many times have you built it just a little bit different???</p>
          <p><img src="https://media.giphy.com/media/6uMqzcbWRhoT6/giphy.gif" alt="Cat Gif"></p>
        </section>

        <section style="text-align:left;" data-background="img/bootstrap-paragraphs-module-2018.jpg" data-background-position="top center">
          <div class="fragment">
            <h1 class="box" style="padding-left:20px;background: rgba(0, 0, 0, 0.9);width:65%;"><a href="https://www.drupal.org/project/bootstrap_paragraphs">Bootstrap Paragraphs Module</a></h1>
            <p style="color:#fff;background: rgba(0, 0, 0, 0.9);padding:20px 0 20px 20px;width:65%;">The Bootstrap Paragraphs module provides a suite of content and layout Paragraph bundles made with the Bootstrap front-end framework.</p>
          </div>
        </section>

        <section>
          <h2 class="box"><a href="http://bp.jimbir.ch">Building a better page builder</a></h2>
          <a href="http://bp.jimbir.ch"><img src="img/bootstrap-paragraphs-demo.gif" alt="Boostrap Paragraphs Demo"></a>
        </section>

        <section style="text-align:left;" data-background="img/Lego-Uncle-Jim-Blogs.jpg" data-transition="zoom">
          <h1 style="padding-left:20px;padding-right:20px;background: rgba(0, 0, 0, 0.9);width:70%;">Strategy</h1>
          <div class="fragment" style="color:#fff;background: rgba(0, 0, 0, 0.9);padding:20px;width:70%;">
            <ul>
              <li>Create a module that would make the basic paragraphs needed for every site.</li>
              <li class="fragment">Create base templates &amp; CSS that could be used with any theme that includes Bootstrap.</li>
              <li class="fragment">Harness the power of Entity Reference Revisions fields to nest Paragraphs.</li>
              <li class="fragment">Have global width &amp; background color options.</li>
            </ul>
          </div>
        </section>

        <section>
          <h2>Content bundles</h2>
          <p>Common semantically organized fields, and reference fields to common entities.</p>
          <ul>
            <li>Simple HTML</li>
            <li>Image</li>
            <li>Blank</li>
            <li>Drupal Blocks</li>
            <li>Views</li>
            <li>Contact Forms/Webforms are Submodules</li>
          </ul>
        </section>

        <section>
          <h2>Layout bundles</h2>
          <p>Entity Reference Revisions fields to other Paragraphs.</p>
          <ul>
            <li>Columns</li>
            <li>Carousel</li>
            <li>Accordion</li>
            <li>Modal</li>
            <li>Tabs</li>
          </ul>
        </section>

        <section style="text-align:left;" data-background="img/Lego-Uncle-Jim-in-Iceland-Mike-Miles.jpg" data-transition="zoom">
          <h1 class="box" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:67%;">Building a module from config</h1>
        </section>

        <section>
          <h2>Building a module from config</h2>
          <ul>
            <li>Create functionality in a blank Drupal install</li>
            <li>Create module structure</li>
            <li>Add Templates, CSS, and JS</li>
            <li>Add Function to override Template</li>
            <li>Export Config, delete UUIDs, Name space/change file names</li>
          </ul>
        </section>

        <section>
          <h2>Create functionality in a blank Drupal install</h2>
          <p>Spin up a sandbox on your favorite hosting platform or on your local dev environment and build your functionality.</p>
        </section>

        <section>
          <h2>Create module structure</h2>
          <img src="img/bootstrap-pages-module-structure.png" alt="Bootstrap Pages Module Structure">
        </section>

        <section>
          <h2>Add Templates, CSS, and JS</h2>
          <ul>
            <li>Add any templates you need.</li>
            <li>Add a CSS file.</li>
            <li>Add a JS file if needed.</li>
            <li>Configure them in the module's .libraries file.</li>
          </ul>
        </section>

        <section>
          <h2>Export Config, delete UUIDs, Name space/change file names</h2>
          <img src="img/bootstrap-pages-config-example.png" alt="Bootstrap Pages Config Example">
        </section>

        <section>
          <h2>If needed, add function to override Template in .module</h2>
          <img src="img/bootstrap-pages-module-hook-theme.png" alt="Bootstrap Pages Module Hook Theme" style="width:75%;">
        </section>

        <section>
          <h2><a href="https://www.drupal.org/project/bootstrap_pages">Bootstrap Pages</a></h2>
          <p>Install, Test, &amp; Share the finished product</p>
          <a href="https://www.drupal.org/project/bootstrap_pages"><img src="img/bootstrap-pages-module-page.png" alt="Bootstrap Pages"></a>
        </section>

        <section>
          <h2><a href="https://www.drupal.org/project/bootstrap_pages">Bootstrap Pages</a></h2>
          <ul>
            <li class="fragment">
              <b>Content Types</b><br>Article, Author, Landing Page<br>
              <i>Includes Bootstrap Paragraphs, Meta tags and Schema.org markup; optimized, responsive images, preconfigured friendly URLs; and an organized administration</i>
            </li>
            <li class="fragment"><b>Taxonomies</b><br>Category, Topic, Type</li>
            <li class="fragment"><b>Views</b><br>All Articles, Articles by Terms</li>
          </ul>
        </section>

        <section>
          <h2><a href="https://www.drupal.org/project/seo_starter">SEO Starter</a></h2>
          <p>Config only module that had module dependencies and starter config for Search Engine Optimization.</p>
        </section>

        <section>
          <h2><a href="https://www.drupal.org/project/seo_starter">SEO Starter</a></h2>
          <pre><code style="font-size:75%;line-height: 1.2em;">
function seo_starter_override_config($config_name, $path) {
  $active_storage = \Drupal::service('config.storage');
  $active_storage->write($config_name, Yaml::parse(file_get_contents($path . '/config/override/' . $config_name . '.yml')));
}

/**
 * Implements hook_install().
 */
function seo_starter_install() {
  // Set path.
  $path = drupal_get_path('module', 'seo_starter');
  // Override configs.
  seo_starter_override_config('coffee.configuration', $path);
  seo_starter_override_config('easy_breadcrumb.settings', $path);
  seo_starter_override_config('google_analytics.settings', $path);
  seo_starter_override_config('metatag.metatag_defaults.403', $path);
  seo_starter_override_config('metatag.metatag_defaults.404', $path);
  seo_starter_override_config('metatag.metatag_defaults.front', $path);
  seo_starter_override_config('metatag.metatag_defaults.global', $path);
  seo_starter_override_config('metatag.metatag_defaults.node', $path);
  seo_starter_override_config('metatag.metatag_defaults.taxonomy_term', $path);
  seo_starter_override_config('metatag.metatag_defaults.user', $path);
  seo_starter_override_config('pathauto.pattern.content', $path);
  seo_starter_override_config('pathauto.pattern.taxonomy', $path);
  seo_starter_override_config('pathauto.pattern.user', $path);
  seo_starter_override_config('pathauto.settings', $path);
  seo_starter_override_config('redirect.settings', $path);
  seo_starter_override_config('simple_sitemap.custom', $path);
  seo_starter_override_config('simple_sitemap.settings', $path);
}
          </code></pre>
        </section>

        <section>
          <h2><a href="https://www.drupal.org/project/media_entity_browser">Media Entity Browser</a></h2>
          <a href="https://www.drupal.org/project/media_entity_browser"><img src="img/drupal-media-entity-browser.png" alt="Drupal Media Entity Browser module page"></a>
        </section>

        <section>
          <h2>Free like a Puppy</h2>
          <img src="https://media.giphy.com/media/uWAVxSl0Fu0wCJakNb/giphy.gif" alt="Puppy yawning">
          <ul>
            <li class="fragment">Config is now yours. Only an update hook will update.</li>
            <li class="fragment">Templates/Libraries can be overriden by the theme.</li>
            <li class="fragment">Can even uninstall the module for complete break.</li>
          </ul>
        </section>

        <section>
          <img src="img/logo--drupal.png" alt="Drupal logo">
          <ul>
            <li class="fragment">Distributions</li>
            <li class="fragment">Installation Profiles (<a href="https://www.drupal.org/project/config_installer">Configuration Installer</a>)</li>
            <li class="fragment"><a href="https://www.drupal.org/project/features">Features Module</a></li>
            <li class="fragment">Feature Module replacements (<a href="https://www.drupal.org/project/config_actions">Config Actions</a>, <a href="https://www.drupal.org/project/config_templates">Config Templates</a>, etc...)</li>
            <li class="fragment"><a href="https://www.drupal.org/project/cmi2">Configuration Management 2.0 initiative</a></li>
          </ul>
        </section>

        <section>
          <p>All have their pluses and minuses, but all have issues when you want to customize them</p>
          <img src="img/logo--lightning.png" alt="Lightning">
          <img src="img/logo--thunder.png" alt="Thunder" style="padding:20px;">
          <img src="img/logo--open-social.png" alt="Open Social" style="padding:20px;"><br>
          <img src="img/logo--openchurch.png" alt="OpenChurch">
          <img src="img/logo--varbase.png" alt="Varbase" style="padding:20px;">
        </section>

        <section>
          <h2>Benefits</h2>
          <ul>
            <li class="fragment">Documentation like <a href="https://docs.google.com/spreadsheets/d/1dAWAbIsS0v7COEWQ3gFj_md7x3rhFJslpVWQI2upvgM/edit#gid=233425812">Drupal 8 Build Spec</a></li>
            <li class="fragment">Increase Productivity</li>
            <li class="fragment">Help streamline and <a href="https://docs.google.com/spreadsheets/d/1h5SxygFZK2rRRIrSu0Kbe2pGcFBZE8-zI_wCg5H1qME/edit#gid=740588976">accurately estimate projects</a></li>
          </ul>
        </section>

        <section>
          <blockquote>
            <p style="font-size:125%;">"given enough eyeballs, all bugs are shallow"</p>
            <cite>
              <p style="font-size:75%;"><a href="https://en.wikipedia.org/wiki/Linus%27s_Law">Linus's Law</a> - Eric S. Raymond in his essay and book The Cathedral and the Bazaar (1999)</p>
            </cite>
          </blockquote>
        </section>

        <section>
          <h2>What about WordPress?</h2>
          <p>WordPress Plugin using ACF and Post Meta and WP-CFM Oh my! Or Gutenberg blocks or...</p>
        </section>

        <section>
          <h2>What about DevOps?</h2>
          <ul>
            <li class="fragment">Composer Starters</li>
            <li class="fragment">CircleCI Starters</li>
            <li class="fragment">Theme Starters</li>
          </ul>
        </section>

        <section>
          <h2>Foundation Paragraphs and Foundation Pages</h2>
          <p>Help me plan and build!</p>
          <img src="img/drupal-foundation-paragraphs-pages-module.png" alt="Foundation Paragraphs and Foundation Pages Drupal modules">
        </section>

        <section style="text-align: left;" data-background="img/Lego-Uncle-Jim-At-Lake-Michigan.jpg">
          <h1 style="width:55%;">The End</h1>
          <h3 style="width:55%;">Continuing the conversation:</h3>
          <div class="box">
            <a href="https://jimbir.ch">Jim Birch</a><br>
            <a href="https://twitter.com/thejimbirch">@thejimbirch</a><br>
            <a href="https://jimbir.ch/presentations/reuse/">jimbir.ch/reuse</a>
          </div>
        </section>

      </div>

    </div>

    <script src="lib/js/head.min.js"></script>
    <script src="js/reveal.js"></script>

    <script>

      // Full list of configuration options available at:
      // https://github.com/hakimel/reveal.js#configuration
      Reveal.initialize({
        controls: true,
        progress: true,
        history: true,
        center: true,

        transition: 'slide', // none/fade/slide/convex/concave/zoom

        // Optional reveal.js plugins
        dependencies: [
          { src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
          { src: 'plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
          { src: 'plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
          { src: 'plugin/highlight/highlight.js', async: true, condition: function() { return !!document.querySelector( 'pre code' ); }, callback: function() { hljs.initHighlightingOnLoad(); } },
          { src: 'plugin/zoom-js/zoom.js', async: true },
          { src: 'plugin/notes/notes.js', async: true }
        ]
      });

    </script>

  </body>
</html>
