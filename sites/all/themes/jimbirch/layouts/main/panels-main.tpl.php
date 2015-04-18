<?php
/**
 * @file
 * Template for Main Layout.
 *
 * This template provides a very simple "one column" panel display layout.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   $content['middle']: The only panel in the layout.
 */
?>
<div <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
    <?php if (!empty($content['row-1'])): ?>
    <div id="row-1" class="full-width">
        <div class="container">
            <div class="row clearfix">
                <?php print $content['row-1']; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php if (!empty($content['row-2'])): ?>
    <div id="row-2" class="full-width alt">
        <div class="container">
            <div class="row clearfix">
                <?php print $content['row-2']; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php if (!empty($content['row-3'])): ?>
    <div id="main-row" class="full-width">
        <div class="container">
            <div class="row clearfix">
                <?php print $content['row-3']; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php if (!empty($content['row-4'])): ?>
    <div id="row-4" class="full-width alt">
        <div class="container">
            <div class="row clearfix">
                <?php print $content['row-4']; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php if (!empty($content['row-5'])): ?>
    <div id="row-5" class="full-width">
        <div class="container">
            <div class="row clearfix">
                <?php print $content['row-5']; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php if (!empty($content['row-6'])): ?>
    <div id="row-6" class="full-width alt">
        <div class="container">
            <div class="row clearfix">
                <?php print $content['row-6']; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php if (!empty($content['row-7'])): ?>
    <div id="row-7" class="full-width">
        <div class="container">
            <div class="row clearfix">
                <?php print $content['row-7']; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php if (!empty($content['row-8'])): ?>
    <div id="row-8" class="full-width alt">
        <div class="container">
            <div class="row clearfix">
                <?php print $content['row-8']; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php if (!empty($content['row-9'])): ?>
    <div id="row-9" class="full-width">
        <div class="container">
            <div class="row clearfix">
                <?php print $content['row-9']; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php if (!empty($content['row-10'])): ?>
    <div id="row-10" class="full-width alt">
        <div class="container">
            <div class="row clearfix">
                <?php print $content['row-10']; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>