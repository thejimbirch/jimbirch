Bufferapp is a module that communicates with Buffer.com service (https://buffer.com).

Class connection is this:  https://www.little-apps.com/2012/09/automatically-post-updates-buffer-api-php/

Now you can automatically post Buffer updates when new nodes are created or using Rules.
Note that updates are sent only when a new published node is created, not
after updating an existing node (for now).
You can also add a scheduled date and time for each node.

## Installation & connection
- download and install
- go to buffer.com developer page and create an app (Callback URL field is not used, so fill it as you want)
- go to admin/config/services/bufferapp and set access token and enable some profiles

## Configuration
Go to admin/structure/types/[content-type] and set options from Buffer section.
You can add text, title and description for links, etc.
If you use Rules, you will be available a new action "Send Buffer update".

## Use by code
If you want to send to Buffer some content you can use this function:

bufferapp_data($send = TRUE, $node = NULL, $text, $media = array(), $now = FALSE, $scheduled_at = FALSE)

Arguments:
 $send: if TRUE send update, if FALSE return a formatted $data array
 $node: the object origins of data (useful when using HOOK_buffer_data_alter)
 $text: text to publish (html tags will be automatically stripped)
 $now: if TRUE tells Buffer to publish immediately the update
 $scheduled_at: if set scheduled date time and time post (must be timestamp value)
 $media: an array that contains info about 'media'.
    For images, $media must have two options:
       $media = array(
         'picture' => 'url-to-image',
         'thumbnail' => 'url-to-thumb',
       );

    For links, $media must have "link" option and other options not mandatory:
       $media = array(
         'link' => 'link-url',
         'title' => 'title of link',
         'description' => 'description of link',
       );

## API
This module exposes a hook to alter data before sending them to Buffer:
HOOK_bufferapp_data_alter.

## Info
Modules developed by Sergio Durzu - www.arrubiu.org
