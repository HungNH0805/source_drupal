<!--Header End-->
<div class="header-wrap">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-12 navbar-light">
        <div class="logo">
          <?php if ($logo) : ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('CÔNG TY CỔ PHẦN JPWAY VIỆT NAM'); ?>" rel="home" id="logo" class="logo-default">
              <img src="<?php print $logo; ?>" alt="<?php print t('CÔNG TY CỔ PHẦN JPWAY VIỆT NAM'); ?>" class="logo-default" />
            </a>
          <?php endif; ?></div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="col-lg-8 col-md-12 d-none d-sm-block">
        <div class="header_info">
          <div class="conInfo phone-white"><span>Điện thoại:</span> <a href="tel:(+84)31 3759 776">(+84)31 3759 776</a></div>
          <div class="social-icons">
            <ul>
              <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navigation-wrap" id="filters">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <button class="close-toggler" type="button" data-toggle="offcanvas"> <span><i class="fas fa-times-circle" aria-hidden="true"></i></span> </button>
          <?= getMainMenuJPWay()?>
        </div>
      </nav>
    </div>
  </div>
</div>

<!-- Inner Heading Start -->
<div class="inner_heading">
  <div class="container">
    <h1><?=$title?></h1>
  </div>
</div>
<div class="breadcrumb-wrapper">
  <div class="container">
    <nav>
      <?php
        $breadcrumbs = drupal_get_breadcrumb();
        ?>
      <ol class="breadcrumb">
        <?php foreach ($breadcrumbs as $id => $item) :?>
          <li class="breadcrumb-item">
            <?=$item;?>
          </li>
        <?php endforeach;?>
        <li class="breadcrumb-item active" aria-current="page"><?=$title?></li>
      </ol>
    </nav>
  </div>
</div>
<div class="page_content">
<div class="contact-page pt-30 pb-30">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="contact-item contact-left">
          <h3>THÔNG TIN LIÊN HỆ</h3>
          <p>
            <strong>JPPETRO GROUP</strong> xin trân trọng gửi lời chào và lời cảm tạ quý khách.<br>
            <strong>JPPETRO GROUP</strong> là đơn vị sản xuất, kinh doanh đa ngành nghề, trong đó có lĩnh vực sản xuất kinh doanh dầu nhớt mang thương hiệu JPWAY.
          </p>
          <ul>
            <li> <i class="fas fa-map-marker-alt"></i> Địa chỉ: Số 2, Đường Ngô Quyền, Phường Máy Chai, Quận Ngô Quyền, HP</li>
            <li><i class="far fa-envelope"></i> <a href="mailto:info@autorepairs.com">Email: vietnam.jpway@gmail.com </a> </li>
            <li><i class="far fa-envelope"></i> <a href="mailto:info@autorepairs.com">Email: vietnhat.jpway@gmail.com </a> </li>
            <li><i class="fas fa-phone-alt"></i> <a href="tel:02253759776">Hotline: (+84)225 3759776 </a> </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="contact-item contact-right">
          <h3>ĐỂ LẠI THÔNG TIN</h3>
          <?php
          $node = node_load(53);
          webform_node_view($node, 'full');
          print theme_webform_view($node->content);
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<footer>
  <div class="footer-wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <div class="footer-img">
            <a href="/">
              <img src="/sites/default/files/logo_footer.jpg" alt="JPWay Việt Nam">
            </a>
            <p class="text-white">JPPETRO GROUP là đơn vị sản xuất và kinh doanh dầu nhớt mang thương hiệu JPWAY.</p>
            <div class="social-icons social_media">
              <ul>
                <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3">
          <?= views_embed_view('term_view', 'block_product_category_footer')?>
        </div>
        <div class="col-lg-3 col-md-3">
          <h5 class="text-uppercase text-lg-start text-white text-start">Liên kết</h5>
          <?= getMainMenuFooterJPWay()?>
        </div>
        <div class="col-lg-3 col-md-3">
          <h5 class="text-uppercase text-lg-start text-white text-start">Liên hệ</h5>
          <ul class="text-lg-start text-start">
            <li class="text-white"><i class="fas fa-map-marker-alt"></i> Địa chỉ: Số 2, Đường Ngô Quyền, Phường Máy Chai, Quận Ngô Quyền, TP Hải Phòng </li>
            <li class="text-white"><i class="far fa-envelope"></i><a class="color-footer" href="mailto:vietnam.jpway@gmail.com">Email: vietnam.jpway@gmail.com </a> </li>
            <li class="text-white"><i class="far fa-envelope"></i><a class="color-footer" href="mailto:vietnhat.jpway@gmail.com">Email: vietnhat.jpway@gmail.com </a> </li>
            <li class="text-white"><i class="fas fa-phone-alt"></i> <a class="color-footer" href="tel:0225 3759776">Điện thoại: (+84)225 3759776 </a> </li>
            <li class="text-white"><i class="fas fa-fax"></i> <a class="color-footer" href="#">Fax: (+84)225 3759775 </a> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="text-footer-bottom">
      <div class="container">
        <span>&copy; 2022 JPWAY VIET NAM Thiết kế bởi <a href="//minhhien.com.vn" target="_blank"  class="text-white">Minhhien Solutions</a></span>
      </div>
    </div>
  </div>
</footer>

<div class="page-scroll scrollToTop"><a href="#"><i class="fa fa-long-arrow-alt-up"></i></a></div>

