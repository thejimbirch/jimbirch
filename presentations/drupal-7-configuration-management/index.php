<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Drupal 8 style configuration management for Drupal 7 | Web Development Presentation</title>
    <meta name="description" content="This session reviews implementing the Features Builder module for Drupal 8 style configuration management in Drupal 7."/>
    <link rel="canonical" href="https://jimbir.ch/presentations/drupal-7-configuration-management/"/>
    <meta property="og:site_name" content="Jim Birch"/>
    <meta property="og:type" content="public_figure"/>
    <meta property="og:url" content="https://jimbir.ch/presentations/drupal-7-configuration-management/"/>
    <meta property="og:title" content="Drupal 8 style configuration management for Drupal 7 | Web Development Presentation"/>
    <meta property="og:description" content="This session reviews implementing the Features Builder module for Drupal 8 style configuration management in Drupal 7."/>
    <meta property="og:image" content="https://jimbir.ch/presentations/drupal-7-configuration-management/img/meta-schema-drupal-1280.jpg"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@thejimbirch"/>
    <meta name="twitter:site:id" content="2989027096"/>
    <meta name="twitter:creator" content="@thejimbirch"/>
    <meta name="twitter:creator:id" content="2989027096"/>
    <meta name="twitter:url" content="https://jimbir.ch/presentations/drupal-7-configuration-management/"/>
    <meta name="twitter:title" content="Drupal 8 style configuration management for Drupal 7 | Web Development Presentation"/>
    <meta name="twitter:description" content="This session reviews implementing the Features Builder module for Drupal 8 style configuration management in Drupal 7."/>
    <meta name="twitter:image:src" content="https://jimbir.ch/presentations/drupal-7-configuration-management/img/meta-schema-drupal-1280.jpg"/>
    <meta itemprop="name" content="Drupal 8 style configuration management for Drupal 7 | Web Development Presentation"/>
    <meta itemprop="description" content="This session reviews implementing the Features Builder module for Drupal 8 style configuration management in Drupal 7."/>
    <meta itemprop="image" content="https://jimbir.ch/presentations/drupal-7-configuration-management/img/meta-schema-drupal-1280.jpg"/>
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
        <div class="fixed-footer__first"><a href="https://jimbir.ch/presentations/drupal-7-configuration-management/">jimbir.ch/fb</a> <a href="https://www.twitter.com/thejimbirch" title="@thejimbirch">@thejimbirch</a> <a href="https://twitter.com/search?q=%23teachingtuesday">#teachingtuesday</a></div>
        <div class="fixed-footer__second"><a href="https://www.kanopistudios.com/"><img src="img/kanopi-logo.png" alt="Kanopi Studios"></a></div>
      </div>
      <!-- Any section element inside of this container is displayed as a slide -->
      <div class="slides">
        <section style="text-align: left;" data-background="img/Lego-Uncle-Jim-Working-by-Damon-2.jpg" data-transition="zoom-in fade-out">
          <h1 style="font-size: 2em; width: 60%; float: right;">Drupal 8 Style Configuration Management in Drupal 7</h1>
          <div class="box" style="width: 60%; float: right;">
            <img src="img/kanopi-logo-square.png" alt="Kanopi Studios" style="float: left; width: 160px; height: auto; margin: 0 20px 0 0; padding: 20px; background: #fff;">
            <p style="margin-top: 0; padding-bottom:20px;"><a href="https://jimbir.ch">Jim Birch</a><br>
            <a href="https://twitter.com/thejimbirch">@thejimbirch</a><br>
            <a href="https://jimbir.ch/presentations/drupal-7-configuration-management/">jimbir.ch/fb</a></p>
          </div>
        </section>

        <!-- Full Background. -->
        <section data-background="img/kanopi-team-2019-narrow.jpg" data-transition="zoom-in fade-out" data-background-size="contain">
        </section>

        <section style="text-align: left;" data-background="img/Lego-Uncle-Jim-with-the-Sloth-by-Morgan.jpg" data-background-position="center bottom" data-transition="zoom">
          <h2 style="width: 50%">What is configuration management?</h2>
        </section>

        <section>
          <p>Content management systems allow administrators and developers to change settings in the User Interface (UI).</p>

          <p>These settings, or <em>configurations</em> are stored in the database.</p>
        </section>

        <section>
          <p>Exporting them to code allows us to <em>manage</em> them in version control for backups, and across servers for development and testing, without having to have the actual database.</p>
        </section>

        <section>
          <p>Configuration management is moving things from the database to code.</p>
        </section>

        <section data-background="img/Lego-Uncle-Jim-Millenium-Falcon-2-by-Savino.jpg" data-background-position="center bottom" data-transition="zoom">
          <h2>Drupal 8 Configuration Management</h2>
        </section>

        <section>
          <ul>
            <li>Built from the ground up</li>
            <li class="fragment">Core and Contrib follow the same rules</li>
            <li class="fragment">Consistent YAML files for storing configs</li>
            <li class="fragment">Configs are imported from code to the database and...</li>
            <li class="fragment">Exported from the database to code</li>
            <li class="fragment">Can be "split" allowing for different config in different places (Dev, Stage, Prod)</li>
          </ul>
        </section>

        <section style="text-align: left;" data-background="img/Lego-Uncle-Jim-Offroading-by-Adam.jpg" data-background-position="center bottom" data-transition="zoom">
          <h2 style="width: 55%;">Features - Drupal 7 Configuration Management</h2>
        </section>

        <section>
          <ul>
            <li>Features module allows you to export content into custom PHP modules</li>
            <li class="fragment">Clicked together exportables and variables (provided by the Strongarm module) from the UI</li>
            <li class="fragment">Built by the decisions of the developer, and maintained/modified by any other developer who came along after.</li>
          </ul>
        </section>

        <section style="text-align: left;" data-background="img/Lego-Uncle-Jim-Sticker-and-view-by-Shiraz.jpg" data-background-position="center bottom" data-transition="zoom">
          <h2 style="width: 60%; float: right;">Enter Features Builder Contrib module</h2>
        </section>

        <section>
          <p>Save valuable time (and sanity) by bypassing the process of picking and choosing which components go into which Features.</p>

          <p>Features Builder is a module that analyzes the build of your Drupal site and automatically builds Feature modules to capture the site's configuration.</p>
        </section>

        <section>
          <h3>How does it work?</h3>

          <p>The main functionality is built around the idea of a "builder" which is responsible for identifying what configuration it's responsible for.</p>
        </section>

        <section>
          <p>Various administrative screens allow you to see what's available on your site, how the builders will package your configuration, and one-click operation to generate and install the Features modules.</p>
        </section>

        <section style="text-align: left;" data-background="img/Lego-Uncle-Jim-on-the-Battleship-by-Matthew.jpg" data-background-position="center top" data-transition="zoom">
          <h3 style="width: 45%;">Don't like the Builders?</h3>
        </section>

        <section>
          <h3>Build your own builders!</h3>
          <code>hook_features_builders_info()</code>
          <code>hook_features_builders_info_alter()</code>
          <code>hook_features_builder_components_FEATURE_alter()</code>
        </section>

        <section>
          <h2>Migrating to Features Builder from a click-together-workflow</h2>
          <ul>
            <li class="fragment">It is not easy!</li>
            <li class="fragment">It is not hard!</li>
          </ul>
        </section>

        <section>
          <h3>The great revert!</h3>
          <p>Drupal 7 to work from the code in the features modules, configuration in the database, or both.</p>

          <p>The Features revert <code>drush fra</code> would allow you to say ignore the database, and use code, but would not empty the database.</p>
        </section>

        <section>
          <p><code>drush fra --force</code> would force the emptying of the database, so it would have to use the code.</p>

          <p>Unlike Drupal 8 configuration which in which config is imported/exported from the database.</p>
        </section>

        <section>
          <h3>The tedium of manually rebuilding</h3>
          <p>Once you have the database empty, and the functionality in code, you can turn off the feature, rebuild the functionality, so it can be exported later.</p>
        </section>

        <section>
          <h3>The Build</h3>
          <p><code>drush fb -y</code></p>
        </section>

        <section>
          <h3>The deploy and revert</h3>
          <p>After you deploy, add <code>drush fra -y --force</code> to your CI or run it manually.</p>
        </section>

        <!-- Section Closer. -->
        <section data-background="https://media.giphy.com/media/102mqDgAb4Kfug/giphy.gif" data-background-position="center bottom" class="image--byline">
          <h2>Demo</h2>
          <small><a href="https://giphy.com/gifs/kittens-because-102mqDgAb4Kfug">Image via GIPHY</a></small>
        </section>

        <section>
          <p>Special thanks to Damon, Morgan, Savino, Adam, Shiraz, and Matthew for the photography!</p>
        </section>

        <section style="text-align: left;" data-background="img/Lego-Uncle-Jim-Working-by-Damon-1.jpg">
          <h1 style="width: 40%">The End</h1>
          <h3 style="width: 40%">Continuing the conversation:</h3>
          <div class="box" style="width: 50%">
            <img src="img/kanopi-logo-square.png" alt="Kanopi Studios" style="float: left; width: 160px; height: auto; margin: 0 20px 0 0; padding: 20px; background: #fff;">
            <p style="margin-top: 0; padding-bottom: 20px;"><a href="https://jimbir.ch">Jim Birch</a><br>
            <a href="https://twitter.com/thejimbirch">@thejimbirch</a><br>
            <a href="https://jimbir.ch/presentations/drupal-7-configuration-management/">jimbir.ch/fb</a></p>
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
