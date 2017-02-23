<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Holistic SEO and Drupal | Web Development Presentation</title>
		<meta name="description" content="This presentation reviews the most common search engine ranking factors and how to take a holistic approach to SEO best practices when developing in Drupal."/>
		<link rel="canonical" href="http://jimbir.ch/presentations/holistic-seo/"/>
		<meta property="og:site_name" content="Jim Birch"/>
		<meta property="og:type" content="public_figure"/>
		<meta property="og:url" content="http://jimbir.ch/presentations/holistic-seo/"/>
		<meta property="og:title" content="Holistic SEO and Drupal | Web Development Presentation"/>
		<meta property="og:description" content="This presentation reviews the most common search engine ranking factors and how to take a holistic approach to SEO best practices when developing in Drupal."/>
		<meta property="og:image" content="http://jimbir.ch/presentations/holistic-seo/img/Lego-Uncle-Jim-reads-email.jpg"/>
		<meta name="twitter:site" content="@thejimbirch"/>
		<meta name="twitter:site:id" content="2989027096"/>
		<meta name="twitter:creator" content="@thejimbirch"/>
		<meta name="twitter:creator:id" content="2989027096"/>
		<meta name="twitter:url" content="http://jimbir.ch/presentations/holistic-seo/"/>
		<meta name="twitter:title" content="Holistic SEO and Drupal | Web Development Presentation"/>
		<meta name="twitter:description" content="This presentation reviews the most common search engine ranking factors and how to take a holistic approach to SEO best practices when developing in Drupal."/>
		<meta name="twitter:image:src" content="http://jimbir.ch/presentations/holistic-seo/img/Lego-Uncle-Jim-reads-email.jpg"/>
		<meta itemprop="name" content="Holistic SEO and Drupal | Web Development Presentation"/>
		<meta itemprop="description" content="This presentation reviews the most common search engine ranking factors and how to take a holistic approach to SEO best practices when developing in Drupal."/>
		<meta itemprop="image" content="http://jimbir.ch/presentations/holistic-seo/img/Lego-Uncle-Jim-reads-email.jpg"/>
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

			.fixed-footer > div {
				font-size: 16px;
			}

			@media print {
		    .fixed-footer {
		        display: none;
		    }
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
				<div style="float:left;"><a href="http://jimbir.ch/presentations/holistic-seo/" style="color:#111;">jimbir.ch/holistic-seo</a> | <a href="http://www.twitter.com/thejimbirch" title="@thejimbirch" style="color:#111;">@thejimbirch</a></div>
				<div style="float:right;"><a href="http://www.xenomedia.com" title="Xeno Media, Inc"><img src="img/xeno-media-logo.png" alt="Xeno Media, Inc" style="height:14px;width:auto;"></a></div>
			</div>
			<div class="slides">
				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-reads-email.jpg">
					<h1 style="padding-left:20px;">Holistic SEO and Drupal</h1>
					<h3 style="float:left;padding-left:20px;width:75%;">Best practices in an ever changing search landscape</h3>
					<p style="color:#fff;display:inline-block;background: rgba(0, 0, 0, 0.5);padding:20px;">Created by <a href="http://jimbir.ch">Jim Birch</a><br>
					<a href="http://jimbir.ch/presentations/holistic-seo">jimbir.ch/holistic-seo</a><br>
					<a href="http://twitter.com/thejimbirch">@thejimbirch</a><br>
					<a href="http://www.xenomedia.com">Xeno Media, Inc.</a></p>
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-in-Greece-by-the-steps.jpg">
					<p class="fragment" style="display:inline-block;color:#fff;background: rgba(0, 0, 0, 0.8);padding:20px;width:60%;"><strong>Holistic SEO</strong> is a term used to describe development in which content, marketing, technical SEO, performance, security, user experience and user intent come together to create an ideal url on the internet, about a certain topic.</p>
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-at-Xeno.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);">Why take a Holistic approach to seo?</h1>
					<p class="fragment" style="color:#fff;background: rgba(0, 0, 0, 0.8);padding:20px;width:60%;">It defines a set of best practices that ultimately benefits the user.</p>
					<p class="fragment" style="color:#fff;background: rgba(0, 0, 0, 0.8);padding:20px;width:60%;">As search engine algorithms get more personalized, complex and intelligent, we won't be able to control or predict changes.</p>
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-in-the-Jungle.jpg">
					<h2 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:60%;">Today's Google algorithm puts more value on <u>Topic</u> and <u>User Intent</u> than Keywords.</h2>
				</section>

				<section>
					<img src="img/exact-match-page.jpg" alt="a page we created containing a very specific search term" style="width:60%;">
					<p>Once upon a time, we were able to create small pieces of keyword specific content...</p>
					<p><small><a href="http://jimbir.ch/kr2fowdogudo999dvwdlkvnldkvn">kr2fowdogudo999dvwdlkvnldkvn</a></small></p>
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
						<li class="fragment">JSON-LD Markup</li>
						<li class="fragment">Fast</li>
						<li class="fragment">Mobile</li>
						<li class="fragment">and more</li>
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-at-Fermilab.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);">Three basic types of searches</h1>
					<div class="fragment" style="color:#fff;background: rgba(0, 0, 0, 0.8);padding:20px;width:60%;">
						<ul>
							<li>Navigational<br>
								<small class="fragment">Searcher want to go somewhere, online or offline.</small>
							</li>
							<li class="fragment">Informational<br>
								<small class="fragment">Searcher want to learn something.</small>
							</li>
							<li class="fragment">Transactional<br>
								<small class="fragment">Searcher want to buy, sell, sign up, etc.</small>
							</li>
						</ul>
					</div>
				</section>

				<section>
					<img src="img/floor-finish/hardwood-floor-finishes.png" alt="search results - hardwood floor finishes">
				</section>

				<section>
					<h2>hardwood floor finishes<br>1st Result</h2>
					<ul style="width:55%;">
						<li class="fragment">Primarily Informational, but also has Transactional elements</li>
						<li class="fragment">Lots of informative links, and a shopping box.</li>
						<li class="fragment">We also have similar results for "wood floor finish"</li>
					</ul>
				</section>

				<section>
					<img src="img/floor-finish/wood-floor-finish.png" alt="search results - wood floor finish">
				</section>

				<section>
					<p>Here's where it gets interesting:<br>"how to finish a hardwood floor"</p>
					<img src="img/floor-finish/how-to-finish-a-hardwood-floor.png" alt="search results - how to finish a hardwood floor">
				</section>

				<section>
					<h2><span style="font-size:80%;">how to finish a hardwood floor</span><br>8th Result</h2>
					<p>Informational Search</p>
					<ul>
						<li class="fragment">Knowledge box and videos all are "How to"</li>
						<li class="fragment">Knowledge box is from the 7th result, same site as our page</li>
						<li class="fragment">Our page is a product guide, not a How to, but the information is still percieved as valuable.</li>
					</ul>
				</section>

				<section>
					<img src="img/floor-finish/wood-floor-finishing.png" alt="search results - wood floor finishing">
				</section>

				<section>
					<h2>Wood Floor Finishing<br>3rd Result</h2>
					<p>Transactional Search</p>
					<ul>
						<li class="fragment">Business listing showing local floor finishing companies</li>
						<li class="fragment">Yelp business reviews, and Home advisor business listings</li>
						<li class="fragment">Contractor websites</li>
						<li class="fragment">The page in question does not fit in with Transactions, but is still listed!</li>
					</ul>
				</section>

				<section>
					<img src="img/lil-bub-video.jpg" alt="Little Bub Video">
					<p>Another example showing how semantic Google is.</p></p>
				</section>

				<section>
					<h2>little bub fireplace</h2>
					<img src="img/lil-bub-video-search-result.jpg" alt="searching for little bub fireplace on google" style="width:60%;">
					<p>Now, Google knows the piece of content I need, even if I get 2 of the 3 words wrong!</p>
					<p><small>"little" nor "fireplace" exist on the page, yet I get the result.</small></p>
				</section>

				<section>
					<iframe width="640" height="360" src="https://www.youtube.com/embed/ZuHZSbPJhaY" frameborder="0" allowfullscreen></iframe>
					<h2>Google is</h2>
					<ul>
						<li class="fragment"><strong>Topic based</strong> - Returns good content that is related, but not specific to the search term.</li>
						<li class="fragment"><strong>Semantic</strong> - Understands synonyms, pluralities, misspellings, homonyms and more</li>
						<li class="fragment">Focused on <strong>User Intent</strong> - What the user is trying to acheive by searching</li>
					</ul>
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

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-in-the-cabana.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:85%;">Search Engine Ranking Factors</h1>
					<p class="fragment" style="display:inline-block;color:#fff;background: rgba(0, 0, 0, 0.8);padding:20px;width:60%;"><strong>Search engine ranking factors</strong> are on- and off-site items that search engines use to evaluate a web property's placement in the search results for a certain query.</p>
				</section>

				<section>
					<h2>Search Engine Ranking Factors</h2>
					<ul>
						<li class="fragment">Each search engine has their own algorithm to how they weigh factors.</li>
						<li class="fragment">On occasion, Google will publish factors. Pay attention!
							<ul>
								<li><a href="https://webmasters.googleblog.com/2015/02/finding-more-mobile-friendly-search.html" target="_blank">Mobilegeddon</a></li>
								<li><a href="https://webmasters.googleblog.com/2014/05/making-your-site-more-mobile-friendly.html" target="_blank">Page Speed</a></li>
								<li><a href="https://webmasters.googleblog.com/2015/12/indexing-https-pages-by-default.html">HTTPS</a></li>
								<li><a href="https://webmasters.googleblog.com/2016/08/amp-your-content-preview-of-amped.html" target="_blank">AMP'ed results in Search</a></li>
								<li>Schema markup (<a href="https://webmasters.googleblog.com/2016/09/showcase-your-sites-reviews-in-search.html">Reviews in Search</a>), (<a href="https://webmasters.googleblog.com/2016/05/introducing-rich-cards.html">Rich cards</a>)</li>
								<li><a href="http://searchengineland.com/google-divide-index-giving-mobile-users-better-fresher-content-261037">Separate Mobile Search Index</a></li>
							</ul>
						</li>
						<li class="fragment">Factors can be ranked differently for each and every search term.</li>
					</ul>
				</section>

				<section>
					<h3>There are possibly</h3>
					<h4><span style="font-size: 600%;">200</span></h4>
					<h3>ranking factors</h3>
					<p>
						<small><a href="http://backlinko.com/google-ranking-factors">Google’s 200 Ranking Factors: The Complete List - Backlinko</a></small><br>
						<small><a href="https://www.searchenginejournal.com/infographic-googles-200-ranking-factors/64316/">Google's 200 Ranking Factors - Search Engine Journal</a></small><br>
						<small><a href="https://webmasters.googleblog.com/2016/09/penguin-is-now-part-of-our-core.html">Penguin is now part of our core algorithm - Google Webmaster Central Blog</a></small>
					</p>
				</section>

				<section>
					<img src="img/SearchEngineLand.png" alt="Search Engine Land">
					<h2>On Mar 23, 2016 Google's Andrey Lipattsevm stated that <u>links</u>, <u>content</u> and <u>RankBrain</u> are the top three ranking signals in Google's search algorithm.</h2>
					<p><small><a href="http://searchengineland.com/now-know-googles-top-three-search-ranking-factors-245882">Now we know: Here are Google's top 3 search ranking factors - Barry Schwartz, Search Engine Land</a></small></p>
				</section>

				<section>
					<h2>Links</h2>
					<ul>
						<li class="fragment">Quality of links</li>
						<li class="fragment">Keywords in links</li>
						<li class="fragment">Quantity</li>
					</ul>
				</section>

				<section>
					<h2>Content</h2>
					<ul>
						<li class="fragment">Quality writing</li>
						<li class="fragment">Keyword Research</li>
						<li class="fragment">Freshness</li>
						<li class="fragment">Images, Video, News related to content or vertical</li>
						<li class="fragment">Does the content answer questions?</li>
					</ul>
				</section>

				<section>
					<h2>What is Rankbrain?</h2>
					<ul>
						<li class="fragment">RankBrain is a machine learning artificial intelligence system ... </li>
						<li class="fragment">If RankBrain sees a word or phrase it isn’t familiar with, the machine can make a guess as to what words or phrases might have a similar meaning and filter the result accordingly, making it more effective at handling never-before-seen search queries. - <a href="https://en.wikipedia.org/wiki/RankBrain">Wikipedia</a></li>
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
				</section>

				<section>
					<h2>Those who monitor and decipher Search Engine Ranking Factors</h2>
					<ul>
						<li class="fragment"><a href="http://searchengineland.com/now-know-googles-top-three-search-ranking-factors-245882">Search Engine Land</a></li>
						<li class="fragment"><a href="http://www.searchmetrics.com/knowledge-base/ranking-factors/">Searchmetrics</a></li>
						<li class="fragment"><a href="https://moz.com/search-ranking-factors">Moz</a></li>
						<li class="fragment"><a href="http://backlinko.com/google-ranking-factors">Backlinko</li>
					</ul>
				</section>

				<section>
					<p><small><a href="http://www.searchmetrics.com/knowledge-base/ranking-factors/">Searchmetrics General Search Ranking Factors</a></small></p>
					<a href="http://www.searchmetrics.com/knowledge-base/ranking-factors/"><img src="http://www.searchmetrics.com/wp-content/uploads/Searchmetrics-Ranking-Factors-Infographic-EN.jpg?x98318" alt="Searchmetrics General Ranking Factors 2016" style="width:80%;"></a>
				</section>

				<section>
					<p>Moving forward, Searchmetrics is going to be publishing detailed industry report, instead of a general report.</p>
					<ul>
						<li>Travel</li>
						<li>eCommerce</li>
						<li>Finance</li>
						<li>Health</li>
						<li>Media</li>
					</ul>
				</section>

				<section>
					<a href="http://searchengineland.com/seotable"><img src="http://searchengineland.com/figz/wp-content/seloads/2011/06/periodic-table-of-seo-2015.png" alt="The Periodic Table Of SEO Success Factors" style="width:80%;"></a>
					<p><small><a href="http://searchengineland.com/seotable">Search Engine Land - The Periodic Table Of SEO Success Factors</a></small></p>
				</section>

				<section>
					<img alt="Moz" src="img/moz_blue.png" style="padding:40px;">
					<p><a href="https://moz.com/search-ranking-factors">Search Engine Ranking Factors 2015<br>Expert Survey and Correlation Data</a></p>
					<p>"Every two years, Moz surveys the opinions of dozens of the world's brightest search marketers and runs correlation studies to better understand the workings of search engine algorithms."</p>
				</section>

				<section>
					<img src="img/backlinko.png" alt="Backlinko" style="background:#111;padding:40px;">
					<h2>According to Backlinko, there are over 200 Search Engine Ranking Factors</h2>
					<p>"Some are proven. Some are controversial. Others are SEO nerd speculation. But they’re all here." - <a href="http://backlinko.com/google-ranking-factors">Google’s 200 Ranking Factors: The Complete List by Brian Dean</a>
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-at-the-Parthenon.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:70%;">Content strategy should guide development.</h1>
				</section>

				<section>
					<h2>The Content Strategy Quad</h2>
					<img src="http://blog.braintraffic.com/wp-content/uploads/content-strategy-quad.gif" alt="Content Strategy Quad by Brain Traffic" style="width:45%;float:left;">
					<ul>
						<li>Content Components
							<ul>
								<li>Substance</li>
								<li>Structure</li>
							</ul>
						</li>
						<li>People Components
							<ul>
								<li>Workflow</li>
								<li>Governance</li>
							</ul>
						</li>
					</ul>
					<p><small><a href="http://blog.braintraffic.com/2012/07/from-the-archive-brain-traffic-lands-the-quad/">Brain Traffic Lands the Quad -  March 2011</a></small></p>
				</section>

				<section>
					<h2>The Basics of Content Strategy</h2>
					<p>Content-oriented Components</p>
					<ul>
						<li class="fragment"><strong>Identify Goals and Substance</strong> - focuses on what content is required to successfully execute your core strategy.</li>
						<li class="fragment"><strong>Determine Structure</strong> - focuses on how content is prioritized, organized, and accessed.</li>
					</ul>
					<p><small><a href="https://www.usability.gov/what-and-why/content-strategy.html">Content Strategy Basics - Usability.gov</a></small></p>
				</section>

				<section>
					<h2>Identify Goals and Substance</h2>
					<ul>
						<li class="fragment">Who are the users the client wants to visit the website?</li>
						<li class="fragment">What content is the client going to be able to create and publish?</li>
						<li class="fragment">Who are the client's competitors, and what content are they ranking for?</li>
					</ul>
				</section>

				<section>
					<h2>Identify Goals and Substance</h2>
					<h3>Tools for Content Creators</h3>
					<ul>
						<li><a href="https://adwords.google.com/KeywordPlanner">Google AdWords Keyword Planner</a></li>
						<li><a href="http://www.searchmetrics.com/essentials/">Searchmetrics Essentials</a></li>
						<li><a href="https://moz.com/products/pro/keyword-explorer">Moz Pro Keyword Explorer</a></li>
						<li><a href="https://readability-score.com/">Readability Score</a></li>
					</ul>
				</section>

				<section>
					<h2>Determine Structure</h2>
					<ul>
						<li class="fragment">Content Types and Entities</li>
						<li class="fragment">Sitemap</li>
						<li class="fragment">Menu Structure</li>
						<li class="fragment">Functionality/Views</li>
					</ul>
				</section>

				<section>
					<h2>Determine Structure</h2>
					<h3>Drupal Tools</h3>
					<p>Once you can define your Content Types and Entities, you can use these Drupal tools to connect them.</p>
					<ul>
						<li class="fragment"><a href="https://www.drupal.org/project/references">Entity Reference Fields</a> can be used to render other entities inside your main entity</li>
						<li class="fragment"><a href="https://www.drupal.org/project/inline_entity_form">Inline Entity Form</a> can be used on top of reference fields to allow the user to add new, or select existing entities.</li>
						<li class="fragment"><a href="https://www.drupal.org/project/paragraphs">Paragraphs</a>, and <a href="https://www.drupal.org/project/eck">Entity Construction Kit (ECK)</a> are great modules to build reorderable, custom entities that reference other structured data entities</li>
						<li class="fragment"><a href="https://www.drupal.org/project/token">Token module</a> can be used to bridge your entities fields and Metatag fields and JSON-LD Views</li>
					</ul>
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-and-the-Acheivement-Duck.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:75%;">Technical SEO best practices in Drupal</h1>
					<p class="fragment" style="color:#fff;background: rgba(0, 0, 0, 0.8);padding:20px;width:60%;">Let's review the major ranking factors, and present ideas how we can implement in Drupal.</p>
				</section>

				<section>
					<h2>Ranking Factor Categories</h2>
					<div style="float:left;width: 50%">
						<h3>On Site</h3>
						<ul>
							<li>Content</li>
							<li>Architecture</li>
							<li>HTML</li>
						</ul>
					</div>
					<div style="float:left;width: 50%">
						<h3>Off Site</h3>
						<ul>
							<li>Trust</li>
							<li>Links</li>
							<li>Personal</li>
							<li>Social</li>
						</ul>
					</div>
				</section>

				<section>
					<h2>Content</h2>
					<p>Are the pages well written, include keywords, new, include related content, answer questions?</p>
				</section>

				<section>
					<h2>Architecture</h2>
					<h3>Is the site easily crawlable?</h3>
					<ul>
						<li class="fragment">Well thought out menu</li>
						<li class="fragment">Breadcrumbs with <a href="https://schema.org/BreadcrumbList">Schema.org Markup</a></li>
						<li class="fragment"><a href="https://www.drupal.org/project/xmlsitemap">XML Sitemap module</a></li>
						<li class="fragment">Friendly URLs from <a href="https://www.drupal.org/project/pathauto">Pathauto module</a></li>
					</ul>
				</section>

				<section>
					<h2>Architecture</h2>
					<h3>No Duplicate content</h3>
					<ul>
						<li class="fragment"><a href="https://www.drupal.org/project/redirect">Redirect module</a></li>
						<li class="fragment"><a href="https://www.drupal.org/project/metatag">Metatag module</a>, set Canonical URL</li>
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
					<h2>HTML</h2>
					<h3>Does the Page Title contain keywords?</h3>
					<p>Properly set up html title in Metatag module</p>
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

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-at-the-Turkish-Cafe.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);width:75%;">Tips &amp; Tools for Developers</h1>
				</section>

				<section>
					<h2>Tips &amp; Tools for Developers</h2>
					<ul>
						<li class="fragment"><a href="https://developers.google.com/web/">Google Defines Best Practices</a></li>
						<li class="fragment"><a href="https://search.google.com/structured-data/testing-tool/u/0/">Google Structured Data Testing Tool (Schema)</a></li>
						<li class="fragment"><a href="https://www.google.com/webmasters/markup-helper/u/1/?hl=en">Google Structured Data Markup Helper (Schema)</a></li>
						<li class="fragment"><a href="https://developers.google.com/speed/pagespeed/insights/">Google PageSpeed Insights</a></li>
						<li class="fragment"><a href="https://www.google.com/webmasters/tools/mobile-friendly/">Google Mobile-Friendly Test</a></li>
						<li class="fragment"><a href="https://www.google.com/webmasters/markup-tester/u/1?hl=en">Google Email Markup Tester</a></li>
						<li class="fragment"><a href="https://www.google.com/webmasters/#?modal_active=none">Google Search Console</a></li>
						<li class="fragment"><a href="https://search.google.com/search-console/amp">Google Amp Test</a></li>
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
					<h2>Stay up to date:</h2>
					<ul>
						<li><a href="http://searchengineland.com/">Search Engine Land</a></li>
						<li><a href="http://searchenginejournal.com/">Search Engine Journal</a></li>
						<li><a href="http://blog.searchmetrics.com/us/">Searchmetrics Blog</a></li>
						<li><a href="https://moz.com/blog">Moz Blog</a></li>
						<li><a href="https://webmasters.googleblog.com/">Google Webmasters</a></li>
				</section>

				<section style="text-align: left;" data-background="img/Lego-Uncle-Jim-at-Sunset.jpg">
					<h1 style="padding-left:20px;">THE END</h1>
					<h3 style="padding-left:20px;">Continuing the conversation:</h3>
					<p style="color:#fff;display:inline-block;background: rgba(0, 0, 0, 0.5);padding:20px;">Created by <a href="http://jimbir.ch">Jim Birch</a><br>
					<a href="http://jimbir.ch/presentations/holistic-seo">jimbir.ch/holistic-seo</a><br>
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
