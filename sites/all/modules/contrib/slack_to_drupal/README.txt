CONTENTS OF THIS FILE
---------------------

 * Introduction
 * Requirements
 * Installation
 * Configuration
   * Create Slack App
   * Configure Drupal
 * Maintainers
 * Supporting organizations


INTRODUCTION
------------

This module integrates with Slack, and imports images posted to a specified
Slack channel into Drupal as File entities.

A new file type called 'Slack Image' and a new display called 'Slack Image
Display' will be added.

Images get uploaded to Drupal during a Drupal cron job or with
`drush import-slack-images` command.  Once images are uploaded you can approve
or delete them at: admin/config/services/slack_to_drupal/approve.

Slack Images will be available every place File Entities were available before.

Check out this great example from Zoomdata.com:
http://www.zoomdata.com/careers/#zoomagram

Employees of Zoomdata can upload images to a specific channel in the company's
Slack highlighting events, acheivements and general awesomeness.  Once approved
we display the images using the Views, Masonry Views, Colorbox, and GD infinite
scroll plugin modules.


REQUIREMENTS
------------

 * Slack Account
 * Slack App (See instruction below on creating a Slack app)
 * File Entity
 * Date


INSTALLATION
------------

1. Install as usual, see https://www.drupal.org/node/895232 for further
   information.


CONFIGURATION
------------

  CREATE SLACK APP
  ----------------

    1. Navigate to https://api.slack.com/apps.

    2. Sign into your account.

    3. Enter your team name.

    4. Navigate back to https://api.slack.com/apps.

    5. Enter the following info:
         App Name - Example: Company Name's Slack To Drupal
         Team - (Choose your team)
         Short Description: Example: Provides integration between Slack and
         Drupal.
         Icon - (Upload if you have one)
         Long description: Example: This app, in combination with the Slack to
         Drupal module (https://www.drupal.org/project/slack_to_drupal) provides
          a way for Slack users to post images in a specific Slack channel, and
          have it import into Drupal as File Entities.
         Link to clear instructions on how to install your Slack app:
         http://cgit.drupalcode.org/slack_to_drupal/tree/README.txt
         Link to support for your Slack app:
         https://www.drupal.org/project/issues/slack_to_drupal?categories=All
         Redirect URI(s):
         [http://www.mysite.com]/admin/config/services/slack_to_drupal

    6. You will need the information on the App Credentials page in the Drupal
       configurations below.


  CONFIGURE DRUPAL
  ----------------

    1. Navigate to the Slack to Drupal configuration page:
      /admin/config/services/slack_to_drupal.

    2. Enter Slack Client ID and Slack Client Secret (This can be found in your
       app's 'App Credentials' page online).

    3. Enter path inside the files directory where you want the images saved.

    4. Save Configuration.

    5. Press Authorize.

    6. Choose the channel you want to get images from.

    7. Save Configuration.

    8. Navigate to admin/structure/file-types/manage/slack_image/file-display.

    9. For all the display modes (Default, Teaser, etc..)

        a. Check Slack Image Display.

        b. Choose image style.

        c. Save Configuration.


MAINTAINERS
-----------

Current maintainers:
* Senem Hartung (the_turk) - https://www.drupal.org/u/the_turk
* Jim Birch (Caffeinated) - https://www.drupal.org/u/caffeinated
* Albert Jankowski (albertski) - https://www.drupal.org/u/albertski
* Michael Porter (michaelpporter) - https://www.drupal.org/u/michaelpporter
* Mike Acklin (mikeacklin) - https://www.drupal.org/u/mikeacklin


SUPPORTING ORGANIZATIONS:
-------------------------

* Xeno Media, Inc. - http://www.xenomedia.com
* Zoomdata - http://www.zoomdata.com
