<?php
$img_full = array();
$img_con = array();
$img_full[0] = str_replace('public://', '/sites/default/files/', $node->field_image['vi'][0]['uri']);
$img_con[0] =  $img_con_need=image_style_url('210_x_210', $node->field_image['vi'][0]['uri']);
$product_node=commerce_product_load($node->field_product['und'][0]['product_id']);
//dsm($product_node);
if (isset($product_node)) {
    foreach ($product_node->field_images['und'] as $hinh_anh) {
        $anh=str_replace('public://', '/sites/default/files/', $hinh_anh['uri']);
        array_push($img_full, $anh);
        $img_con_need=image_style_url('210_x_210', $hinh_anh['uri']);
        array_push($img_con, $img_con_need);
    }
}
?>
<div class="main">
  <div class="container">
    <div class="row product-flex">
      <div class="col-lg-7 product-flex-gallery">
        <div class="owl-product-gallery owl-carousel owl-theme open-popup-gallery">
          <?php foreach ($img_full as $hinh_anh) :?>
            <a href="<?=trim($hinh_anh)?>"><img src="<?=trim($hinh_anh)?>" alt="<?=$node->title;?>" /></a>
          <?php endforeach;?>
        </div>
      </div>
      <div class="col-lg-5 product-flex-info">
        <div class="clearfix">
          <div class="clearfix">
            <?php
            $length = strlen($content['product:commerce_price']['#items'][0]['amount']);
            $price = $content['product:commerce_price']['#object']->commerce_price['und'][0]['amount'];
            $price_formated = number_format($price, '0', '.', ',')
            ?>
            <h2 class="title_product_page mt-mb-10"><?=$node->title;?></h2>
            <div class="page_star">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <?php (rand(0, 10)%2==0) ? print '<i class="fa fa-star"></i>' : print '<i class="fa fa-star-o"></i>'?>
            </div>
            <h3 class="title_price_page">Giá : <?php ($price_formated=='0') ? print '<a href="tel:0968495199" class="gia_chi_tiet"><i class="fa fa-phone"></i> Liên hệ</a>' : print '<span class="gia_chi_tiet">'.$price_formated.' ₫</span>'; ?></h3>
            <p><?php isset($node->body['und'][0]['summary']) ? print $node->body['und'][0]['summary'] : print 'Đang cập nhật';?></p>
            <div class="mb-30"><?php print render($content['field_product'])?></div>
            <?php if (!empty($content['field_tags'])) {
                render($content['field_tags']);
            }?>
            <div class="mt-30"><?php print render($content['fblikebutton_field']); ?></div>


            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <div class="addthis_inline_share_toolbox_uh0n"></div>


          </div> <!--/clearfix-->
        </div> <!--/product-info-wrapper-->
      </div> <!--/col-lg-4-->
    </div>
  </div>
</div>
<section class="product-details">

  <div class="container">

    <!--Tab links-->

    <ul class="nav nav-pills nav-pills-flat justify-content-center" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="tab-review-tab" data-toggle="tab" href="#tab-review" role="tab">
          Mô tả chi tiết
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="tab-desc-tab" data-toggle="tab" href="#tab-desc" role="tab">
          Thông số kĩ thuật
        </a>
      </li>
    </ul>

    <!--Tab content-->

    <div class="tab-content" id="pills-tabContent">

      <!--Tab description-->

      <div class="tab-pane fade show active" id="tab-review">
        <div><?php print render($content['body']);?></div>
      </div>
      <div class="tab-pane fade" id="tab-desc">
        <p><?php print render($content['field_thong_so_ki_thuat']);?></p>
      </div>
    </div> <!--/tab-content -->
  </div>

</section>
