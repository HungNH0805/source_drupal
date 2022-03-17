<!--[add_to_cart_form]{{}}[product_id]{{}}[commerce_price]{{}}[title]{{}}[path]{{}}[field__nh]{{}}[field_image]{{}}[field_images_1]{{}}[field_cho_phep_dat_hang_vao_gio]{{}}[field_image_1]{{}}[nid]-->
<?php
$center_image = node_load(2422);
$path_center_image = file_create_url($center_image->field_image['vi'][0]['uri']);
?>
<div class="top-interesting-area dotted-style2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center bg-red pt-20 mb-50">
          <h2 class="text-yellow">"26 LÀ SỐ NĂM CHÚNG TÔI ĐÃ LÀM RA BỘ TỦ BẾP NHỰA PVC ĐẦU TIỀN TRÊN THỊ TRƯỜNG. ĐẾN NAY CHÚNG TÔI VẪN LUÔN DẪN ĐẦU"</h2>
        </div>
      </div>
    </div>
    <div class="grid-product">
      <?php $i = 0; ?>
      <?php foreach ($rows as $id => $row): ?>
        <?php $a = explode('{{}}', $row) ?>
        <?php if ($i < 5): ?>
          <div class="single-new-product">
            <div class="product-img">
              <a href="<?= $a[4] ?>">
                <?= $a[6] ?>
              </a>
              <div class="new-product-action">
                <?php if (strlen($a[8]) - strlen(str_replace('Có', '', $a[8])) != 0): ?>
                  <a href="#" class="link-add-to-cart"><span class="lnr lnr-cart"></span> Thêm vào giỏ hàng</a>
                  <div class="add-to-cart d-none">
                    <?php print '<a href="#">' . $a[0] . '</a>'; ?>
                  </div>
                <?php endif; ?>
              </div>
            </div>
            <div class="product-content text-center">
              <h3 class="title_product"><a href="<?= $a[4] ?>"><?= $a[3] ?></a></h3>
              <h4>
                <?php
                if (strlen($a[8]) - strlen(str_replace('Có', '', $a[8])) != 0) {
                  print $a[2];
                }
                ?>
              </h4>
            </div>
          </div>
        <?php elseif ($i == 5): ?>
          <div class="grid-products-img">
            <?php print views_embed_view('front_block', 'block_feature_product_front') ?>
          </div>
        <?php else: ?>
          <div class="single-new-product">
            <div class="product-img">
              <a href="<?= $a[4] ?>">
                <?= $a[6] ?>
              </a>
              <div class="new-product-action">
                <?php if (strlen($a[8]) - strlen(str_replace('Có', '', $a[8])) != 0): ?>
                  <a href="#" class="link-add-to-cart"><span class="lnr lnr-cart"></span> Thêm vào giỏ hàng</a>
                  <div class="add-to-cart d-none">
                    <?php print '<a href="#">' . $a[0] . '</a>'; ?>
                  </div>
                <?php endif; ?>
              </div>
            </div>
            <div class="product-content text-center">
              <h3 class="title_product"><a href="<?= $a[4] ?>"><?= $a[3] ?></a></h3>
              <h4>
                <?php
                if (strlen($a[8]) - strlen(str_replace('Có', '', $a[8])) != 0) {
                  print $a[2];
                }
                ?>
              </h4>
            </div>
          </div>
        <?php endif; ?>
        <?php $i++; ?>
      <?php endforeach; ?>
    </div>
    <p class="text-center"><a class="btn btn-primary" href="/san-pham.html">Xem thêm</a></p>
  </div>
</div>




