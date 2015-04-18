<?php
@include('local.aliases.php');

$aliases['dev'] = array (
  'root' => $local_webroot,
  'uri' => $localuri,
  'path-aliases' => array(
    '%dump-dir' => '/tmp',
    '%files' => 'sites/default/files',
  ),
);

$aliases['stage'] = array(
  'uri' => 'http://ww2.xenostaging.com/'.$project,
  'root' => '/var/www/html/'.$project,
  'remote-host' => $stage_ssh,
  'remote-user' => $stage_ssh_user,
  'path-aliases' => array(
    '%dump-dir' => '/tmp',
    '%files' => 'sites/default/files',
  ),
);

$aliases['prod'] = array(
  'uri' => 'http://www.example.com/',
  'root' => '/var/www/html/',
  'remote-host' => $prod_ssh,
  'remote-user' => $prod_ssh_user,
  'path-aliases' => array(
    '%dump-dir' => '/tmp',
    '%files' => 'sites/default/files',
  ),
);
