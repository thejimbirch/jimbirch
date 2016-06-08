<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Holistic SEO and Drupal | Web Development Presentation</title>
		<meta name="description" content="This presentation reviews the most common search engine ranking factors and how to take a holistic approach to SEO best practices when developing in Drupal."/>
		<link rel="canonical" href="http://jimbir.ch/presentations/holistic-seo"/>
		<meta property="og:site_name" content="Jim Birch"/>
		<meta property="og:type" content="public_figure"/>
		<meta property="og:url" content="http://jimbir.ch/presentations/holistic-seo"/>
		<meta property="og:title" content="Holistic SEO and Drupal | Web Development Presentation"/>
		<meta property="og:description" content="This presentation reviews the most common search engine ranking factors and how to take a holistic approach to SEO best practices when developing in Drupal."/>
		<meta property="og:image" content="http://jimbir.ch/presentations/holistic-seo/img/Lego-Uncle-Jim-in-Paradise.jpg"/>
		<meta name="twitter:site" content="@thejimbirch"/>
		<meta name="twitter:site:id" content="2989027096"/>
		<meta name="twitter:creator" content="@thejimbirch"/>
		<meta name="twitter:creator:id" content="2989027096"/>
		<meta name="twitter:url" content="http://jimbir.ch/presentations/holistic-seo"/>
		<meta name="twitter:title" content="Holistic SEO and Drupal | Web Development Presentation"/>
		<meta name="twitter:description" content="This presentation reviews the most common search engine ranking factors and how to take a holistic approach to SEO best practices when developing in Drupal."/>
		<meta name="twitter:image:src" content="http://jimbir.ch/presentations/holistic-seo/img/Lego-Uncle-Jim-in-Paradise.jpg"/>
		<meta itemprop="name" content="Holistic SEO and Drupal | Web Development Presentation"/>
		<meta itemprop="description" content="This presentation reviews the most common search engine ranking factors and how to take a holistic approach to SEO best practices when developing in Drupal."/>
		<meta itemprop="image" content="http://jimbir.ch/presentations/holistic-seo/img/Lego-Uncle-Jim-in-Paradise.jpg"/>
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
				bottom: 30px;
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
			<div class="footer" style="font-size:16px;position:fixed;bottom:20px;left:30px;width:95%;margin:0 auto;z-index:1000;">
				<div style="float:left;"><a href="http://www.twitter.com/thejimbirch" title="@thejimbirch">@thejimbirch</a></div>
				<div style="float:right;"><a href="http://www.xenomedia.com" title="Xeno Media, Inc">Xeno Media, Inc</a></div>
			</div>
			<div class="slides">
				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-reads-email.jpg">
					<h1 style="padding-left:20px;">Holistic SEO and Drupal</h1>
					<h3 style="float:left;padding-left:20px;width:75%;">Best practices in an ever changing search landscape</h3>
					<p style="display:inline-block;background: rgba(0, 0, 0, 0.5);padding:20px;">Created by <a href="http://jimbir.ch">Jim Birch</a><br>
					<a href="http://jimbir.ch/presentations/holistic-seo">jimbir.ch/presentations/holistic-seo</a><br>
					<a href="http://twitter.com/thejimbirch">@thejimbirch</a><br>
					<a href="http://www.xenomedia.com">Xeno Media, Inc.</a></p>
				</section>

				<!-- Roadmap
Search engine ranking factors
- http://www.searchmetrics.com/knowledge-base/ranking-factors/
- https://moz.com/search-ranking-factors
- http://searchengineland.com/now-know-googles-top-three-search-ranking-factors-245882

- Nice Visual Takes
- http://www.searchmetrics.com/knowledge-base/ranking-factors-infographic-2015/
- http://searchengineland.com/seotable

- Rankbrain, AI, Verticals and the unfairness of things.
- http://searchengineland.com/faq-all-about-the-new-google-rankbrain-algorithm-234440
- https://en.wikipedia.org/wiki/RankBrain
- http://techcrunch.com/2016/06/04/artificial-intelligence-is-changing-seo-faster-than-you-think/

Content strategy and how it can guide development.
- Ranking for unique term (jim site)
- User Intent - Lil bub video
- https://www.google.com/#q=little+bub+fireplace

Quality writing
Keyword Research
Freshness
Images
Video

Technical SEO best practices in Drupal
- Site Architecture, Crawlability
- Responsive
- Speed
- URL Strcuture
- Sucure
- Titles
- Accessible headers
- Meta
- Schema (Schema.org, JSON-LD)

Stay up to date:
http://searchengineland.com/
https://moz.com/blog
https://webmasters.googleblog.com/

Tools:
Schema
Speed
Mobile

Gifs:
http://giphy.com/gifs/giftdelivery-3oEduPYHQCqxnwGeQw
http://giphy.com/gifs/cheezburger-workplace-fun-YhyAJUCpno53y
http://giphy.com/gifs/dog-shiba-inu-typing-mCRJDo24UvJMA
http://giphy.com/gifs/l2JHY1hsE8l9SWDba
-->


				<section>
					<p>Holistic SEO is a term used to describe building sites in which content, marketing, technical SEO, performance, security, user experience, and much more come together to create an ideal url on the internet.</p>
				</section>

				<section>
					<img src="img/SearchEngineLand.png" alt="Search Engine Land">
					<h2>As of May 24th, 2016 Google reveals that they now handle at least <em><u>2 trillion</u></em> searches per year</h2>
					<p><small><a href="http://searchengineland.com/google-now-handles-2-999-trillion-searches-per-year-250247">Google now handles at least 2 trillion searches per year - Danny Sullivan, Search Engine Land</a></small></p>
				</section>

				<section>
					<img src="img/SearchEngineLand.png" alt="Search Engine Land">
					<h3>How that breaks down</h3>
					<ul>
						<li class="fragment">Searches per year: 2 trillion</li>
						<li class="fragment">Searches per month: 167 billion</li>
						<li class="fragment">Searches per day: 5.5 billion</li>
						<li class="fragment">Searches per hour: 228 million</li>
						<li class="fragment">Searches per minute: 3.8 million</li>
						<li class="fragment">Searches per second: 63,000</li>
						<li class="fragment">...at least...</li>
					</ul>
				</section>

				<section>
					<img src="img/rand-fishkin-tweet.png" alt="Rand Fishkin Tweet">
					<p><small><a href="https://twitter.com/randfish/status/736916941546262528">Rand Fishkin, Moz Founder</a></small></p>
				</section>

				<section>
					<p>Which would put it closer to 3 Trillion searches a year!</p>
				</section>

				<section>
					<img src="img/inc.png" alt="Inc Magazine">
					<ul>
						<li>Over half of those searches happen on smartphones.</li>
						<li class="fragment">Nearly one third of all mobile searches on Google are related to location.</li>
						<li class="fragment">Location-related mobile searches are growing 50% faster than mobile searches in general.</li>
						<li class="fragment">More than half of all web traffic for the millions of website owners using Google Analytics now comes from smartphones and tablets.</li>
					</ul>
					<p><small><a href="http://www.inc.com/larry-kim/google-execs-share-10-incredible-new-mobile-web-stats.html">Google Execs Share 10 Incredible New Mobile Web Stats - Larry Kim, Inc.</a></small></p>
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-at-Xeno.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);">What can we do?</h1>
					<p class="fragment" style="display:inline-block;background: rgba(0, 0, 0, 0.8);padding:20px;width:60%;float:left;">A command-line interface ... is a means of interacting with a computer program where the user (or client) issues commands to the program in the form of successive lines of text (command lines). - <a href="https://en.wikipedia.org/wiki/Command-line_interface">Wikipedia</a></p>
				</section>

				<section style="text-align: left;" data-background="img/Lego-Uncle-Jim-at-Sunset.jpg">
					<h1 style="padding-left:20px;">THE END</h1>
					<h3 style="padding-left:20px;">Continuing the conversation:</h3>
					<p style="display:inline-block;background: rgba(0, 0, 0, 0.5);padding:20px;">Created by <a href="http://jimbir.ch">Jim Birch</a><br>
					<a href="http://jimbir.ch/presentations/holistic-seo">jimbir.ch/presentations/holistic-seo</a><br>
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
