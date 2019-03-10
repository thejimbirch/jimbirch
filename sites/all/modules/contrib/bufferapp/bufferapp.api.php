<?php

/**
 * @file
 * API documentation file for Buffer.
 */

/**
 * Allows modules to alter the default Buffer behaviour.
 *
 * @param array $data
 *   An array with data to pass to Buffer.
 * @param object $node
 *   Node object.
 *
 * @see buffed_send_update()
 */
function hook_bufferapp_data_alter(array &$data, $node = NULL) {
  $data['text'] = 'My edited text';
}
