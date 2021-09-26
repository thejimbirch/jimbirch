<?php
$project = 'projectname'; // execadv, oist-drupal, etc

// Local settings
$local_webroot = '/Users/USER/SITESFOLDER/'.$project;//full path to the local webroot
$localuri = 'http://'.$project.'.SYSTEMNAME.local';// use your local server path for this 'http://'.$project.'.jim.local/'; 'http://'.$project.'.mike.local/';

// Stage settings
$stage_ssh = 'ww3.xenostaging.com';
$stage_ssh_user = 'yourusername'; // your username on the stage server

// Production settings
$prod_ssh = '120.0.0.1';
$prod_ssh_user = 'yourusername';

// global settings
$options['result-file'] = $project.'-'.$stage_ssh_user.'.sql';
$options['gzip'] = 'true';
