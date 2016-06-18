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
				Gifs:
					http://giphy.com/gifs/giftdelivery-3oEduPYHQCqxnwGeQw
					http://giphy.com/gifs/cheezburger-workplace-fun-YhyAJUCpno53y
					http://giphy.com/gifs/dog-shiba-inu-typing-mCRJDo24UvJMA
					http://giphy.com/gifs/l2JHY1hsE8l9SWDba
				-->


				<section>
					<p>Holistic SEO is a term used to describe building sites in which content, marketing, technical SEO, performance, security, user experience, and much more come together to create an ideal url on the internet, about a certain topic.</p>
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-at-Xeno.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);">Why take a Holistic approach to seo?</h1>
					<p class="fragment" style="display:inline-block;background: rgba(0, 0, 0, 0.8);padding:20px;width:60%;float:left;">As algorithms get more complex and intelligent, we won't be able to control or predict changes.</p>
					<p class="fragment" style="display:inline-block;background: rgba(0, 0, 0, 0.8);padding:20px;width:60%;float:left;">It benefits the user.</p>
				</section>

				<section>
					<h2>The three types of Searches</h2>
					<ul>
						<li class="fragment">Navigational</li>
						<li class="fragment">Informational</li>
						<li class="fragment">Transactional</li>
					</ul>
				</section>

				<section>
					<img src="img/exact-match-page.jpg" alt="a page we created containing a very specific search term" style="width:60%;">
					<p>Once upon a time, we were able to create small pieces of keyword specific content...</p>
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
					<ul>
						<li class="fragment">hardwood floor finishes</li>
						<li class="fragment">wood floor finish</li>
						<li class="fragment">how to finish a hardwood floor</li>
						<li class="fragment">wood floor finishing</li>
					</ul>
				</section>

				<section>
					<p>It is a very well written article in an excellently architected site, from a domain with value.</p>
					<ul>
						<li class="fragment">Nice big image</li>
						<li class="fragment">Over 1000 words</li>
						<li class="fragment">Great meta tags</li>
						<li class="fragment">LD/JSON Markup</li>
						<li class="fragment">Fast</li>
						<li class="fragment">Mobile</li>
						<li class="fragment">etc</li>
				</section>

				<section>
					<img src="img/floor-finish/hardwood-floor-finishes.png" alt="search results - hardwood floor finishes">
				</section>

				<section>
					<h2>1st Result</h2>
					<p>Informational Search, but with a little Transactional</p>
					<p>Notice the Image section, and the shopping section.</p>
					<p class="fragment">We also have similar results for "wood floor finish"</p>
				</section>

				<section>
					<img src="img/floor-finish/wood-floor-finish.png" alt="search results - wood floor finish">
				</section>

				<section>
					<p>Here's where it gets interesting:<br>"how to finish a hardwood floor"</p>
					<img src="img/floor-finish/how-to-finish-a-hardwood-floor.png" alt="search results - how to finish a hardwood floor">
				</section>

				<section>
					<h2>8th Result</h2>
					<p>Informational Search</p>
					<ul>
						<li class="fragment">Knowledge box and videos all are "How to"</li>
						<li class="fragment">Knowledge box is from the 7th result, same site as our page</li>
						<li class="fragment">Not directly related (keyword or specificity) to the search term!</li>
					</ul>
				</section>

				<section>
					<img src="img/floor-finish/wood-floor-finishing.png" alt="search results - wood floor finishing">
				</section>

				<section>
					<h2>3rd Result</h2>
					<p>Transactional Search</p>
					<ul>
						<li class="fragment">Business listing showing floor finishing companies near me</li>
						<li class="fragment">Yelp business reviews, and Home advisor business listings.</li>
						<li class="fragment">Contractor websites</li>
						<li class="fragment">The page in question does not fit in with Transactions, but is still listed!</li>
					</ul>
				</section>

				<section>
					<img src="img/lil-bub-video.jpg" alt="Little Bub Video">
					<p>One more example, showing how semantic Google is.</p></p>
				</section>

				<section>
					<img src="img/lil-bub-video-search-result.jpg" alt="searching for little bub fireplace on google" style="width:60%;">
					<p>Now, Google knows the piece of content I need, even if I get 2 of the 3 words wrong!</p>
					<p><small>"little" nor "fireplace" exist on the page, yet I get the result.</small></p>
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-in-Greece-Bay-View.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:60%;">Let's talk about scale</h1>
				</section>

				<section>
					<img src="img/SearchEngineLand.png" alt="Search Engine Land">
					<h2>On May 24th, 2016 Google revealed that users make at least <em><u>2 trillion</u></em> searches per year</h2>
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

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-and-the-Acheivement-Duck.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:85%;">Search engine ranking factors</h1>
				</section>

				<section>
					<h2>Those who monitor and decipher</h2>
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
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-at-the-Parthenon.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:60%;">Content Strategy</h1>
				</section>

				<section>
					<h2>Client Side</h2>
				</section>

				<section>
					Content strategy and how it can guide development.

					Quality writing
					Keyword Research
					Freshness
					Images
					Video

					Tools for Content Creators:
					Google AdWords Keyword Planner
					https://adwords.google.com/KeywordPlanner

					Searchmetrics Essentials
					http://www.searchmetrics.com/essentials/

					Moz Pro Keyword Explorer
					https://moz.com/products/pro/keyword-explorer
				</section>

				<section>
					<h2>Development Side</h2>
				</section>

				<section>
					Properly Identified Content Types
					Entity Reference Fields
					Paragraphs
					Inline Entity Forms
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-in-the-cabana.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:75%;">Technical SEO best practices in Drupal</h1>
				</section>

				<section>
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
				</section>

				<section>
					Stay up to date:
					http://searchengineland.com/
					https://moz.com/blog
					https://webmasters.googleblog.com/
				</section>

				<section>
					Tools for Developers:
					=====================
					Google Defines Best Practices:
					https://developers.google.com/web/

					Tools:
					Google Structured Data Testing Tool (Schema)
					https://search.google.com/structured-data/testing-tool/u/0/

					Google Structured Data Markup Helper (Schema)
					https://www.google.com/webmasters/markup-helper/u/1/?hl=en

					Google PageSpeed Insights:
					https://developers.google.com/speed/pagespeed/insights/

					Google Mobile-Friendly Test
					https://www.google.com/webmasters/tools/mobile-friendly/

					Google Email Markup Tester
					https://www.google.com/webmasters/markup-tester/u/1?hl=en

					Google Search Console
					* View (and fix) Crawl Errors
					* Fetch as Google
					* robots.txt Tester
					* Submit Sitemaps
					* Configure URL Parameters
					https://www.google.com/webmasters/#?modal_active=none
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
