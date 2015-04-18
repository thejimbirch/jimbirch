<div id="page">
  <div class="main-container">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <?php if (!empty($page['highlighted'])): ?>
              <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
            <?php endif; ?>
            <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
            <?php print $messages; ?>
            <?php if (!empty($tabs)): ?>
              <?php print render($tabs); ?>
            <?php endif; ?>
            <?php if (!empty($page['help'])): ?>
              <?php print render($page['help']); ?>
            <?php endif; ?>
            <?php if (!empty($action_links)): ?>
              <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <a id="main-content"></a>
      <?php if (!empty($page['sidebar_second'])): ?>
      <div class="container">
          <div class="row">
              <section class="col-sm-9">
                  <?php print render($page['content']); ?>
              </section>
              <aside class="col-sm-3" role="complementary">
                <?php print render($page['sidebar_second']); ?>
              </aside>  <!-- /#sidebar-second -->
          </div>
      </div>
      <?php else: ?>
          <?php print render($page['content']); ?>
      <?php endif; ?>
  </div>
</div>