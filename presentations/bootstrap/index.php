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
				<div style="float:left;"><a href="http://jimbir.ch/presentations/bootstrap/">Bootstrap Framework and Drupal</a> - <a href="http://www.twitter.com/thejimbirch" title="@thejimbirch">@thejimbirch</a></div>
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
					<p>The Bootstrap framework includes a responsive grid system; a large amount of theme-able HTML and CSS content elements, a very readable Typography base, and a number of Javascript components that add additional functionality.</p>
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-at-the-Car-Wash.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:65%;">Pros &amp; Cons of using the Bootstrap framework</h1>
				</section>

				<section>
					<h2>Advantages:</h2>
					<ul>
			    	<li class="fragment">Standardization helps teams become more productive</li>
			    	<li class="fragment">Onboarding new developers is quicker</li>
			    	<li class="fragment">Completely customizable for large projects</li>
			    	<li class="fragment">Best practices for small/low budget projects</li>
			    	<li class="fragment">Styles the basic HTML elements oft forgotten about</li>
			    	<li class="fragment">The Responsive Grid</li>
			    	<li class="fragment">Open Source - MIT License</li>
			    </ul>
				</section>

				<section>
					<h2>Disadvantages:</h2>
					<ul>
			    	<li class="fragment">Bootstrap is large/bloated/heavy</li>
			    	<li class="fragment">Bootstrap sites all look the same</li>
			    	<li class="fragment">Upgrading is very difficult</li>
			    	<li class="fragment">Can lead to non-semantic HTML</li>
			    </ul>
			  </section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-at-the-Turkish-Cafe.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:80%;">Using the Bootstrap contrib theme as a base theme</h1>
				</section>

				<section>
					<p>The Bootstrap contributed Drupal theme is the second most popular on Drupal.org with over 100,000 installs from 650,000 downloads!</p>
				</section>

				<section>
					<p>Using the Bootstrap contributed theme as a base theme for your project.</p>
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
