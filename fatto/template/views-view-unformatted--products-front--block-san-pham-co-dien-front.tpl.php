<section class="products">

  <header>
    <div class="container">
      <h2 class="title text-uppercase h3"><?php print $view->get_title();?></h2>
    </div>
  </header>
  <div class="container">
    <div class="row">

      <?php foreach ($rows as $item) : ?>
        <div class="col-6 col-lg-4">
          <?php print $item?>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</section>
