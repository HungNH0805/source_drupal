<section class="products">

  <header>
    <div class="container">
      <h2 class="title"><?=$view->get_title();?></h2>
      <div class="text">
        <p>Sản phẩm chất lượng khác của chúng tôi</p>
      </div>
    </div>
  </header>

  <div class="container">

    <div class="row">
      <?php foreach ($rows as $id => $row): ?>
        <div class="col-6 col-lg-3">
          <?=$row;?>
        </div>
      <?php endforeach; ?>
    </div> <!--/row-->

  </div> <!--/container-->

</section>
