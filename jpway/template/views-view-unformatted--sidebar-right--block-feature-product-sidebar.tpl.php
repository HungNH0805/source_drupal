<div class="sidebar-item">
  <h3 class="sidebar-title mb20"><?=$view->get_title()?></h3>
  <div class="latest-news">
    <?php foreach ($rows as $row):?>
      <?= $row?>
    <?php endforeach;?>
  </div>
</div>
