<div class="top-bar-wrapper d-none d-sm-block">
  <div class="container d-flex justify-content-between align-items-center">
    <div class="top-left">
      <a href="tel:02253666689"><i class="fal fa-phone-volume"></i>0225.366.6689</a>
      <a href="mailto:info@example.com"><i class="fal fa-envelope"></i>info@topshipping.vn</a>
      <a href="#"><i class="fal fa-map-marker-alt"></i>Phòng 621, TD Business Center, Lô 20A, Lê Hồng Phong, Ngô Quyền, HP</a>
    </div>
    <div class="top-right d-none d-md-block">
      <div class="social-pages">
        <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
        <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
        <a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a>
        <a href="#"><i class="fab fa-skype" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
</div>
<div class="min-h80">
  <header class="header-1">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-3 col-sm-5 col-md-4 col-6 pr-lg-5">
          <div class="logo">
            <?php if ($logo) : ?>
              <a href="<?php print $front_page; ?>" title="<?php print t('TopShippingVN'); ?>" rel="home" id="logo">
                <img src="<?php print $logo; ?>" alt="<?php print t('TopShippingVN'); ?>" />
              </a>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-lg-9 text-end p-lg-0 d-none d-lg-flex justify-content-between align-items-center">
          <div class="menu-wrap">
            <div class="main-menu">
              <?= getMainMenuTopShippng() ?>
            </div>
          </div>
          <div class="header-right-element">
            <a href="tel:02253666689" class="theme-btn">Gọi ngay<i class="fal fa-long-arrow-right"></i></a>
            <a href="#" class="search-btn"><i class="fal fa-search"></i></a>
            <div class="search-box">
              <form action="#">
                <input type="text" placeholder="Search">
                <button type="submit"><i class="fal fa-search"></i></button>
              </form>
            </div>
          </div>
        </div>
        <div class="d-block d-lg-none col-sm-1 col-md-8 col-6">
          <div class="mobile-nav-wrap">
            <div id="hamburger"><i class="fal fa-bars"></i></div>
            <!-- mobile menu - responsive menu  -->
            <div class="mobile-nav">
              <button type="button" class="close-nav">
                <i class="fal fa-times-circle"></i>
              </button>
              <nav class="sidebar-nav">
                <?= getMainMenuMobileTopShippng() ?>
              </nav>

              <div class="action-bar text-white">
                <div class="single-info-element">
                  <div class="icon">
                    <i class="fal fa-map-marked-alt"></i>
                  </div>
                  <div class="text">
                    <h5>Địa chỉ:</h5>
                    <span>Phòng 621, TD Business Center, Lô 20A, Lê Hồng Phong, Ngô Quyền, HP</span>
                  </div>
                </div>
                <div class="single-info-element">
                  <div class="icon">
                    <i class="fal fa-clock"></i>
                  </div>
                  <div class="text">
                    <h5>Giờ hoạt động</h5>
                    <span>8:00 am - 5:30 pm</span>
                  </div>
                </div>
                <div class="single-info-element">
                  <div class="icon">
                    <i class="fal fa-envelope"></i>
                  </div>
                  <div class="text">
                    <h5>Email</h5>
                    <span>info@topshipping.vn</span>
                  </div>
                </div>
                <div class="call-us">
                  <div class="icon text-white">
                    <i class="fal fa-phone-volume"></i>
                  </div>
                  <div class="text">
                    <h5>Hotline</h5>
                    <span>02253666689</span>
                  </div>
                </div>
                <a href="tel:02253666689" class="theme-btn mt-4">Gọi ngay</a>
              </div>
            </div>
          </div>
          <div class="overlay"></div>
        </div>
      </div>
    </div>
  </header>
</div>

<div class="page-banner-wrap text-center bg-cover">
  <div class="container">
    <div class="page-heading text-white">
      <h1><?= $title ?></h1>
    </div>
  </div>
</div>
<div class="breadcrumb-wrapper">
  <div class="container">
    <nav>
      <?php
      $breadcrumb_array = drupal_get_breadcrumb();
      ?>
      <ol class="breadcrumb">
        <?php foreach ($breadcrumb_array as $id => $item) : ?>
          <li class="breadcrumb-item">
            <?= $item; ?>
          </li>
        <?php endforeach; ?>
        <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
      </ol>
    </nav>
  </div>
</div>

<?php
$bg = '';
if (arg(1) == 'term') {
  if (arg(2) == '2') {
    $bg = 'theme-bg';
  } else {
    $bg = '';
  }
}
?>

<section class="blog-wrapper news-wrapper section-padding <?= $bg ?>">
  <div class="container">
    <?php print $messages; ?>
    <div class="row">
      <?php
      $cls = 12;
      if ($page['sidebar-right']) {
        $cls = 8;
      };
      ?>
      <div class="col-12 col-lg-<?= $cls ?>">
        <?php if ($tabs) :
        ?><div class="tabs"><?php print render($tabs); ?></div><?php
                                                              endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links) :
        ?><ul class="action-links"><?php print render($action_links); ?></ul><?php
                                                                            endif; ?>
        <?php print render($page['content']); ?>
      </div>
      <?php if ($page['sidebar-right']) : ?>
        <div class="col-12 col-lg-4">
          <div class="main-sidebar">
            <?= form_tim_kiem(); ?>
            <?= render($page['sidebar-right']); ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<footer class="footer-1 footer-wrap">
  <div class="footer-widgets-wrapper theme-bg">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-xl-3">
          <div class="about-transland pe-md-5 pe-xl-0">
            <a href="/">
              <img src="/sites/default/files/top_shipping_vn-04.png" alt="Top Shipping Việt Nam">
            </a>
            <p>Công ty cổ phần Top Shipping Việt Nam là một trong những công ty hàng đầu trong ngành giao nhận vận chuyển hàng hóa.</p>
          </div>
        </div>

        <div class="col-sm-6 col-xl-2 col-4">
          <div class="single-footer-wid ps-xl-4">
            <div class="wid-title">
              <h6>LIÊN KẾT</h6>
            </div>
            <?= getMenuFooter(); ?>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 col-8">
          <div class="single-footer-wid ps-xl-2">
            <div class="wid-title">
              <h6>DỊCH VỤ</h6>
            </div>
            <?= getMenuFooterDichvu(); ?>
          </div>
        </div>

        <div class="col-sm-6 col-xl-4">
          <div class="single-footer-wid site-info-widget">
            <div class="wid-title">
              <h6>THÔNG TIN LIÊN HỆ</h6>
            </div>
            <div class="get-in-touch">
              <div class="single-contact-info">
                <div class="icon id1">
                  <i class="fal fa-map-marker-alt"></i>
                </div>
                <div class="contact-info">
                  <span>Phòng 621, TD Business Center, Lô 20A, Lê Hồng Phong, Ngô Quyền, HP</span>
                </div>
              </div>
              <div class="single-contact-info">
                <div class="icon id2">
                  <i class="fal fa-phone"></i>
                </div>
                <div class="contact-info">
                  <span><a href="tel:02253666689">02253666689</a></span>
                </div>
              </div>
              <div class="single-contact-info">
                <div class="icon id3">
                  <i class="fal fa-envelope"></i>
                </div>
                <div class="contact-info">
                  <span><a href="mailto:info@topshipping.vn">info@topshipping.vn</a></span>
                </div>
              </div>
              <div class="single-contact-info">
                <div class="icon id3">
                  <i class="fab fa-facebook-f"></i>
                </div>
                <div class="contact-info">
                  <span><a href="#">Fanpage Shipping</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="container align-items-center">
      <div class="bottom-content-wrapper">
        <div class="row">
          <div class="col-md-6 col-12">
            <div class="copy-rights">
              <p>&copy;2022 <strong>TopShippingVN</strong></p>
            </div>
          </div>
          <div class="col-md-6 mt-2 mt-md-0 col-12 text-md-end">
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>