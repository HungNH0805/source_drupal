<div class="container">
  <header class="pb-20">
    <div class="container">
      <h2 class="h2 title text-uppercase">Đối tác</h2>
    </div>
  </header>
  <div class="doi_tac owl-carousel owl-theme">
    <?php foreach ($rows as $id => $row): ?>
      <div class="khoi_image">
        <?php print $row;?>
      </div>
    <?php endforeach; ?>
  </div>
</div>
