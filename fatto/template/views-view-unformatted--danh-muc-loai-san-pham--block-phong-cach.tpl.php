<!--[name]{{}}[field_image]{{}}[path]-->
<section class="blog blog-block">

  <!--Header-->

  <header>
    <div class="container">
      <h2 class="title text-uppercase"><?php print $view->get_title();?></h2>
    </div>
  </header>

  <!--Content-->

  <div class="container">

    <div class="scroll-wrapper">

      <div class="row scroll text-center">
        <?php foreach ($rows as $id => $row): ?>
          <?php $ex = explode('{{}}',$row); ?>
          <div class="col-md-4">
            <article data-3d>
              <a href="<?=$ex[2];?>">
                <div class="image">
                  <?=$ex[1];?>
                </div>
                <div class="entry entry-block">
                  <div class="title">
                    <h3 class="h4 text-uppercase"><?=$ex[0];?></h3>
                  </div>
                  <div class="dash">
                    <div class="dash-more"></div>
                  </div>
                </div>
                <div class="show-more">
                                    <span class="btn btn-clean">
                                        Xem thêm
                                        <i class="fa fa-long-arrow-right"></i>
                                    </span>
                </div>
              </a>
            </article>
          </div>
        <?php endforeach; ?>
      </div><!--/row-->
    </div>



  </div><!--/container-->

</section>
