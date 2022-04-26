<div class="top-bar-wrapper d-none d-sm-block">
  <div class="container d-flex justify-content-between align-items-center">
    <div class="top-left">
      <a href="tel:02253666689"><i class="fal fa-phone-volume"></i>0225.3666.689</a>
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

<section class="contact-page-wrap section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-12">
        <div class="single-contact-card card1">
          <div class="top-part">
            <div class="icon">
              <i class="fal fa-envelope"></i>
            </div>
            <div class="title">
              <h4>Email </h4>
            </div>
          </div>
          <div class="bottom-part">
            <div class="info">
              <p>info@topshipping.vn</p>
              <p>info2@topshipping.vn</p>
            </div>
            <div class="icon">
              <i class="fal fa-arrow-right"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12">
        <div class="single-contact-card card2">
          <div class="top-part">
            <div class="icon">
              <i class="fal fa-phone"></i>
            </div>
            <div class="title">
              <h4>Hotline</h4>
            </div>
          </div>
          <div class="bottom-part">
            <div class="info">
              <p><a href="tel:0904441068">0904441068</a></p>
              <p><a href="tel:02253666689">02253666689</a></p>
            </div>
            <div class="icon">
              <i class="fal fa-arrow-right"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12">
        <div class="single-contact-card card3">
          <div class="top-part">
            <div class="icon">
              <i class="fal fa-map-marker-alt"></i>
            </div>
            <div class="title">
              <h4>Địa chỉ</h4>
            </div>
          </div>
          <div class="bottom-part">
            <div class="info">
              <p>Phòng 621, TD Business Center, Lê Hồng Phong, Ngô Quyền, HP</p>
            </div>
            <div class="icon">
              <i class="fal fa-arrow-right"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row pt-30">
      <div class="block-contents">
        <div class="section-title text-center">
          <span>SHIPPING IT RIGHT AWAY</span>
          <h2>ĐỂ LẠI <span>THÔNG TIN</span></h2>
        </div>
      </div>

      <div class="col-12 col-lg-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14914.51536768094!2d106.69730476977539!3d20.8466891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7abb861849ed%3A0x72c84ae3195f23e8!2sTd%20Business%20Center!5e0!3m2!1svi!2s!4v1649238247066!5m2!1svi!2s" width="100%" height="523" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-12 col-lg-6">
        <div class="contact-form">
          <?php
          $node = node_load(1);
          webform_node_view($node, 'full');
          print theme_webform_view($node->content);
          ?>
        </div>
      </div>
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