<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Bootstrap Paragraphs | Web Development Presentation | Drupalcon Baltimore 2017</title>
		<meta name="description" content="This presentation covers the Bootstrap Paragraphs Drupal module which provides a suite of content and layout Paragraph bundles made with the Bootstrap front-end framework."/>
		<link rel="canonical" href="http://jimbir.ch/presentations/bootstrap-paragraphs/"/>
		<meta property="og:site_name" content="Jim Birch"/>
		<meta property="og:type" content="public_figure"/>
		<meta property="og:url" content="http://jimbir.ch/presentations/bootstrap-paragraphs/"/>
		<meta property="og:title" content="Bootstrap and Paragraphs | Web Development Presentation | Drupalcon Baltimore 2017"/>
		<meta property="og:description" content="This presentation covers the Bootstrap Paragraphs Drupal module which provides a suite of content and layout Paragraph bundles made with the Bootstrap front-end framework."/>
		<meta property="og:image" content="http://jimbir.ch/presentations/bootstrap/img/Lego-Uncle-Jim-at-the-Pool-Waterfall.jpg"/>
		<meta name="twitter:site" content="@thejimbirch"/>
		<meta name="twitter:site:id" content="2989027096"/>
		<meta name="twitter:creator" content="@thejimbirch"/>
		<meta name="twitter:creator:id" content="2989027096"/>
		<meta name="twitter:url" content="http://jimbir.ch/presentations/bootstrap-paragraphs/"/>
		<meta name="twitter:title" content="Bootstrap and Paragraphs | Web Development Presentation | Drupalcon Baltimore 2017"/>
		<meta name="twitter:description" content="This presentation covers the Bootstrap Paragraphs Drupal module which provides a suite of content and layout Paragraph bundles made with the Bootstrap front-end framework."/>
		<meta name="twitter:image:src" content="http://jimbir.ch/presentations/bootstrap/img/Lego-Uncle-Jim-at-the-Pool-Waterfall.jpg"/>
		<meta itemprop="name" content="Bootstrap and Paragraphs | Web Development Presentation | Drupalcon Baltimore 2017"/>
		<meta itemprop="description" content="This presentation covers the Bootstrap Paragraphs Drupal module which provides a suite of content and layout Paragraph bundles made with the Bootstrap front-end framework."/>
		<meta itemprop="image" content="http://jimbir.ch/presentations/bootstrap/img/Lego-Uncle-Jim-at-the-Pool-Waterfall.jpg"/>
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
			.fixed-footer a {
		    color: #9dcccc;
			}

			.reveal .box a:hover,
			.fixed-footer a:hover {
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
				<div style="float:left;"><a href="http://jimbir.ch/presentations/bootstrap-paragraphs/">jimbir.ch/bp</a> | <a href="http://www.twitter.com/thejimbirch" title="@thejimbirch">@thejimbirch</a></div>
				<div style="float:right;"><a href="http://www.xenomedia.com" title="Xeno Media, Inc"><img src="img/xeno-media-logo.png" alt="Xeno Media, Inc" style="height:14px;width:auto;"></a></div>
			</div>
			<div class="slides">
				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-at-the-Pool-Waterfall.jpg">
					<h1 style="font-size:2.25em;padding-left:20px;width:75%">Bootstrap Paragraphs</h1>
					<div style="color:#fff;display:inline-block;background: rgba(0, 0, 0, 0.7);padding-left:20px;width:75%">
						<a href="https://events.drupal.org/baltimore2017"><img src="img/drupalcon-baltimore-logo.png" alt="DrupalCon Baltimore 2017" style="float: left; width: 200px; height: auto;"></a><br>
						<div class="box" style="float: left;padding-left:20px;padding-bottom:20px;margin-top:-30px">Created by <a href="http://jimbir.ch">Jim Birch</a><br>
							<a href="http://jimbir.ch/presentations/bootstrap-paragraphs/">jimbir.ch/bp</a><br>
							<a href="http://twitter.com/thejimbirch">@thejimbirch</a><br>
							<a href="http://www.xenomedia.com">Xeno Media, Inc.</a>
						</div>
					</div>
				</section>

				<section style="text-align:left;" data-background="img/bootstrap-paragraphs-module.png">
					<h1 class="fragment box" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:65%;"><a href="https://www.drupal.org/project/bootstrap_paragraphs">Bootstrap Paragraphs Module</a></h1>
					<p class="fragment" style="color:#fff;background: rgba(0, 0, 0, 0.8);padding:20px 0 20px 20px;width:65%;">The Bootstrap Paragraphs module provides a suite of content and layout Paragraph bundles made with the Bootstrap front-end framework.</p>
				</section>

				<section>
					<h1 class="box" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);"><a href="http://getbootstrap.com/">Bootstrap Framework</a></h1>
					<p class="fragment" style="color:#fff;background: rgba(0, 0, 0, 0.8);padding:20px;width:60%;">Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile first projects on the web.</p>
				</section>

				<section>
					<h2>Why we use Bootstrap</h2>
					<ul>
						<li class="fragment">Core functionality
							<ul>
				    		<li>Responsive Grid Markup and CSS</li>
				    		<li>Themable Content and Javascript Components</li>
				    		<li>Readable Typography base</li>
				    	</ul>
				    </li>
						<li class="fragment">Documentation
							<ul>
				    		<li>Standardization helps teams become more productive</li>
				    		<li>Onboarding new developers is quicker</li>
				    	</ul>
				    </li>
			    	<li class="fragment">Customizable
							<ul>
					    	<li>Completely customizable for large projects</li>
					    	<li>Mixins for adding existing styles to semantic html</li>
					    </ul>
					  </li>
					  <li class="fragment">Best practices for small/low budget projects</li>
			    	<li class="fragment">Open Source - MIT License</li>
			    </ul>
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-Waterfall.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);">Drupal Paragraphs</h1>
					<p class="fragment" style="color:#fff;background: rgba(0, 0, 0, 0.8);padding:20px;width:60%;">Paragraphs is a contrib module for Drupal that allows creation, administration, and display of customizable content components.</p>
				</section>

				<section>
					<h2>Why we use Paragraphs</h2>
					<ul>
						<li class="fragment">Different widths for different content elements
							<ul>
								<li>Better typography - Best readability at 60 to 70 characters wide</li>
								<li>But wanting Images and Videos wider</li>
							</ul>
						</li>
						<li class="fragment">Structured content
							<ul>
								<li>Frustrated with Rich Text Editors since '97</li>
								<li>WYSIWYG integration with Media, was buggy at best</li>
								<li>Ability to add semantic markup, Schema.org, JSON-LD</li>
							</ul>
						</li>
						<li class="fragment">Easy to administer layouts
							<ul>
								<li>Multiple columns</li>
								<li>Quickly restructuring rows</li>
								<li>Heros, Slideshows and more!</li>
							</ul>
						</li>
					</ul>
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-Blogs.jpg">
					<h1 style="padding-left:20px;padding-right:20px;background: rgba(0, 0, 0, 0.8);width:70%;">Strategy</h1>
					<div class="fragment" style="color:#fff;background: rgba(0, 0, 0, 0.8);padding:20px;width:70%;">
						<ul>
							<li>One module that would create the base bundles needed for every site.</li>
							<li class="fragment">Create base templates &amp; CSS that can be used with any site that includes Bootstrap.</li>
							<li class="fragment">Harness the power of Entity Reference Revisions fields to nest Paragraph bundles.</li>
							<li class="fragment">Have global width &amp; background color options on all bundles.</li>
						</ul>
					</div>
				</section>

				<section>
					<h2>Inspiration</h2>
					<p>Thanks to Les Lim and David Needham's great presentation <a href="https://www.youtube.com/watch?v=nRB4n09Ekpg">Using Paragraphs to Weave a Beautiful Content Tapestry</a>, I was started the practice of separating paragraph bundles into Content, Layout and Ponies categories.</p>
				</section>

				<section>
					<h2>Content bundles</h2>
					<p>Common semantically organized fields, and reference fields to common entities.</p>
					<ul>
						<li>Simple HTML</li>
						<li>Image</li>
						<li>Blank</li>
						<li>Contact Form</li>
						<li>Drupal Blocks</li>
						<li>Views</li>
						<li>Media <small style="padding-top:12px;">(Coming soon to a core near you!)</small></li>
					</ul>
				</section>

				<section>
					<h2>Layout bundles</h2>
					<p>Entity Reference Revisions fields to other Paragraph bundles.</p>
					<ul>
						<li>Columns - Multi-value Paragraphs reference field, that prints Bootstrap grid.</li>
						<li>Carousel - Multi-value Paragraphs reference field, that prints Bootstrap carousel. Also has slide interval field.</li>
						<li>Accordion, Modal, Tabs, and Views.</li>
					</ul>
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-in-the-Water.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:80%;">Widths</h1>
					<p class="fragment" style="color:#fff;background: rgba(0, 0, 0, 0.8);padding:20px;width:60%;">Every paragraph, whether content or layout has the option to set one of five widths, from narrow to full screen using a List/Text field.</p>
				</section>

				<section>
					<h2>Widths - Twig</h2>
					<img src="img/Twig-Widths.png" alt="">
				</section>

				<section>
					<h2>Widths - LESS</h2>
					<img src="img/LESS-widths.png" style="width:70%;height:auto;">
				</section>

				<section>
					<h2>Carousel - Twig</h2>
					<img src="img/Twig-Carousel.png">
				</section>

				<section>
					<h2>Columns Field Template</h2>
					<img src="img/Twig-Column-Field.png">
				</section>

				<section>
					<h2>Columns - LESS</h2>
					<img src="img/LESS-columns.png">
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-in-Greece-by-the-cactus-by-the-sea.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:65%;">Colors</h1>
					<p class="fragment" style="color:#fff;background: rgba(0, 0, 0, 0.8);padding:20px;width:60%;">Similar to widths, we have a list field with colors from <a href="http://mdbootstrap.com/css/colors/#rgba-colors">Material Design for Bootstrap</a> and five ready to style bootstrap-like classes (Primary, Secondary, Info, Warning, etc...)</p>
				</section>

				<section>
					<h2>Colors</h2>
					<img src="img/Twig-Colors.png" alt="">
				</section>

				<section>
					<h2>Adding Classes</h2>
					<img src="img/Twig-Adding-Classes.png" alt="" style="width:70%;height:auto;">
				</section>

				<section>
					<h2>Rendering content without fields</h2>
					<img src="img/Rendering-Content.png" alt="">
				</section>

				<section>
					<h2>Manage Display</h2>
					<img src="img/Manage-Display.png">
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-at-Xeno.jpg">
					<h1 class="fragment box" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);"><a href="http://www.xenomedia.com">Xeno Media</a></h1>
					<p class="fragment" style="color:#fff;background: rgba(0, 0, 0, 0.8);padding:20px;width:60%;">Xeno Media, Inc. is a Chicago-based agency providing Drupal Development, Web Consulting and Design to the world's greatest clients.</p>
				</section>

				<section>
					<h2>Many thanks to:</h2>
					<ul>
						<li>All my amazing co-workers and clients at Xeno Media.</li>
						<li>Albert Jankowski (<a href="https://www.drupal.org/u/albertski">albertski</a>) for helping me develop this module and always helping me debug all the Drupal 8 things!</li>
					</ul>
				</section>

				<section style="text-align:left;" data-background="img/about-zoomdata.png" data-background-position="center top">
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-at-Zoomdata.jpg">
					<h1 class="box" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);"><a href="https://www.zoomdata.com">Zoomdata</a></h1>
					<div class="fragment" style="color:#fff;background: rgba(0, 0, 0, 0.8);padding:20px;width:47%;float:left;">
						<ul>
							<li><strong>Founded:</strong> 2012</li>
							<li><strong>Employees:</strong> 125</li>
							<li><strong>Offices:</strong>
								<ul>
									<li>San Mateo, CA</li>
									<li>Reston, VA</li>
									<li>New York, NY</li>
									<li>Kyiv, Ukraine</li>
								</ul>
							</li>
						</ul>
						<p><strong>Zoomdata is Hiring!</strong><br>Visit <a href="https://www.zoomdata.com">zoomdata.com/careers</a></p>
					</div>
					<div class="fragment" style="color:#fff;background: rgba(0, 0, 0, 0.8);padding:20px 20px 60px;width:44.4%;float:left;">
						<ul>
							<li><strong>Customers:</strong>
								<ul>
									<li>Goldman Sachs</li>
									<li>Amazon</li>
									<li>Cisco</li>
									<li>Juniper</li>
									<li>Deloitte</li>
									<li>Abbvie</li>
									<li>DHS</li>
									<li>ClickFox</li>
								</ul>
							</li>
						</ul>
					</div>
				</section>

				<section>
					<h2>Many thanks to:</h2>
					<ul>
						<li><a href="http://jeroen.pro">Jeroen Bobbeldijk</a>, <a href="https://www.drupal.org/vdmi">.VDMi/</a>, <a href="https://www.drupal.org/md-systems">MD Systems</a> for supporting the <a href="https://www.drupal.org/project/paragraphs">Paragraphs module</a>.</li>
						<li>Les Lim and David Needham's presentation <a href="https://www.youtube.com/watch?v=nRB4n09Ekpg">Using Paragraphs to Weave a Beautiful Content Tapestry</a></li>
						<li>Morten, Danny Englander, Greg Boggs, Mark Conroy, and everyone else in the <a href="https://slackinvite.me/to/drupaltwig">Drupal Twig Slack</a></li>
						<li>So many people in Stack Overflow/Drupal Answers!</li>
					</ul>
				</section>

				<section>
					<h2>Join Us for Contribution Sprints</h2>
					<h3>Friday, April 28, 2017</h3>
					<div style="float: left; width: 32%;margin-bottom: 30px;">
						<strong>First-Time Sprinter Workshop</strong><br>
						9:00am-12:00pm<br>
						Room: 307-308
					</div>
					<div style="float: left; padding-left: 1%; width: 32%;margin-bottom: 30px;">
						<strong>Mentored Core Sprint</strong><br>
						9:00am-12:00pm<br>
						Room: 301-303
					</div>
					<div style="float: left; padding-left: 1%; width: 32%;margin-bottom: 30px;">
						<strong>General Sprints</strong><br><br>
						9:00am-6:00pm<br>
						Room: 309-310
					</div>
					<h4 style="clear: left;">#drupalsprints</h4>
				</section>

				<section style="text-align: left;" data-background="img/Lego-Uncle-Jim-at-Sunset.jpg">
					<h1 style="padding-left:20px;">The End</h1>
					<h3 style="padding-left:20px;">Continuing the conversation:</h3>
					<div class="box" style="color:#fff;display:inline-block;background: rgba(0, 0, 0, 0.7);padding:20px;">
						<a href="http://jimbir.ch/presentations/bootstrap-paragraphs/">jimbir.ch/bp</a><br>
						<a href="http://twitter.com/thejimbirch">@thejimbirch</a><br>
						<a href="http://www.xenomedia.com">Xeno Media, Inc.</a><br>
						<a href="https://events.drupal.org/baltimore2017/sessions/bootstrap-paragraphs">Leave feedback about this presentation</a><br>
						<a href="https://www.surveymonkey.com/r/drupalconbaltimore">Take the DrupalCon survey</a>
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
