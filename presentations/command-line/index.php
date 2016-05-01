<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Command Line for the Beginner | Web Development Presentation</title>
		<meta name="description" content="This presentation by Jim Birch will introduce the incredible potential of using the command line in developing for the web."/>
		<link rel="canonical" href="http://jimbir.ch/presentations/command-line"/>
		<meta property="og:site_name" content="Jim Birch"/>
		<meta property="og:type" content="public_figure"/>
		<meta property="og:url" content="http://jimbir.ch/presentations/command-line"/>
		<meta property="og:title" content="Command Line for the Beginner | Web Development Presentation"/>
		<meta property="og:description" content="This presentation by Jim Birch will introduce the incredible potential of using the command line in developing for the web."/>
		<meta property="og:image" content="http://jimbir.ch/presentations/command-line/img/Lego-Uncle-Jim-in-Paradise.jpg"/>
		<meta name="twitter:site" content="@thejimbirch"/>
		<meta name="twitter:site:id" content="2989027096"/>
		<meta name="twitter:creator" content="@thejimbirch"/>
		<meta name="twitter:creator:id" content="2989027096"/>
		<meta name="twitter:url" content="http://jimbir.ch/presentations/command-line"/>
		<meta name="twitter:title" content="Command Line for the Beginner | Web Development Presentation"/>
		<meta name="twitter:description" content="This presentation by Jim Birch will introduce the incredible potential of using the command line in developing for the web."/>
		<meta name="twitter:image:src" content="http://jimbir.ch/presentations/command-line/img/Lego-Uncle-Jim-in-Paradise.jpg"/>
		<meta itemprop="name" content="Command Line for the Beginner | Web Development Presentation"/>
		<meta itemprop="description" content="This presentation by Jim Birch will introduce the incredible potential of using the command line in developing for the web."/>
		<meta itemprop="image" content="http://jimbir.ch/presentations/command-line/img/Lego-Uncle-Jim-in-Paradise.jpg"/>
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
			<div class="slides">
				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-in-Paradise.jpg">
					<h1 style="padding-left:20px;">Command Line for the Beginner</h1>
					<h3 style="float:left;padding-left:20px;width:75%;">Using the command line in developing for the web</h3>
					<p style="display:inline-block;background: rgba(0, 0, 0, 0.5);padding:20px;">Created by <a href="http://jimbir.ch">Jim Birch</a><br>
					<a href="http://jimbir.ch/presentations/command-line">jimbir.ch/cmd</a><br>
					<a href="http://twitter.com/thejimbirch">@thejimbirch</a><br>
					<a href="http://www.xenomedia.com">Xeno Media, Inc.</a></p>
				</section>

				<section>
					<h3>Developers be all like...</h3>
					<img src="img/JIX9t2j0ZTN9S.gif" alt="Cat typing" style="width:50%;">
					<p><small><a href="http://www.reddit.com/r/reactiongifs/comments/3a8akf/my_cats_reaction_when_i_leave_home/">Source</a></small></p>
				</section>

				<section style="text-align:left;" data-background="img/Lego-Uncle-Jim-at-Xeno.jpg">
					<h1 class="fragment" style="padding-left:20px;background: rgba(0, 0, 0, 0.8);">What is the Command Line?</h1>
					<p class="fragment" style="display:inline-block;background: rgba(0, 0, 0, 0.8);padding:20px;width:60%;float:left;">A command-line interface ... is a means of interacting with a computer program where the user (or client) issues commands to the program in the form of successive lines of text (command lines). - <a href="https://en.wikipedia.org/wiki/Command-line_interface">Wikipedia</a></p>
				</section>

				<section>
					<h3>Often referred to as CLI</h3>
					<p><strong>C</strong> - Command<br><strong>L</strong> - Line<br><strong>I</strong> - Interface</p>
				</section>

				<section>
					<h3>Where is this Command Line?</h3>
					<ul>
						<li class="fragment">Linux - Built in</li>
						<li class="fragment">Mac - Terminal built in or additional apps like <a href="https://www.iterm2.com/">iTerm</a> available.</li>
						<li class="fragment">Windows - <a href="https://www.cygwin.com/">Cygwin</a>, or the brand new <a href="https://blogs.msdn.microsoft.com/commandline/2016/04/06/bash-on-ubuntu-on-windows-download-now-3/">Bash on Ubuntu on Windows</a></li>
						<li class="fragment"><a href="http://superuser.com/questions/708811/can-i-use-a-chromebook-as-a-ssh-workstation/708816#708816">Chromebook - Apps that provide limited functionality</a></li>
					</ul>
				</section>

				<section>
					<h3>What does the Terminal look like?</h3>
					<img src="img/Terminal.png" alt="The Terminal" style="width:60%;">
				</section>

				<section>
					<h3>Customize Most Terminal Apps</h3>
					<img src="img/Customize-Terminal.png" alt="Customize the Terminal" style="width:60%;">
				</section>

				<section data-background="img/Lego-Uncle-Jim-in-Outer-Space.jpg">
					<h2>The Commands</h2>
				</section>

				<section>
					<h3>Anatomy of a command</h3>
					<p><code>$ command -flag argument/operand</code></p>
					<ul>
						<li class="fragment">command - The action we want to happen</li>
						<li class="fragment">flag (optional) - Options for the command</li>
						<li class="fragment">operand (optional) - What is acted upon</li>
					</ul>
					<p class="fragment">Most of the time you find commands written, they will be prefaced with a $</p>
				</section>

				<section>
					<h3>Common Commands</h3>
					<ul>
						<li>cd - Change Directory<br><code>$ cd /path/to/folder</code><br><code>$ cd ../../../</code> to move up the tree.</li>
						<li class="fragment">cp - Copy<br><code>$ cp wp-config-sample.php wp-config.php</code></li>
						<li class="fragment">grep - globally search a regular expression and print<br><code>$ grep term filetosearchin.txt</code></li>
						<li class="fragment">ls - List<br><code>$ ls -la</code><br><small>(l = long format, a = all files, even hidden)</small></li>
						<li class="fragment">mkdir - Make Directory<br><code>$ mkdir directoryname</code></li>
				</section>

				<section>
					<h3>Common Commands</h3>
					<ul>
						<li>mv - Move<br><code>$ mv wp-config.php ../</code></li>
						<li class="fragment">pwd - Print Working Directory<br><code>$ pwd</code></li>
						<li class="fragment">rm - Remove<br><code>$ rm -rf whatyouwantremoved</code><br><small>(r = recursive, f = force)</small></li>
						<li class="fragment">sudo - Superuser Do<br><code>$ sudo anycommand</code><br><small>(Use sudo if you need administrative access to run the command.)</small></li>
						<li class="fragment">touch - Touch<br><code>$ touch newfilename.txt</code></li>
					</ul>
				</section>

				<section>
					<h3>Common Commands</h3>
					<p>If you enter a screen that has a page of information, like a help screen:</p>
					<ul>
						<li class="fragment">Use your arrow keys to navigate up and down.</li>
						<li class="fragment">Type <code>q</code> to exit.</li>
					</ul>
				</section>

				<section>
					<h3>Flags</h3>
					<p>For most cases I have found, flags that are full words use two dashes, flags that are acronyms use one dash.</p>
					<ul>
						<li>--all</li>
						<li>-a</li>
					</ul>
				</section>

				<section>
					<h3>Escaping</h3>
					<p>If you ever need to cancel a command:</p>
					<p>Hold the Control key and <code>C</code></p>
				</section>

				<section data-background="img/Lego-Uncle-Jim-at-the-Car-Wash.jpg">
					<h2>Archiving and Unarchiving</h2>
					<p class="fragment" style="display:inline-block;background: rgba(0, 0, 0, 0.5);padding:20px;text-align:left;width:60%;float:left;">Archive and compress; extract files and folders quickly and easily right from the command line.</p>
				</section>

				<section>
					<h3>Zip and Unzip</h3>
					<ul>
						<li>To compress a folder using zip:</li>
						<li class="fragment"><code>zip -r zip-file-name.zip path/to/folder</code></li>
						<li class="fragment"><code>zip -r zip-file-name.zip file1 file2 file3</code></li>
						<li class="fragment">To extract:</li>
						<li class="fragment"><code>unzip zip-file-name.zip</code></li>
					</ul>
				</section>

				<section>
					<h3>Tar and Untar</h3>
					<ul>
						<li>To compress a folder using tar:</li>
						<li class="fragment"><code>tar -zcvf tar-file-name.tar.gz path/to/folder</code></li>
						<li class="fragment">To extract:</li>
						<li class="fragment"><code>tar -zxvf tar-file-name.tar.gz</code></li>
					</ul>
				</section>

				<section data-background="img/Lego-Uncle-Jim-on-the-Trail-in-the-Snow.jpg">
					<h2>nano and vi editors</h2>
					<p class="fragment" style="display:inline-block;background: rgba(0, 0, 0, 0.5);padding:20px;text-align:left;width:60%;float:left;">nano and vi are text editors available in terminal so you can edit files without needing any other programs.</p>
				</section>

				<section>
					<h3>nano</h3>
					<p>nano file.txt to open a file<br>Control + (letter) for commands<br>Control + G for help</p>
					<img src="img/nano-screen-cap.png" alt="Nano Screen Capture" style="width:60%;">
				</section>

				<section>
					<h3>vi (or vim - "vi improved")</h3>
					<p>vi file.txt to open a file<br>:help for commands<br>:i to insert<br>:w to save<br>:q to exit</p>
					<img src="img/vim-screen-cap.png" alt="vi Screen Capture" style="width:60%;">
				</section>

				<section>
					<h3>You have survived the Beginner level!</h3>
					<img src="img/computer-working-cat-LHZyixOnHwDDy.gif" alt="Cat typing" style="width:50%;">
					<p><small><a href="http://gifs-for-refrence.tumblr.com/post/38294927972">Source</a></small></p>
					<p style="background:#444;border:1px solid #42affa;display:block;float:right;font-size:80%;padding:0 10px;text-transform:uppercase"><a href="/presentations/command-line/#/64">Skip to end</a></p>
				</section>

				<section data-background="img/Lego-Uncle-Jim-at-the-Ballgame.jpg">
					<h2>Connecting to Servers by ssh</h2>
					<p class="fragment" style="display:inline-block;background: rgba(0, 0, 0, 0.5);padding:20px;text-align:left;width:60%;float:left;">Connect to other servers, like your staging and production environments and run commands as you would on your local command line.</p>
				</section>

				<section>
					<h3>Creating SSH keys</h3>
					<ul>
						<li>Check for existing keys<br><code>$ ls -al ~/.ssh</code></li>
						<li class="fragment">Create a new key<br><code>ssh-keygen -t rsa -C "yourname@domain.com"</code></li>
						<li class="fragment">-t = Key Type, -C = Comment</li>
						<li class="fragment">Enter file in which to save the key (/Users/Jim/.ssh/id_rsa):<br><code>/Users/Jim/.ssh/clientname</code></li>
					</ul>
				</section>

				<section>
					<h3>Putting your Key on the server</h3>
					<ul>
						<li>UI Interfaces like CPanel and Plesk</li>
						<li class="fragment">Apache - Add your key to /%USER%/.etc/authorized_keys</li>
						<li class="fragment">nginx - Install openssh and add your key to /%USER%/.ssh/authorized_keys</li>
					</ul>
				</section>

				<section>
					<h3>Connecting to server</h3>
					<ul>
						<li><code>ssh username@domain.name</code></li>
						<li class="fragment">Enter your password</li>
					</ul>
					<h3 class="fragment">Set up an SSH Alias</h3>
					<ul>
						<li class="fragment"><code>nano ~/.ssh/config</code></li>
						<li class="fragment">
<code>
Host hostname<br>
    User usernameatserver<br>
    HostName (IP Address or domain.name)<br>
    Port 22<br>
    IdentityFile ~/.ssh/id_rsa<br>
</code>
						</li>
						<li class="fragment">Then, connect with <br><code>ssh hostname</code></li>
					</ul>
				</section>

				<section>
					<h3>To disconnect from a server:</h3>
					<p>Type <code>exit</code></p>
				</section>

				<section data-background="img/Lego-Uncle-Jim-by-the-pool-at-dusk.jpg">
					<h2>MySQL</h2>
					<p class="fragment" style="display:inline-block;background: rgba(0, 0, 0, 0.5);padding:20px;text-align:left;width:60%;float:left;">Manage MySQL databases from the command line, including importing and exporting.</p>
				</section>

				<section>
					<h3>Connecting to MySQL</h3>
					<p><code>mysql -u username -p</code><br>You will be prompted for password.</p>
					<p>* Note: You want to avoid using the password inline, as it would be available in logs</p>
				</section>

				<section>
					<h3>Importing a database</h3>
					<p><code>mysql -u username -p < database.sql</code></p>
				</section>

				<section>
					<h3>Exporting a database</h3>
					<p><code>mysqldump -u username -p > database.sql</code></p>
				</section>

				<section>
					<h3>Once you have connected to MySQL, you can run any SQL command</h3>
					<p><code>
CREATE TABLE newtablename (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,<br>
name_of_table VARCHAR(30),<br>
sub_title VARCHAR(20),<br>
yes_or_no CHAR(1),<br>
date_of_thing DATE);
					</code></p>
				</section>

				<section data-background="img/Lego-Uncle-Jim-in-the-Cabana.jpg">
					<h2>WP-CLI</h2>
					<p class="fragment" style="display:inline-block;background: rgba(0, 0, 0, 0.5);padding:20px;text-align:left;width:60%;float:left;">WP-CLI is a set of command-line tools for managing WordPress installations. You can update plugins, set up multisite installs and much more, without using a web browser. - <a href="http://wp-cli.org/">wp-cli.org</a></p>
				</section>

				<section>
					<h3>Common WP-CLI Commands</h3>
					<p><a href="http://wp-cli.org/commands/">http://wp-cli.org/commands/</a></p>
					<ul>
						<li class="fragment"><code>wp media regenerate</code><br>Regenerates all thumbnails</li>
						<li class="fragment"><code>wp post list</code><br>List all the posts of a site</li>
						<li class="fragment"><code>wp user delete 123 --reassign=567</code><br>Delete a user, and assign their posts to another.</li>
						<li class="fragment"><code>wp plugin install hello-dolly</code><br>Installs Hello Dolly Plugin</li>
					</ul>
				</section>

				<section>
					<h3>Common WP-CLI Commands</h3>
					<ul>
						<li class="fragment"><code>wp help</code><br>Lists all commands and help</li>
						<li class="fragment"><code>wp core update</code><br>Updates Wordpress core</li>
						<li class="fragment"><code>wp theme list</code><br>Lists all themes in the site</li>
						<li class="fragment"><code>wp package</code><br><a href="http://wp-cli.org/commands/package/">http://wp-cli.org/commands/package/</a></li>
					</ul>
				</section>

				<section data-background="img/Lego-Uncle-Jim-Builds-a-New-Chicago.jpg">
          <h2>Drush</h2>
          <p class="fragment" style="display:inline-block;background: rgba(0, 0, 0, 0.5);padding:20px;text-align:left;width:60%;float:left;">Drush is a command line shell and Unix scripting interface for Drupal. - <a href="http://www.drush.org/en/master/">drush.org</a></p>
        </section>

				<section data-background="img/Lego-Uncle-Jim-on-the-Rocks.jpg">
					<h2>Aliases</h2>
					<p class="fragment" style="display:inline-block;background: rgba(0, 0, 0, 0.5);padding:20px;text-align:left;width:60%;float:left;">In computing, alias is a command in various command line interpreters (shells) ... which enables a replacement of a word by another string. - <a href="https://en.wikipedia.org/wiki/Alias_%28command%29">Wikipedia</a></p>
				</section>

				<section>
					<h3>Anatomy of an alias</h3>
					<p><code>name="command"</code></p>
					<ul>
						<li class="fragment">name - The name of the alias</li>
						<li class="fragment">command - The action we want to happen</li>
					</ul>
				</section>

				<section>
					<h3>Where to put Aliases</h3>
					<h3 class="fragment">Mac OS</h3>
					<ul>
						<li class="fragment">Temporary - <code>alias name="command"</code></li>
						<li class="fragment">Permanent - <code>nano ~/.bash_profile</code></li>
					</ul>
				</section>

				<section>
					<h3>Where to put Aliases</h3>
					<h3>Ubuntu</h3>
					<ul>
						<li class="fragment">Temporary - <code>alias name="command"</code></li>
						<li class="fragment">Permanent - <code>nano ~/.bash_aliases</code></li>
					</ul>
				</section>

				<section>
					<h3>Where to put Aliases</h3>
					<h3>Windows</h3>
					<ul>
						<li class="fragment">Temporary - <code>DOSKEY name="command"</code></li>
						<li class="fragment">Permanent - A lot more complicated!</li>
					</ul>
				</section>

				<section>
					<h3>Common Use Cases for Aliases</h3>
					<ul>
						<li class="fragment">
							Navigate to common folders<br>
							<code>
alias htdocs="cd /var/www/public_html"<br>
alias backdropcms="cd /Users/Jim/jim.local/backdropcms.org"
							</code>
						</li>
						<li class="fragment">
							Run Common Tasks<br>
							<code>alias restart='sudo apachectl restart'</code>
						</li>
				</section>

				<section>
					<h3>Common Use Cases for Aliases</h3>
					<ul>
						<li class="fragment">
							Open Common Files<br>
							<code>
alias bashprofile='sudo nano /Users/Jim/.bash_profile'<br>
alias sshconfig='nano ~/.ssh/config'
							</code>
						</li>
						<li class="fragment">
							Open Applications<br>
							<code>alias github='open -a Firefox https://github.com/thejimbirch?tab=repositories\'</code>
						</li>
				</section>

				<section>
					<h3>Common Use Cases for Aliases</h3>
					<p>Complex Example<br>Accepts a url, opens chrome in 5 different sized browsers</p>
<script src="https://gist.github.com/zachleat/539c00c076b721d9f7fb.js"></script>
				</section>

				<section>
					<h3>See also</h3>
					<ul>
						<li>
							<a href="https://en.wikipedia.org/wiki/Symbolic_link">Symbolic link (Symlinks)</a><br>
							<code>ln -s /path/to/file /path/to/symlink</code><br>
							Example: htdocs > /var/www/public_html
						</li>
					</ul>
				</section>

				<section>
					<h3>See also</h3>
					<p><a href="https://en.wikipedia.org/wiki/Bash_%28Unix_shell%29">Bash Scripts</a></p>
<script src="https://gist.github.com/thejimbirch/cb933c5c92c461f500fefc21e0da5205.js"></script>
				</section>

				<section>
					<h3>See also</h3>
					<h4><a href="https://github.com/Bash-it/bash-it">Bash-it</a></h4>
					<p>Bash-it is a collection of community Bash commands and scripts. (And a shameless ripoff of oh-my-zsh :smiley:)</p>
					<p>Includes autocompletion, themes, aliases, custom functions, a few stolen pieces from Steve Losh, and more.</p>
					<p><a href="https://github.com/Bash-it/bash-it">https://github.com/Bash-it/bash-it</a></p>
					</ul>
				</section>

				<section data-background="img/Lego-Uncle-Jim-Reads-Email-by-Chrissy.jpg">
					<h2>Secure Copy Protocol (SCP)</h2>
					<p class="fragment" style="display:inline-block;background: rgba(0, 0, 0, 0.5);padding:20px;text-align:left;width:60%;float:left;">Secure copy or SCP is a means of securely transferring computer files between a local host and a remote host or between two remote hosts. It is based on the Secure Shell (SSH) protocol. - <a href="https://en.wikipedia.org/wiki/Secure_copy">Wikipedia</a></p>
				</section>

				<section>
					<h3>Copy file from local to server</h3>
					<p class="fragment">scp example.txt username@server:myfile.txt</p>
					<h3 class="fragment">Copy all files in remote site to local (folder you are in)</h3>
					<p class="fragment">scp serveralias:/var/www/public_html/wp-uploads/* .</p>
					<h3 class="fragment">Copy files from one server to another</h3>
					<p class="fragment">scp serveralias:/var/www/public_html/wp-content/files/file1.zip secondserveralias:/var/www/public_html/wp-content/files/file1.zip</p>
				</section>

				<section>
					<h3>You have surpassed the intermediate level with ease!</h3>
					<img src="img/ign-describe-plans-13HBDT4QSTpveU.gif" alt="Cat typing" style="width:50%;">
					<p><small><a href="http://www.ign.com/boards/threads/itt-describe-your-weekend-plans-in-gifs.453923111/">Source</a></small></p>
					<p style="background:#444;border:1px solid #42affa;display:block;float:right;font-size:80%;padding:0 10px;text-transform:uppercase"><a href="/presentations/command-line/#/64">Skip to end</a></p>
				</section>

				<section data-background="img/Lego-Uncle-Jim-on-the-Deck.jpg">
					<h2>Git for Version Control</h2>
					<p class="fragment" style="display:inline-block;background: rgba(0, 0, 0, 0.5);padding:20px;text-align:left;width:60%;float:left;">Git is a widely used source code management system for software development. It is a distributed revision control system with an emphasis on speed, data integrity, and support for distributed, non-linear workflows. - <a href="https://en.wikipedia.org/wiki/Git_%28software%29">Wikipedia</a></p>
				</section>

				<section>
					<h3>Git in Plain English</h3>
					<ul>
						<li>Git gives us a canonical/main source of the code of the project.</li>
						<li class="fragment">Multiple versions can be checked out, and merged back in.</li>
						<li class="fragment">History of commits/different versions can be saved.</li>
						<li class="fragment">Easily sync multiple servers, Development, Staging, Productions.</li>
					</ul>
				</section>

				<section>
					<h3>Really great git tutorial</h3>
					<p><a href="https://git-scm.com/docs/gittutorial">https://git-scm.com/docs/gittutorial</a></p>
				</section>

				<section>
					<h3>Common Git Commands</h3>
					<ul>
						<li class="fragment"><code>git clone repo.url</code><br>Clones a repository to your computer</li>
						<li class="fragment"><code>git fetch</code><br>Gets updated code from repository</li>
						<li class="fragment"><code>git merge origin/master</code><br>Merges code from repository, master branch</li>
						<li class="fragment"><code>git pull</code><br>Fetch and merge in one step!</li>
						<li class="fragment"><code>git checkout -b branchname</code><br>Makes a new branch</li>
					</ul>
				</section>

				<section>
					<h3>Common Git Commands</h3>
					<ul>
						<li class="fragment"><code>git diff filename</code><br>Shows the changes you have made to the file</li>
						<li class="fragment"><code>git add -A</code><br>Adds all files to "staging area"</li>
						<li class="fragment"><code>git commit</code><br>Moves from "staging area" to a commit</li>
						<li class="fragment"><code>git push origin master</code><br>Pushes local master branch to origin master</li>
						<li class="fragment"><code>git log</code><br>Lists history of commits</li>
					</ul>
				</section>

				<section data-background="img/Lego-Uncle-Jim-and-the-Achievement-Duck.jpg">
					<h2>Automation/task runners like Grunt and Gulp</h2>
					<img src="img/node-grunt-gulp-logos.png" alt="logos" style="background: rgba(0, 0, 0, 0.5);float:left;width:40%;">
				</section>

				<section>
					<h3>Future development will be powered by JavaScript</h3>
					<ul>
						<li class="fragment">Node.js® is a JavaScript runtime built that runs </li>
						<li class="fragment">NPM (Node Package Manager), the largest ecosystem of open source libraries in the world</li>
					</ul>
					<p class="fragment">I use Node.js® to install NPM to install Grunt which installs...</p>
				</section>

				<section>
					<h3>Tools for our JavaScript files:</h3>
					<ul>
						<li class="fragment">jshint - Detect errors and potential problems in your JavaScript code.</li>
						<li class="fragment">jscs - Linter/formatter for programmatically enforcing your style guide.</li>
						<li class="fragment">uglify - Minify files with UglifyJS</li>
						<li class="fragment">concat - Concatenate (merge) files into one.</li>
					</ul>
				</section>

				<section>
					<h3>Tools for our CSS files:</h3>
					<ul>
						<li class="fragment">grunt-contrib-less, grunt-sass - Compile LESS/SASS files to CSS</li>
						<li class="fragment">csslint - Checks syntax checking and applys a set of rules that look for problematic patterns or signs of inefficiency.</li>
						<li class="fragment">cssmin - Minimizes CSS files</li>
						<li class="fragment">csscomb - Formats and sorts style sheets to make them organized and consistent.</li>
					</ul>
				</section>

				<section>
					<h3>So many uses:</h3>
					<ul>
						<li class="fragment">imagemin - Minify images seamlessly.</li>
						<li class="fragment">copy - automate the copying of files or directories.</li>
						<li class="fragment">Thousands more... [<a href="http://gruntjs.com/plugins">Grunt Plugins</a>] [<a href="http://gulpjs.com/plugins/">Gulp Plugins</a>]</li>
					</ul>
				</section>

				<section>
					<h3>Watch!</h3>
					<p>Once these tasks have been assembled in a Gruntfile.js file, you can run the following command to implement these tasks on any changes:</p>
					<p><code>grunt watch</code></p>
					<ul>
						<li class="fragment">Any JS/CSS/LESS/SASS files changed will be checked and organized!</li>
						<li class="fragment">Images put in the folder I am watching will be minified.</li>
						<li class="fragment">Any errors will be reported immediately!</li>
					</ul>
				</section>

				<section data-background="img/Lego-Uncle-Jim-at-the-Turkish-Cafe.jpg">
					<h2>Dependency/Package Managers like Composer</h2>
					<p class="fragment" style="display:inline-block;background: rgba(0, 0, 0, 0.5);padding:20px;text-align:left;width:60%;float:left;">Composer helps you declare, manage and install dependencies of PHP projects, ensuring you have the right stack everywhere. <br>- <a href="https://github.com/composer/composer">Composer on Github</a></p>
				</section>

				<section>
					<h3>An overarching maintainer of your website and it's needs</h3>
					<p>A composer.json file defines all of the things your website needs.  These are called dependencies.</p>
					<p class="fragment">This would include Wordpress itself, plugins, and themes.  It could also include outside libraries like jQuery, Bootstrap, Foundation, and more.</p>
				</section>

				<section>
					<h3>An overarching maintainer of your website and it's needs</h3>
					<p>A composer.json file defines all of the things your website needs.  These are called dependencies.</p>
					<p class="fragment">This would include Wordpress/Drupal core, plugins/modules, and themes.  It could also include outside libraries like jQuery, Bootstrap, Foundation, Masonry, and more.</p>
				</section>

				<section>
					<h3>Rebuild this project in a moment's notice</h3>
					<p>If all dependencies are defined in a composer.json file, <code>composer install</code> could be run to install the site anywhere.</p>
					<p class="fragment">All you would need to do then is setup the database and move the files.</p>
				</section>

				<section>
          <h2>Summary</h2>
          <div class="fragment">
            <h3>Beginner</h3>
            <ul>
              <li>Command Line Basics</li>
              <li>Commands and Flags</li>
              <li>Archiving and Unarchiving</li>
              <li>Command Line Editors</li>
            </ul>
          </div>
        </section>

        <section>
          <h2>Summary</h2>
          <div class="fragment">
            <h3>Intermediate</h3>
            <ul>
              <li>Connecting to Servers with SSH</li>
              <li>MySQL</li>
              <li>WP-CLI / Drush</li>
              <li>Aliases</li>
              <li>Secure Copy Protocol - SCP</li>
            </ul>
          </div>
        </section>

        <section>
        	<h2>Summary</h2>
          <div class="fragment">
            <h3>Advanced</h3>
            <ul>
              <li>Git for Version Control</li>
              <li>Automation/task runners like Grunt and Gulp</li>
              <li>Dependency/Package Managers like Composer</li>
            </ul>
          </div>
        </section>

				<section>
					<h3>Now you can be all like...</h3>
					<img src="img/JIX9t2j0ZTN9S.gif" alt="Cat typing" style="width:50%;">
					<p><small><a href="http://www.reddit.com/r/reactiongifs/comments/3a8akf/my_cats_reaction_when_i_leave_home/">Source</a></small></p>
				</section>

				<section style="text-align: left;" data-background="img/Lego-Uncle-Jim-at-Sunset.jpg">
					<h1 style="padding-left:20px;">THE END</h1>
					<h3 style="padding-left:20px;">Continuing the conversation:</h3>
					<p style="display:inline-block;background: rgba(0, 0, 0, 0.5);padding:20px;">Created by <a href="http://jimbir.ch">Jim Birch</a><br>
					<a href="http://jimbir.ch/presentations/command-line">jimbir.ch/cmd</a><br>
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
