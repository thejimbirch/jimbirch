<?php if (!empty($content['header'])): ?>
    <div id="header" class="full-width">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?php print $content['header']; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if (!empty($content['system'])): ?>
    <div id="system" class="full-width">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <?php print $content['system']; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if (!empty($content['content'])): ?>
    <?php print $content['content']; ?>
<?php endif; ?>
<?php if (!empty($content['footer'])): ?>
    <div id="footer" class="full-width">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?php print $content['footer']; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>