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

			code {
				color: #ffa837;
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
					<p>Originally developed at Twitter by <a href="https://twitter.com/mdo">@mdo</a> and <a href="https://twitter.com/fat">@fat</a> to document and share common design patterns and assets within the company.</p>
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

				<section>
					<p style="text-align: left;">The Bootstrap contributed Drupal theme is the second most popular theme on Drupal.org with over 110,000 installs almost 700,000 downloads!</p>
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
					    	<li class="fragment">Mixins for adding existing styles to semantic html</li>
					    </ul>
					  </li>
					  <li class="fragment">Best practices for small/low budget projects</li>
			    	<li class="fragment">Open Source - MIT License</li>
			    </ul>
				</section>

				<section>
					<h2>Disadvantages:</h2>
					<ul>
			    	<li class="fragment">Bootstrap is large/bloated/heavy</li>
			    	<li class="fragment">Bootstrap sites all look the same</li>
			    	<li class="fragment">Decisions are made for you</li>
			    	<li class="fragment">Javascript not robust enough</li>
			    	<li class="fragment">Upgrading is very difficult</li>
			    	<li class="fragment">Can lead to non-semantic HTML</li>
			    </ul>
			  </section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-at-the-Turkish-Cafe.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:80%;">Using the <a href="https://www.drupal.org/project/bootstrap">Bootstrap Drupal theme</a></h1>
				</section>

				<section>
					<h3><a href="https://www.drupal.org/project/bootstrap">Bootstrap Drupal theme</a></h3>
					<ul>
						<li class="fragment">Very mature for Drupal 7</li>
						<li class="fragment">Release candidate for Drupal 8</li>
						<li class="fragment">Comes with Subtheme right out of the box.</li>
						<li class="fragment">Great documentation at <a href="http://drupal-bootstrap.org/api/bootstrap">drupal-bootstrap.org</a></li>
					</ul>
				</section>

				<section>
					<h3>Two Options to creating a subtheme</h3>
					<ul>
						<li class="fragment">Loading Bootstrap Framework from a Content Delivery Network (CDN)</li>
						<li class="fragment">Compiling your own using a local <a href="http://lesscss.org/usage/index.html#third-party-compilers">LESS preprocessor</a></li>
					</ul>
				</section>

				<section>
					<h3>Creating a subtheme - CDN (D7)</h3>
					<ul>
						<li class="fragment">Download the Bootstrap theme as you normally would.</li>
						<li class="fragment">In the theme, copy the <code>/starterkits/cdn/</code> folder to <code>/sites/all/themes/</code></li>
						<li class="fragment">Rename the folder to your new theme name</li>
						<li class="fragment">Rename <code>starterkit.cdn</code> to <code>YOURNEWTHEMENAME.info</code></li>
						<li class="fragment">Edit the .info file.</li>
						<li class="fragment">Activate and Set Default your new theme!</li>
					</ul>
				</section>

				<section>
					<h3>Creating a subtheme - CDN (D7)</h3>
					<img src="img/cdn-starterkit-d7.png" alt="Creating a subtheme - CDN (D7)">
				</section>

				<section>
					<h3>Creating a subtheme - CDN (D8)</h3>
					<ul>
						<li class="fragment">Download the Bootstrap theme as you normally would.</li>
						<li class="fragment">In the theme, copy the <code>starterkits/cdn/</code> folder to <code>/themes/custom/</code></li>
						<li class="fragment">Rename the folder to your new theme name</li>
						<li class="fragment">Rename 5 files >>></li>
					</ul>
				</section>

				<section>
					<h3>Creating a subtheme - CDN (D8)</h3>
					<ul>
						<li class="fragment">Rename <code>THEMENAME.theme</code> to <code>YOURNEWTHEMENAME.theme</code></li>
						<li class="fragment">Rename <code>THEMENAME.starterkit.yml</code> to <code>YOURNEWTHEMENAME.info.yml</code></li>
						<li class="fragment">Rename <code>THEMENAME.libraries.yml</code> to <code>YOURNEWTHEMENAME.libraries.yml</code></li>
						<li class="fragment">Rename <code>config/install/THEMENAME.settings.yml</code> to <code>config/install/YOURNEWTHEMENAME.settings.yml</code></li>
						<li class="fragment">Rename <code>config/schema/THEMENAME.schema.yml</code> to <code>config/schema/YOURNEWTHEMENAME.schema.yml</code></li>
					</ul>
				</section>

				<section>
					<h3>Creating a subtheme - CDN (D8)</h3>
					<img src="img/cdn-starterkit-d8.png" alt="Creating a subtheme - CDN (D8)">
				</section>

				<section>
					<h3>Creating a subtheme - CDN (D8)</h3>
					<ul>
						<li class="fragment">Edit YOURNEWTHEMENAME.info.yml</li>
						<li class="fragment">Edit config/schema/YOURNEWTHEMENAME.schema.yml and rename - THEMENAME.settings: and "THEMETITLE settings"</li>
						<li class="fragment">Activate and Set Default your new theme!</li>
					</ul>
				</section>

				<section>
					<h3>Creating a subtheme - CDN versions</h3>
					<ul>
						<li class="fragment">/css/style.css to add your custom style overrides</li>
						<li class="fragment">Grab what you need to override from the parent theme/modules/core and add to your new theme.</li>
						<li class="fragment">Don't forget to add your own logo.png, screenshot.png, and favicon.ico</li>
					</ul>
				</section>

				<section>
					<h3>Creating a subtheme - LESS versions</h3>
					<ul>
						<li>Set up is the same, but with these additional steps:</li>
						<li class="fragment">Download the <a href="https://github.com/twbs/bootstrap/releases">Bootstrap Framework Source Files</a> into the root of your new theme.  <code>/THEMENAME/bootstrap/</code></li>
						<li class="fragment">You will need a <a href="https://www.google.com/#q=less+compiler">LESS compiler</a> - Grunt/Gulp</li>
						<li class="fragment">After you make changes to the less files, you have to compile them into the <code>/THEMENAME/css/styles.css</code></li>
					</ul>
				</section>

				<section>
					<h3>Creating a subtheme - LESS versions</h3>
					<ul>
						<li><code>/THEMENAME/less/variable-overrides.less</code> - Allows you to override the variables provided by the Bootstrap Framework</li>
						<li class="fragment"><code>/THEMENAME/less/bootstrap.less</code> - A copy of the Bootstrap Framework's file, with the addition of including variable-overrides.less</li>
						<li class="fragment"><code>/THEMENAME/less/overrides.less</code> - Contains overrides to properly integrate Drupal with the Bootstrap Framework</li>
						<li class="fragment"><code>/THEMENAME/less/style.less</code> - The glue that combines the bootstrap.less and overrides.less files together. Generally, you will not need to modify this file.</li>
					</ul>
				</section>

				<section>
					<h3>Creating a subtheme - LESS versions</h3>
					<p style="text-align: left;">Once you have compiled, all of the mixing will be run, and the less files will be concatenated into one css file.</p>
					<p><code>/THEMENAME/css/styles.css</code></p>
				</section>

				<section>
					<h3>See Also:</h3>
					<h3><a href="https://www.drupal.org/project/radix">Radix Theme</a></h3>
					<p>Radix is another base theme for Drupal. It has Bootstrap, Sass, Gulp, BrowserSync and Font Awesome built-in.</p>
					<ul>
						<li>Used in a lot of distributions</li>
						<li>Has various Panels/Views/etc contrib modules</li>
						<li>Alpha release for Drupal 8</li>
					</ul>
					<p>There are also currently <a href="https://www.drupal.org/project/project_theme?&text=bootstrap">171 themes</a> with the word Bootstrap in them on Drupal.org</p>
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-in-Greece-by-the-cactus-by-the-sea.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:65%;">Compiling your own Theme using Bootstrap</h1>
				</section>

				<section>
					<h2>Why build your own theme?</h2>
					<ul>
						<li class="fragment">For complete control of markup</li>
						<li class="fragment">If your designer is "designing in the browser" and providing html/css</li>
						<li class="fragment">If you are using a prototyping tool like <a href="https://www.sketchapp.com">Sketch</a> which exports html/css</li>
						<li class="fragment">If you are making your own html/css prototypes before moving to Drupal.</li>
					</ul>
				</section>

				<section>
					<h3>Themeable Drupal Elements</h3>
					<ul>
						<li class="fragment">Fields</li>
						<li class="fragment">Entities/Blocks/Panes</li>
						<li class="fragment">Regions</li>
						<li class="fragment">Layouts</li>
						<li class="fragment">Pages</li>
					</ul>
				</section>

				<section>
					<h3>Drupal 7</h3>
					<p>BADcamp 2015 session <a href="http://jimbir.ch/presentations/optimizing-drupal-7-html-markup">Optimizing Drupal 7 HTML Markup</a></p>
					<p>The origin blog post: <a href="http://jimbir.ch/blog/using-fences-page-manager-optimize-html-markup-drupal-7">Using Fences and Page Manager to optimize HTML markup in Drupal 7</a></p>
					<a href="http://jimbir.ch/presentations/optimizing-drupal-7-html-markup"><img src="img/presentation-optimizing-720.jpg" alt="Optimizing Drupal 7 HTML"></a>
				</section>

				<section>
					<h3>Drupal 7</h3>
					<ul>
						<li class="fragment">Fences module to reset field markup</li>
						<li class="fragment">Node/Page/Region/Block/etc templates to reset that markup</li>
						<li class="fragment">Panels layouts to add semantic HTML</li>
						<li class="fragment">Page Manager (ctools) to place content</li>
					</ul>
				</section>

				<section>
					<h3>Drupal 8</h3>
					<ul>
						<li class="fragment"><a href="https://www.drupal.org/project/fences">Fences</a> has an Alpha release</li>
						<li class="fragment">Twig templates give us ultra specificity</li>
						<li class="fragment"><a href="https://www.drupal.org/project/layout_plugin">Layout plugin module</a> works and will eventually be moved to core.</li>
						<li class="fragment"><a href="https://www.drupal.org/project/page_manager">Page Manager</a> is a stand alone module now, or</li>
						<li class="fragment"><a href="https://www.drupal.org/project/panelizer">Panelizer</a> allows you to set defaults, and override on individual nodes.</li>
					</ul>
				</section>

				<section>
					<h3>Creating your own theme</h3>
					<ul>
						<li class="fragment">Create an empty theme</li>
						<li class="fragment">Download the Bootstrap Framework source files</li>
						<li class="fragment">Update <code>Gruntfile.js</code> to output your css file to <code>css/THEMENAME.css</code> and your js file to <code>js/THEMENAME.css</code></li>
						<li class="fragment">Add your own less files</li>
						<li class="fragment">Include them in your <code>bootstrap.less</code></li>
					</ul>
				</section>

				<section>
					<h4>Gruntfile.js</h4>
					<img src="img/Bootstrap-Grunfile-js.png" alt="Bootstrap Gruntfile.js" style="width:60%;height:auto;">
				</section>

				<section>
					<h4>bootstrap.less</h4>
					<img src="img/Drupal-Theme-Bootstrap-less.png" alt="Drupal Theme Bootstrap less" style="width:75%;height:auto;">
				</section>

				<section>
					<h3>Compiling Bootstrap</h3>
					<p>Grunt or Gulp</p>
					<ul>
						<li class="fragment"><code>cd sites/all/themes/THEMENAME/bootstrap/</code></li>
						<li class="fragment"><code>grunt dist</code> - Compiles all the files</li>
						<li class="fragment"><code>grunt watch</code> - Watches the folder, and automatically updates after file changes.</li>
					</ul>
				</section>

				<section>
					<h3>The wonderful world of mixins</h3>
					<img src="img/Bootstrap-mixins.png" alt="Creating a subtheme - CDN (D7)">
				</section>

				<section>
					<h3>Use mixins on your own semantic html</h3>
<pre>
	<code>
#main-content {
	.container();
}

#main-content > section {
	.make-row();
}

#main-content > section > article {
	.make-md-column(9);
	.make-sm-column(8);
}

#main-content > section > aside {
	.make-md-column(3);
	.make-sm-column(4);
}
	</code>
</pre>
				</section>

								<section>
					<h3>Use mixins on your own semantic html</h3>
<pre>
	<code>
.live-chat-button {
  .btn-primary();
  padding: 10px 30px;
  border-radius: 4px;
  background: @live-chat-button-background;

  &:hover {
    text-decoration: none;
    color: @btn-primary-color;
    background: darken(@live-chat-button-background, 5%);
  }
}
	</code>
</pre>
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-at-the-Car-Wash.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:65%;"><a href="http://jimbir.ch/blog/bootstrap-navbar-drupal-8-4-easy-template-changes">Bootstrap Navbar in Drupal 8 with 4 easy template changes</a></h1>
				</section>

				<section>
					<h3>page.html.twig</h3>
					<script src="https://gist.github.com/thejimbirch/5dd08853ee635cd0c54121845b0e1d41.js"></script>
				</section>

				<section>
					<h3>block--system-branding-block.html.twig</h3>
					<p>Upload your logo in the UI at<br><code>/admin/appearance/settings/theme_name</code></p>
					<script src="https://gist.github.com/thejimbirch/c411a8d985e490d83a079e1ce90d8197.js"></script>
				</section>

				<section>
					<h3>block--THEME_NAME-main-menu.html.twig</h3>
					<script src="https://gist.github.com/thejimbirch/ec29f15697d90ec9b026c1fcfd846cca.js"></script>
				</section>

				<section>
					<h3>menu--main.html.twig</h3>
					<script src="https://gist.github.com/thejimbirch/826c367f085c7750c7690c31509c5225.js"></script>
				</section>

				<section>
					<img src="img/xeno-bootstrap-menu.png" alt="Xeno Media Navbar">
				</section>

				<section>
					<img src="img/xeno-bootstrap-menu-mobile.png" alt="Xeno Media Navbar Mobile">
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-in-Greece-by-the-cactus-by-the-road.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:65%;">Bootstrap Drupal Modules</h1>
				</section>

				<section>
					<h3><a href="https://www.drupal.org/project/jquery_update">jQuery Update</a></h3>
					<p>Required for Drupal 7 to bring jQuery up to modern times.  Not needed for Drupal 8</p>
					<a href="https://www.drupal.org/project/jquery_update"><img src="img/jQuery-Update.jpg" alt="jQuery Update"></a>
				</section>

				<section>
					<h3>Drupal Modules</h3>
					<p>As of the writing of this presentation, there were 332 modules that contain "Bootstrap" in their name.</p>
					<p><a href="https://www.drupal.org/search/site/bootstrap?f[0]=ss_meta_type%3Amodule">Drupal.org Bootstrap Modules</a></p>
				</section>

				<section>
					<h3>Drupal Modules</h3>
					<h4><a href="https://www.drupal.org/project/views_bootstrap">Views Bootstrap</a></h4>
					<p>No release yet for D8</p>
					<a href="https://www.drupal.org/project/views_bootstrap"><img src="img/drupal-module-views-bootstrap.jpg" alt="Views Bootstrap"></a>
				</section>

				<section>
					<h3>Drupal Modules</h3>
					<h4><a href="https://www.drupal.org/project/bootstrap_layouts">Bootstrap Layouts</a></h4>
					<p>This project is a combination of <a href="https://www.drupal.org/project/ds_bootstrap_layouts">Display Suite Bootstrap Layouts</a> and <a href="https://www.drupal.org/project/panels_bootstrap_layouts">Panels Bootstrap Layouts</a> for Drupal 8.</p>
					<a href="https://www.drupal.org/project/bootstrap_layouts"><img src="img/drupal-module-bootstrap-layouts.jpg" alt="Bootstrap Layouts"></a>
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
