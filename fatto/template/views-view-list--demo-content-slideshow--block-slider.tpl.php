<section class="header-content">
  <div class="container-fluid">
    <div class="owl-slider owl-carousel owl-theme" data-autoplay="true">

      <?php foreach ($rows as $id => $row) : ?>
          <?php $ex = explode('{{}}', $row); ?>
        <div class="item d-flex align-items-center"
             style="background-image:url('<?php print trim($ex[0])?>')">
          <div class="container">
            <div class="caption">
              <div class="animated" data-start="fadeInUp">
                <div class="promo pt-3">
                  <h2 class="title title-sm p-0 text-uppercase"><?php print $ex[2]?></h2>
                </div>
              </div>
              <div class="animated" data-start="fadeInUp">
                                <span class="text-slider">
                                    <?php print $ex[3]?>
                                </span>
              </div>
              <div class="animated" data-start="fadeInUp">
                <div class="pt-3">
                  <a href="tel:0968495199" class="btn btn-danger"><i class="fa fa-phone"></i> Liên hệ</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <?php print views_embed_view('danh_muc_loai_san_pham', 'block_loai_san_pham');?>
  </div>
</section>
