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
<?php print render($page['content']['metatags']); ?>
<div class="wrapper">

  <!-- ========================  menu ======================== -->
  <nav class="navbar-fixed">
    <div class="container">

      <div class="navigation navigation-top clearfix d-none-pc">
        <?php
        $string = '';
        if ($logo) {
          $string = '
          <a href="' . $front_page . '" class="logo-icon" title="Fatto" rel="home" id="logo" >
            <img src="'.$logo.'" alt="Fatto" width="auto" height="50"/>
          </a>';
        }
        print str_replace('<--logo-->', $string, noi_dung(966)); ?>
      </div>


      <div class="navigation navigation-main">
        <a href="/" class="logo-icon d-block d-sm-none" title="Fatto" rel="home" id="logo">
          <img src="/sites/default/files/logo-foot.png" alt="Fatto" title="Fatto" width="auto" height="50">
        </a>
        <a href="#" class="open-login"><i class="icon icon-user"></i></a>
        <a href="#" class="open-search"><i class="icon icon-magnifier"></i></a>
        <a href="#" class="open-menu"><i class="icon icon-menu"></i></a>

        <div class="floating-menu">
          <div class="close-menu-wrapper">
            <span class="close-menu"><i class="icon icon-cross"></i></span>
          </div>
          <?php print str_replace('<--front-->',$front_page,str_replace('<--logo-->',$logo,getMainMenufattoGrp())); ?>
        </div>
      </div>
      <div class="search-wrapper">
        <form action="/tim-kiem">
          <input class="form-control" placeholder="Tìm kiếm" name="title" />
          <button class="btn btn-outline-dark btn-sm">Tìm</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- ========================  Slider  ======================== -->

  <section class="header-content">


    <div class="container-fluid">

      <div class="owl-slider owl-carousel owl-theme" data-autoplay="true">

        <!--Slide item-->

        <div class="item d-flex align-items-center" style="background-image:url('assets/images/custom/slider2.jpg')">
          <div class="container">
            <div class="caption">
              <div class="animated" data-start="fadeInUp">
                <div class="promo pt-3">
                  <h1 class="title title-sm p-0 text-uppercase">Fatto Việt Nam</h1>
                </div>
              </div>
              <div class="animated" data-start="fadeInUp">
                <span class="text-slider">
                  Nội thất cao cấp
                </span>
              </div>
              <div class="animated" data-start="fadeInUp">
                <div class="pt-3">
                  <a href="#" target="_blank" class="btn btn-dark text-slider">Mua ngay</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--Slide item-->

        <div class="item d-flex align-items-center" style="background-image:url('assets/images/custom/slider3.jpg')">
          <div class="container">
            <div class="caption">
              <div class="animated" data-start="fadeInUp">
                <div class="big-text big-text-sm">
                  <span>Ưu đãi lên đến</span>
                  <span>50%</span>
                  <div>
                    <a href="#" target="_blank" class="btn btn-info btn-block text-slider">Mua
                      ngay</a>
                  </div>
                </div>
              </div>
              <div class="animated" data-start="fadeInUp">
                <div class="promo pt-5">
                  <div class="badge badge-secondary">Bộ ghế Sofa sang trọng</div>
                  <div class="h2 p-0 mt-1">Ghế Sofa</div>
                  <div class="price">
                    <span>19.999.999</span>
                    <span>39.999.999</span>
                  </div>
                  <span class="d-none d-sm-block">Sản phẩm nội thất cao cấp</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--Slide item-->

        <div class="item d-flex align-items-center" style="background-image:url('assets/images/custom/slider1.jpg')">
          <div class="container">
            <div class="caption">
              <div class="promo text-center">
                <div class="animated" data-start="fadeInUp">
                  <div class="title title-sm p-0 text-uppercase">Decor phòng ngủ</div>
                </div>
                <div class="animated text-slider" data-start="fadeInUp">
                  Hoàn thiện mái ấm
                </div>
                <div class="animated" data-start="fadeInUp">
                  <a href="#" target="_blank" class="btn btn-light">
                    Xem thêm
                    <i class="fa fa-long-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!--/owl-slider-->
      <!--/owl-slider-->
      <div class="category-icon text-center">
        <div class="owl-icons owl-carousel owl-theme" data-icons-sm="3" data-icons-md="4" data-icons-lg="8">

          <a href="#">
            <figure>
              <div class="image">
                <img src="assets/icons/icon-sofa.svg" alt="Alternate Text" />
              </div>
              <figcaption>Sofa</figcaption>
            </figure>
          </a>

          <a href="#">
            <figure>
              <div class="image">
                <img src="assets/icons/icon-armchair.svg" alt="Alternate Text" />
              </div>
              <figcaption>Ghế bành</figcaption>
            </figure>
          </a>

          <a href="#">
            <figure>
              <div class="image">
                <img src="assets/icons/icon-chair.svg" alt="Alternate Text" />
              </div>
              <figcaption>Ghế ngồi</figcaption>
            </figure>
          </a>

          <a href="#">
            <figure>
              <div class="image">
                <img src="assets/icons/icon-dining.svg" alt="Alternate Text" />
              </div>
              <figcaption>Bàn ăn</figcaption>
            </figure>
          </a>

          <a href="#">
            <figure>
              <div class="image">
                <img src="assets/icons/icon-mediacabinet.svg" alt="Alternate Text" />
              </div>
              <figcaption>Tủ tivi</figcaption>
            </figure>
          </a>

          <a href="#">
            <figure>
              <div class="image">
                <img src="assets/icons/icon-table.svg" alt="Alternate Text" />
              </div>
              <figcaption>Bàn</figcaption>
            </figure>
          </a>

          <a href="#">
            <figure>
              <div class="image">
                <img src="assets/icons/icon-bookcase.svg" alt="Alternate Text" />
              </div>
              <figcaption>Tủ sách</figcaption>
            </figure>
          </a>

          <a href="#">
            <figure>
              <div class="image">
                <img src="assets/icons/icon-bedroom.svg" alt="Alternate Text" />
              </div>
              <figcaption>Giường</figcaption>
            </figure>
          </a>

          <a href="#">
            <figure>
              <div class="image">
                <img src="assets/icons/icon-nightstand.svg" alt="Alternate Text" />
              </div>
              <figcaption>Tủ</figcaption>
            </figure>
          </a>

          <a href="#">
            <figure>
              <div class="image">
                <img src="assets/icons/icon-kidsroom.svg" alt="Alternate Text" />
              </div>
              <figcaption>Giường tầng</figcaption>
            </figure>
          </a>

          <a href="#">
            <figure>
              <div class="image">
                <img src="assets/icons/icon-kitchen.svg" alt="Alternate Text" />
              </div>
              <figcaption>Tủ bếp</figcaption>
            </figure>
          </a>

          <a href="#">
            <figure>
              <div class="image">
                <img src="assets/icons/icon-bathroom.svg" alt="Alternate Text" />
              </div>
              <figcaption>Cửa</figcaption>
            </figure>
          </a>

          <a href="#">
            <figure>
              <div class="image">
                <img src="assets/icons/icon-wardrobe.svg" alt="Alternate Text" />
              </div>
              <figcaption>Tủ quần áo</figcaption>
            </figure>
          </a>

          <a href="#">
            <figure>
              <div class="image">
                <img src="assets/icons/icon-shocabinet.svg" alt="Alternate Text" />
              </div>
              <figcaption>Tủ giày</figcaption>
            </figure>
          </a>

          <a href="#">
            <figure>
              <div class="image">
                <img src="assets/icons/icon-office.svg" alt="Alternate Text" />
              </div>
              <figcaption>Bàn làm việc</figcaption>
            </figure>
          </a>

          <a href="#">
            <figure>
              <div class="image">
                <img src="assets/icons/icon-barset.svg" alt="Alternate Text" />
              </div>
              <figcaption>Ghế bar</figcaption>
            </figure>
          </a>

          <a href="#">
            <figure>
              <div class="image">
                <img src="assets/icons/icon-light.svg" alt="Alternate Text" />
              </div>
              <figcaption>Đèn ngủ</figcaption>
            </figure>
          </a>

          <a href="#">
            <figure>
              <div class="image">
                <img src="assets/icons/icon-carpet.svg" alt="Alternate Text" />
              </div>
              <figcaption>Gối</figcaption>
            </figure>
          </a>

          <a href="#">
            <figure>
              <div class="image">
                <img src="assets/icons/icon-accessories.svg" alt="Alternate Text" />
              </div>
              <figcaption>Lọ hoa</figcaption>
            </figure>
          </a>

        </div>
      </div>
      <!--/owl-icons-->
    </div>
  </section>

  <!-- ========================  Featured categories ======================== -->

  <section class="blog blog-block pt-100">

    <!--Header-->

    <header>
      <div class="container">
        <h2 class="title text-uppercase">Phong cách</h2>
      </div>
    </header>

    <!--Content-->

    <div class="container">

      <div class="scroll-wrapper">

        <div class="row scroll text-center">

          <!--Item-->

          <div class="col-md-4">
            <article data-3d>
              <a href="#">
                <div class="image">
                  <img src="assets/images/custom/style1.jpg" alt="768 x 600" />
                </div>
                <div class="entry entry-block">
                  <div class="title">
                    <h2 class="h4 text-uppercase">Hiện đại</h2>
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

          <!--Item-->

          <div class="col-md-4">
            <article data-3d>
              <a href="#">
                <div class="image">
                  <img src="assets/images/custom/style2.jpg" alt="768 x 600" />
                </div>
                <div class="entry entry-block">
                  <div class="title">
                    <h2 class="h4 text-uppercase">Cổ điển</h2>
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

          <!--Item-->

          <div class="col-md-4">
            <article data-3d>
              <a href="#">
                <div class="image">
                  <img src="assets/images/custom/style3.jpg" alt="768 x 600" />
                </div>
                <div class="entry entry-block">
                  <div class="title">
                    <h2 class="h4 text-uppercase">Tân cổ điển</h2>
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

        </div>
        <!--/row-->
      </div>



    </div>
    <!--/container-->

  </section>

  <!-- ========================  Popular products  ======================== -->

  <section class="products">

    <!--Header-->

    <header>
      <div class="container">
        <h2 class="title text-uppercase">Loại sản phẩm</h2>
      </div>
    </header>

    <!--Content-->

    <div class="container">

      <div class="row">

        <!--Product item-->

        <div class="col-6 col-lg-4">
          <article>
            <div class="info">
              <span class="add-favorite">
                <a href="#" data-title="Thích" data-title-added="Đã thích">
                  <i class="icon icon-heart"></i>
                </a>
              </span>
              <span>
                <a href="#" class="mfp-open" data-title="Xem">
                  <i class="icon icon-eye"></i>
                </a>
              </span>
            </div>

            <div class="figure-grid">
              <div class="image">
                <a href="#">
                  <img src="assets/images/custom/product.jpg" alt="768 x 600" />
                </a>
              </div>
              <div class="text">
                <h2 class="title h4">
                  <a href="#">Giường ngủ</a>
                </h2>
              </div>
            </div>
          </article>
        </div>

        <!--Product item-->

        <div class="col-6 col-lg-4">
          <article>
            <div class="info">
              <span class="add-favorite">
                <a href="#" data-title="Thích" data-title-added="Đã thích">
                  <i class="icon icon-heart"></i>
                </a>
              </span>
              <span>
                <a href="#" class="mfp-open" data-title="Xem">
                  <i class="icon icon-eye"></i>
                </a>
              </span>
            </div>

            <div class="figure-grid">
              <span class="badge badge-warning">-20%</span>
              <div class="image">
                <a href="#">
                  <img src="assets/images/custom/product2.jpg" alt="768 x 600" />
                </a>
              </div>
              <div class="text">
                <h2 class="title h4">
                  <a href="#">Tủ tivi</a>
                </h2>
              </div>
            </div>
          </article>
        </div>

        <!--Product item-->

        <div class="col-6 col-lg-4">
          <article>
            <div class="info">
              <span class="add-favorite">
                <a href="#" data-title="Thích" data-title-added="Đã thích">
                  <i class="icon icon-heart"></i>
                </a>
              </span>
              <span>
                <a href="#" class="mfp-open" data-title="Xem">
                  <i class="icon icon-eye"></i>
                </a>
              </span>
            </div>

            <div class="figure-grid">
              <span class="badge badge-info">Mới</span>
              <div class="image">
                <a href="#">
                  <img src="assets/images/custom/product3.jpg" alt="768 x 600" />
                </a>
              </div>
              <div class="text">
                <h2 class="title h4">
                  <a href="#">Đèn chùm</a>
                </h2>
              </div>
            </div>
          </article>
        </div>

        <!--Product item-->

        <div class="col-6 col-lg-4">
          <article>
            <div class="info">
              <span class="add-favorite added">
                <a href="#" data-title="Thích" data-title-added="Đã thích">
                  <i class="icon icon-heart"></i>
                </a>
              </span>
              <span>
                <a href="#" class="mfp-open" data-title="Xem">
                  <i class="icon icon-eye"></i>
                </a>
              </span>
            </div>

            <div class="figure-grid">
              <div class="image">
                <a href="#">
                  <img src="assets/images/custom/product4.jpg" alt="768 x 600" />
                </a>
              </div>
              <div class="text">
                <h2 class="title h4">
                  <a href="#">Thảm</a>
                </h2>
              </div>
            </div>
          </article>
        </div>

        <!--Product item-->

        <div class="col-6 col-lg-4">
          <article>
            <div class="info">
              <span class="add-favorite">
                <a href="#" data-title="Thích" data-title-added="Đã thích">
                  <i class="icon icon-heart"></i>
                </a>
              </span>
              <span>
                <a href="#" class="mfp-open" data-title="Xem">
                  <i class="icon icon-eye"></i>
                </a>
              </span>
            </div>

            <div class="figure-grid">
              <div class="image">
                <a href="#">
                  <img src="assets/images/custom/product5.jpg" alt="768 x 600" />
                </a>
              </div>
              <div class="text">
                <h2 class="title h4">
                  <a href="#">Ghế Sofa</a>
                </h2>
              </div>
            </div>
          </article>
        </div>

        <!--Product item-->

        <div class="col-6 col-lg-4">
          <article>
            <div class="info">
              <span class="add-favorite">
                <a href="#" data-title="Thích" data-title-added="Đã thích">
                  <i class="icon icon-heart"></i>
                </a>
              </span>
              <span>
                <a href="#" class="mfp-open" data-title="Xem">
                  <i class="icon icon-eye"></i>
                </a>
              </span>
            </div>

            <div class="figure-grid">
              <div class="image">
                <a href="#">
                  <img src="assets/images/custom/product6.jpg" alt="768 x 600" />
                </a>
              </div>
              <div class="text">
                <h2 class="title h4">
                  <a href="#">Bàn bartender</a>
                </h2>
              </div>
            </div>
          </article>
        </div>

      </div>
      <!--/row-->

    </div>

  </section>


  <!-- ========================  showroom ======================== -->

  <section class="cards">

    <!--Header-->

    <header>
      <div class="container">
        <h2 class="title text-uppercase">Showroom</h2>
      </div>
    </header>

    <!--Content-->

    <div class="container-fluid">

      <div class="row">

        <!--Item-->

        <div class="col-lg-8">
          <figure>
            <figcaption style="background-image:url('assets/images/custom/box-1.jpg')">
              <img src="assets/images/box-1.jpg" alt="1132 x 600" />
            </figcaption>
            <a href="#" class="btn btn-clean">
              Xem thêm
              <i class="fa fa-long-arrow-right"></i>
            </a>
          </figure>
        </div>

        <!--Item-->

        <div class="col-lg-4">
          <figure>
            <figcaption style="background-image:url('assets/images/custom/box-2.jpg')">
              <img src="assets/images/box-2.jpg" alt="768 x 600" />
            </figcaption>
            <a href="#" class="btn btn-clean">
              Xem thêm
              <i class="fa fa-long-arrow-right"></i>
            </a>
          </figure>
        </div>

        <!--Item-->

        <div class="col-lg-4">
          <figure>
            <figcaption style="background-image:url('assets/images/custom/box-3.jpg')">
              <img src="assets/images/box-3.jpg" alt="768 x 600" />
            </figcaption>
            <a href="#" class="btn btn-clean">
              Xem thêm
              <i class="fa fa-long-arrow-right"></i>
            </a>
          </figure>
        </div>

        <!--Item-->

        <div class="col-lg-4">
          <figure>
            <figcaption style="background-image:url('assets/images/custom/box-4.jpg')">
              <img src="assets/images/box-4.jpg" alt="768 x 600" />
            </figcaption>
            <a href="#" class="btn btn-clean">
              Xem thêm
              <i class="fa fa-long-arrow-right"></i>
            </a>
          </figure>
        </div>

        <!--Item-->

        <div class="col-lg-4">
          <figure>
            <figcaption style="background-image:url('assets/images/custom/box-5.jpg')">
              <img src="assets/images/box-5.jpg" alt="768 x 600" />
            </figcaption>
            <a href="#" class="btn btn-clean">
              Xem thêm
              <i class="fa fa-long-arrow-right"></i>
            </a>
          </figure>
        </div>


      </div>
      <!--/row-->

    </div>
    <!--/container-fluid-->

  </section>


  <!-- ========================  decor  ======================== -->

  <?php print views_embed_view('products_front', 'block_san_pham_hien_dai_front') ?>
  <?php print views_embed_view('products_front', 'block_san_pham_tan_co_dien_front') ?>
  <?php print views_embed_view('products_front', 'block_san_pham_co_dien_front') ?>
  <!-- ========================  Tư vấn ======================== -->

  <section class="banner">

    <div class="container-fluid">

      <div class="banner-image">
        <!--Header-->

        <header>
          <div class="container">
            <h2 class="h2 title text-uppercase">Để lại thông tin tư vấn</h2>
          </div>
        </header>

        <!--Content-->
        <div class="banner-overplay"></div>

        <div class="container">
          <?php
          $node = node_load(827);
          webform_node_view($node, 'full');
          print theme_webform_view($node->content);
          ?>
        </div>
      </div>

    </div>
    <!--/container-fluid-->

  </section>

  <!-- ========================  news ======================== -->

  <section class="blog blog-widget blog-animated">

    <!--Header-->

    <header>
      <div class="container">
        <h2 class="h2 title text-uppercase">Tin tức</h2>
      </div>
    </header>

    <!--Content-->

    <div class="container">

      <div class="row">
        <?php $news = load_node_by_categories(442, 'field_chuyen_muc_bai_viet', 3) ?>
        <!--Blog item-->
        <?php foreach ($news as $item) : ?>
          <?php
          $image_avatar = theme_image_style([
            'style_name' => '760_x_600',
            'path' => $item->field_image['vi'][0]['uri'],
            'alt' => $item->field_image['vi'][0]['alt'],
            'title' => $item->field_image['vi'][0]['alt'],
            'attributes' => array('class' => 'img-fluid'),
            'width' => '760px',
            'height' => '600px',
          ]);
          $path = drupal_get_path_alias('node/' . $item->nid);
          $day = date('d', $item->created);
          $month = date('n', $item->created);
          $year = date('Y', $item->created);
          ?>
          <div class="col-md-12 col-lg-4">
            <article>
              <a href="<?= $path ?>" class="blog-link">
                <div class="image">
                  <?= $image_avatar ?>
                </div>
                <div class="entry entry-table">
                  <div class="date-wrapper">
                    <div class="date">
                      <span>T<?= $month ?></span>
                      <strong><?= $day ?></strong>
                      <span><?= $year ?></span>
                    </div>
                  </div>
                  <div class="title">
                    <h2 class="h5"><a href="<?= $path ?>"><?= $item->title ?></a></h2>
                  </div>
                </div>
                <div class="text-blogs">
                  <?php if (!empty($item->body)) : ?>
                    <div class="line-clamp-3"><?= $item->body['und'][0]['summary'] ?></div>
                  <?php endif ?>
                  <span>Xem thêm <i class="fa fa-long-arrow-right"></i></span>
                </div>
              </a>
            </article>
          </div>
        <?php endforeach ?>
      </div>
      <!--/row-->

    </div>
    <!--/container-->

  </section>


  <!-- ========================  footer ======================== -->
  <footer>

    <div class="container-fluid">

      <div class="footer-wrap">

        <div class="container">
          <?php $logo_footer = node_load(971) ?>
          <?php
          if (!empty($logo_footer)) {
            print $logo_footer->field_noi_dung['und'][0]['value'];
          }
          ?>
          <div class="footer-links">
            <div class="row">
              <div class="col-md-3 col-4">
                <?php
                print getMenuFooter('Liên kết');
                ?>
              </div>
              <div class="col-md-3 col-4">
                <?php
                print views_embed_view('phong_cach','block_1');
                ?>
              </div>
              <div class="col-md-3 col-4">
                <?php
                print views_embed_view('phong_cach','block');
                ?>
              </div>

              <div class="col-md-3 col-12">
                <h5>Nhận ưu đãi</h5>
                <p><i>Thêm email của bạn để nhận được ưu đãi hàng tháng.</i></p>
                <div class="form-group form-newsletter">
                  <?php
                  $node = node_load(655);
                  webform_node_view($node, 'full');
                  print theme_webform_view($node->content);
                  ?>
                </div>
                <?php $social_media_footer = node_load(979) ?>
                <?php
                if (!empty($social_media_footer)) {
                  print $social_media_footer->field_noi_dung['und'][0]['value'];
                }
                ?>
                <div>

                </div>
              </div>
            </div>
          </div>


          <div class="footer-social">
            <div class="row">
              <div class="col-sm-12 text-center">
                <a href="/" >© <?= date('Y') ?> Fatto Việt Nam</a>
                &nbsp; | &nbsp; <a href="//minhhien.com.vn" target="_blank" rel="noopener" >Minhhien Solutions</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </footer>

</div>
