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
					<h2>Already using Paragraphs?</h2>
					<p class="fragment">How many times have you built...</p>
					<ul>
						<li class="fragment">Three Column Paragraph</li>
						<li class="fragment">Text and Image Paragraph</li>
						<li class="fragment">Text Paragraph</li>
					</ul>
				</section>

				<section>
					<p>And how many times have you or your co-workers build it just a little bit different?</p>
					<p><img src="https://media.giphy.com/media/6uMqzcbWRhoT6/giphy.gif" alt="Cat Gif"></p>
				</section>

				<section>
					<h2>If you're not using Paragraphs yet</h2>
					<p>Install this module on a test site and start exploring all the possibilities Paragraphs offers, and how you can customize to fit your needs.</p>
					<p><img src="https://media.giphy.com/media/UmO1IuCwW14k/giphy.gif" alt="Rainbow Cat Gif"></p>
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
					<h1 style="padding-left:20px;padding-right:20px;background: rgba(0, 0, 0, 0.9);width:70%;">Module Strategy</h1>
					<div class="fragment" style="color:#fff;background: rgba(0, 0, 0, 0.9);padding:20px;width:70%;">
						<ul>
							<li>Create a module that would make the basics structure needed for every site.</li>
							<li class="fragment">Create base templates &amp; CSS that could be used with any theme that includes Bootstrap.</li>
							<li class="fragment">Harness the power of Entity Reference Revisions fields to nest Paragraphs.</li>
							<li class="fragment">Have global width &amp; background color options.</li>
						</ul>
					</div>
				</section>

				<section>
					<h2>Inspiration</h2>
					<p>Thanks to Les Lim and David Needham's great presentation <a href="https://www.youtube.com/watch?v=nRB4n09Ekpg">Using Paragraphs to Weave a Beautiful Content Tapestry</a>, I learned the idea of separating paragraph bundles into Content, Layout and Ponies categories.</p>
					<p>This idea helped me solidify the structure of this module.</p>
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
					<p>Entity Reference Revisions fields to other Paragraphs.</p>
					<ul>
						<li>Columns</li>
						<li>Carousel</li>
						<li>Accordion</li>
						<li>Modal</li>
						<li>Tabs</li>
					</ul>
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-in-Iceland.jpg">
					<h1 style="padding-left:20px;padding-right:20px;background: rgba(0, 0, 0, 0.9);width:70%;">Paragraph Bundle Types</h1>
				</section>

				<section>
					<h2>Simple</h2>
					<p>This Paragraphs type has a formatted long text field, which we configured to use the Full HTML text format during installation.  This is essentially what you would expect from a normal body field.</p>
					<img src="http://live-bootstrap-paragraphs.pantheonsite.io/sites/default/files/2017-01/Bootstrap-Paragraphs-Bundle-Type-Simple_0.png" alt="Bootstrap Paragraphs - Simple">
				</section>

				<section>
					<h2>Image</h2>
					<p>This Paragraphs type has an Image reference field, and a Link field if you want to link the image.  Because this uses Drupal core's Image module, we get to set the default field attributes, and require an ALT tag, which is required for proper accessibility.</p>
					<img src="http://live-bootstrap-paragraphs.pantheonsite.io/sites/default/files/2017-01/Bootstrap-Paragraphs-Bundle-Type-Image_1.png" alt="Bootstrap Paragraphs - Image">
				</section>

				<section>
					<h2>Blank</h2>
					<p>The Blank Paragraphs type is perfect for less restrictive HTML and JavaScript.&nbsp; I use these paragraphs for thinks like scripts from external services like <a href="https://mailchimp.com/">Mailchimp</a>, <a href="http://www.pardot.com/">Pardot</a>, <a href="https://www.oracle.com/marketingcloud/products/marketing-automation/index.html">Eloqua</a>, <a href="https://www.marketo.com/">Marketo</a>; and adding page specific <a href="http://json-ld.org/">JSON-LD</a> for SEO.</p>
					<img src="http://live-bootstrap-paragraphs.pantheonsite.io/sites/default/files/2017-01/Bootstrap-Paragraphs-Bundle-Type-Blank.png" alt="Bootstrap Paragraphs - Blank">
				</section>

				<section>
					<h2>Contact Form</h2>
					<p>The Bootstrap Paragraphs Contact Form type allows you to embed one of Drupal 8 core's Contact Forms anywhere you need it, including inside of Accordions, Carousels, Columns, Modals, and Tabs. This is possible thanks to the <a href="https://www.drupal.org/project/contact_formatter">Contact Formatter module</a>.</p>
					<p>Add <a href="https://www.drupal.org/project/inline_entity_form">Inline Entity Form</a> to allow your administrators to add new, or select existing Contact Forms.</p>
					<img src="http://live-bootstrap-paragraphs.pantheonsite.io/sites/default/files/2017-01/Bootstrap-Paragraphs-Type-Contact-Form.png" alt="Bootstrap Paragraphs - Contact Form">
				</section>

				<section>
					<h2>Drupal Blocks</h2>
					<p>The Drupal Block Paragraphs type has a reference field to Drupal core, System, and Menus blocks for easy inclusion in your content.</p>
					<p>You can also use this type as an example for creating a Paragraphs type for your custom blocks.</p>
					<img src="http://live-bootstrap-paragraphs.pantheonsite.io/sites/default/files/2017-01/Bootstrap-Paragraphs-Type-Drupal-Block.png" alt="Bootstrap Paragraphs - Drupal Block">
				</section>

				<section>
					<h2>Drupal Blocks</h2>
					<p>Some Drupal blocks do not render.&nbsp; Here is the list of working and not working at the time DrupalCon Baltimore.</p>
					<div style="width:47%;float:left;">
						<p><strong>Working</strong></p>
						<ul>
							<li>Footer menu</li>
							<li>Main navigation</li>
							<li>Powered by Drupal</li>
							<li>Site branding</li>
							<li>Status messages</li>
							<li>Tabs</li>
						</ul>
					</div>
					<div style="width:44.4%;float:left;">
						<p><strong>Not Working</strong></p>
						<ul>
							<li>Administration menu</li>
							<li>Breadcrumbs</li>
							<li>Main page Content</li>
							<li>Page title</li>
							<li>Primary admin actions</li>
							<li>Syndicate</li>
							<li>Tools</li>
							<li>User account menu</li>
							<li>User login</li>
						</ul>
					</div>
				</section>

				<section>
					<h2>Views</h2>
					<p>The Bootstrap Paragraphs Views type allows you to easily embed a view in and around your other Paragraphs using a <a href="https://www.drupal.org/project/viewsreference">Views Reference Field</a>.</p>
					<img src="http://live-bootstrap-paragraphs.pantheonsite.io/sites/default/files/2017-01/Bootstrap-Paragraphs-Type-Views.png" alt="Bootstrap Paragraphs - Views">
				</section>

				<section>
					<h2>Columns</h2>
					<p style="text-align:left;">The three Bootstrap Paragraphs Column types allows content creators to add column structure into their content using a <strong>Column Content field</strong>.</p>
					<p style="text-align:left;">The field allows for multiple, so columns can be easily reordered by drag and drop in the admin UI.</p>
				</section>

				<section>
					<h2>Columns</h2>
					<ul>
						<li><strong>Columns (Equal)</strong> - allows for up to 6 references, and distributes the content evenly, up to 6 columns</li>
						<li class="fragment"><strong>3 and 2 Column Uneven</strong> - allow for 3 and 2 items respectively, and have an additional Column Style option to choose the layout of the grid.</p>
				</section>

				<section>
					<h2>Equal Columns</h2>
					<img src="img/bp_columns_equal.png" alt="Bootstrap Paragraphs - Columns">
				</section>

				<section>
					<h2>Two Uneven Columns</h2>
					<img src="img/bp_columns_2.png" alt="Bootstrap Paragraphs - Two Columns">
				</section>

				<section>
					<h2>Three Uneven Columns</h2>
					<img src="img/bp_columns_3.png" alt="Bootstrap Paragraphs - Three Columns">
				</section>

				<section>
					<h2>Carousel</h2>
					<p>The Bootstrap Paragraphs Carousel allows for other Paragraph entities to be loaded in the Slide Content field.  Cycle through images, simples, or multi-column pieces of content.  The Carousel also has a Slide Interval speed option.</p>
					<img src="img/bp_carousel_gif.gif" alt="Bootstrap Paragraphs - Views">
				</section>

				<section>
					<h2>Accordion</h2>
					<p>The Bootstrap Paragraphs Accordion implements the <a href="http://getbootstrap.com/javascript/#collapse">Bootstrap Collapse Javascript</a> to create an accordion with the panel/card component. The Accordion references the Accordion Section Paragraph Type which has a title and a Paragraph reference section for the accordion body.</p>
					<img src="img/bp_accordion_gif.gif" alt="Bootstrap Paragraphs - Accordion">
				</section>

				<section>
					<h2>Modal</h2>
					<p>The Bootstrap Paragraphs Modal allows for content creators to easily add modals to the site.</p>
					<p>The bundle has 4 fields:</p>
					<ul>
						<li>Modal Button Text - the trigger that launches the modal</li>
						<li>Modal Title - the title of the modal</li>
						<li>Modal Body - Paragraph reference field</li>
						<li>Modal Footer - Paragraph reference field</li>
					</ul>
				</section>

				<section>
					<h2>Modal</h2>
					<img src="img/bp_modal_gif.gif" alt="Bootstrap Paragraphs - Modal" style="width: 60%;">
				</section>

				<section>
					<h2>Tabs</h2>
					<p>The Bootstrap Paragraphs Tabs allows for other Paragraph entities to be loaded in the Tab Section field.</p>
					<img src="img/bp_tabs_gif.gif" alt="Bootstrap Paragraphs - Tabs">
				</section>

				<section>
					<h2>Those are the basic Paragraph Types</h2>
					<img src="https://media.giphy.com/media/cHqUlvvPvperS/giphy.gif" alt="Dancing Cat">
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-in-the-Water.jpg" data-background-position="center top">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:80%;">Global Settings</h1>
					<p class="fragment" style="color:#fff;background: rgba(0, 0, 0, 0.8);padding:20px;width:60%;">Every paragraph, whether content or layout has the option to set background color and one of five widths, from narrow to full using List/Text Select fields.</p>
				</section>

				<section>
					<h2>Widths</h2>
					<p>Each Paragraph has an option where you can set one of 5 widths.  As the width gets narrower, the content becomes centered using Bootstraps offset classes.  The widths are:</p>
					<ul>
				    <li><strong>Tiny</strong>: col-4, offset-4</li>
				    <li><strong>Narrow</strong>: col-6, offset-3</li>
				    <li><strong>Medium</strong>: col-8, offset-2</li>
				    <li><strong>Wide</strong>: col-10, offset-1</li>
				    <li><strong>Full</strong>: col-12</li>
					</ul>
				</section>

				<section>
					<h2>Widths</h2>
					<img src="img/bp_widths.jpg" alt="Bootstrap Paragraphs - Widths" style="width: 30%;">
				</section>

				<section>
					<h2>Background Colors</h2>
					<p>Each Paragraph has a background color option. Included are over 50 background colors and five empty background classes for you to customize in your own theme.</p>
					<p>Empty classes follow the Bootstrap nomenclature:</p>
					<ul>
						<li>.paragraph--color--primary</li>
						<li>.paragraph--color--secondary</li>
						<li>.paragraph--color--success</li>
						<li>.paragraph--color--info</li>
						<li>.paragraph--color--warning</li>
						<li>.paragraph--color--danger</li>
					</ul>
				</section>

				<section>
					<h2>Background Colors</h2>
					<img src="img/bp_colors.jpg" alt="Bootstrap Paragraphs - Colors" style="width:75%;">
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-in-Berkeley.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:80%;">Template &amp; Markup Strategy</h1>
				</section>

				<section>
					<h2>Markup - div.paragraph</h2>
					<pre><code>
 <div class="paragraph">

 </div>
						</code></pre>
					<ul>
						<li>We apply the Bootstrap <code>.row</code> rules</li>
						<li>Stretches to the edge in a <code>.container</code> or <code>.container-fluid</code></li>
						<li>Also works if <a href="http://getbootstrap.com/css/#grid-nesting">nested in another column</a></li>
					</ul>
				</section>

				<section>
					<h2>Markup - div.paragraph</h2>
					<pre><code>
 <div class="paragraph paragraph-type--simple
 	 paragraph--view-mode--default paragraph--width--full
	 paragraph--color paragraph--color--rgba-blue-light">

 </div>
						</code></pre>
					<ul>
						<li>Type: <code>.paragraph-type--type</code></li>
						<li>View Mode: <code>.paragraph--view-mode--default</code></li>
						<li>Widths: <code>.paragraph--width--name</code></li>
						<li>Colors: <code>.paragraph--color</code><br><code>.paragraph--color--color-name</code></li>
					</ul>
				</section>

				<section>
					<h2>Markup - div.paragraph__column</h2>
					<pre><code>
 <div class="paragraph paragraph-type--simple
 	 paragraph--view-mode--default paragraph--width--full">
 	 <div class="paragraph__column">

 	 </div>
 </div>
						</code></pre>
					<p>We apply the appropriate Bootstrap column rules based on the width selected.</p>
				</section>

				<section>
					<h2>Markup - The Content</h2>
					<pre><code>
 <div class="paragraph paragraph-type--simple
 	 paragraph--view-mode--default paragraph--width--full">
 	 <div class="paragraph__column">
		{{ content|without('bp_width', 'bp_background') }}
 	 </div>
 </div>
						</code></pre>
					<p>The content is added without the background color and width fields.</p>
				</section>

				<section>
					<h2>Twig - Width example</h2>
					<img src="img/twig-width-field.png" alt="Twig markup for Width Field">
				</section>

				<section>
					<h2>Drupal Asset libraries</h2>
					<p>In our Paragraphs templates we use a library to load our two CSS files only on pages that need it.</p>
					<small><code>{{ attach_library('bootstrap_paragraphs/bootstrap-paragraphs') }}</code></small>
				</section>

				<section>
					<h2>Page Template Suggestions</h2>
					<p>For Full Width Colors, add a new Region into your <code>page.html.twig</code></p>
					<pre><code>
 {% if page.structured_content %}
   {% block structured_content %}
     <div class="structured-content container">
       {{ page.structured_content }}
     </div>
   {% endblock %}
 {% endif %}
						</code></pre>
				</section>

				<section>
					<p>And add the following CSS to your theme.</p>
					<pre><code>
 /* Adds full width, margin-less and padding-less container for Paragraphs. */
 /* This is so colors go full width.  Padding is on interior elements. */
 .structured-content.container {
   padding-left: 0;
   padding-right: 0;
   width: 100%;
 }
 .structured-content.container > div {
   margin-left: 0;
   margin-right: 0;
 }
 .structured-content.container > div > div {
   padding-left: 0;
   padding-right: 0;
 }
						</code></pre>
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-in-Greece-by-the-cactus-by-the-sea.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:65%;">Overriding</h1>
					<p class="fragment" style="color:#fff;background: rgba(0, 0, 0, 0.8);padding:20px;width:60%;">Customize Bootstrap Paragraphs in your own them after you've installed.</p>
				</section>

				<section>
					<h2>Bundles and Fields</h2>
					<p>After installation, Bundles and Fields are kept in your <strong>database</strong> and in your <strong>configuration</strong>.</p>
					<p>Any changes you make will be yours.</p>
				</section>

				<section>
					<h2>CSS &amp; Templates</h2>
					<p>Your theme has a higher priority than this module.  Move the template files, and Overwrite the CSS from your theme if desired.</p>
				</section>

				<section>
					<h2>Uninstall this module!</h2>
					<p>In fact, you can uninstall this module after installation and still keep all the functionality.</p>
					<ul>
						<li class="fragment">Move the templates to your theme, and remove the <code>attach_library</code> call.</li>
						<li class="fragment">Move the CSS files to your theme and call them from you theme's library file.</li>
					</ul>
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-in-Greece-by-the-cactus-by-the-road.jpg">
					<h1 class="fragment box" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:60%;">Extending Bootstrap Paragraphs</h1>
				</section>

				<section>
					<h2>Create a new "Custom Block" Paragraphs Bundle Type</h2>
					<p>Use the Drupal Block Paragraph to provide the example.</p>
					<img src="img/Custom-Block-1-Drupal-Block-Example.png" alt="Screenshot of Custom Block">
				</section>

				<section>
					<h2>Custom Block</h2>
					<p>Add a new Paragraph Type.</p>
					<img src="img/Custom-Block-2-Add-Paragraph-Type.png" alt="Screenshot of Custom Block 1">
				</section>

				<section>
					<h2>Custom Block</h2>
					<p>Add the existing Background field.</p>
					<img src="img/Custom-Block-3-Add-Background-Field.png" alt="Screenshot of Custom Block 2">
				</section>

				<section>
					<h2>Custom Block</h2>
					<p>Add the existing Width field.</p>
					<img src="img/Custom-Block-4-Add-Width-Field.png" alt="Screenshot of Custom Block 3">
				</section>

				<section>
					<h2>Custom Block</h2>
					<p>Add a new Reference field, select Other for type.</p>
					<img src="img/Custom-Block-5-Field-Select-Other.png" alt="Screenshot of Custom Block 4">
				</section>

				<section>
					<h2>Custom Block</h2>
					<p>Select Custom Block in the Reference field.</p>
					<img src="img/Custom-Block-6-Field-Select-Custom-Block.png" alt="Screenshot of Custom Block 5">
				</section>

				<section>
					<h2>Custom Block</h2>
					<p>Select which Custom Block Type Bundles.</p>
					<img src="img/Custom-Block-7-Select-Which-Block-Bundles.png" alt="Screenshot of Custom Block 6">
				</section>

				<section>
					<h2>Custom Block</h2>
					<p>Manage Display</p>
					<img src="img/Custom-Block-8-Manage-Display.png" alt="Screenshot of Custom Block 7">
				</section>

				<section>
					<h2>Hero</h2>
					<p>Here is a more complex example for a Hero Paragraph bundle which has:</p>
					<ul>
						<li>Paragraph Reference field for content</li>
						<li>Background Image</li>
						<li>Parallax Option</li>
						<li>Image Overlay Option</li>
						<li>Image Overlay Invert Option</li>
						<li>Zoom/Ken Burns Effect Option</li>
					</ul>
				</section>

				<section>
					<h2>Hero</h2>
					<img src="img/hero-paragraphs.jpg" alt="Hero Paragraph">
				</section>

				<section>
					<h2>Hero - Fields</h2>
					<img src="img/hero-paragraphs-fields.png" alt="Hero Paragraph Fields">
				</section>

				<section>
					<h2>Hero - Display</h2>
					<img src="img/hero-paragraphs-display.png" alt="Hero Paragraph Displays">
				</section>

				<section>
					<h2>Hero - Overlay</h2>
					<img src="img/hero-paragraphs-template-1-library-overlay.png" alt="Hero Paragraph Template">
				</section>

				<section>
					<h2>Hero - Parallax</h2>
					<img src="img/hero-paragraphs-template-2-parallax.png" alt="Hero Paragraph Template">
				</section>

				<section>
					<h2>Hero - Invert</h2>
					<img src="img/hero-paragraphs-template-3-invert.png" alt="Hero Paragraph Template">
				</section>

				<section>
					<h2>Hero - Zoom</h2>
					<img src="img/hero-paragraphs-template-4-zoom.png" alt="Hero Paragraph Template">
				</section>

				<section>
					<h2>Hero - Putting it all together</h2>
					<img src="img/hero-paragraphs-template-5-printing.png" alt="Hero Paragraph Template">
				</section>

				<section>
					<h2>Building a module using config</h2>
					<p>Create Once, Reuse Everywhere!</p>
					<ul>
						<li>Create bundle structure in a blank Drupal install</li>
						<li>Create module structure</li>
						<li>Add Templates, CSS, and JS</li>
						<li>Add Function to override Template</li>
						<li>Export Config, delete UUIDs, and Namespace</li>
					</ul>
				</section>

				<section>
					<h2>Create bundle structure in a blank Drupal install</h2>
					<p>Spin up a sandbox on your favorite hosting platform or you local dev environment and build your bundle.</p>
				</section>

				<section>
					<h2>Create module structure</h2>
					<img src="img/hero-paragraphs-module-structure.png" alt="Hero Paragraph Module Structure">
				</section>

				<section>
					<h2>Add Templates, CSS, and JS</h2>
					<ul>
						<li>Copy the default template from the Bootstrap Paragraphs module.</li>
						<li>Add a CSS file.</li>
						<li>Add a JS file if needed.</li>
						<li>Configure them in the module's .libraries file.</li>
					</ul>
				</section>

				<section>
					<h2>Add Function to override Template in .module file</h2>
					<img src="img/hero-paragraphs-module.png" alt="Hero Paragraph Function">
				</section>

				<section>
					<h2>Export Config, delete UUIDs, and Namespace</h2>
					<img src="img/hero-paragraphs-config.jpg" alt="Hero Paragraph Config">
				</section>

				<section>
					<h2>Install, Test, &amp; Share the finished product</h2>
					<p>This example can be found at <a href="https://github.com/xenomedia/xeno_hero">Xeno Hero</a> on Github.</p>
					<img src="img/xeno-hero.png" alt="Xeno Hero on Github">
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-at-Fermilab.jpg">
					<h1 class="fragment box" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:100%;">Summary &amp; Thanks</h1>
					<p class="fragment" style="color:#fff;background: rgba(0, 0, 0, 0.8);padding:20px;width:70%;">Using Frameworks benefits productivity (Drupal, Bootstrap, Paragraphs).  That is what I was trying to achieve by building this module.</p>
					<p class="fragment" style="color:#fff;background: rgba(0, 0, 0, 0.8);padding:20px;width:70%;">But you can also use this approach with other front end frameworks -- Singularity, Foundation, Slick, etc...</p>
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-at-Xeno.jpg">
					<div class="fragment">
						<h1 class="box" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);"><a href="http://www.xenomedia.com">Xeno Media</a></h1>
						<p style="color:#fff;background: rgba(0, 0, 0, 0.8);padding:20px;width:60%;">Xeno Media, Inc. is a Chicago-based agency providing Drupal Development, Web Consulting and Design to the world's greatest clients.</p>
					</div>
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
					<div class="fragment">
						<div style="color:#fff;background: rgba(0, 0, 0, 0.8);padding:20px;width:47%;float:left;">
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
						<div style="color:#fff;background: rgba(0, 0, 0, 0.8);padding:20px 20px 60px;width:44.4%;float:left;">
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
					</div>
				</section>

				<section>
					<h2>Many thanks to:</h2>
					<ul>
						<li><a href="http://jeroen.pro">Jeroen Bobbeldijk</a>, <a href="https://www.drupal.org/vdmi">.VDMi/</a>, <a href="https://www.drupal.org/md-systems">MD Systems</a> for supporting the <a href="https://www.drupal.org/project/paragraphs">Paragraphs module</a>.</li>
						<li>Les Lim and David Needham's presentation <a href="https://www.youtube.com/watch?v=nRB4n09Ekpg">Using Paragraphs to Weave a Beautiful Content Tapestry</a></li>
						<li>Morten, Danny Englander, Greg Boggs, Mark Conroy, and everyone else in the <a href="https://slackinvite.me/to/drupaltwig">Drupal Twig Slack</a></li>
						<li>So many people in Stack Overflow, especially Scott Reeves (Cottser)!</li>
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
