<aside id="sidebar" class="threecol last" role="complementary">
  <div class="container">
    <div id="sidebar-area-top">
      <a href="<?php echo url('contribution'); ?>" id="contribution-button">Contribute Materials</a>
      <?php if ($description = option('site_description'): ?>
      <article id="site-description" class="widget-1 widget-first widget widget_search">
        <div class="widget-1 widget-first container">
        <p><?php echo $description; ?></p>
        </div>
      </article>
      <?php endif; ?>
      <article id="recent-posts-2" class="widget-2 widget widget_recent_entries">
        <div class="widget-2 container">
        </div>
    </article>
  </div>
  </div>
</aside><!-- /#sidebar -->
