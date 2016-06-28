<?php
/**
 * @file
 * jb_media.file_type.inc
 */

/**
 * Implements hook_file_default_types().
 */
function jb_media_file_default_types() {
  $export = array();

  $file_type = new stdClass();
  $file_type->disabled = FALSE; /* Edit this to true to make a default file_type disabled initially */
  $file_type->api_version = 1;
  $file_type->type = 'audio';
  $file_type->label = 'Audio';
  $file_type->description = 'An <em>Audio</em> file is a sound recording.';
  $file_type->mimetypes = array(
    0 => 'audio/*',
  );
  $export['audio'] = $file_type;

  $file_type = new stdClass();
  $file_type->disabled = FALSE; /* Edit this to true to make a default file_type disabled initially */
  $file_type->api_version = 1;
  $file_type->type = 'document';
  $file_type->label = 'Document';
  $file_type->description = 'A <em>Document</em> file is written information.';
  $file_type->mimetypes = array(
    0 => 'text/plain',
    1 => 'application/msword',
    2 => 'application/vnd.ms-excel',
    3 => 'application/pdf',
    4 => 'application/vnd.ms-powerpoint',
    5 => 'application/vnd.oasis.opendocument.text',
    6 => 'application/vnd.oasis.opendocument.spreadsheet',
    7 => 'application/vnd.oasis.opendocument.presentation',
    8 => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    9 => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
    10 => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
  );
  $export['document'] = $file_type;

  $file_type = new stdClass();
  $file_type->disabled = FALSE; /* Edit this to true to make a default file_type disabled initially */
  $file_type->api_version = 1;
  $file_type->type = 'image';
  $file_type->label = 'Image';
  $file_type->description = 'An <em>Image</em> file is a still visual.';
  $file_type->mimetypes = array(
    0 => 'image/*',
  );
  $export['image'] = $file_type;

  $file_type = new stdClass();
  $file_type->disabled = FALSE; /* Edit this to true to make a default file_type disabled initially */
  $file_type->api_version = 1;
  $file_type->type = 'slack_image';
  $file_type->label = 'Slack Image';
  $file_type->description = '';
  $file_type->mimetypes = '';
  $export['slack_image'] = $file_type;

  $file_type = new stdClass();
  $file_type->disabled = FALSE; /* Edit this to true to make a default file_type disabled initially */
  $file_type->api_version = 1;
  $file_type->type = 'video';
  $file_type->label = 'Video';
  $file_type->description = 'A <em>Video</em> file is a moving visual recording.';
  $file_type->mimetypes = array(
    0 => 'video/*',
  );
  $export['video'] = $file_type;

  return $export;
}
