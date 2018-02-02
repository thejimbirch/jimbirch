<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Holistic SEO and Drupal 8 | Web Development Presentation</title>
    <meta name="description" content="This presentation reviews the most common search engine ranking factors and how to take a holistic approach to SEO best practices when developing in Drupal."/>
    <link rel="canonical" href="http://jimbir.ch/presentations/holistic-seo/"/>
    <meta property="og:site_name" content="Jim Birch"/>
    <meta property="og:type" content="public_figure"/>
    <meta property="og:url" content="http://jimbir.ch/presentations/holistic-seo/"/>
    <meta property="og:title" content="Holistic SEO and Drupal 8 | Web Development Presentation"/>
    <meta property="og:description" content="This presentation reviews the most common search engine ranking factors and how to take a holistic approach to SEO best practices when developing in Drupal."/>
    <meta property="og:image" content="http://jimbir.ch/presentations/holistic-seo/img/Lego-Uncle-Jim-Blogs.jpg"/>
    <meta name="twitter:site" content="@thejimbirch"/>
    <meta name="twitter:site:id" content="2989027096"/>
    <meta name="twitter:creator" content="@thejimbirch"/>
    <meta name="twitter:creator:id" content="2989027096"/>
    <meta name="twitter:url" content="http://jimbir.ch/presentations/holistic-seo/"/>
    <meta name="twitter:title" content="Holistic SEO and Drupal 8 | Web Development Presentation"/>
    <meta name="twitter:description" content="This presentation reviews the most common search engine ranking factors and how to take a holistic approach to SEO best practices when developing in Drupal."/>
    <meta name="twitter:image:src" content="http://jimbir.ch/presentations/holistic-seo/img/Lego-Uncle-Jim-Blogs.jpg"/>
    <meta itemprop="name" content="Holistic SEO and Drupal 8 | Web Development Presentation"/>
    <meta itemprop="description" content="This presentation reviews the most common search engine ranking factors and how to take a holistic approach to SEO best practices when developing in Drupal."/>
    <meta itemprop="image" content="http://jimbir.ch/presentations/holistic-seo/img/Lego-Uncle-Jim-Blogs.jpg"/>
    <meta name="author" content="Jim Birch">

    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">

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
      .reveal h1,
      .reveal h2,
      .reveal h3,
      .reveal h4,
      .reveal h5,
      .reveal h6,
      .reveal .box {
        background: rgba(0, 0, 0, 0.85) none repeat scroll 0 0;
        border-radius: 5px;
        color: #fff;
        padding: 20px;
        text-shadow: 1px 1px 1px rgba(0,0,0,0.4);
      }

      .reveal .box a {
        border-bottom: 1px dotted #ededed;
        color: #fff;
      }

      .reveal .box--width-50 {
        float: left;
        width: 50%;
      }

      .reveal .box--width-60 {
        float: left;
        width: 60%;
      }

      .reveal .box--width-65 {
        float: left;
        width: 65%;
      }

      .reveal .box--width-70 {
        float: left;
        width: 70%;
      }

      .reveal .box--width-75 {
        float: left;
        width: 75%;
      }

      .reveal .box--width-80 {
        float: left;
        width: 80%;
      }

      .reveal .box--width-85 {
        float: left;
        width: 85%;
      }

      .reveal section img {
        border: 1px solid rgba(0, 0, 0, 0.5);
        border-radius: 5px;
        margin-top: 0;
        margin-bottom: 0;
      }

      .reveal section img.logo--dark {
        background: rgba(0, 0, 0, 0.85) none repeat scroll 0 0;
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

      .reveal .logos {
        display: block;
        width: 100%;
      }

      .reveal .logos img {
        float: left;
        margin-bottom: 15px;
        margin-left: 2%;
        max-height: 100%;
        max-width: 100%;
        width: 31.7%;
      }

      .reveal .logos img:first-child,
      .reveal .logos img:nth-child(4),
      .reveal .logos img:nth-child(7) {
        margin-left: 0;
      }

      .backgrounds .slide-background {
        background-position: bottom center;
      }

      html.background--top .backgrounds .slide-background {
        background-position: top center;
      }

      .reveal .controls {
        bottom: 14px;
      }

      .navigate-down,
      .navigate-up {
        display: none;
      }

      .fixed-footer {
        position: fixed;
        bottom: 20px;
        left: 30px;
        width: 95%;
        margin: 0 auto;
        z-index: 1000;
      }

      .fixed-footer a {
        color: #111;
      }

      .fixed-footer .fixed-footer--left {
        float: left;
      }

      .fixed-footer .fixed-footer--right {
        float: right;
      }

      .fixed-footer > div {
        font-size: 16px;
      }

      .fixed-footer .fixed-footer--logo {
        height: 14px;
        width: auto;
      }

      @media print {
        .fixed-footer {
          display: none;
        }
      }

      .reveal .text--left {
        text-align: left;
      }

      .reveal .text--red {
        color: #ff0000;
      }

      .reveal .text--huge {
        font-size: 600%;
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
      <!-- Any section element inside of this container is displayed as a slide -->
      <div class="fixed-footer">
        <div class="fixed-footer--left"><a href="http://jimbir.ch/presentations/holistic-seo/">jimbir.ch/holistic-seo</a> | <a href="http://www.twitter.com/thejimbirch" title="@thejimbirch">@thejimbirch</a></div>
        <div class="fixed-footer--right"><a href="http://www.xenomedia.com" title="Xeno Media, Inc"><img src="img/xeno-media-logo.png" alt="Xeno Media, Inc" class="fixed-footer--logo"></a></div>
      </div>
      <div class="slides">
        <section class="text--left" data-background="img/Lego-Uncle-Jim-Blogs.jpg" data-state="background--top">
          <h1 class="box--width-65">Holistic SEO &amp; Drupal 8</h1>
          <h4 class="box box--width-65"">Best practices for an ever changing search landscape</h4>
          <div class="box box--width-65">
            Created by <a href="http://jimbir.ch">Jim Birch</a><br>
            <a href="http://jimbir.ch/presentations/holistic-seo">jimbir.ch/holistic-seo</a><br>
            <a href="http://twitter.com/thejimbirch">@thejimbirch</a><br>
            <a href="http://www.xenomedia.com">Xeno Media, Inc.</a>
          </div>
        </section>

        <section class="text--left" data-background="img/Lego-Uncle-Jim-in-Greece-by-the-steps.jpg">
          <p class="fragment box box--width-60"><strong>Holistic SEO</strong> is a term used to describe development in which content, marketing, technical SEO, performance, security, user experience and user intent come together to create an ideal url on the internet, about a certain topic.</p>
        </section>

        <section class="text--left" data-background="img/Lego-Uncle-Jim-at-Xeno.jpg">
          <h1 class="fragment box">Why take a Holistic approach to seo?</h1>
          <p class="fragment box box--width-85">It defines a set of repeatable, best practices that aids development and ultimately benefits the user.</p>
          <p class="fragment box box--width-85">As search engine algorithms get more personalized, complex and intelligent, we won't be able to control or predict changes.</p>
        </section>

        <section>
          <h2>This presentation is for those responsible for:</h2>
          <div class="columns">
            <div class="fragment column--50">
              <h3>Content</h3>
              <ul>
                <li>Research</li>
                <li>Create &amp; Analyze</li>
                <li>Report &amp; Refine</li>
              </ul>
            </div>
            <div class="fragment column--50">
              <h3>Development</h3>
              <ul>
                <li>Plan</li>
                <li>Build</li>
                <li>Test</li>
              </ul>
            </div>
          </div>
        </section>

        <section>
          <h2>Who are the search engines?</h2>
          <div class="logos">
            <img src="img/logo--google.png" alt="Google">
            <img src="img/logo--youtube.png" alt="YouTube">
            <img src="img/logo--amazon.png" alt="Amazon">
            <img src="img/logo--facebook.png" alt="Facebook">
            <img src="img/logo--bing.png" alt="Bing">
            <img src="img/logo--baidu.png" alt="Baidu (China)">
            <img src="img/logo--yandex.png" alt="Yandex (Russia)">
          </div>
        </section>

        <section>
          <h2>Web search engines</h2>
          <ul>
            <li class="fragment">Google - <a href="https://www.searchenginejournal.com/googles-share-search-ad-market-projected-grow-80-2019/189993/">75% of global search ad market</a></li>
            <li class="fragment">Bing - <a href="https://arstechnica.com/gadgets/2017/08/bing-is-bigger-than-you-think-microsoft-boasts-at-33-of-us-searches/">9% global, Claims 33% US!</a></li>
            <li class="fragment">Baidu - <a href="https://www.searchenginejournal.com/seo-101/meet-search-engines/">82% market share in China</a></li>
            <li class="fragment">Yandex - <a href="https://www.searchenginejournal.com/seo-101/meet-search-engines/">More than 50% market share in Russia</a></li>
          </ul>
        </section>

        <section>
          <h2>Platform specific search engines</h2>
          <ul>
            <li>YouTube</li>
            <li>Amazon</li>
            <li>Facebook</li>
          </ul>
          <p>Optimizing content (videos, products, posts, etc..) published on these sites is similar to what we do for the web.</p>
        </section>

        <section class="text--left" data-background="img/Lego-Uncle-Jim-in-Greece-Bay-View.jpg">
          <h1 class="fragment box--width-60">The scale of search</h1>
        </section>

        <section>
          <img src="img/logo--search-engine-land.png" alt="Search Engine Land">
          <h2>On May 24th, 2016 Google revealed that users make at least <em><u>2 trillion</u></em> searches per year worldwide</h2>
          <p><small><a href="http://searchengineland.com/google-now-handles-2-999-trillion-searches-per-year-250247">Google now handles at least 2 trillion searches per year - Danny Sullivan, Search Engine Land</a></small></p>
        </section>

        <section>
          <img src="img/logo--search-engine-land.png" alt="Search Engine Land">
          <h3>How that breaks down</h3>
          <ul>
            <li>Searches per year: 2 trillion</li>
            <li class="fragment">Searches per month: 167 billion</li>
            <li class="fragment">Searches per day: 5.5 billion</li>
            <li class="fragment">Searches per hour: 228 million</li>
            <li class="fragment">Searches per minute: 3.8 million</li>
            <li class="fragment">Searches per second: 63,000</li>
            <li class="fragment">...at least...</li>
          </ul>
        </section>

        <section>
          <p style="margin: 0 auto; width: 50%;">Since then no one from Google has talked about the number of searches.</p>
        </section>

        <section>
          <img src="img/logo--moz.png" alt="Moz">
          <img src="img/logo--jumpshot.png" alt="Moz" class="logo--dark">
          <p>Some great analysis has been done by Rand Fishkin on Moz.com using estimated Clickstream Data from Jumpshot.</p>
          <p>The following chart shows an increase in search volume of US searches with an average well over 40B per month.</p>
          <p>That would be +/-1/2 trillion annual US searches.</p>
        </section>

        <section>
          <a href="https://moz.com/rand/seo-opportunity-growing-shrinking/"><img src="https://dc8hdnsmzapvm.cloudfront.net/rand/wp-content/uploads/2017/12/JS-monthly-searches-2015-2017.gif" alt="Chart of US Searches by Rand Fishkin from Moz"></a>
          <p><small><a href="https://moz.com/rand/seo-opportunity-growing-shrinking/">Is SEO Opportunity Growing or Shrinking? - Rand Fishkin, Moz Founder December 17th, 2017</a></small></p>
        </section>

        <section class="text--left" data-background="img/Lego-Uncle-Jim-at-Fermilab.jpg">
          <h1 class="fragment box box--width-60">The search</h1>
        </section>

        <section>
          <h2>Three basic types of searches</h2>
          <ul>
            <li class="fragment">Navigational<br>
              <small>Searcher want to go somewhere, online or offline.</small>
            </li>
            <li class="fragment">Informational<br>
              <small>Searcher want to learn something.</small>
            </li>
            <li class="fragment">Transactional<br>
              <small>Searcher want to buy, sell, sign up, etc.</small>
            </li>
          </ul>
        </section>

        <section>
          <img src="img/exact-match-page.jpg" alt="a page we created containing a very specific search term">
          <p>Once upon a time, we were able to create small pieces of keyword specific content...<br>
          <small><a href="http://jimbir.ch/kr2fowdogudo999dvwdlkvnldkvn">kr2fowdogudo999dvwdlkvnldkvn</a></small></p>
        </section>

        <section>
          <img src="img/exact-match.jpg" alt="ranking for a very specific search term">
          <p>And we were able to get it to rank on the search engines!</p>
        </section>

        <section>
          <img src="img/floor-finish/Hardwood-Floor-Finishes-Best-Hardwood-Floor-Finish-HouseLogic-top.png" alt="Floor Finish Guide">
          <p>These days, one piece of holisticly created content can be returned for different worded search terms.</p>
        </section>

        <section>
          <p>HouseLogic.com's <a href="https://www.houselogic.com/remodel/windows-doors-and-floors/hardwood-floor-finishes/">Guide to Hardwood Floor Finishes</a></p>
          <p>Is listed for the following search terms:</p>
          <ul class="fragment">
            <li>hardwood floor finishes</li>
            <li>wood floor finish</li>
            <li>how to finish a hardwood floor</li>
            <li>wood floor finishing</li>
          </ul>
        </section>

        <section>
          <p>It is a very well written article in an excellently architected site from a domain with value that has lots of links to it.</p>
          <ul class="fragment">
            <li>Nice big image</li>
            <li>Over 1000 words</li>
            <li>Great meta tags</li>
            <li>JSON-LD Markup</li>
            <li>Fast</li>
            <li>Mobile</li>
            <li>and more</li>
        </section>

        <section>
          <div class="columns">
            <div class="column--50">
              <img src="img/floor-finish/hardwood-floor-finishes.png" alt="search results - hardwood floor finishes">
            </div>
            <div class="column--50">
              <h3>hardwood floor finishes</h3>
              <ul>
                <li class="fragment">Primarily Informational</li>
                <li class="fragment">Has some Transactional elements</li>
                <li class="fragment">Lots of informative links, and a shopping box.</li>
                <li class="fragment">We also have similar results for "wood floor finish"</li>
              </ul>
            </div>
          </div>
        </section>

        <section>
          <img src="img/floor-finish/wood-floor-finish.png" alt="search results - wood floor finish">
        </section>

        <section>
          <div class="columns">
            <div class="column--50">
              <img src="img/floor-finish/how-to-finish-a-hardwood-floor.png" alt="search results - how to finish a hardwood floor">
            </div>
            <div class="column--50">
              <h3>how to finish a hardwood floor</h3>
              <p>Informational Search</p>
              <ul>
                <li class="fragment">Knowledge box and videos all are "How to"</li>
                <li class="fragment">Knowledge box is from the 7th result, same site as our page</li>
                <li class="fragment">Our page is a product guide, not a How to, but the information is still percieved as valuable.</li>
              </ul>
            </div>
          </div>
        </section>

        <section>
          <div class="columns">
            <div class="column--50">
              <img src="img/floor-finish/wood-floor-finishing.png" alt="search results - wood floor finishing">
            </div>
            <div class="column--50">
              <h3>Wood Floor Finishing</h3>
              <p>Transactional Search</p>
              <ul>
                <li class="fragment">Business listing showing companies near me</li>
                <li class="fragment">Yelp business reviews, and Home advisor business listings</li>
                <li class="fragment">Contractor websites</li>
                <li class="fragment">The page in question does not fit in with Transactions, but is still listed!</li>
              </ul>
            </div>
          </div>
        </section>

        <section>
          <h3>rekkyvajavick coffee</h3>
          <h4>How Americans search for coffee in Iceland</h4>
          <img src="img/coffee-search.jpg" alt="search results - coffee in Iceland">
        </section>

        <section>
          <img src="img/lil-bub-video.jpg" alt="Little Bub Video">
          <p>An example showing how semantic Google is.</p></p>
        </section>

        <section>
          <h2>little bub fireplace</h2>
          <img src="img/lil-bub-video-search-result.jpg" alt="searching for little bub fireplace on google">
          <p>Now, Google knows the piece of content I need, even if I get 2 of the 3 words wrong!</p>
          <p><small>"little" nor "fireplace" exist on the page, yet I get the result.</small></p>
        </section>

        <section>
          <div class="columns">
            <div class="column--50">Add Search result screenshot</div>
            <div class="column--50">
              <h2>Wedding dresses</h2>
              <p>Transactional Search</p>
              <ul>
                <li class="fragment">Category pages on retailer/manufacturer sites.</li>
                <li class="fragment">What else?</li>
                <li class="fragment"><small>Note: No big topic pages.  Searcher intent is to find dresses, not learn about the history, or how to make, etc...</small></li>
              </ul>
            </div>
        </section>

        <section>
          <iframe width="555" height="312" src="https://www.youtube.com/embed/ZuHZSbPJhaY" frameborder="0" allowfullscreen></iframe>
          <p class="text--left">Google is</p>
          <ul>
            <li class="fragment"><strong>Topic based</strong>: Returns good content that is related, but not specific to the search term.</li>
            <li class="fragment"><strong>Semantic</strong>: Understands synonyms, pluralities, misspellings, homonyms and more</li>
            <li class="fragment">Focused on <strong>User Intent</strong>: What the user is trying to achieve.</li>
          </ul>
        </section>

        <section class="text--left" data-background="img/Lego-Uncle-Jim-in-the-Jungle.jpg">
          <h1 class="fragment box--width-75">Search Engine Results Pages (SERPs)</h1>
        </section>

        <section>
          <h2>Anatomy of a SERP</h2>
          <ul>
            <li class="fragment">List of results</li>
            <li class="fragment">Ads</li>
            <li class="fragment">Search Features</li>
            <li class="fragment">Related Searches</li>
          </ul>
        </section>

        <section>
          <h2>Analysis of a Result</h2>
          <ul>
            <li class="fragment">Title</li>
            <li class="fragment">Description</li>
            <li class="fragment">Breadcrumbs</li>
            <li class="fragment">Sitelinks</li>
            <li class="fragment">Site Search</li>
            <li class="fragment">Google Cache link</li>
          </ul>
        </section>

        <section>
          <h2>Search features</h2>
          <p class="text--left">Also known as Featured Snippets, Search features one way Google is trying to provide their users with answers faster.</p>
        </section>

        <section>
          <h2>How to rank for Search features</h2>
          <ul>
            <li class="fragment">Topic Research</li>
            <li class="fragment">Write copy that answers questions</li>
            <li class="fragment">Semantic HTML including ordered and unordered lists, tables and paragraphs</li>
            <li class="fragment">Structured markup using Schema.org vocabularies inline or using JSON-LD</li>
          </ul>
        </section>

        <section>
          <h2>Learn more about Search features</h2>
          <ul>
            <li class="fragment"><a href="https://developers.google.com/search/docs/guides/search-gallery">Google Search Feature Gallery</a></li>
            <li class="fragment"><a href="https://blog.google/products/search/reintroduction-googles-featured-snippets/">A reintroduction to Google’s featured snippets</a></li>
            <li class="fragment"><a href="https://www.semrush.com/blog/large-scale-study-how-to-rank-for-featured-snippets-in-2018/">Large-Scale Study: How to Rank for Featured Snippets in 2018</a></li>
          </ul>
        </section>

        <section class="text--left" data-background="img/Lego-Uncle-Jim-in-the-cabana.jpg">
          <h1 class="fragment box box--width-85">Search Engine Ranking Factors</h1>
          <p class="fragment box box--width-60"><strong>Search engine ranking factors</strong> are on- and off-site items that search engines use to evaluate a web property's placement in the search results for a certain query.</p>
        </section>

        <section>
          <ul>
            <li>Each search engine has their own algorithm to how they weigh factors.</li>
            <li class="fragment">On occasion, Google will publish factors. Pay attention!
              <ul>
                <li><a href="https://webmasters.googleblog.com/2015/02/finding-more-mobile-friendly-search.html" target="_blank">Mobilegeddon</a></li>
                <li><a href="https://webmasters.googleblog.com/2014/05/making-your-site-more-mobile-friendly.html" target="_blank">Page Speed</a></li>
                <li><a href="https://webmasters.googleblog.com/2015/12/indexing-https-pages-by-default.html">HTTPS</a></li>
                <li><a href="https://webmasters.googleblog.com/2016/08/amp-your-content-preview-of-amped.html" target="_blank">AMP'ed results in Search</a></li>
                <li><a href="https://webmasters.googleblog.com/2017/12/rich-results-tester.html">Schema markup</a> (<a href="https://webmasters.googleblog.com/2016/09/showcase-your-sites-reviews-in-search.html">Reviews in Search</a>), (<a href="https://webmasters.googleblog.com/2016/05/introducing-rich-cards.html">Rich cards</a>)</li>
                <li><a href="http://searchengineland.com/google-divide-index-giving-mobile-users-better-fresher-content-261037">Separate Mobile Search Index</a> (<a href="https://webmasters.googleblog.com/2017/12/getting-your-site-ready-for-mobile.html">Getting ready</a>)</li>
              </ul>
            </li>
            <li class="fragment">Factors can be ranked differently for each and every search based on multiple factors like, location, device, time, perceived user intent, etc!</li>
          </ul>
        </section>

        <section>
          <h3>There are possibly</h3>
          <h4 class="text--huge">200</h4>
          <h3>ranking factors</h3>
          <p>
            <small><a href="http://backlinko.com/google-ranking-factors">Google’s 200 Ranking Factors: The Complete List - Backlinko</a></small><br>
            <small><a href="https://www.searchenginejournal.com/infographic-googles-200-ranking-factors/64316/">Google's 200 Ranking Factors - Search Engine Journal</a></small><br>
            <small><a href="https://webmasters.googleblog.com/2016/09/penguin-is-now-part-of-our-core.html">Penguin is now part of our core algorithm - Google Webmaster Central Blog</a></small>
          </p>
        </section>

        <section>
          <h2>Those who monitor and interpret Search Engine Ranking Factors</h2>
          <ul>
            <li class="fragment"><a href="http://backlinko.com/google-ranking-factors">Backlinko</li>
            <li class="fragment"><a href="http://searchengineland.com/now-know-googles-top-three-search-ranking-factors-245882">Search Engine Land</a></li>
            <li class="fragment"><a href="http://www.searchmetrics.com/knowledge-base/ranking-factors/">Searchmetrics</a></li>
            <li class="fragment"><a href="https://moz.com/search-ranking-factors">Moz</a></li>
          </ul>
        </section>

        <section>
          <img src="img/logo--backlinko.png" alt="Backlinko" class="logo--dark">
          <h2>According to Backlinko, there are over 200 Search Engine Ranking Factors</h2>
          <p>"Some are proven. Some are controversial. Others are SEO nerd speculation. But they’re all here." - <a href="http://backlinko.com/google-ranking-factors">Google’s 200 Ranking Factors: The Complete List by Brian Dean</a>
        </section>

        <section>
          <p><small><a href="http://searchengineland.com/seotable">The Periodic Table of SEO Success Factors</a></small></p>
          <a href="http://searchengineland.com/seotable"><img src="http://searchengineland.com/figz/wp-content/seloads/2011/06/periodic-table-of-seo-2015.png" alt="The Periodic Table Of SEO Success Factors"></a>
          <p><small><a href="http://searchengineland.com/seotable">Search Engine Land - The Periodic Table Of SEO Success Factors</a></small></p>
        </section>

        <section>
          <p><small><a href="http://www.searchmetrics.com/knowledge-base/ranking-factors/">2016 Searchmetrics General Search Ranking Factors</a></small></p>
          <a href="http://www.searchmetrics.com/knowledge-base/ranking-factors/"><img src="http://www.searchmetrics.com/wp-content/uploads/Searchmetrics-Ranking-Factors-Infographic-EN.jpg?x98318" alt="Searchmetrics General Ranking Factors 2016"></a>
        </section>

        <section>
          <img alt="Searchmetrics" src="img/logo--searchmetrics.png">
          <p>After 2016, Searchmetrics started publishing <a href="https://www.searchmetrics.com/knowledge-base/ranking-factors-industry/">detailed industry reports</a> to show the difference in factors by industry.</p>
          <ul>
            <li>Travel</li>
            <li>eCommerce</li>
            <li>Finance</li>
            <li>Health</li>
            <li>Media</li>
          </ul>
        </section>

        <section>
          <img alt="Moz" src="img/logo--moz.png">
          <p><a href="https://moz.com/search-ranking-factors">Search Engine Ranking Factors 2015<br>Expert Survey and Correlation Data</a></p>
          <p>"Every two years, Moz surveys the opinions of dozens of the world's brightest search marketers and runs correlation studies to better understand the workings of search engine algorithms."</p>
        </section>

        <section>
          <img src="img/logo--search-engine-land.png" alt="Search Engine Land">
          <p>On Mar 23, 2016 Google's Andrey Lipattsevm stated that <strong>links</strong>, <strong>content</strong> and <strong>RankBrain</strong> are the top three ranking signals in Google's search algorithm.</p>
          <p><small><a href="http://searchengineland.com/now-know-googles-top-three-search-ranking-factors-245882">Now we know: Here are Google's top 3 search ranking factors - Barry Schwartz, Search Engine Land</a></small></p>
        </section>

        <section>
          <h2>Links</h2>
          <ul>
            <li class="fragment">
              Quality of links<br>
              <small>Each link is graded on where it comes from, quality of domain, URL, place on page, etc...</small>
            </li>
            <li class="fragment">
              Keywords in links<br>
              <small>Are the keywords for the topic in the link to your page?</small>
            </li>
            <li class="fragment">
              Quantity<br>
              <small>How many links does your piece of content need?</small>
            </li>
          </ul>
        </section>

        <section>
          <h2>Content</h2>
          <ul>
            <li class="fragment">
              Quality writing<br>
              <small>Are you smarter than a 5th grader?  Your content should be.</small>
            </li>
            <li class="fragment">
              Keyword Research<br>
              <small>Is your writing using enough keywords from the topic your searchers are looking for?</small>
            </li>
            <li class="fragment">
              Freshness<br>
              <small>Is the content new, or has it been updated recently?</small>
            </li>
            <li class="fragment">
              Images, Video, News related to content or vertical<br>
              <small>Does the content provide other value beyond words about the topic?</small>
            </li>
            <li class="fragment">
              Does the content answer questions?<br>
              <small>For informational searches, people are entering questions into Google.  Answer them!</small>
            </li>
          </ul>
        </section>

        <section>
          <h2>What is Rankbrain?</h2>
          <ul>
            <li class="fragment">RankBrain is a machine learning artificial intelligence system ... </li>
            <li class="fragment">If RankBrain sees a word or phrase it isn’t familiar with, the machine can make a guess as to what words or phrases might have a similar meaning and filter the result accordingly, making it more effective at handling never-before-seen search queries or keywords. - <a href="https://en.wikipedia.org/wiki/RankBrain">Wikipedia</a></li>
          </ul>
        </section>

        <section>
          <h2>Learn more about Rankbrain</h2>
          <ul>
            <li><a href="https://www.searchenginejournal.com/google-rankbrain-affect-seo-2016/162153/">How to Use Google RankBrain in SEO</a></li>
            <li><a href="http://searchengineland.com/faq-all-about-the-new-google-rankbrain-algorithm-234440">FAQ: All About The New Google RankBrain Algorithm</a></li>
            <li><a href="http://techcrunch.com/2016/06/04/artificial-intelligence-is-changing-seo-faster-than-you-think/">Artificial intelligence is changing SEO faster than you think</a></li>
            <li><a href="https://moz.com/blog/optimizing-for-rankbrain-whiteboard-friday">Optimizing for RankBrain... Should We Do It? (Is It Even Possible?)</a></li>
            <li><a href="https://moz.com/blog/seo-trek-the-search-for-google-rankbrain-new-data">SEO Trek: The Search for Google RankBrain* [New Data]</a></li>
            <li><a href="http://www.outbrain.com/blog/content-marketing-and-seo">Content Marketing and SEO</a></li>
            <li><a href="http://searchengineland.com/four-pillars-future-seo-259590">The four pillars of the future of SEO</a></li>
            <li><a href="https://moz.com/learn/seo/google-rankbrain">What is Google Rankbrain?</a></li>
        </section>

        <section class="text--left" data-background="img/Lego-Uncle-Jim-at-the-Turkish-Cafe.jpg">
          <h1 class="fragment box--width-75">Technical SEO best practices in Drupal 8</h1>
        </section>

        <section>
          <h2>Ranking Factor Categories</h2>
          <div class="columns">
            <div class="column--50">
              <h3>On Site</h3>
              <ul>
                <li>Content</li>
                <li>Architecture</li>
                <li>HTML</li>
              </ul>
            </div>
            <div class="column--50">
              <h3>Off Site</h3>
              <ul>
                <li>Trust</li>
                <li>Links</li>
                <li>Personal</li>
                <li>Social</li>
              </ul>
            </div>
          </div>
        </section>

        <section>
          <h2>Content</h2>
          <ul>
            <li class="fragment">Are the pages well written?</li>
            <li class="fragment">Does it include keywords and phrases around your topic?</li>
            <li class="fragment">Is the content new?</li>
            <li class="fragment">Does the content include related content (Images, News, Video, etc)?</li>
            <li class="fragment">Does the content answer questions?</li>
            <li class="fragment text--red">Negative Factor: Is the Content thin?</li>
          </ul>
        </section>

        <section>
          <h2>Architecture</h2>
          <h3>Is the site easily crawlable?</h3>
          <ul>
            <li class="fragment">Well thought out, keyboard navigable menu</li>
            <li class="fragment">Breadcrumbs with <a href="https://schema.org/BreadcrumbList">Schema.org Markup</a></li>
            <li class="fragment"><a href="https://www.drupal.org/project/sitemap">Drupal Sitemap module (HTML)</a></li>
            <li class="fragment"><a href="https://www.drupal.org/project/simple_sitemap">Drupal Simple XML Sitemap module (D8)</a></li>
            <li class="fragment"><a href="https://www.drupal.org/project/xmlsitemap">Drupal XML Sitemap module (D7)</a></li>
            <li class="fragment">Friendly URLs from <a href="https://www.drupal.org/project/pathauto">Drupal Pathauto module</a></li>
          </ul>
        </section>

        <section>
          <h2>Architecture</h2>
          <h3>No Duplicate content</h3>
          <ul>
            <li class="fragment"><a href="https://www.drupal.org/project/redirect">Redirect module</a></li>
            <li class="fragment"><a href="https://www.drupal.org/project/metatag">Metatag module</a>
              <ul>
                <li class="fragment">Set Canonical URL</li>
                <li class="fragment">Set Robots noindex, nofollow tags where needed</li>
              </ul>
            </li>
          </ul>
        </section>

        <section>
          <h2>Architecture</h2>
          <h3>Does the site work on mobile?</h3>
          <p>Make sure you use a responsive theme, and it passes the <a href="https://www.google.com/webmasters/tools/mobile-friendly/">Google Mobile-Friendly Test</a></p>
          <p class="fragment">Consider adding Accelerated Mobile Pages (AMP) structured markup to your site. <a href="https://www.drupal.org/project/amp">Drupal AMP module</a>.</p>
        </section>

        <section>
          <h2>Architecture</h2>
          <h3>Does the site load quickly?</h3>
          <ul>
            <li class="fragment">So many different types of Caching available in Drupal.</li>
            <li class="fragment">CDN like <a href="https://www.cloudflare.com">Cloudflare</a></li>
            <li class="fragment">Responsive Images/Small image sizes in Image Presets</li>
          </ul>
        </section>

        <section>
          <h2>Architecture</h2>
          <h3>Does the site contain keywords in the url?</h3>
          <p>Use the <a href="https://www.drupal.org/project/pathauto">Pathauto module</a> to set friendly URLs</p>
        </section>

        <section>
          <h2>Architecture</h2>
          <h3>Is the site secure?</h3>
          <ul>
            <li class="fragment">Use HTTPS with an SSL certificate for all sites here on out.</li>
            <li class="fragment">Keep core and all modules up to date</li>
            <li class="fragment">Limit server access, and keep server up to date if not managed</li>
            <li class="fragment">Require strong passwords - <a href="https://www.drupal.org/project/password_policy">Require Strong Passwords module</a></li>
          </ul>
        </section>

        <section>
          <h2>Architecture</h2>
          <h3>Cloaking</h3>
          <p class="text--red">Negative Factor: Showing different content to humans and search engines.</p>
        </section>

        <section>
          <h2>HTML</h2>
          <h3>Does the Page Title contain keywords?</h3>
          <p>Properly set up html title using Token values in Metatag module</p>
        </section>

        <section>
          <h2>HTML</h2>
          <h3>Does the Meta Description describe the pages?</h3>
          <ul>
            <li class="fragment">Add a "Teaser" field which can be used with the Token and Metatag modules for meta description and search results.</li>
            <li class="fragment">Same goes for a Feature Image field, used for OG/Twitter Card Meta Images.</li>
          </ul>
        </section>

        <section>
          <h2>HTML</h2>
          <h3>Does the Meta Description describe the pages?</h3>
          <img src="img/teaser-and-image-field.png" alt="Teaser and Image Field on XenoMedia.com">
        </section>

        <section>
          <h2>HTML</h2>
          <h3>Does the site use Structured data?</h3>
          <p><a href="http://schema.org/">Schema.org</a> markup in content &amp; themes</p>
            <pre>
              <code>
<div itemscope itemtype="http://schema.org/BroadcastService">
  <span itemprop="name">WAAY-TV</span>
  <span itemprop="broadcastDisplayName">ABC</span>
  <span itemprop="videoFormat">SD</span>
  <span itemprop="broadcastTimezone" content="-8:00">PST</span>
  <div itemprop="broadcastAffiliateOf" itemscope itemtype="http://schema.org/Organization">
    <span itemprop="name">ABC</span>
  </div>
</div>
              </code>
            </pre>
        </section>

        <section>
          <h2>HTML</h2>
          <h3>Does the site use Structured data?</h3>
          <p><a href="http://json-ld.org/">JavaScript Object Notation for Linked Data (JSON-LD)</a><br>View block/pane using a contextual filter</p>
            <pre>
              <code>
<script type="application/ld+json">
{
  "@context":"http://schema.org",
  "@type":"BroadcastService",
  "name":"WAAY-TV",
  "broadcastDisplayName":"ABC",
  "videoFormat":"SD",
  "broadcastTimezone": "-8:00",
  "broadcastAffiliateOf":{
    "@type":"Organization",
    "name":"ABC"
  }
}
</script>
              </code>
            </pre>
        </section>

        <section>
          <h2>HTML</h2>
          <h3>Does the site use Structured data?</h3>
          <p><a href="http://ogp.me/">Open Graph Protocol</a><br>The Open Graph protocol enables any web page to become a rich object in a social graph.</p>
          <p><small><a href="https://developers.facebook.com/tools/debug/">Facebook Debugger</a></small></p>
          <pre>
            <code>
<meta property="og:site_name" content="jimbir.ch"/>
<meta property="og:type" content="public_figure"/>
<meta property="og:url" content="http://jimbir.ch/blog/one-or-multiple-make-bootstrap-carousel-multiple-value-drupal-field"/>
<meta property="og:title" content="One or Multiple. Make a Bootstrap Carousel from a Multiple Value Drupal Field"/>
<meta property="og:description" content="Earlier this week I wrote how to create a Bootstrap Carousel using the Drupal Paragraphs module.  We can modify this approach to add a Bootstrap Carousel on a field.  I use this most on nodes that have a Featured Image field, one where we can use as a hero image, and one where we can set the Open Graph Meta image on a per node basis."/>
<meta property="og:image" content="http://jimbir.ch/sites/default/files/img/blog/Lego%20Uncle%20Jim%20in%20Greece%20at%20the%20cafe.JPG"/>
            </code>
          </pre>
        </section>

        <section>
          <h2>HTML</h2>
          <h3>Does the site use Structured data?</h3>
          <p><a href="https://dev.twitter.com/cards/overview">Twitter Cards</a><br>With Twitter Cards, you can attach rich photos, videos and media experiences to Tweets.</p>
          <p><small><a href="https://cards-dev.twitter.com/validator">Twitter Card Validator</a></small></p>
          <pre>
            <code>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:site" content="@thejimbirch"/>
<meta name="twitter:site:id" content="2989027096"/>
<meta name="twitter:creator" content="@thejimbirch"/>
<meta name="twitter:creator:id" content="2989027096"/>
<meta name="twitter:url" content="http://jimbir.ch/blog/one-or-multiple-make-bootstrap-carousel-multiple-value-drupal-field"/>
<meta name="twitter:title" content="One or Multiple. Make a Bootstrap Carousel from a Multiple Value Drupal Field"/>
<meta name="twitter:description" content="Earlier this week I wrote how to create a Bootstrap Carousel using the Drupal Paragraphs module.  We can modify this approach to add a Bootstrap Carousel on a field.  I use this most on nodes that have a Featured Image field, one where we can use as a hero image, and one where we can set the Open Graph Meta image on a per node basis."/>
<meta name="twitter:image" content="http://jimbir.ch/sites/default/files/img/blog/Lego%20Uncle%20Jim%20in%20Greece%20at%20the%20cafe.JPG"/>
            </code>
          </pre>
        </section>

        <section>
          <h2>HTML</h2>
          <h3>Does the site use Structured data?</h3>
          <p><a href="https://www.ampproject.org/">Accelerated Mobile Pages (AMP)</a><br>Allows publishers to create mobile optimized content <u>on Google</u>.<br>
          <small><a href="https://www.drupal.org/project/amp">AMP Drupal Module</a></small></p>
          <img src="https://www.drupal.org/files/styles/grid-3/public/project-images/drupal-amp-text-white-on-blue.png?itok=tKWMe9fA" alt="Drupal AMP Drupal Module">
        </section>

        <section>
          <h2>HTML</h2>
          <h3>Does the site use Structured data?</h3>
          <p><a href="https://instantarticles.fb.com/">Facebook Instant Articles</a><br>Allows publishers to create fast, interactive articles <u>on Facebook</u>.<br>
          <small><a href="https://www.drupal.org/project/fb_instant_articles">Facebook Instant Articles Drupal Module</a></small></p>
          <img src="img/Drupal-Facebook-Instant-Articles.png" alt="Facebook Instant Articles Drupal Module">
        </section>

        <section>
          <h2>HTML</h2>
          <h3>Proper use of headers</h3>
          <ul>
            <li class="fragment">Proper, ordered use of h1, h2, h3</li>
            <li class="fragment">Remove h1 from WYSIWYG if set by template</li>
            <li class="fragment">In the theme, remove h3 from block headers, to reserve for content use.</li>
          </ul>
          <p class="fragment">This is also good for Accessibility.  As a rule of thumb, what is good for A11Y is good for SEO.</p>
        </section>

        <section>
          <h2>HTML</h2>
          <h3 class="text--red">Negative Factors: Hiding and Stuffing</h3>
          <ul>
            <li class="text--red">Don't overuse keywords just for Search engines.</li>
            <li class="text--red">Don't use CSS or JS to hide words you want to be ranked for.</li>
          </ul>
        </section>

        <section>
          <h2>Offsite Factors</h2>
          <h3>Trust</h3>
          <ul>
            <li><b>Authority:</b> Is the site a trusted authority? External links</li>
            <li><b>Engage:</b> Bounce Rate</li>
            <li><b>History:</b> Has the domain/site been around?</li>
            <li><b>Identity:</b> </li>
            <li class="text--red"><b>Negative Factor - Piracy:</b> Flagged for pirated content</li>
            <li class="text--red"><b>Negative Factor - Ads:</b> Too many ads above the fold</li>
          </ul>
        </section>

        <section>
          <h2>Offsite Factors</h2>
          <h3>Links</h3>
          <ul>
            <li><b>Quality:</b> Links, shares, social</li>
            <li><b>Text:</b> Bounce Rate</li>
            <li><b>Number:</b> Has the domain/site been around?</li>
            <li class="text--red"><b>Negative Factor - Paid Links:</b> Don't buy links!</li>
            <li class="text--red"><b>Negative Factor - Spam:</b> Comment/Forum Spam</li>
          </ul>
        </section>

        <section>
          <h2>Offsite Factors</h2>
          <h3>Personal</h3>
          <ul>
            <li><b>Country:</b> Same country as searcher</li>
            <li><b>Locality:</b> Same city/town</li>
            <li><b>History:</b> Has the user visited the site before?</li>
            <li><b>Social:</b> Has the site been shared in circles?</li>
          </ul>
        </section>

        <section>
          <h2>Offsite Factors</h2>
          <h3>Social</h3>
          <ul>
            <li><b>Reputation:</b> Is your site respected on social networks?</li>
            <li><b>Shares:</b> Content shares</li>
          </ul>
        </section>

<section class="text--left" data-background="img/Lego-Uncle-Jim-at-the-Parthenon.jpg">
          <h1 class="fragment box--width-70">Tools for Content</h1>
        </section>

        <section>
          <h2>Tools for those responsible for Content</h2>
          <ul>
            <li>Research</li>
            <li>Create &amp; Analyze</li>
            <li>Report &amp; Refine</li>
          </ul>
        </section>

        <section>
          <h2>Research</h2>
          <h3>Tools to Analyze Keywords/Topics/SERPS</h3>
          <ul>
            <li><a href="https://ahrefs.com/keywords-explorer/">Ahrefs Keywords Explorer</a></li>
            <li><a href="https://adwords.google.com/KeywordPlanner">Google AdWords Keyword Planner</a></li>
            <li><a href="http://longtailpro.com/">Long Tail Pro</a></li>
            <li><a href="https://moz.com/products/pro/keyword-explorer">Moz Keyword Explorer</a></li>
            <li><a href="https://www.searchmetrics.com/essentials/">Searchmetrics Essentials</li>
            <li><a href="https://www.seoquake.com/index.html">SEO Quake Browser Plugin</a></li>
            <li><a href="https://www.spyfu.com/keyword/serp-analysis">SpyFu SERP Analysis</a></li>
          </ul>
        </section>

        <section>
          <h2>Research</h2>
          <h3>Competitor/Topic Analysis</h3>
          <ul>
            <li><a href="https://www.alexa.com/">Alexa</a></li>
            <li><a href="http://buzzsumo.com/">Buzzsumo</a></li>
            <li><a href="https://www.ispionage.com/">iSpionage</a></li>
            <li><a href="https://majestic.com/">Majestic</a></li>
            <li><a href="https://moz.com/researchtools/ose/">Moz Open Site Explorer</a></li>
            <li><a href="https://www.semrush.com/">SEMrush</a></li>
            <li><a href="https://www.similarweb.com/">SimilarWeb</a></li>
          </ul>
          <p>See also: Robbie Richards' <a href="http://www.robbierichards.com/seo/best-seo-tools/">The Best SEO Tools: 143 SEO Experts Cast Their Votes (Plus Leaderboard)</a>.</p>
        </section>

        <section>
          <h2>Create &amp; Analyze</h2>
          <h3>Tools to analyze content</h3>
          <ul>
            <li><a href="https://www.drupal.org/project/yoast_seo">Real-time SEO for Drupal</a></li>
            <li><a href="https://www.drupal.org/project/yoast_seo/issues/2917280">Real-time SEO for Drupal (Node Preview Sandbox)</a></li>
            <li><a href="https://readability-score.com/">Readability Score</a></li>
            <li><a href="https://datayze.com/readability-analyzer.php">Readability Analyzer</a></li>
            <li><a href="https://www.searchmetrics.com/content/">Searchmetrics Content Experience</a></li>
          </ul>
        </section>

        <section>
          <h2>Report &amp; Refine</h2>
          <h3>Tools to report on performance</h3>
          <ul>
            <li><a href="https://analytics.google.com">Google Analytics</a></li>
            <li><a href="https://www.google.com/webmasters/tools/">Google Search Console</a></li>
            <li><a href="https://matomo.org/">Matomo (Formerly Piwik)</a></li>
            <li><a href="https://www.bing.com/toolbox/webmaster">Bing Webmaster Tools</a></li>
          </ul>
        </section>

        <section class="text--left" data-background="img/Lego-Uncle-Jim-and-the-Acheivement-Duck.jpg">
          <h1 class="fragment box--width-70">Tools for Development</h1>
        </section>

        <section>
          <h2>Tips &amp; Tools for Developers</h2>
          <ul>
            <li><a href="https://builtwith.com/">BuiltWith</a></li>
            <li><a href="https://developers.facebook.com/tools/debug/">Facebook Sharing Debugger (Open Graph Protocol)</a></li>
            <li><a href="https://cards-dev.twitter.com/validator">Twitter's Card validator</a></li>
            <li><a href="https://developers.google.com/web/">Google Defines Best Practices</a></li>
            <li><a href="https://search.google.com/structured-data/testing-tool/u/0/">Google Structured Data Testing Tool (Schema)</a></li>
            <li><a href="https://www.google.com/webmasters/markup-helper/u/1/?hl=en">Google Structured Data Markup Helper (Schema)</a></li>
            <li><a href="https://developers.google.com/speed/pagespeed/insights/">Google PageSpeed Insights</a></li>
            <li><a href="https://www.google.com/webmasters/tools/mobile-friendly/">Google Mobile-Friendly Test</a></li>
            <li><a href="https://www.google.com/webmasters/markup-tester/u/1?hl=en">Google Email Markup Tester</a></li>
            <li><a href="https://www.google.com/webmasters/#?modal_active=none">Google Search Console</a></li>
            <li><a href="https://search.google.com/search-console/amp">Google Amp Test</a></li>
            <li>Lighthouse</li>
          </ul>
        </section>

        <section>
          <h2>Google Search Console</h2>
          <p>Has the following tools:</p>
          <ul>
            <li>View (and fix) Crawl Errors</li>
            <li>Fetch as Google</li>
            <li>robots.txt Tester</li>
            <li>Submit Sitemaps</li>
            <li>Configure URL Parameters</li>
          </ul>
        </section>

        <section>
          <h2>Google Search Quality Raters</h2>
          <ul>
            <li><a href="https://searchengineland.com/library/google/google-search-quality-raters">Google contracts with over 10,000 search quality raters worldwide to evaluate its search results.</a></li>
            <li class="fragment"><a href="https://moz.com/blog/google-search-quality-raters-guidelines">Quality raters themselves have no bearing on the rankings of the sites they rate.</a></li>
            <li class="fragment"><a href="https://static.googleusercontent.com/media/www.google.com/en//insidesearch/howsearchworks/assets/searchqualityevaluatorguidelines.pdf">Google Search Quality Evaluator Guidelines (160 Page PDF)</a></li>
          </ul>
        </section>

        <section>
          <h2>Stay up to date:</h2>
          <ul>
            <li><a href="http://searchengineland.com/">Search Engine Land</a></li>
            <li><a href="http://searchenginejournal.com/">Search Engine Journal</a></li>
            <li><a href="http://blog.searchmetrics.com/us/">Searchmetrics Blog</a></li>
            <li><a href="https://moz.com/blog">Moz Blog</a></li>
            <li><a href="https://webmasters.googleblog.com/">Google Webmasters</a></li>
        </section>

        <section class="text--left" data-background="img/Lego-Uncle-Jim-at-Sunset.jpg">
          <h1>THE END</h1>
          <h3>Continuing the conversation:</h3>
          <p class="box box--width-60">
            Created by <a href="http://jimbir.ch">Jim Birch</a><br>
            <a href="http://jimbir.ch/presentations/holistic-seo">jimbir.ch/holistic-seo</a><br>
            <a href="http://twitter.com/thejimbirch">@thejimbirch</a><br>
            <a href="http://www.xenomedia.com">Xeno Media, Inc.</a>
          </p>
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
