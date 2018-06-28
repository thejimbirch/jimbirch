<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Meta and Schema: Defining the Content about your Content | Web Development Presentation | Design 4 Drupal 2018</title>
    <meta name="description" content="This session reviews implementing Schema.org schemas for structured data and current best practice meta tags in Drupal."/>
    <link rel="canonical" href="http://jimbir.ch/presentations/meta-schema-drupal/"/>
    <meta property="og:site_name" content="Jim Birch"/>
    <meta property="og:type" content="public_figure"/>
    <meta property="og:url" content="http://jimbir.ch/presentations/meta-schema-drupal/"/>
    <meta property="og:title" content="Meta and Schema: Defining the Content about your Content | Web Development Presentation | Design 4 Drupal 2018"/>
    <meta property="og:description" content="This session reviews implementing Schema.org schemas for structured data and current best practice meta tags in Drupal."/>
    <meta property="og:image" content="http://jimbir.ch/presentations/meta-schema-drupal/img/meta-schema-drupal-720.jpg"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@thejimbirch"/>
    <meta name="twitter:site:id" content="2989027096"/>
    <meta name="twitter:creator" content="@thejimbirch"/>
    <meta name="twitter:creator:id" content="2989027096"/>
    <meta name="twitter:url" content="http://jimbir.ch/presentations/meta-schema-drupal/"/>
    <meta name="twitter:title" content="Meta and Schema: Defining the Content about your Content | Web Development Presentation | Design 4 Drupal 2018"/>
    <meta name="twitter:description" content="This session reviews implementing Schema.org schemas for structured data and current best practice meta tags in Drupal."/>
    <meta name="twitter:image:src" content="http://jimbir.ch/presentations/meta-schema-drupal/img/meta-schema-drupal-720.jpg"/>
    <meta itemprop="name" content="Meta and Schema: Defining the Content about your Content | Web Development Presentation | Design 4 Drupal 2018"/>
    <meta itemprop="description" content="This session reviews implementing Schema.org schemas for structured data and current best practice meta tags in Drupal."/>
    <meta itemprop="image" content="http://jimbir.ch/presentations/meta-schema-drupal/img/meta-schema-drupal-720.jpg"/>
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
        text-shadow: 1px 1px 1px rgba(0,0,0,0.4)
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
        <div class="fixed-footer__first"><a href="http://jimbir.ch/presentations/meta-schema-drupal/">jimbir.ch/meta-schema-drupal</a> <a href="http://www.twitter.com/thejimbirch" title="@thejimbirch">@thejimbirch</a> <a href="https://twitter.com/search?q=%23D4DBoston">#D4DBoston</a></div>
        <div class="fixed-footer__second"><a href="https://www.kanopistudios.com/"><img src="img/kanopi-logo.png" alt="Kanopi Studios"></a></div>
      </div>
      <!-- Any section element inside of this container is displayed as a slide -->
      <div class="slides">
        <section style="text-align:left;" data-background="img/Lego-Uncle-Jim-at-the-infinity-pool.jpg" data-transition="zoom-in fade-out">
          <h1 style="font-size:2em;padding-left:20px;width:72%;">Meta and Schema</h1>
          <h2 style="padding-left:20px;width:72%;">Defining the Content about your Content</h1>
          <div style="color:#fff;display:inline-block;background: rgba(0, 0, 0, 0.7);padding-left:20px;width:72%">
            <img src="img/D4D.svg" alt="Design 4 Drupal 2018" style="float: left; width: 130px; padding:10px;height: auto;"><br>
            <div class="box" style="float: left;padding-left:20px;padding-bottom:20px;margin-top:-30px">
              <a href="http://jimbir.ch">Jim Birch</a><br>
              <a href="http://twitter.com/thejimbirch">@thejimbirch</a><br>
              <a href="http://jimbir.ch/presentations/meta-schema-drupal/">jimbir.ch/meta-schema-drupal</a>
            </div>
          </div>
        </section>

        <section data-background="img/kanopi-workflow.svg" data-background="img/kanopi-logo-square.png" data-background-position="bottom 46px right" data-background-size="50%" data-transition="zoom-in fade-out">
          <img src="img/kanopi-logo-square.png" alt="Kanopi Logo" style="border:none;width:10%;box-shadow:none;margin-top:-80px;">
          <img src="img/kanopi-team.png" alt="Kanopi Team" style="border:none;box-shadow:none">
        </section>

        <section>
          <h3>We know how our website looks on our server</h3>
          <img src="img/post-on-my-site.jpg" alt="Screenshot of this presentations's Home page">
        </section>

        <section>
          <h3>How does it look on others?</h3>
          <img src="img/meta-images-and-logos.jpg" alt="Screenshots of pages shared on social networks and search engine results">
        </section>

        <section>
          <h3><abbr title="Too Long Didn't Read">TLDR</abbr> &nbsp;/&nbsp; <abbr title="Bottom Line Up Front">BLUF</abbr></h3>
          <div class="columns">
            <div class="column--50">
              <h4>Specifications</h4>
              <ul>
                <li><a href="https://www.w3.org/TR/html/document-metadata.html#document-metadata">W3C HTML 5.2 Specs</a></li>
                <li><a href="https://wiki.whatwg.org/wiki/MetaExtensions">WHATWG Meta Extensions</a></li>
                <li><a href="http://ogp.me/">Open Graph Protocol</a></li>
                <li><a href="https://developer.twitter.com/en/docs/tweets/optimize-with-cards/overview/abouts-cards">Twitter Cards</a></li>
                <li><a href="http://schema.org/">Schema.org</a></li>
                <li><a href="https://developers.google.com/search/docs/guides/search-gallery">Google Search Gallery</a></li>
              </ul>
            </div>
            <div class="column--50">
              <h4>Validators</h4>
              <ul>
                <li><a href="https://w3c.github.io/developers/tools/">W3C Developer Tools</a></li>
                <li><a href="https://developers.facebook.com/tools/debug/">Facebook Debugger</a></li>
                <li><a href="http://developers.pinterest.com/rich_pins/validator/">Pinterest Validator</a></li>
                <li><a href="https://cards-dev.twitter.com/validator" rel="nofollow">Twitter Card validator</a></li>
                <li><a href="https://search.google.com/structured-data/testing-tool/u/0/">Google Structured Data Testing Tool</a></li>
              </ul>
            </div>
          </div>
        </section>

        <section style="text-align: left;" data-background="img/Lego-Uncle-Jim-at-MidCamp.jpg" data-background-position="center top" data-transition="zoom">
          <div class="fragment">
            <h1 class="box" style="float:right;padding:20px;background: rgba(0, 0, 0, 0.9);width:50%;">Meta</h1>
            <p style="color:#fff;background: rgba(0, 0, 0, 0.9);padding:20px;width:50%;float:right;">Meta (from the Greek preposition and prefix meta- (μετά-) meaning "after", or "beyond") is a prefix used in English to indicate a concept which is an abstraction behind another concept, used to complete or add to the latter. - <a href="https://en.wikipedia.org/wiki/Meta">Wikipedia</a></p>
          </div>
        </section>

        <section style="text-align: left;" data-background="https://upload.wikimedia.org/wikipedia/commons/7/7e/Schlagwortkatalog.jpg" data-background-position="center top" data-transition="side-in fade-out">
          <div style="color:#fff;background: rgba(0, 0, 0, 0.9);padding:20px;width:50%;float:right;">The subject catalogue of the University Library of Graz. The card shown refers to a text by Hans Schleimer who made up the rules for this catalogue. - <a href="https://en.wikipedia.org/wiki/Library_catalog">Image Source</a></div>
        </section>

        <section style="text-align: left;" data-background="https://upload.wikimedia.org/wikipedia/commons/f/f0/Card_Division_of_the_Library_of_Congress_3c18631u_original.jpg" data-background-position="center center" data-transition="side-in fade-out">
          <div style="color:#fff;background: rgba(0, 0, 0, 0.9);padding:20px;width:50%;float:right;">People working in Card Division in the Library of Congress, Washington, D.C., 1910s or 1920s - <a href="https://en.wikipedia.org/wiki/Library_catalog">Image Source</a></div>
        </section>

        <section style="text-align: left;" data-background="https://upload.wikimedia.org/wikipedia/commons/5/51/Dynix-Main-Menu-via-Telnet.jpg" data-background-position="center center" data-transition="side-in fade-out">
          <div style="color:#fff;background: rgba(0, 0, 0, 0.9);padding:20px;width:50%;float:right;">Dynix, an early but popular and long-lasting online catalog - <a href="https://en.wikipedia.org/wiki/Library_catalog">Image Source</a></div>
        </section>

        <section style="text-align: left;" data-background="https://upload.wikimedia.org/wikipedia/commons/c/cb/Librarian_at_the_card_files_at_a_senior_high_school_in_New_Ulm%2C_Minnesota.jpg" data-background-position="center top" data-transition="side-in fade-out">
          <div style="color:#fff;background: rgba(0, 0, 0, 0.9);padding:20px;width:50%;float:right;">Librarian at the card files at a senior high school in New Ulm, Minnesota (1974) - <a href="https://en.wikipedia.org/wiki/Library_catalog">Image Source</a></div>
        </section>

        <section>
          <h2 class="box"><a href="https://www.w3.org/TR/html/document-metadata.html#document-metadata">W3C HTML 5.2 Specification</a></h2>
          <h3>4.2. Document metadata</h3>
          <img src="img/W3C.svg" alt="W3C logo" style="width:240px;height:auto;border:none;border-radius:5px;">
          <div class="fragment">
            <p><code>
              &lt;head>&lt;/head><br>
              &lt;title>&lt;/title><br>
              &lt;base><br>
              &lt;link><br>
              &lt;meta><br>
              &lt;style>&lt;/style>
            </code></p>
          </div>
        </section>

        <section>
          <h3><code>&lt;head>&lt;/head></code></h3>
          <p>The head element represents a collection of metadata for the Document.</p>
          <ul>
            <li>As the first element in an html element.</li>
            <li>May be omitted if empty.</li>
          </ul>
        </section>

        <section>
          <h3><code>&lt;title>&lt;/title></code></h3>
          <p>The title element represents the document’s title or name.</p>
          <ul>
            <li>In a head element containing no other title elements.</li>
            <li>Neither tag is omissible.</li>
          </ul>
        </section>

        <section>
          <h3><code>&lt;base></code></h3>
          <p>The base element allows authors to specify the document base URL for the purposes of Parsing URLs, and the name of the default browsing context for the purposes of following hyperlinks.</p>
          <ul>
            <li>A base element must have either an href attribute, a target attribute, or both.</li>
            <li>In a head element containing no other base elements.</li>
            <li>No end tag.</li>
          </ul>
        </section>

        <section>
          <h3><code>&lt;link></code></h3>
          <p>The link element allows authors to link their document to other resources.</p>
          <h4>Attributes</h4>
          <ul style="font-size:60%">
            <li>Global Attributes</li>
            <li>href — Address of the hyperlink</li>
            <li>crossorigin — How the element handles crossorigin requests</li>
            <li>rel — Relationship of this document (or subsection/topic) to the destination resource</li>
            <li>rev — Reverse link relationship of the destination resource to this document (or subsection/topic)</li>
            <li>media — Applicable media</li>
            <li>nonce — Cryptographic nonce used in Content Security Policy checks [CSP3]</li>
            <li>hreflang — Language of the linked resource</li>
            <li>type — Hint for the type of the referenced resource</li>
            <li>referrerpolicy - Referrer policy for fetches initiated by the element</li>
            <li>sizes — Sizes of the icons (for rel="icon")</li>
            <li>title (global attribute) has special semantics on this element: Title of the link; alternative style sheet set name.</li>
          </ul>
        </section>

        <section>
          <h3><code>&lt;style>&lt;/style></code></h3>
          <p>Allows authors to embed style information in their documents.</p>
          <ul>
            <li>In head, body, or noscript</li>
            <li>Neither tag is omissible.</li>
          </ul>
        </section>

        <section>
          <h3><code>&lt;meta></code></h3>
          <p>The meta element represents various kinds of metadata that cannot be expressed using the title, base, link, style, and script elements.</p>

          <p>Document metadata is expressed in terms of name-value pairs, the name attribute on the meta element giving the name, and the content attribute on the same element giving the value.</p>
          <ul>
            <li>Except for some edge cases, use only in the &lt;head></li>
            <li>No end tag.</li>
          </ul>
        </section>

        <section>
          <h3><code>&lt;meta></code></h3>
          <h4>Name => Value(content)</h4>
          <p><code>
            &lt;meta
            <span class="fragment">name="description" </span>
            <span class="fragment">content="This session reviews implementing Schema.org schemas for structured data and current best practice meta tags in Drupal."></span>
            </code>
          </p>
        </section>

        <section>
          <h3><code>&lt;meta></code></h3>
          <h4>Standard metadata names</h4>
          <ul style="font-size:80%">
            <li><strong>application-name</strong> - The value must be a short free-form string giving the name of the Web application that the page represents.</li>
            <li><strong>author</strong> - The value must be a free-form string giving the name of one of the page’s authors.</li>
            <li><strong>description</strong> - The value must be a free-form string that describes the page.</li>
            <li><strong>generator</strong> - The value must be a free-form string that identifies one of the software packages used to generate the document.</li>
            <li><strong>keywords</strong> - The value must be a set of comma-separated tokens, each of which is a keyword relevant to the page.</li>
            <li><strong>referrer</strong> - The value must be a referrer policy, which defines the default referrer policy for the Document.</li>
          </ul>
        </section>

        <section>
          <h3><code>&lt;meta></code></h3>
          <h4>Pragma directives</h4>
          <p>In computer programming, a directive or pragma (from "pragmatic") is a language construct that specifies how a compiler (or other translator) should process its input. - <a href="https://en.wikipedia.org/wiki/Directive_(programming)">Wikipedia</a></p>
          <ul style="font-size:60%">
            <li><strong>content-language</strong> - This pragma sets the pragma-set default language. This feature is non-conforming. Authors are encouraged to use the lang attribute instead.</li>
            <li><strong>content-type</strong> - an alternative form of setting the charset attribute.</li>
            <li><strong>default-style</strong> - sets the name of the default alternative style sheet set.</li>
            <li><strong>refresh</strong> - acts as timed redirect.</li>
            <li><strong>set-cookie</strong> - sets an HTTP cookie. This feature is non-conforming. Real HTTP headers should be used instead.</li>
            <li><strong>x-ua-compatible</strong> - In practice, this pragma encourages Internet Explorer to more closely follow the specifications.</li>
            <li><strong>content-security-policy</strong> - enforces a Content Security Policy.</li>
          </ul>
        </section>

        <section>
          <h3><code>&lt;meta></code></h3>
          <h4>Other metadata names</h4>
          <p><a href="https://wiki.whatwg.org/wiki/MetaExtensions">Web Hypertext Application Technology Working Group (WHATWG) Meta Extensions</a></p>
        </section>

        <section>
          <h3><code>&lt;meta></code></h3>
          <h4>Make your own if you need to</h4>
          <ul>
            <li>&lt;meta name="category" content="Category One"></li>
            <li>&lt;meta name="tags" content="Tag 1, Tag 2"></li>
          </ul>
        </section>

        <section>
          <h3>Test and Verify</h3>
          <a href="https://w3c.github.io/developers/tools/"><img src="https://w3c.github.io/developers/img/W3C-Developers-Light.svg" alt="W3C Developers"></a>
          <p><a href="https://w3c.github.io/developers/tools/">W3C Developer Tools</a></p>
        </section>

        <section>
          <img src="img/logo-google.jpg" alt="Google" style="border:0;box-shadow:none;width:320px;">
          <h3><a href="https://support.google.com/webmasters/answer/79812?hl=en">Meta tags that Google understands</a></h3>
          <img src="img/result-google.png" alt="Google Search Result">
        </section>

        <section>
          <h3><a href="https://support.google.com/webmasters/answer/79812?hl=en">Meta tags that Google understands</a></h3>
          <ul>
            <li><code>&lt;title>The Title of the Page</code></li>
            <li><code>name="description"</code></li>
            <li><code>name="robots"</code></li>
            <li><code>name="googlebot"</code></li>
            <li><code>name="google" content="nositelinkssearchbox"</code></li>
            <li><code>name="google" content="notranslate"</code></li>
            <li><code>name="google-site-verification"</code></li>
            <li><code>http-equiv="Content-Type"</code></li>
            <li><code>charset="</code></li>
            <li><code>http-equiv="refresh"</code></li>
          </ul>
        </section>

        <section>
          <h3><a href="http://ogp.me/">Open Graph Protocol</a></h3>
          <img src="img/post-on-facebook.png" alt="Facebook card" style="width:360px;">
          <p>The Open Graph protocol enables any web page to become a rich object in a social graph. Used by Facebook, LinkedIn, Pinterest, &amp; Google+</p>
        </section>

        <section>
          <h3>Open Graph Protocol</h3>
          <h4>Required fields</h4>
          <ul>
            <li><code>og:title</code> - The title of your object as it should appear within the graph,
            e.g., "The Rock".</li>
            <li><code>og:type</code> - The type of your object, e.g., "video.movie".  Depending on
            the type you specify, other properties may also be required.</li>
            <li><code>og:image</code> - An image URL which should represent your object within the
            graph.</li>
            <li><code>og:url</code> - The canonical URL of your object that will be used as its
            permanent ID in the graph, e.g., "http://www.imdb.com/title/tt0117500/".</li>
          </ul>
        </section>

        <section>
          <h3>Open Graph Protocol</h3>
          <h4>Types</h4>
          <ul>
            <li>Music</li>
            <li>Video</li>
            <li>Article</li>
            <li>Book</li>
            <li>Profile</li>
            <li>Website</li>
          </ul>
        </section>

        <section>
          <h3>Test and Verify</h3>
          <ul>
            <li><a href="https://developers.facebook.com/tools/debug/" rel="nofollow">Facebook Debugger</a></li>
            <li><a href="http://developers.pinterest.com/rich_pins/validator/" rel="nofollow">Pinterest Validator</a></li>
            <li>LinkedIn - Share on linked in.  The revalidate, put a random variable at the end of a URL (like ?hjhjhj) to force them to refetch</li>
          </ul>
        </section>

        <section>
          <h3><a href="https://developer.twitter.com/en/docs/tweets/optimize-with-cards/overview/abouts-cards">Twitter Cards</a></h3>
          <img src="img/post-on-twitter.png" alt="Twitter card" style="width:360px;">
          <p>With Twitter Cards, you can attach rich photos, videos and media experiences to Tweets, helping to drive traffic to your website.</p>
        </section>

        <section>
          <h3>Twitter Cards</h3>
          <ul>
            <li>Summary card</li>
            <li>Summary with large image</li>
            <li>Player card</li>
            <li>App card</li>
          </ul>
        </section>

        <section>
          <h3>Test and Verify</h3>
          <ul>
            <li><a href="https://cards-dev.twitter.com/validator" rel="nofollow">Twitter Card validator</a></li>
          </ul>
        </section>

        <section style="text-align: left;" data-background="img/Lego-Uncle-Jim-by-the-Iceland-Map.jpg" data-background-position="center bottom" data-transition="zoom">
          <h2 style="padding:20px;width:60%;">Implementing Meta Tags in Drupal</h2>
        </section>

        <section>
          <h3><a href="https://www.drupal.org/project/metatag">Metatag Module</a></h3>
          <img src="img/drupal-metatag-module--modules.png" style="width: 75%;">
        </section>

        <section>
          <h3>Metatag Defaults</h3>
          <ul style="font-size: 75%;">
            <li>Set any meta tag for all instances of the entity</li>
            <li>Can be attached to any entities</li>
            <li>Children inherent the settings of parent (Cascading)</li>
            <li>Use Tokens to set values dynamically from entities</li>
          </ul>
          <img src="img/drupal-metatag-module--defaults.png" style="width: 50%;" alt="Metatag defaults">
        </section>

        <section>
          <h3>Metatag Form</h3>
          <img src="img/drupal-metatag-edit-form.png" alt="Metatag form" style="width: 75%;">
        </section>

        <section>
          <h3>Settings</h3>
          <img src="img/drupal-meta-tag-content-settings.png" alt="Drupal metatag content field settings" style="width: 75%;">
        </section>

        <section>
          <h3>Metatag Config</h3>
          <pre><code style="font-size: 85%;line-height: 1.25;">
    langcode: en
    status: true
    dependencies: {  }
    id: node
    label: Content
    tags:
      title: '[node:title] | [site:name]'
      image_src: '[node:field_image:entity:image]'
      description: '[node:summary]'
      og_image_height: '[node:field_image:entity:image:height]'
      og_type: article
      og_image: '[node:field_image:entity:image]'
      og_description: '[node:summary]'
      article_modified_time: '[node:changed:custom:c]'
      og_updated_time: '[node:changed:custom:c]'
      og_title: '[node:title] | [site:name]'
      og_image_width: '[node:field_image:entity:image:width]'
      og_image_type: '[node:field_image:entity:image:mimetype]'
      article_published_time: '[node:changed:custom:c]'
      twitter_cards_image: '[node:field_image:entity:image]'
      twitter_cards_title: '[node:title] | [site:name]'
      twitter_cards_image_height: '[node:field_image:entity:image:height]'
      twitter_cards_image_width: '[node:field_image:entity:image:width]'
      twitter_cards_description: '[node:summary]'
      twitter_cards_type: summary
          </code></pre>
        </section>

        <section>
          <h3>So many fields!</h3>
          <img src="img/metatag-full-of-fields.gif" alt="Drupal Metatag module fields">
          <p><small>Enabled Modules: Metatag, Metatag: Open Graph, Metatag: Twitter Cards</small></p>
        </section>

        <section>
          <h3>Metatag field</h3>
          <img src="img/adding-a-drupal-metatag-field.png" alt="Adding a meta tag field to a content type in Drupal">
        </section>

        <section>
          <h3>Metatag field</h3>
          <img src="img/drupal-metatag-field-on-node.gif" alt="Drupal meta tag field on a node">
        </section>

        <section>
          <h3>Things to think about for admins:</h3>
          <ul>
            <li class="fragment">Can be overwhelming for content creators</li>
            <li class="fragment">Can lead to mismanagement</li>
            <li class="fragment">Too many forms on the edit screen can be a performance issue.  <a href="https://www.drupal.org/project/metatag/issues/2691313">Patch that adds a settings form where you can identify the specific groups you want to display</a>.</li>
          </ul>
        </section>

        <section>
          <h3>Add fields for commonly<br>updated meta tags</h3>
          <ul>
            <li class="fragment">Teaser/Description</li>
            <li class="fragment">Image</li>
            <li class="fragment">* Image preset for Facebook (1200x628)</li>
            <li class="fragment">* Image preset for Twitter (1024x512)</li>
            <li class="fragment">Add Field Group to organize the edit form</li>
          </ul>
        </section>

        <section>
          <img src="img/teaser-image-field-on-drupal-edit-form.png" alt="Teaser and image field on a Drupal edit form">
        </section>

        <section>
          <h3>Summary</h3>
          <ul>
            <li>Install metatag module, enable any submodules needed</li>
            <li>Add fields needed to content types for items needing individual setting</li>
            <li>Set global meta tags</li>
            <li>Test and verify</li>
          </ul>
        </section>

        <section data-background="http://i.imgur.com/MKZwVkb.gif" class="image--byline">
          <small><a href="https://imgur.com/MKZwVkb">Image via Imgur</a></small>
        </section>

        <section style="text-align: left;" data-background="img/Lego-Uncle-Jim-at-Philly-City-Hall.jpg" data-background-position="center bottom" data-transition="zoom">
          <div class="fragment">
            <h1 class="box" style="float:right;padding:20px;background: rgba(0, 0, 0, 0.9);width:50%;">Schema</h1>
            <p style="color:#fff;background: rgba(0, 0, 0, 0.9);padding:20px;width:50%;float:right;"><a href="http://schema.org/">Schema.org</a> is a collaborative, community activity with a mission to create, maintain, and promote schemas for structured data on the Internet, on web pages, in email messages, and beyond.</p>
          </div>
        </section>

        <section>
          <h3>Most commonly used schemas</h3>
          <ul>
            <li>Creative works: <a href="http://schema.org/CreativeWork">CreativeWork</a>, <a href="http://schema.org/Book">Book</a>, <a href="http://schema.org/Movie">Movie</a>, <a href="http://schema.org/MusicRecording">MusicRecording</a>, <a href="http://schema.org/Recipe">Recipe</a>, <a href="http://schema.org/TVSeries">TVSeries</a> ...</li>
            <li>Embedded non-text objects: <a href="http://schema.org/AudioObject">AudioObject</a>, <a href="http://schema.org/ImageObject">ImageObject</a>, <a href="http://schema.org/VideoObject">VideoObject</a></li>
            <li><a href="http://schema.org/Event">Event</a></li>
            <li><a href="http://schema.org/docs/meddocs.html">Health and medical types</a>: notes on the health and medical types under <a href="http://schema.org/MedicalEntity">MedicalEntity</a>.</li>
            <li><a href="http://schema.org/Organization">Organization</a></li>
            <li><a href="http://schema.org/Person">Person</a></li>
            <li><a href="http://schema.org/Place">Place</a>, <a href="http://schema.org/LocalBusiness">LocalBusiness</a>, <a href="http://schema.org/Restaurant">Restaurant</a> ...</li>
            <li><a href="http://schema.org/Product">Product</a>, <a href="http://schema.org/Offer">Offer</a>, <a href="http://schema.org/AggregateOffer">AggregateOffer</a></li>
            <li><a href="http://schema.org/Review">Review</a>, <a href="../AggregateRating">AggregateRating</a></li>
            <li><a href="http://schema.org/Action">Action</a></li>
          </ul>
        </section>

        <section>
          <h3>Inline</h3>
          <pre><code>
    <div itemscope itemtype="http://schema.org/SportsTeam">
      <span itemprop="name">San Francisco 49ers</span>
      <div itemprop="member" itemscope itemtype="http://schema.org/OrganizationRole">
        <div itemprop="member" itemscope itemtype="http://schema.org/Person">
          <span itemprop="name">Joe Montana</span>
        </div>
        <span itemprop="startDate">1979</span>
        <span itemprop="endDate">1992</span>
        <span itemprop="roleName">Quarterback</span>
      </div>
    </div>
          </code></pre>
        </section>

        <section>
          <h3>RDFa</h3>
          <pre><code>
    <div vocab="http://schema.org/" typeof="SportsTeam">
      <span property="name">San Francisco 49ers</span>
      <div property="member" typeof="OrganizationRole">
        <div property="member" typeof="http://schema.org/Person">
          <span property="name">Joe Montana</span>
        </div>
        <span property="startDate">1979</span>
        <span property="endDate">1992</span>
        <span property="roleName">Quarterback</span>
      </div>
    </div>
          </code></pre>
        </section>

        <section>
          <h3>JSON-LD</h3>
          <pre><code>
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "SportsTeam",
      "name": "San Francisco 49ers",
      "member": {
        "@type": "OrganizationRole",
        "member": {
          "@type": "Person",
          "name": "Joe Montana"
        },
        "startDate": "1979",
        "endDate": "1992",
        "roleName": "Quarterback"
      }
    }
    </script>
          </code></pre>
        </section>

        <section>
          <img src="img/logo-google.jpg" alt="Google" style="border:0;box-shadow:none;width:320px;">
          <h3>What does Google care about?</h3>
          <p><a href="https://developers.google.com/search/docs/guides/search-gallery">Google Search Gallery</a></p>
        </section>

        <section>
          <h3>Test and Verify</h3>
          <p><a href="https://search.google.com/structured-data/testing-tool/u/0/">Google Structured Data Testing Tool</a></p>
        </section>

        <section style="text-align: left;" data-background="img/Lego-Uncle-Jim-at-Mini-Golfing.jpg" data-background-position="center top" data-transition="zoom">
          <h2 style="padding:20px;width:45%;">Implementing Schema.org in Drupal</h2>
        </section>

        <section>
          <h3><a href="https://www.drupal.org/project/schema_metatag">Schema.org Metatag Module</a></h3>
          <img src="img/drupal-schema-org-metatag-module--modules.png">
        </section>

        <section>
          <h3><a href="https://www.drupal.org/project/schema_metatag">Schema.org Metatag Module</a></h3>
          <ul>
            <li class="fragment">Extends the Metatag module</li>
            <li class="fragment">Add new forms to any meta tag defaults</li>
            <li class="fragment">Adds markup as JSON LD in the HEAD</li>
            <li class="fragment">Easily extendable</li>
          </ul>
        </section>

        <section>
          <h3>Schema.org top-level object types</h3>
          <ul style="font-size: 65%;">
            <li><a href="https://schema.org/Article" rel="nofollow">Schema.org/Article</a></li>
            <li><a href="https://schema.org/Organization" rel="nofollow">Schema.org/Organization </a></li>
            <li><a href="https://schema.org/Person" rel="nofollow">Schema.org/Person </a></li>
            <li><a href="https://schema.org/VideoObject" rel="nofollow">Schema.org/VideoObject </a></li>
            <li><a href="https://schema.org/ImageObject" rel="nofollow">Schema.org/ImageObject </a></li>
            <li><a href="https://schema.org/Event" rel="nofollow">Schema.org/Event</a></li>
            <li><a href="https://schema.org/Movie" rel="nofollow">Schema.org/Movie</a></li>
            <li><a href="https://schema.org/TVSeries" rel="nofollow">Schema.org/TVSeries</a></li>
            <li><a href="https://schema.org/TVSeason" rel="nofollow">Schema.org/TVSeason</a></li>
            <li><a href="https://schema.org/TVEpisode" rel="nofollow">Schema.org/TVEpisode</a></li>
            <li><a href="https://schema.org/JobPosting" rel="nofollow">Schema.org/JobPosting</a></li>
            <li><a href="https://schema.org/Recipe" rel="nofollow">Schema.org/Recipe</a></li>
            <li><a href="https://schema.org/Product" rel="nofollow">Schema.org/Product</a></li>
            <li><a href="https://schema.org/Service" rel="nofollow">Schema.org/Service</a></li>
            <li><a href="https://schema.org/Review" rel="nofollow">Schema.org/Review</a></li>
            <li><a href="https://schema.org/WebSite" rel="nofollow">Schema.org/WebSite </a></li>
            <li><a href="https://schema.org/WebPage" rel="nofollow">Schema.org/WebPage </a></li>
            <li><a href="https://schema.org/ItemList" rel="nofollow">Schema.org/ItemList </a> (for Views)</li>
          </ul>
        </section>

        <section>
          <h3>Schema.org second-level object types</h3>
          <ul style="font-size: 65%;">
            <li><a href="https://schema.org/Action" rel="nofollow">Schema.org/Action</a></li>
            <li><a href="https://schema.org/Address" rel="nofollow">Schema.org/Address</a></li>
            <li><a href="https://schema.org/Brand" rel="nofollow">Schema.org/Brand</a></li>
            <li><a href="https://schema.org/BreadcrumbList" rel="nofollow">Schema.org/BreadcrumbList</a></li>
            <li><a href="https://schema.org/Country" rel="nofollow">Schema.org/Country</a></li>
            <li><a href="https://schema.org/MonetaryAmount" rel="nofollow">Schema.org/MonetaryAmount</a></li>
            <li><a href="https://schema.org/NutritionInformation" rel="nofollow">Schema.org/NutritionInformation</a></li>
            <li><a href="https://schema.org/Offer" rel="nofollow">Schema.org/Offer</a></li>
            <li><a href="https://schema.org/OpeningHoursSpecification" rel="nofollow">Schema.org/OpeningHoursSpecification</a></li>
            <li><a href="https://schema.org/Organization" rel="nofollow">Schema.org/Organization</a></li>
            <li><a href="https://schema.org/Person" rel="nofollow">Schema.org/Person</a></li>
            <li><a href="https://schema.org/Place" rel="nofollow">Schema.org/Place</a></li>
            <li><a href="https://schema.org/ProgramMembership" rel="nofollow">Schema.org/ProgramMembership</a></li>
            <li><a href="https://schema.org/Rating" rel="nofollow">Schema.org/Rating</a></li>
            <li><a href="https://schema.org/Rating" rel="nofollow">Schema.org/Review</a></li>
          </ul>
        </section>

        <section>
          <h3>Schemas every site needs</h3>
          <ul>
            <li>Breadcrumbs</li>
            <li>Organization</li>
            <li>* Corporate Contact</li>
            <li>* Logo</li>
            <li>* Social Profile (sameAs)</li>
            <li>WebSite</li>
            <li>* SearchAction</li>
          </ul>
        </section>

        <section>
          <h3>Content specific schemas</h3>
          <ul>
            <li>Article</li>
            <li>Book</li>
            <li>Course</li>
            <li>Dateset</li>
            <li>Events</li>
            <li>Fact Check</li>
            <li>Job Posting</li>
            <li>Local Business</li>
            <li>Occupation</li>
            <li>Podcast</li>
            <li>Product</li>
            <li>Recipe</li>
            <li>Review</li>
            <li>Video</li>
          </ul>
        </section>

        <section>
          <h3>Schema.org Website Form</h3>
          <img src="img/drupal-schema-metatag-website-form.png" alt="Schema.org Website Form" style="width:60%">
        </section>

        <section>
          <h3>Schema.org Website Output</h3>
          <pre><code>
            <script type="application/ld+json">{
              "@context": "https://schema.org",
              "@graph": [
                  {
                      "@type": "WebSite",
                      "@id": "https://bp.jimbir.ch/",
                      "name": "Bootstrap Paragraphs",
                      "url": "https://bp.jimbir.ch/",
                      "potentialAction": {
                          "@type": "SearchAction",
                          "query": "https://bp.jimbir.ch/search?q={search_term_string}",
                          "query-input": "search_term_string"
                      },
                      "publisher": {
                          "@type": "Person",
                          "@id": "https://bp.jimbir.ch/",
                          "name": "Jim Birch",
                          "url": "https://bp.jimbir.ch/",
                          "sameAs": "https://www.drupal.org/project/bootstrap_paragraphs"
                      }
                  }
              ]
            }</script>
          </code></pre>
        </section>

        <section>
          <h3>Metatag defaults<br>for each content type</h3>
          <img src="img/metatag-defaults-content-types.png" alt="Drupal meta tag defaults separated by content type">
        </section>

        <section>
          <h3>Drupal Schema.org Person Metatag</h3>
          <img src="img/drupal-schema-metatag-author.gif" alt="Drupal Schema.org Person Metatag">
        </section>

        <section>
          <h3>Summary</h3>
          <ul>
            <li>Install Schema.org metatag module, enable any submodules needed</li>
            <li>Configure metatag defaults per content type</li>
            <li>Test and verify</li>
          </ul>
        </section>

        <section data-background="https://media.giphy.com/media/bYUbS6XYDi3Ze/giphy.gif" class="image--byline">
          <small><a href="https://giphy.com/gifs/cute-cats-bYUbS6XYDi3Ze">Image via GIPHY</a></small>
        </section>

        <section style="text-align: left;" data-background="img/Lego-Uncle-Jim-at-the-infinity-pool-2.jpg">
          <h1 style="padding-left:20px;">The End</h1>
          <h3 style="padding-left:20px;">Continuing the conversation:</h3>
          <div style="color:#fff;display:inline-block;background: rgba(0, 0, 0, 0.7);padding-left:20px;width:75%">
            <img src="img/D4D.svg" alt="Design 4 Drupal 2018" style="float: left; width: 130px; padding:10px;height: auto;"><br>
            <div class="box" style="float: left;padding-left:20px;margin-top:-30px">
              <a href="http://jimbir.ch">Jim Birch</a><br>
              <a href="http://twitter.com/thejimbirch">@thejimbirch</a><br>
              <a href="http://jimbir.ch/presentations/meta-schema-drupal/">jimbir.ch/meta-schema-drupal</a>
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
