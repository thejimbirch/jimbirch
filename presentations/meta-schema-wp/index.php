<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Meta and Schema: Defining the Content about your Content | Web Development Presentation | WordCamp Chicago 2018</title>
		<meta name="description" content="This session will review implementing Schema.org schemas for structured data and current best practice meta tags in WordPress."/>
		<link rel="canonical" href="http://jimbir.ch/presentations/meta-schema-wp/"/>
		<meta property="og:site_name" content="Jim Birch"/>
		<meta property="og:type" content="public_figure"/>
		<meta property="og:url" content="http://jimbir.ch/presentations/meta-schema-wp/"/>
		<meta property="og:title" content="Meta and Schema: Defining the Content about your Content | Web Development Presentation | WordCamp Chicago 2018"/>
		<meta property="og:description" content="This session will review implementing Schema.org schemas for structured data and current best practice meta tags in WordPress."/>
		<meta property="og:image" content="img/meta-schema-wp-720.jpg"/>
		<meta name="twitter:site" content="@thejimbirch"/>
		<meta name="twitter:site:id" content="2989027096"/>
		<meta name="twitter:creator" content="@thejimbirch"/>
		<meta name="twitter:creator:id" content="2989027096"/>
		<meta name="twitter:url" content="http://jimbir.ch/presentations/meta-schema-wp/"/>
		<meta name="twitter:title" content="Meta and Schema: Defining the Content about your Content | Web Development Presentation | WordCamp Chicago 2018"/>
		<meta name="twitter:description" content="This session will review implementing Schema.org schemas for structured data and current best practice meta tags in WordPress."/>
		<meta name="twitter:image:src" content="img/meta-schema-wp-720.jpg"/>
		<meta itemprop="name" content="Meta and Schema: Defining the Content about your Content | Web Development Presentation | WordCamp Chicago 2018"/>
		<meta itemprop="description" content="This session will review implementing Schema.org schemas for structured data and current best practice meta tags in WordPress."/>
		<meta itemprop="image" content="img/img/meta-schema-wp-720.jpg"/>
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
			.reveal h1, .reveal h2, .reveal h3, .reveal h4, .reveal h5, .reveal h6 {
				background: rgba(0, 0, 0, 0.7) none repeat scroll 0 0;
				color: #fff;
				text-shadow: 1px 1px 1px rgba(0,0,0,0.4)
			}

			.reveal .box a,
			.fixed-footer a,
			.reveal h1 a {
		    color: #9dcccc;
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
				color: #9dcccc;
				position:fixed;
				bottom:20px;
				left:30px;
				width:95%;
				margin:0 auto;
				z-index:1000;
			}

			.fixed-footer > div,
			.fixed-footer > div > a {
				font-size: 16px;
			}

			@media print {
		    .fixed-footer {
		        display: none;
		    }
			}

			.grid-item {
				float: left;
				min-height: 250px;
				width: 25%
			}

			.reveal section .grid-item img {
				margin: 0;
			}

			code {
				color: #ffa837;
			}

			.reveal pre {
				margin: 0 auto 0 -12.5%;
				width: 125%;
			}

			.reveal pre code {
				max-height: none;
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
				<div style="float:left;"><a href="http://jimbir.ch/presentations/meta-schema-wp/">jimbir.ch/meta-schema-wp</a></div>
        <div style="float:right;"><a href="http://www.twitter.com/thejimbirch" title="@thejimbirch">@thejimbirch</a></div>
			</div>
			<div class="slides">
				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-in-Iceland.jpg" data-transition="zoom">
					<h1 style="font-size:2.25em;padding-left:20px;width:75%">Meta and Schema</h1>
          <h2 style="padding-left:20px;width:70%">Defining the Content about your Content</h1>
					<div style="color:#fff;display:inline-block;background: rgba(0, 0, 0, 0.7);padding-left:20px;width:70%">
						<img src="img/wordcamp-chicago-2018.png" alt="WordCamp Chicago 2018" style="float: left; width: 130px; padding:10px;height: auto;"><br>
						<div class="box" style="float: left;padding-left:20px;padding-bottom:20px;margin-top:-30px">
							<a href="http://jimbir.ch">Jim Birch</a><br>
							<a href="http://twitter.com/thejimbirch">@thejimbirch</a><br>
							<a href="http://jimbir.ch/presentations/meta-schema-wp/">jimbir.ch/meta-schema-wp</a><br>
						</div>
					</div>
				</section>

				<section style="text-align: left;" data-background="img/Lego-Uncle-Jim-at-MidCamp.jpg" data-background-position="center top">
					<div class="fragment">
						<h1 class="box" style="float:right;padding-left:20px;background: rgba(0, 0, 0, 0.9);width:50%;">Meta</h1>
						<p style="color:#fff;background: rgba(0, 0, 0, 0.9);padding:20px 0 20px 20px;width:50%;float:right;">Meta (from the Greek preposition and prefix meta- (μετά-) meaning "after", or "beyond") is a prefix used in English to indicate a concept which is an abstraction behind another concept, used to complete or add to the latter. - <a href="https://en.wikipedia.org/wiki/Meta">Wikipedia</a></p>
					</div>
				</section>

        <section>
          <img src="img/meta-images-and-logos.jpg" alt="Screenshots of pages shared on social networks and search engine results">
        </section>

				<section>
					<h2 class="box"><a href="https://www.w3.org/TR/html/document-metadata.html#document-metadata">W3C HTML 5.2 Specification</a></h2>
          <h3>4.2. Document metadata</h3>
					<div class="fragment">
            <pre><code>
              &lt;head>&lt;/head>
              <title></title>
              <base>
              <link>
              <meta>
              <style></style>
            </code></pre>
          </div>
				</section>

        <section>
          <h3>&lt;head>&lt;/head></h3>
          <p>The head element represents a collection of metadata for the Document.</p>
          <ul>
            <li>As the first element in an html element.</li>
            <li>May be omitted if empty.</li>
          </ul>
        </section>

        <section>
          <h3>&lt;title>&lt;/title></h3>
          <p>The title element represents the document’s title or name.</p>
          <ul>
            <li>In a head element containing no other title elements.</li>
            <li>Neither tag is omissible.</li>
          </ul>
        </section>

        <section>
          <h3>&lt;base></h3>
          <p>The base element allows authors to specify the document base URL for the purposes of Parsing URLs, and the name of the default browsing context for the purposes of following hyperlinks.</p>
          <ul>
            <li>A base element must have either an href attribute, a target attribute, or both.</li>
            <li>In a head element containing no other base elements.</li>
            <li>No end tag.</li>
          </ul>
        </section>

        <section>
          <h3>&lt;link></h3>
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
          <h3>&lt;style>&lt;/style></h3>
          <p>Allows authors to embed style information in their documents.</p>
          <ul>
            <li>In head, body, or noscript</li>
            <li>Neither tag is omissible.</li>
          </ul>
        </section>

        <section>
          <h3>&lt;meta></h3>
          <p>The meta element represents various kinds of metadata that cannot be expressed using the title, base, link, style, and script elements.</p>

          <p>Document metadata is expressed in terms of name-value pairs, the name attribute on the meta element giving the name, and the content attribute on the same element giving the value.</p>
          <ul>
            <li>Except for some edge cases, use only in the &lt;head></li>
            <li>No end tag.</li>
          </ul>
        </section>

        <meta name="description" content="This session will review implementing Schema.org schemas for structured data and current best practice meta tags in WordPress."/>

        <section>
          <h3>&lt;meta></h3>
          <h4>Name => Value(content)</h4>
          <p>
            &lt;meta
            <span class="fragment">name="description" </span>
            <span class="fragment">content="This session will review implementing Schema.org schemas for structured data and current best practice meta tags in WordPress."></span>
          </p>
        </section>

        <section>
          <h3>&lt;meta></h3>
          <h4>Attributes</h4>
          <ul>
            <li>name — Metadata name</li>
            <li>content — Value of the element</li>
            <li>http-equiv — Pragma directive</li>
            <li>charset — Character encoding declaration</li>
          </ul>
        </section>

        <section>
          <h3>&lt;meta></h3>
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
          <h3>&lt;meta></h3>
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
          <h3>&lt;meta></h3>
          <h4>Other metadata names</h4>
          <p><a href="https://wiki.whatwg.org/wiki/MetaExtensions">Web Hypertext Application Technology Working Group (WHATWG) Meta Extensions</a></p>
        </section>

        <section>
          <h3>Test and Verify</h3>
          <a href="https://w3c.github.io/developers/tools/"></a><img src="https://w3c.github.io/developers/img/W3C-Developers-Light.svg" alt="W3C Developers">
          <p><a href="https://w3c.github.io/developers/tools/">W3C Developer Tools Test Suite</a></p>
        </section>

        <section>
          <h3><a href="https://support.google.com/webmasters/answer/79812?hl=en">Meta tags that Google understands</a></h3>
          <p>Google understands the following meta tags (and related items):</p>
          <ul>
            <li>&lt;meta name="description"</li>
            <li>&lt;title>The Title of the Page</li>
            <li>&lt;meta name="robots"</li>
            <li>&lt;meta name="googlebot"</li>
            <li>&lt;meta name="google" content="nositelinkssearchbox"</li>
            <li>&lt;meta name="google" content="notranslate"</li>
            <li>&lt;meta name="google-site-verification"</li>
            <li>&lt;meta http-equiv="Content-Type"</li>
            <li>&lt;meta charset="</li>
            <li>&lt;meta http-equiv="refresh"</li>
          </ul>
        </section>

        <section>
          <h3><a href="http://ogp.me/">Open Graph Protocol</a></h3>
          <img src="img/result-facebook.png" alt="Facebook card" style="width:360px;">
          <p>The Open Graph protocol enables any web page to become a rich object in a social graph. Used by Facebook, LinkedIn, Pinterest, &amp; Google+</p>
        </section>

        <section>
          <h3>Open Graph Protocol</h3>
          <h4>Required fields</h4>
          <ul>
            <li><code>og:title</code> - The title of your object as it should appear within the graph,
            e.g., "The Rock".</li>
            <li><code>og:type</code> - The <a href="#types">type</a> of your object, e.g., "video.movie".  Depending on
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
          <img src="img/result-twitter.png" alt="Twitter card" style="width:360px;">
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
            <li><a href="https://cards-dev.twitter.com/validator" rel="nofollow">Twitter Developer Card validator</a></li>
          </ul>
        </section>

        <section>
          <h3>Implementing in WordPress</h3>
          <h4>Plugins</h4>
          <p><a href="https://yoast.com/wordpress/plugins/seo/">Yoast SEO</a></p>
          <img src="img/yoast-open-graph.png" style="width: 75%;">
        </section>

        <section>
          <h3>Implementing in WordPress</h3>
          <h4>Plugins</h4>
          <p><a href="https://yoast.com/wordpress/plugins/seo/">Yoast SEO</a></p>
          <img src="img/yoast-twitter.png" style="width: 75%;">
        </section>

        <section>
          <h3>Implementing in WordPress</h3>
          <h4>Theme</h4>
          <pre><code>
&lt;?php if ( has_post_thumbnail() && is_single() ) { ?>
    &lt;?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <meta property="og:image" content="<?php echo $url; ?>" />
    &lt;?php } elseif ( has_post_thumbnail() && is_front_page() ) { ?>
        <meta property="og:image" content="/wp-content/uploads/2015/01/VColony2.jpg" />
    &lt;?php } else { ?>
        <meta property="og:image" content="/wp-content/themes/wordpress-bootstrap-child/library/img/Cats-In-My-Yard-Logo-1024.png" />
&lt;?php }?>
          </code></pre>
        </section>

        <section style="text-align: left;" data-background="img/Lego-Uncle-Jim-at-Philly-City-Hall.jpg" data-background-position="center bottom">
          <div class="fragment">
            <h1 class="box" style="float:right;padding-left:20px;background: rgba(0, 0, 0, 0.9);width:50%;">Schema</h1>
            <p style="color:#fff;background: rgba(0, 0, 0, 0.9);padding:20px 0 20px 20px;width:50%;float:right;">Schema.org is a collaborative, community activity with a mission to create, maintain, and promote schemas for structured data on the Internet, on web pages, in email messages, and beyond.</p>
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
          <h3>What does Google care about?</h3>
          <p><a href="https://developers.google.com/search/docs/guides/search-gallery">Google Search Gallery</a></p>
        </section>

        <section>
          <h3>Implementing in WordPress</h3>
          <h4>Plugins</h4>
          <p><a href="https://yoast.com/wordpress/plugins/seo/">Yoast SEO</a></p>
          <img src="img/yoast-knowledge-graph.png" style="width: 75%;">
        </section>

        <section>
          <h3>Implementing in WordPress</h3>
          <h4>Plugins</h4>
          <p><a href="https://yoast.com/wordpress/plugins/seo/">Yoast SEO</a></p>
          <img src="img/yoast-social-sameas.png" style="width: 75%;">
        </section>

        <section>
          <h3>Implementing in WordPress</h3>
          <h4>Plugins</h4>
          <p><a href="https://yoast.com/wordpress/plugins/seo/">Yoast SEO</a></p>
          <img src="img/yoast-social-sameas.png" style="width: 75%;">
        </section>

        <section>
          <h3>Implementing in WordPress</h3>
          <h4>Plugins</h4>
          <p><a href="https://wordpress.org/plugins/schema/">Schema</a> plugin supports these schema.org types, and can be extended.</p>
          <ul style="font-size:70%;">
            <li>
              Article
              <ul>
                <li>General</li>
                <li>BlogPosting</li>
                <li>NewsArticle</li>
                <li>Report</li>
                <li>ScholarlyArticle</li>
                <li>TechArticle</li>
              </ul>
            </li>
            <li>Blog (for Blog posts list page)</li>
            <li>BreadcrumbList (for Breadcrumbs)</li>
            <li>CollectionPage (for Categories)</li>
            <li>AboutPage (for the about page)</li>
            <li>ContactPage (for the contact page)</li>
            <li>Person (author archive)</li>
          </ul>
        </section>

        <section>
          <h3>Test and Verify</h3>
          <p><a href="https://search.google.com/structured-data/testing-tool/u/0/">Google Structured Data Testing Tool</a></p>
        </section>

				<section style="text-align: left;" data-background="img/Lego-Uncle-Jim-at-Sunset.jpg">
					<h1 style="padding-left:20px;">The End</h1>
					<h3 style="padding-left:20px;">Continuing the conversation:</h3>
					<div class="box" style="color:#fff;display:inline-block;background: rgba(0, 0, 0, 0.7);padding:20px;">
						<a href="http://jimbir.ch">Jim Birch</a><br>
						<a href="http://twitter.com/thejimbirch">@thejimbirch</a><br>
						<a href="http://jimbir.ch/presentations/meta-schema-wp/">jimbir.ch/meta-schema-wp</a> - Presentation<br>
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
