<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Bootstrap Framework and Drupal | Web Development Presentation</title>
		<meta name="description" content="This presentation reviews what makes up the Bootstrap framework; advantages and disadvantages of using Bootsrap, and all the possible ways to use Bootstrap with Drupal."/>
		<link rel="canonical" href="http://jimbir.ch/presentations/bootstrap/"/>
		<meta property="og:site_name" content="Jim Birch"/>
		<meta property="og:type" content="public_figure"/>
		<meta property="og:url" content="http://jimbir.ch/presentations/bootstrap/"/>
		<meta property="og:title" content="Bootstrap Framework and Drupal | Web Development Presentation"/>
		<meta property="og:description" content="This presentation reviews what makes up the Bootstrap framework; advantages and disadvantages of using Bootsrap, and all the possible ways to use Bootstrap with Drupal."/>
		<meta property="og:image" content="http://jimbir.ch/presentations/bootstrap/img/Lego-Uncle-Jim-Amorgos-View.jpg"/>
		<meta name="twitter:site" content="@thejimbirch"/>
		<meta name="twitter:site:id" content="2989027096"/>
		<meta name="twitter:creator" content="@thejimbirch"/>
		<meta name="twitter:creator:id" content="2989027096"/>
		<meta name="twitter:url" content="http://jimbir.ch/presentations/bootstrap/"/>
		<meta name="twitter:title" content="Bootstrap Framework and Drupal | Web Development Presentation"/>
		<meta name="twitter:description" content="This presentation reviews what makes up the Bootstrap framework; advantages and disadvantages of using Bootsrap, and all the possible ways to use Bootstrap with Drupal."/>
		<meta name="twitter:image:src" content="http://jimbir.ch/presentations/bootstrap/img/Lego-Uncle-Jim-Amorgos-View.jpg"/>
		<meta itemprop="name" content="Bootstrap Framework and Drupal | Web Development Presentation"/>
		<meta itemprop="description" content="This presentation reviews what makes up the Bootstrap framework; advantages and disadvantages of using Bootsrap, and all the possible ways to use Bootstrap with Drupal."/>
		<meta itemprop="image" content="http://jimbir.ch/presentations/bootstrap/img/Lego-Uncle-Jim-Amorgos-View.jpg"/>
		<meta name="author" content="Jim Birch">

		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">

		<link rel="stylesheet" href="css/reveal.css">
		<link rel="stylesheet" href="css/theme/black.css" id="theme">

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
				background: rgba(0, 0, 0, 0.5) none repeat scroll 0 0;
				color: #fff;
				text-shadow: 1px 1px 1px rgba(0,0,0,0.4)
			}

			.backgrounds .slide-background{
				background-position: bottom center;
			}

			.reveal .controls {
				bottom: 14px;
			}

			.navigate-down, .navigate-up {
				display: none;
			}

			.fixed-footer {
				position:fixed;
				bottom:20px;
				left:30px;
				width:95%;
				margin:0 auto;
				z-index:1000;
			}

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
				<div style="float:left;"><a href="http://jimbir.ch/presentations/bootstrap/">Bootstrap Framework and Drupal</a> <a href="http://www.twitter.com/thejimbirch" title="@thejimbirch">@thejimbirch</a></div>
				<div style="float:right;"><a href="http://www.xenomedia.com" title="Xeno Media, Inc"><img src="img/xeno-media-logo.png" alt="Xeno Media, Inc" style="height:14px;width:auto;"></a></div>
			</div>
			<div class="slides">
				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-Amorgos-View.jpg">
					<h1 style="padding-left:20px;width:75%">Bootstrap Framework and Drupal</h1>
					<p style="display:inline-block;background: rgba(0, 0, 0, 0.5);padding:20px;">Created by <a href="http://jimbir.ch">Jim Birch</a><br>
					<a href="http://jimbir.ch/presentations/bootstrap/">jimbir.ch/presentations/bootstrap</a><br>
					<a href="http://twitter.com/thejimbirch">@thejimbirch</a><br>
					<a href="http://www.xenomedia.com">Xeno Media, Inc.</a></p>
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-at-Xeno.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);">What is Bootstrap?</h1>
					<p class="fragment" style="background: rgba(0, 0, 0, 0.8);padding:20px;width:60%;">Bootstrap is an open source project that can be used by front end developers and site builders in a wide variety of ways, from beginner to advanced.</p>
				</section>

				<section>
    			<p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile first projects on the web.</p>
				</section>

				<section>
					<h2>Similar Projects</h2>
					<ul>
						<li><a href="http://foundation.zurb.com/">Foundation</a></li>
						<li><a href="http://purecss.io/">Pure CSS</a></li>
					</ul>
					<h3>Predecessors</h3>
					<ul>
						<li><a href="http://960.gs/">960 Grids</a></li>
						<li><a href="https://en.wikipedia.org/wiki/YUI_Library#CSS_resources">YUI Grids</a></li>
					</ul>
				</section>

				<section>
					<p>Originally developed at Twitter to document and share common design patterns and assets within the company.</p>
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-and-the-White-Moog.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:65%;">Who uses Bootstrap?</h1>
				</section>

				<section>
					<div class="grid-item"><img src="img/examples/apple.png" alt="Apple"><br><small>Apple</small></div>
					<div class="grid-item"><img src="img/examples/fifa.png" alt="FIFA"><br><small>FIFA</small></div>
					<div class="grid-item"><img src="img/examples/hbo.png" alt="HBO"><br><small>HBO</small></div>
					<div class="grid-item"><img src="img/examples/ing.png" alt="Ing"><br><small>Ing</small></div>
					<div class="grid-item"><img src="img/examples/instacart.png" alt="Instacart"><br><small>Instacart</small></div>
					<div class="grid-item"><img src="img/examples/lyft.png" alt="Lyft"><br><small>Lyft</small></div>
					<div class="grid-item"><img src="img/examples/microsoft.png" alt="Microsoft"><br><small>Microsoft</small></div>
					<div class="grid-item"><img src="img/examples/nasa.png" alt="NASA"><br><small>NASA</small></div>
					<div class="grid-item"><img src="img/examples/new-relic.png" alt="New Relic"><br><small>New Relic</small></div>
					<div class="grid-item"><img src="img/examples/newsweek.png" alt="Newsweek"><br><small>Newsweek</small></div>
					<div class="grid-item"><img src="img/examples/spotify.png" alt="Spotify"><br><small>Spotify</small></div>
					<div class="grid-item"><img src="img/examples/vogue.png" alt="Vogue"><br><small>Vogue</small></div>
				</section>

				<section>
					<p>And about 10 million more! <small><a href="http://trends.builtwith.com/docinfo/Twitter-Bootstrap">BuiltWith.com</a></small></p>
					<a href="http://trends.builtwith.com/docinfo/Twitter-Bootstrap"><img src="img/bootstrap-usage-builtwith.png" alt="Usage statistics of Bootstrap"></a>
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-plays-chess.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:65%;">What makes up the Bootstrap framework?</h1>
				</section>

				<section>
					<h2>The Bootstrap framework includes:</h2>
					<ul>
						<li class="fragment">a responsive grid system</li>
						<li class="fragment">a large amount of theme-able HTML and CSS content elements</li>
						<li class="fragment">a very readable Typography base</li>
						<li class="fragment">a number of Javascript components that add additional functionality</li>
						<li class="fragment">and documentation about all of it!</li>
					</ul>
				</section>

				<section>
					<h3>Responsive Grid System</h3>
					<ul>
						<li class="fragment">Container Fluid (full width), or Container (fixed width)</li>
						<li class="fragment">Row</li>
						<li class="fragment">Columns (12)</li>
					</ul>
				</section>

				<section>
					<h3>Responsive Grid System</h3>
<pre>
	<code>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8">Lorem ipsum...</div>
		<div class="col-md-4">Sed ut perspiciatis...</div>
	</div>
</div>
	</code>
</pre>
				</section>

				<section>
					<h3>Responsive Grid System</h3>
					<img src="img/bootstrap-grid-example.png" alt="Bootstrap Grid Example">
				</section>

				<section>
					<h3>Responsive Grid System</h3>
					<ul>
						<li class="fragment">Columns will wrap if more that 12</li>
						<li class="fragment">Columns can be set per responsive screen size</li>
						<li class="fragment">Columns can be offset</li>
						<li class="fragment">Columns can be ordered</li>
					</ul>
				</section>

				<section>
					<h3>Content Elements</h3>
					<p>Over a dozen reusable components built to provide iconography, dropdowns, input groups, navigation, alerts, and much more.</p>
				</section>

				<section>
					<div class="grid-item"><img src="img/content-elements/Dropdowns.png" alt="Dropdowns"><br><small>Dropdowns</small></div>
					<div class="grid-item"><img src="img/content-elements/Buttons-Button-Groups.png" alt="Buttons"><br><small>Buttons</small></div>
					<div class="grid-item"><img src="img/content-elements/inputs.png" alt="Inputs"><br><small>Inputs</small></div>
					<div class="grid-item"><img src="img/content-elements/Navs.png" alt="Navs"><br><small>Navs</small><br><img src="img/content-elements/Navbar.png" alt="Navbars"><br><small>Navbars</small></div>
					<div class="grid-item"><img src="img/content-elements/Breadcrumbs.png" alt="Breadcrumbs"><br><small>Breadcrumbs</small><br><img src="img/content-elements/Pagination.png" alt="Pagination"><br><small>Pagination</small></div>
					<div class="grid-item"><img src="img/content-elements/Jumbotron.png" alt="Jumbotron"><br><small>Jumbotron</small></div>
					<div class="grid-item"><img src="img/content-elements/Thumbnails.png" alt="Thumbnails"><br><small>Thumbnails</small></div>
					<div class="grid-item"><img src="img/content-elements/Alerts-variations.png" alt="Alert variations"><br><small>Alerts</small></div>
					<div class="grid-item"><img src="img/content-elements/Progress-bar-variations.png" alt="Progress Bars"><br><small>Progress Bars</small></div>
					<div class="grid-item"><img src="img/content-elements/List-groups.png" alt="List Groups"><br><small>List Groups</small></div>
					<div class="grid-item"><img src="img/content-elements/Panels.png" alt="Panels"><br><small>Panels</small></div>
					<div class="grid-item"><img src="img/content-elements/Wells.png" alt="Wells"><br><small>Wells</small></div>
				</section>

				<section>
					<h3>Cards, coming in Bootstrap 4</h3>
					<p>Replaces wells, thumbnails, and panels</p>
					<img src="img/content-elements/Cards.png" alt="Cards" style="width: 450px; height: auto;">
				</section>

				<section>
					<h3>Typography base</h3>
					<h4>Headers</h4>
					<img src="img/content-elements/Headers.png" alt="Headers">
				</section>

				<section>
					<h3>Typography base</h3>
					<h4>Blockquotes</h4>
					<img src="img/content-elements/Blockquotes.png" alt="Blockquotes">
					<h4>Tables</h4>
					<img src="img/content-elements/Table.png" alt="Tables">
				</section>

				<section>
					<h3>Typography base</h3>
					<h4>Forms</h4>
					<img src="img/content-elements/Forms.png" alt="Forms">
				</section>

				<section>
					<h3>Javascripts</h3>
					<p>Bring Bootstrap's components to life with jQuery plugins. Easily include them all, or one by one.</p>
				</section>

				<section>
					<div class="grid-item"><img src="img/javascripts/Modal.png" alt="Modal"><br><small>Modal</small></div>
					<div class="grid-item"><img src="img/javascripts/Dropdown.png" alt="Dropdown"><br><small>Dropdown</small></div>
					<div class="grid-item"><img src="img/javascripts/Scrollspy.png" alt="Scrollspy"><br><small>Scrollspy</small></div>
					<div class="grid-item"><img src="img/javascripts/Tabs.png" alt="Tabs"><br><small>Tabs</small></div>
					<div class="grid-item"><img src="img/javascripts/Tooltip.png" alt="Tooltip"><br><small>Tooltip</small></div>
					<div class="grid-item"><img src="img/javascripts/Popover.png" alt="Popover"><br><small>Popover</small></div>
					<div class="grid-item"><img src="img/javascripts/Collapsible-Alerts.png" alt="Alerts"><br><small>Collapsible Alerts</small></div>
					<div class="grid-item"><img src="img/javascripts/Button-states.png" alt="Button states"><br><small>Button states</small></div>
					<div class="grid-item"><img src="img/javascripts/Collapsible-accordions.png" alt="Collapsible/Accordions"><br><small>Collapsible/Accordions</small></div>
					<div class="grid-item"><img src="img/javascripts/Carousel.png" alt="Carousel"><br><small>Carousel</small></div>
					<div class="grid-item"><img src="img/javascripts/Affix.png" alt="Affix"><br><small>Affix</small></div>
				</section>

				<section>
					<h3>Documentation</h3>
					<p>Every feature of Bootstrap is documented.  This documentation is always available online, and can be easily set up in local, development, and staging environments.</p>
					<img src="img/Bootstrap-Documentation.jpg" alt="Bootstrap Documentation">
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-at-the-Car-Wash.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:65%;">Pros &amp; Cons of using the Bootstrap framework</h1>
				</section>

				<section>
					<h2>Advantages:</h2>
					<ul>
						<li class="fragment">Documentation
							<ul>
				    		<li class="fragment">Standardization helps teams become more productive</li>
				    		<li class="fragment">Onboarding new developers is quicker</li>
				    	</ul>
				    </li>
			    	<li class="fragment">Customizable
							<ul>
					    	<li class="fragment">Completely customizable for large projects</li>
					    	<li class="fragment">Best practices for small/low budget projects</li>
					    </ul>
					  </li>
			    	<li class="fragment">Open Source - MIT License</li>
			    </ul>
				</section>

				<section>
					<h2>Disadvantages:</h2>
					<ul>
			    	<li class="fragment">Bootstrap is large/bloated/heavy</li>
			    	<li class="fragment">Bootstrap sites all look the same</li>
			    	<li class="fragment">Javascript not robust enough</li>
			    	<li class="fragment">Upgrading is very difficult</li>
			    	<li class="fragment">Can lead to non-semantic HTML</li>
			    </ul>
			  </section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-at-the-Turkish-Cafe.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:80%;">Using the Bootstrap contrib theme as a base theme</h1>
				</section>

				<section>
					<p style="text-align: left;">The Bootstrap contributed Drupal theme is the second most popular on Drupal.org with over 110,000 installs almost 700,000 downloads!</p>
					<img src="img/bootstrap-theme.jpg" alt="Bootstrap Drupal Theme">
				</section>

				<section>
					<a href="https://www.ostraining.com/blog/coding/bootstrap-winning/"><img src="img/OSTraining.png" alt="OS Training" style="padding: 20px;"></a>
					<ul>
						<li>Joomla uses Bootstrap in core.</li>
						<li>WordPress has 221 Bootstrap-based themes, 11% of all their themes.</li>
						<li>Themeforest lists 19,645 designs and an incredible 34% of those refer to using Bootstrap</li>
					</ul>
					<p><small><a href="https://www.ostraining.com/blog/coding/bootstrap-winning/">Love it or Hate it, Bootstrap is Winning the Web - August 12, 2015</a></small></p>
				</section>

				<section>
					<p>Using the Bootstrap contributed theme as a base theme for your project.</p>
				</section>

				<section>
					<h3>Drupal Modules</h3>
					<p>As of the writing of this presentation, there were 332 modules that contain "Bootstrap" in their name.</p>
					<p><a href="https://www.drupal.org/search/site/bootstrap?f[0]=ss_meta_type%3Amodule">Drupal.org Bootstrap Modules</a></p>
				</section>

				<section>
					<h3>Drupal Modules</h3>
					<h4><a href="https://www.drupal.org/project/views_bootstrap">Views Bootstrap</a></h4>
					<a href="https://www.drupal.org/project/views_bootstrap"><img src="img/drupal-module-views-bootstrap.jpg" alt="Views Bootstrap"></a>
				</section>

				<section>
					<h3>Drupal Modules</h3>
					<h4><a href="https://www.drupal.org/project/bootstrap_layouts">Bootstrap Layouts</a></h4>
					<a href="https://www.drupal.org/project/bootstrap_layouts"><img src="img/drupal-module-bootstrap-layouts.jpg" alt="Bootstrap Layouts"></a>
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-in-Greece-by-the-cactus-by-the-sea.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:65%;">Compiling your own Bootstrap</h1>
				</section>

				<section>
					<p>Compiling your own Bootstrap framework using Grunt.</p>
					<p>Javascript in Gruntfile.js</p>
					<p>less files</p>
					<p>The future is sass</p>
				</section>

				<section style="text-align: left;" data-background="img/Lego-Uncle-Jim-at-Sunset.jpg">
					<h1 style="padding-left:20px;">THE END</h1>
					<h3 style="padding-left:20px;">Continuing the conversation:</h3>
					<p style="display:inline-block;background: rgba(0, 0, 0, 0.5);padding:20px;">Created by <a href="http://jimbir.ch">Jim Birch</a><br>
					<a href="http://jimbir.ch/presentations/bootstrap/">jimbir.ch/presentations/bootstrap</a><br>
					<a href="http://twitter.com/thejimbirch">@thejimbirch</a><br>
					<a href="http://www.xenomedia.com">Xeno Media, Inc.</a></p>
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
