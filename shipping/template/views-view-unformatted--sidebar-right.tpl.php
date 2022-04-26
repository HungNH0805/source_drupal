<div class="single-sidebar-widget">
  <div class="wid-title">
    <h3><?= $view->get_title();?></h3>
  </div>
  <div class="popular-posts">
    <?php foreach ($rows as $row) : ?>
      <div class="single-post-item">
        <?php print $row ?>
      </div>
    <?php endforeach ?>
  </div>
</div>
