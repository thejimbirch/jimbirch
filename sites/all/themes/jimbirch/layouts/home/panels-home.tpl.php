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