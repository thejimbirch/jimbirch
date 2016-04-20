INTRODUCTION
------------

The DropShark module integrates your Drupal site with the DropShark monitoring,
trending, and alerts service.

CONTENTS
--------

 * Installation
 * Linfo PHP Library
 * Cron Setup
 * Troubleshooting
 * Maintainers

INSTALLATION
------------

Install the module per the normal Drupal module installation procedure. See
https://drupal.org/documentation/install/modules-themes/modules-7 for further
information.

Once installed go to "admin/config/services/dropshark" to register your site
with the DropShark service.

LINFO PHP LIBRARY
-----------------

You will likely want to install the Linfo library to collect additional server
data. See https://github.com/jrgp/linfo.

Installing Linfo can be done by either of the following means:

 * Use the Composer Manager project
   (https://www.drupal.org/project/composer_manager) to manage the installation.

 * Install using the dropshark.make file included with the DropShark module.

 * Download and install v3.0.0 into your libraries folder so that the
   standalone_autoload.php file is located at
   sites/all/libraries/linfo/standalone_autoload.php.

CRON SETUP
----------

The DropShark module will periodically collect data from your site using
Drupal's cron mechanism. You may also supplement this behavior via the following
means:

 * Set up a cron task to call `drush dropshark-collect` or `drush drpshrk`
   as often as you wish.

 * Set up a cron task that makes a HTTP request to your site as often as you
   wish to collect data. The path is "dropshark/collect" and the request needs
   to contain a URL parameter named "key" with the value of the site's DropShark
   site ID. Example http://mysite.com/dropshark/collect?key= 50e7b4ca-3576-435e-8ead-523ee9d4054e.

 * Configure Elysia Cron (https://www.drupal.org/project/elysia_cron) to invoke
   the DropShark module's hook_cron() implementation as often as you wish.

Also, you may disable the core cron functionality (including Elysia Cron) by
setting a variable `variable_set('dropshark_cron', FALSE);`.

TROUBLESHOOTING
---------------

Please report bugs, issues, and feature requests in the Drupal.org issue queue
at https://www.drupal.org/project/issues/dropshark?categories=All.

Additionally you may contact DropShark support at help@dropshark.io.

MAINTAINERS
-----------

Current maintainers:

 * Will Long (https://www.drupal.org/u/kerasai)