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
<?php if (!empty($content['background-image'])): ?>
    <?php print $content['background-image']; ?>
<?php endif; ?>