<?php if (!empty($content['system-content'])): ?>
    <div id="system-content" class="full-width">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <?php print $content['system-content']; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if (!empty($content['clear-content'])): ?>
    <div id="clear-content" class="full-width alt">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <?php print $content['clear-content']; ?>
                </div>
                <?php if (!empty($content['page-sidebar'])): ?>
                    <div class="col-sm-4">
                        <?php print $content['page-sidebar']; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if (!empty($content['main-content'])): ?>
    <div id="main-content" class="full-width">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 well well-lg">
                    <?php print $content['main-content']; ?>
                </div>
                <?php if (!empty($content['content-sidebar'])): ?>
                    <div class="col-sm-4 well well-lg">
                        <?php print $content['content-sidebar']; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>