<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<?php
global $language;
$lang_name = $language->language;
?>
<div class="offset-menu">
  <span id="offset-menu-close-btn"><i class="fal fa-plus"></i></span> <!-- /.offset-menu-close-btn -->
  <div class="offset-menu-wrapper text-white">
    <div class="offset-menu-header">
      <div class="offset-menu-logo">
        <?php if ($logo) : ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('TopShipping'); ?>" rel="home" id="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('TopShipping'); ?>" />
          </a>
        <?php endif; ?>
      </div>
    </div> <!-- /.offset-menu-header -->
    <div class="offset-menu-section">
      <h3>GIỚI THIỆU</h3>
      <p>Công ty cổ phần Top Shipping Việt Nam là một trong những công ty hàng đầu trong ngành giao nhận vận chuyển hàng hóa, cung cấp các dịch vụ với chất lượng tốt nhất vì lợi ích của khách hàng tại Hải Phòng nói riêng và cả nước nói chung.</p>
      <a href="tel:02253666689" class="theme-btn minimal-btn mt-30">Gọi ngay <i class="fas fa-arrow-right"></i></a>
    </div> <!-- /.offset-menu-section -->
    <div class="offset-menu-section">
      <h3>THÔNG TIN LIÊN HỆ</h3>
      <ul>
        <li><span><i class="fal fa-map"></i></span>Phòng 621, TD Business Center, Lô 20A, Lê Hồng Phong, Ngô Quyền, Hải Phòng, Việt Nam</li>
        <li><span><i class="fal fa-phone"></i></span><a href="tel:02253666689">(+84) 2253.6666.89</a></li>
        <li><span><i class="fal fa-envelope"></i></span>info@topshipping.vn</li>
        <li><span><i class="fal fa-clock"></i></span>Thời gian hoạt động: 8.00 - 17.30</li>
      </ul>
    </div> <!-- /.offset-menu-section -->
    <div class="offset-menu-footer">
      <div class="offset-menu-social-icon">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="#"><i class="fab fa-dribbble"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
    </div> <!-- /.offset-menu-footer -->
  </div> <!-- /.offset-menu-wrapper -->
</div> <!-- /.offset-menu -->

<!-- welcome content start from here -->

<header class="header-wrap header-3">
  <div class="top-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-12 text-center">
          <div class="welcome-text">
            <!--            <p>Welcome to Transland Logistic & Cargo Services Company. <a href="faq.html">Setting & Parivacy, Faq</a></p>-->
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="middle-header-wrapper">
    <div class="container-fluid">
      <div class="row align-items-center justify-content-between">
        <div class="col-xl-2 col-lg-4 col-6 align-items-center d-flex">
          <div class="mobile-nav-bar me-3">
            <div class="mobile-nav-wrap">
              <div id="hamburger">
                <i class="fal fa-bars"></i>
              </div>
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

                      <span>Phòng 621, TD Business Center, Lô 20A, Lê Hồng Phong, Đông Khê, Ngô Quyền, HP</span>
                    </div>
                  </div>
                  <div class="single-info-element">
                    <div class="icon">
                      <i class="fal fa-clock"></i>
                    </div>
                    <div class="text">
                      <h5>Giờ hoạt động:</h5>
                      <span>8:00 am - 5:30 pm</span>
                    </div>
                  </div>
                  <div class="single-info-element">
                    <div class="icon">
                      <i class="fal fa-envelope"></i>
                    </div>
                    <div class="text">
                      <h5>Email:</h5>
                      <span><a href="mailto:info@topshipping.vn">info@topshipping.vn</a></span>
                    </div>
                  </div>
                  <div class="call-us">
                    <div class="icon text-white">
                      <i class="fal fa-phone-volume"></i>
                    </div>
                    <div class="text">
                      <h5>Hotline: </h5>
                      <span><a href="tel:02253666689">0225.366.6689</a></span>
                    </div>
                  </div>
                  <a href="tel:02253666689" class="theme-btn mt-4">Gọi Ngay</a>
                </div>
              </div>
            </div>
            <div class="overlay"></div>
          </div>

          <div class="header-logo">
            <div class="logo">
              <?php if ($logo) : ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('TopShippingVN'); ?>" rel="home" id="logo">
                  <img src="<?php print $logo; ?>" alt="<?php print t('TopShippingVN'); ?>" />
                </a>
              <?php endif; ?>
            </div>
          </div>
        </div>

        <div class="col-lg-8 p-lg-0 header-menu-wrap">
          <div class="header-menu-wrap">
            <div class="menu-top-bar">
              <div class="contact-info-grid">
                <div class="single-menu-box">
                  <div class="icon">
                    <i class="fal fa-envelope-open"></i>
                  </div>
                  <div class="content">
                    <h3>Email </h3>
                    <span><a href="mailto:info@topshipping.vn">info@topshipping.vn</a></span>
                  </div>
                </div>
                <div class="single-menu-box">
                  <div class="icon">
                    <i class="fal fa-phone-volume"></i>
                  </div>
                  <div class="content">
                    <h3>Hotline</h3>
                    <span><a href="tel: 02253666689"> 02253666689</a></span>
                  </div>
                </div>
                <div class="single-menu-box">
                  <div class="icon">
                    <i class="fal fa-clock"></i>
                  </div>
                  <div class="content">
                    <h3>Giờ hoạt động</h3>
                    <span>08:00 am - 05:30 pm</span>
                  </div>
                </div>
              </div>
              <div class="side-toggle-menu">
                <i class="fal fa-bars"></i>
              </div>
            </div>

            <div class="main-menu-wrapper d-flex justify-content-center">
              <div class="main-menu">
                <?= getMainMenuTopShippng() ?>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-2 col-lg-3 col-6 ps-lg-0 text-end">
          <div class="header-btn-cta">
            <a href="tel:   0904441068" class="theme-btn">Gọi Ngay <i class="ms-2 fal fa-long-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<?php if ($page['main_content_front']) {
  print render($page['main_content_front']);
} ?>
<?= noi_dung(21) ?>
<?php print $messages; ?>

<?php if ($page['bottom_main_content_front']) {
  print render($page['bottom_main_content_front']);
} ?>
<section class="request-a-quote-section theme-bg bg-cover calculate-wrapper section-padding" style="background-image: url('/sites/all/themes/shipping/assets/img/cost-bg.jpg')">
  <div class="container">
    <div class="row">
      <div class="col-xl-5 col-12">
        <div class="block-contents mb-20 pr-30 pr-mb-0">
          <div class="section-title">
            <span>SHIPPING IT RIGHT AWAY</span>
            <h2>ĐỂ LẠI THÔNG TIN</h2>
            <p class="text-white">Chúng tôi được xem là một trong những công ty hàng đầu trong ngành giao nhận vận chuyển hàng hóa uy tín tại Việt Nam. Tư vấn đến cho bạn những chứng từ xuất nhập khẩu, xếp dỡ, lưu kho, lưu bãi, đóng gói, kiểm đếm … với một mức chi phí tối ưu nhất.</p>
          </div>
        </div>
        <div class="row me-xl-5 text-white">
          <div class="col-sm-6 col-6">
            <div class="single-request-element">
              <div class="icon">
                <i class="fal fa-warehouse"></i>
              </div>
              <h6>Kho bãi lớn</h6>
            </div>
          </div>
          <div class="col-sm-6 col-6">
            <div class="single-request-element">
              <div class="icon">
                <i class="fal fa-location"></i>
              </div>
              <h6>Online Tracking</h6>
            </div>
          </div>
          <div class="col-sm-6 col-6">
            <div class="single-request-element">
              <div class="icon">
                <i class="fal fa-headset"></i>
              </div>
              <h6>Hỗ trợ 24/7</h6>
            </div>
          </div>
          <div class="col-sm-6 col-6">
            <div class="single-request-element">
              <div class="icon">
                <i class="fal fa-shield-check"></i>
              </div>
              <h6>Bảo hiểm vận chuyển</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-7 col-12">
        <div class="request-quote-form-wrapper mt-5 mt-xl-0 ms-xl-3">
          <h4>THÔNG TIN LIÊN HỆ</h4>
          <div class="request-quote-form">
            <?php
            $node = node_load(27);
            webform_node_view($node, 'full');
            print theme_webform_view($node->content);
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php if ($page['bottom_main_content_front_bottom']) {
  print render($page['bottom_main_content_front_bottom']);
} ?>
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