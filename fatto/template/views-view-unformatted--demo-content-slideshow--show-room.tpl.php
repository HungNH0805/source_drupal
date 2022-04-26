<!--[field_images]{{}}[path]{{}}[title]-->
<section class="cards">

  <!--Header-->

  <header>
    <div class="container">
      <h1 class="title text-uppercase"><?= $view->get_title(); ?></h1>
    </div>
  </header>

  <!--Content-->

  <div class="container">

    <div class="row">
      <?php $bien_dem=0;?>
      <?php foreach ($rows as $id => $row) : ?>
        <?php $ex = explode('{{/}}', $row); ?>
        <?php $ex1 = explode('{{}}', $ex[0]); ?>
        <?php $ex2 = explode('{{}}', $ex[1]); ?>
        <?php foreach ($ex1 as $item_new) : ?>
          <?php if ($bien_dem == 0) :?>
            <?php
            $image = theme_image_style([
              'style_name' => '900_x_345',
              'path' => trim($item_new),
              'alt' => $view->get_title(),
              'attributes' => array('class' => 'img-fluid '),
              'width' => '1130px',
              'height' => '600px',
            ]);
            ?>
          <?php else :?>
            <?php
            $image = theme_image_style([
              'style_name' => '760_x_600',
              'path' => trim($item_new),
              'alt' => $view->get_title(),
              'attributes' => array('class' => 'img-fluid '),
              'width' => '760px',
              'height' => '600px',
            ]);
            ?>
          <?php endif;?>
          <div class="col-lg-<?php ($bien_dem==0) ? print '8' : print '4'?>">
            <figure>
              <figcaption>
                <?=$image?>
              </figcaption>
              <a href="<?=$ex2[0]?>" class="btn btn-clean">
                Xem thêm
                <i class="fa fa-long-arrow-right"></i>
              </a>
            </figure>
          </div>
          <?php $bien_dem++;?>
        <?php endforeach; ?>
      <?php endforeach; ?>

    </div> <!--/row-->

  </div> <!--/container-fluid-->

</section>
