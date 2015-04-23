-- SUMMARY --

System Status provides an easy way to get an overview of all the available
updates for your Drupal websites. Install System Status on all your Drupal
websites and allow reporting to DrupalStatus.org for a centralized overview
and email summaries of available updates and installed versions.

The accompanying service offered by DrupalStatus.org is free, but if you do not
want to use this service this lightweight module allows you to build your own
overviews and dashboard.
The idea is to offer a way to script something that can poll all of your sites
to check on modules and versions used, instead of having every Drupal site
check for updates separately (and using Update Manager.
This can be very useful in situations where you do not want to trust on the
update manager, or where your servers might not have the needed access to
check for updates.

The module allows administrators to build their own monitoring interface
to check on multiple installations at once.

This module WILL NOT check for updates. You will nead to create your own
service or to use Drupalstatus.org to generate reports and overviews.


-- REQUIREMENTS --

PHP 5.2.5 or higher (5.3 recommended)
mcrypt


-- INSTALLATION --

Project URL: http://drupal.org/project/system_status/
GitURL: git clone http://git.drupal.org:project/system_status.git
Download and install the module the same way you would download and
install other contributed modules.


-- INSTALLATION USING DRUSH --

drush dl system_status
drush en system_status


-- USAGE --

After installation go to the admin page under
/admin/config/system/system_status and allow reporting to DrupalStatus.org.

-- FAQ --
1. Why do I need to install a module on my Drupal site?
The default update monitor build into Drupal works by each site checking
for updates triggered by a cron job. Our service works the oppisite way,
we will contact your site and ask for the currently installed modules and their
versions. We will then compare this to our database of Drupal contrib modules 
and calculate an upgrade path for you if required.

2. How can I be sure that my data is secure?
We take security very seriously and it's been at the core of our business from day one.
All communication between the website that installs the module and the 
drupalstatus.org service that fetches the current list of modules is completely encrypted
and protected by a custom key and an IP whitelist.

3. How will you use this data that I provide?
he drupal module itself will always be reviewed and worked on by the Drupal community
to ensure that it only delivers a list of currently used modules and their versions.
No other data is or will ever be transmitted.

4. Who can I get in touch with if I have questions?
You are welcome to send an e-mail to info@drupalstatus.org, we will do our best to 
respond as soon as possible.

5. I have a feature request, what should i do?
All feature requests are welcome, feel free to send us an e-mail on info@drupalstatus.org.
No promises are made, but we will definitely look into it.

6. I like this project, can I help?
We're always looking for enthousiastic souls that want to help make this project better.
If you feel you have something to contribute, contact us by e-mail at info@drupalstatus.org.
