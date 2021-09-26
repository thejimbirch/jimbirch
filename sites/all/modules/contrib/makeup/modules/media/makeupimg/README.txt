IMAGEFIELD_CSS module
---------------------

Maintainer: Alexandre Israel <drupal@w3w.fr>

Inspired by Color Field module proposed by targoo, this module provides a 
formatter that allows an imagefield value to be displayed through CSS.

Notice: 
 * This module will not add any new html tag in the template. It only 
define a CSS declaration that put the image on the HTML selector you choose.
This CSS declaration is added inline in the HTML header.
 * Please note Selector field default value to "body" because I still did not
find any better value. Do not hesitate to make proposal in the issue queue.

Features:
 * Display an image through CSS declaration
 * Add options to the formatter : CSS standards for background tag, Imagecache 
preset, Additional CSS field
 * Use token to define CSS path - e.g. use tid or nid to apply properly on list 
pages


REQUIREMENTS
------------

 * Drupal 7.x

Modules
 * Token
 * Image


INSTALLATION
------------

Ordinary installation.
http://drupal.org/documentation/install/modules-themes/modules-7


SETTING THE VALUES
-------------------

Go on the "Manage display" page of the Entity >> Bundle >> View mode you want
to configure.

If the imagefield you want to configure does not exist yet, go on the 
"Manage field" page and create one, then come back here :-)

 * Select "CSS Declaration" in the select dropdown menu of your imagefield
 * Default values will appear on the right: you will probably want to adapt them
 * Click the Update button of the settings
 * Click the Save button of the "Manage display" page


CHOOSING THE VALUES
-------------------

Here are the available values to set:

Where should we display the image?
 * Selector: A valid CSS selector such as .links li a, #logo

What the image should look like?
 * Image Style: Select any defined Image style preset

Generating the CSS syntax for the "background" property
 * Color: A valid CSS color value
 * Repeat: horizontally? vertically? both? neither? etc.
 * Attachment: should it be scrolling or not?
 * Horizontal position: A valid CSS vertical position value
 * Vertical position: A valid CSS vertical position value
 * Important: check it to make this CSS have " !important" at the end


EXAMPLES
--------

1) Displaying a pattern background on the node main page

Go on the Full content view mode, and use "#main-content" as selector value.
Choose the best Image style that will suite your expectations.
You don't need background color here, you probably want to repeat the image to
have a pattern effect dedicated to this node.
Vertical and Horizontal position or not important, but having "important" value
checked will certainly be!


2) Place a photo, in Views list, on the right side of a teaser

Go on the Teaser view mode, and use the Token integration stuff in selector: 
"#node-[node:nid]". This make sure you address #node-126 and #node-237 correctly
so each one receive the right image, and don't mix up.
Here, I find it cool to use transparency as background color: 
rgba(255,255,255,.2)
Please, no-repeat and scroll. I position it: right and top - but do as you 
prefer. And keep it "important", unless you know what you're doing.


3) Full page background and Panel compatibility

Let's say we installed Drupal Commons 3, and we want to have a beautiful image
as background when displaying the group page.
We could do this on view mode page... if Commons were using it to display this 
page. But these guys prefer to use Panel, and more fun: panelizer ;-)
Click on "Customize this page", add a field in Node section: get "Field: Group 
Logo (field_gorup_logo)". Do whatever you want with the Title, and select the
"CSS Declaration" formatter - click Continue.
Here I keep default "body" value for selector, no image styling (keep the 
original size), no color, no repeat, no scroll, center and top - and it's 
"important". Click Finish. Click Save
If you chose the right picture, this should be beautiful!
