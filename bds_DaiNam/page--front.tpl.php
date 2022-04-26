  <div class="wrapper" id="wrapper">
    <header class="header ">
      <div id="rt-sticky-placeholder"></div>
      <div id="header-menu" class="header-menu menu-layout1">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-xl-1 col-lg-1">
              <div class="logo-area">
                <?php if ($logo) : ?>
                  <a href="<?php print $front_page; ?>" title="<?php print t('Bất động sản Đại Nam'); ?>" rel="home" id="logo" class="temp-logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="img-fluid" />
                  </a>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-xl-9 col-lg-9 d-flex justify-content-center position-static">
              <nav id="dropdown" class="template-main-menu">
                <?= getMainMenuBDSDaiNam() ?>
              </nav>
            </div>
            <div class="col-xl-2 col-lg-2 d-flex justify-content-end">
              <div class="header-action-layout1">
                <ul class="action-list">
                  <li class="action-item-style left-right-btn">
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li class="action-item-style left-right-btn">
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom">
                      <i class="fas fa-envelope    "></i>
                    </a>
                  </li>
                  <li class="action-item-style left-right-btn">
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom">
                      <i class="fas fa-phone    "></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="rt-header-menu mean-container position-relative" id="meanmenu">
      <div class="mean-bar">
        <?php if ($logo) : ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Bất động sản Đại Nam'); ?>" rel="home" id="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="img-fluid" />
          </a>
        <?php endif; ?>
        <div class="mean-bar--right">
          <span class="sidebarBtn">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </span>
        </div>
      </div>
      <div class="rt-slide-nav">
        <div class="offscreen-navigation">
          <nav class="menu-main-primary-container">
            <?= getMainMenuBDSDaiNamSide() ?>
          </nav>
        </div>
      </div>
    </div>
    <?php
    print $messages;
    $sliders = node_load_multiple(array(), array('type' => 'slider'));
    ?>
    <section class="main-slider">
      <div class="testimonial-layout3 swiper-container">
        <div class="swiper-wrapper">
          <?php foreach ($sliders as $id => $item) : ?>
            <?php
            $image_avatar = theme_image_style([
              'style_name' => '1920_x_800',
              'path' => $item->field_image['und'][0]['uri'],
              'alt' => $item->field_image['und'][0]['alt'],
              'title' => $item->field_image['und'][0]['alt'],
              'attributes' => array('class' => 'img-fluid'),
              'width' => '1920px',
              'height' => '800px',
            ])
            ?>
            <div class="swiper-slide">
              <?= $image_avatar ?>
            </div>
          <?php endforeach; ?>
        </div>
        <!-- navigation buttons -->
        <div class="swiper-button-prev testimonial-btn"></div>
        <div class="swiper-button-next testimonial-btn"></div>
      </div>
      <div class="main-banner-wrap1 main-banner-wrap1-info">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="main-banner-box1">
                <?php $last_item = end($sliders) ?>
                <h1 class="item-title wow fadeInUp text-uppercase" data-wow-delay=".4s"><?= $last_item->field_caption['und'][0]['value'] ?></h1>
                <div class="banner-search-wrap">

                  <p class="item-para wow fadeInUp" data-wow-delay=".4s">
                    <?= $last_item->field_mo_ta_slider['und'][0]['value'] ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php $sell_categories = taxonomy_term_load_multiple(array(4, 5, 6, 7, 18));
    ?>

    <section class="brand-wrap1">
      <div class="container">
        <div class="feature-layout-style-1 swiper-container">
          <div class="swiper-wrapper">
            <?php foreach ($sell_categories as $item) : ?>
              <?php
              $image = theme_image([
                'path' => file_create_url($item->field_image['und'][0]['uri']),
                'alt' => $item->field_image['und'][0]['alt'],
                'title' => $item->field_image['und'][0]['title'],
                'width' => '78px',
                'height' => '70px',
                'attributes' => array(),
              ]);
              $taxonomy_path = taxonomy_term_uri($item);
              ?>
              <div class="swiper-slide">
                <div class="feature-box4 wow fadeInUp" data-wow-delay=".2s">
                  <div class="item-img">
                    <a class="text-uppercase" href="<?= drupal_get_path_alias($taxonomy_path['path']) ?>"> <?= $image ?>
                    </a>

                  </div>
                  <div class="item-content">
                    <h3 class="item-title">
                      <a class="text-uppercase" href="<?= drupal_get_path_alias($taxonomy_path['path']) ?>"><?= $item->name ?></a>
                    </h3>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <?php $services = node_load(18);
        if (!empty($services->field_mo_ta_slider)) {
          print $services->field_mo_ta_slider['und'][0]['value'];
        }
        ?>
      </div>
    </section>
    <?php
    $products = array_reverse(node_load_multiple(array(), array('type' => 'san_pham')));
    ?>
    <section class="property-wrap1">
      <div class="container">
        <div class="isotope-wrap">
          <div class="row">
            <div class="col-lg-6 col-md-5 col-sm-12">
              <div class="item-heading-left">
                <span class="section-subtitle">Đại Nam Group</span>
                <h2 class="section-title text-uppercase">Bất động sản</h2>
                <div class="bg-title-wrap" style="display: block;">
                  <span class="background-title solid">Đại Nam Group</span>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-7 col-sm-12">
              <div class="isotope-classes-tab">
                <a class="current nav-item" data-filter="*">Tất cả</a>
                <a class="nav-item" data-filter=".for-sell">Bán</a>
                <a class="nav-item" data-filter=".for-rent">Thuê</a>
              </div>
            </div>
          </div>
          <div class="row featuredContainer">
            <?php foreach ($products as $item) : ?>
              <?php
              $taxonomy = taxonomy_term_load($item->field_loai_san_pham['und'][1]['tid']);
              $path_taxonomy = drupal_get_path_alias('taxonomy/term/' . $taxonomy->tid);
              $categories = explode(' ', $taxonomy->name);
              $business_categories = array_shift($categories);
              if ($business_categories == 'Bán') {
                $cls_block = 'for-sell';
              } else {
                $cls_block = 'for-rent';
              }
              $product_category = implode(' ', $categories);
              $image_avatar = theme_image_style([
                'style_name' => '967_x_645',
                'path' => $item->field_image['und'][0]['uri'],
                'alt' => $item->field_image['und'][0]['alt'],
                'title' => $item->field_image['und'][0]['alt'],
                'attributes' => array('class' => 'img-fluid'),
                'width' => '967px',
                'height' => '645px',
              ]);
              $path = drupal_get_path_alias('node/' . $item->nid);
              ?>
              <div class="col-xl-4 col-lg-6 col-md-6 <?= $cls_block ?>">
                <div class="property-box2 wow animated fadeInUp" data-wow-delay=".3s">
                  <div class="item-img">
                    <a href="<?= $path ?>"><?= $image_avatar ?></a>
                    <div class="item-category-box1">
                      <div class="item-category"><?= $business_categories ?></div>
                    </div>
                  </div>
                  <div class="item-category10"><a href="<?= $path_taxonomy ?>"><?= ucfirst($product_category) ?></a></div>
                  <div class="item-content">
                    <div class="verified-area">
                      <h3 class="item-title"><a href="<?= $path ?>"><?= $item->title ?></a></h3>
                    </div>
                    <?php
                    $price = '';
                    if (!empty($item->field_gia_bang_chu)) : ?>
                      <?php
                      $price = $item->field_gia_bang_chu['und'][0]['value'];
                      ?>
                    <?php endif; ?>
                    <div class="item-price"><?= $price ?></div>
                    <?php $khu_vuc = '' ?>
                    <?php if (!empty($item->field_khu_vuc)) : ?>
                      <?php $khu_vuc = taxonomy_term_load($item->field_khu_vuc['und'][0]['tid']) ?>
                    <?php endif ?>
                    <div class="item-categoery3">
                      <?php
                      $square = '';
                      if (!empty($item->field_dien_tich)) : ?>
                        <?php
                        $square = $item->field_dien_tich['und'][0]['value'];
                        ?>
                      <?php endif; ?>
                      <?php
                      $beds = '';
                      if (!empty($item->field_phong)) : ?>
                        <?php
                        $beds = $item->field_phong['und'][0]['value'];
                        ?>
                      <?php endif; ?>

                      <ul>
                        <li><i class="flaticon-maps-and-flags"></i> KV: <?= $khu_vuc->name ?></li>
                        <li><i class="fas fa-bed"></i>PN: <?= $beds ?></li>
                        <li><i class="fas fa-expand"></i> <?= substr($square, 0, -3) ?> m<sup>2</sup></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach ?>


          </div>
        </div>
      </div>
    </section>
    <?php $about_us = node_load(23);
    if (!empty($about_us->field_mo_ta_slider)) {
      print $about_us->field_mo_ta_slider['und'][0]['value'];
    }
    ?>

    <?php
    $projects = array_reverse(node_load_multiple(array(), array('type' => 'du_an')));

    ?>
    <section class="location-wrap1">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-7 col-sm-12">
            <div class="item-heading-left">
              <span class="section-subtitle">Đại Nam Group</span>
              <h2 class="section-title text-uppercase">Dự án nổi bật</h2>
              <div class="bg-title-wrap" style="display: block;">
                <span class="background-title solid">BĐS Đại Nam</span>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-5 col-sm-12">
            <div class="heading-button">
              <a href="#" class="heading-btn item-btn-2">
                Xem thêm
                <i class="fa fa-long-arrow-alt-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="row">
          <?php foreach ($projects as $item) : ?>
            <?php
            $image_avatar = theme_image_style([
              'style_name' => '960_x_1200',
              'path' => $item->field_image['und'][0]['uri'],
              'alt' => $item->field_image['und'][0]['alt'],
              'title' => $item->field_image['und'][0]['alt'],
              'attributes' => array('class' => 'img-fluid'),
              'width' => '960px',
              'height' => '1200px',
            ]);
            $path = drupal_get_path_alias('node/' . $item->nid);
            ?>
            <div class="col-xl-3 col-lg-6 col-md-6">
              <div class="location-box1 wow zoomIn" data-wow-delay=".2s">
                <div class="item-img">
                  <a href="<?= $path ?>"><?= $image_avatar ?></a>
                </div>
                <div class="item-content">
                  <div class="content-body">
                    <div class="item-category">Đại Nam Group</div>
                    <div class="item-title">
                      <h3><a class="text-capitalize" href="<?= $path ?>"><?= $item->title ?></a></h3>
                    </div>
                  </div>
                  <div class="location-button">
                    <a href="<?= $path ?>" class="location-btn"><i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

        </div>
      </div>
    </section>

    <?php $legal = node_load(36);
    if (!empty($legal->field_mo_ta_slider)) {
      print $legal->field_mo_ta_slider['und'][0]['value'];
    }
    ?>

    <section class="action-wrap1 wow zoomIn" data-wow-delay=".2s">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="action-box1" data-bg-image="/sites/all/themes/bds_DaiNam/assets/img/custom/action1.jpg">
              <div class="action-layout">
                <div class="item-title">
                  <div class="item-icon">
                    <span><i class="fas fa-question-circle"></i></span>
                    <h3 class="text-uppercase">Để lại thông tin tư vấn</h3>
                  </div>
                  <div class="item-head">
                    <div class="call-button">
                      <?php
                      $node = node_load(35);
                      webform_node_view($node, 'full');
                      print theme_webform_view($node->content);
                      ?>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
    $News = load_node_by_categories(8, 3);
    ?>
    <section class="blog-wrap1">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-6 col-sm-8">
            <div class="item-heading-left">
              <span class="section-subtitle">BĐS Đại Nam</span>
              <h2 class="section-title text-uppercase">Tin tức</h2>
              <div class="bg-title-wrap" style="display: block;">
                <span class="background-title solid">BĐS Đại Nam</span>
              </div>

            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-4">
            <div class="heading-button">
              <a href="#" class="heading-btn">
                Xem thêm
                <i class="fa fa-long-arrow-alt-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <?php foreach ($News as $item) : ?>
            <?php
            $image_avatar = theme_image_style([
              'style_name' => '740_x_500',
              'path' => $item->field_image['und'][0]['uri'],
              'alt' => $item->field_image['und'][0]['alt'],
              'title' => $item->field_image['und'][0]['alt'],
              'attributes' => array('class' => 'img-fluid'),
              'width' => '740px',
              'height' => '500px',
            ]);
            $path = drupal_get_path_alias('node/' . $item->nid);
            $date = date('d/m/Y', $item->created);
            ?>
            <div class="col-lg-4 col-md-6">
              <div class="blog-box1 wow fadeInUp" data-wow-delay=".4s">
                <div class="item-img">
                  <a href="<?= $path ?>"><?= $image_avatar ?></a>
                </div>
                <div class="item-content">
                  <div class="entry-meta">
                    <ul>
                      <li><a href="#"><i class="fas fa-calendar-alt"></i> <?= $date ?></a></li>
                    </ul>
                  </div>
                  <div class="heading-title">
                    <h3><a href="<?= $path ?>"><?= $item->title ?></a></h3>
                    <div class="line-clamp-4"><?= $item->body['und'][0]['value'] ?></div>
                  </div>
                  <div class="blog-button">
                    <a href="<?= $path ?>" class="item-btn">Xem thêm<i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

        </div>
      </div>
    </section>
    <section class="banner-collection1 motion-effects-wrap" data-wow-delay=".2s">
      <div class="shape-img1">
        <img src="/sites/all/themes/bds_DaiNam/assets/img/svg/video-bg-2.svg" alt="figure" height="149" width="230">
      </div>
      <div class="shape-img2">
        <img src="/sites/all/themes/bds_DaiNam/assets/img/svg/video-bg-2.svg" alt="figure" height="149" width="230">
      </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8 col-md-7">
            <div class="banner-box1">
              <div class="item-img">
                <img src="/sites/all/themes/bds_DaiNam/assets/img/banner/banner1.png" alt="banner" height="252" width="169" class="img-bg-space">
                <div class="motion-effects3"><img src="/sites/all/themes/bds_DaiNam/assets/img/custom/shape3.png" alt="shape" height="113" width="113"></div>
                <div class="motion-effects4"><img src="/sites/all/themes/bds_DaiNam/assets/img/custom/shape4.png" alt="shape" height="157" width="154"></div>
                <div class="motion-effects5"><img src="/sites/all/themes/bds_DaiNam/assets/img/custom/shape5.png" alt="shape" height="91" width="102"></div>
              </div>
              <div class="item-content">
                <h2 class="heading-title text-uppercase">Bất động sản Đại Nam</h2>
                <p>Chúng tôi giúp bạn những bất động nhất tốt nhất cho sự đầu tư của mình</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-5">
            <div class="banner-button">
              <a href="#" class="banner-btn">Xem thêm</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer-area">
      <div class="footer-top footer-top-style">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
              <?php $footer_col_1 = node_load(38);
              if (!empty($footer_col_1->field_mo_ta_slider)) {
                print $footer_col_1->field_mo_ta_slider['und'][0]['value'];
              }
              ?>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
              <?php $footer_col_2 = node_load(39);
              if (!empty($footer_col_2->field_mo_ta_slider)) {
                print $footer_col_2->field_mo_ta_slider['und'][0]['value'];
              }
              ?>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
              <?php $footer_col_3 = node_load(40);
              if (!empty($footer_col_3->field_mo_ta_slider)) {
                print $footer_col_3->field_mo_ta_slider['und'][0]['value'];
              }
              ?>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
              <?php $footer_col_4 = node_load(41);
              if (!empty($footer_col_4->field_mo_ta_slider)) {
                print $footer_col_4->field_mo_ta_slider['und'][0]['value'];
              }
              ?>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
              <?php $footer_col_5 = node_load(42);
              if (!empty($footer_col_5->field_mo_ta_slider)) {
                print $footer_col_5->field_mo_ta_slider['und'][0]['value'];
              }
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom footer-bottom-style-2">
        <div class="container">
          <div class="copyright-area1">
            <ul>
              <li>
                <p class="text-white mb-0"><a href="#">©<?= date('Y') ?> Đại Nam Group</a> thiết kế bởi <a href="//minhhien.com.vn" target="_blank">Minhhien Solutions</a></p>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </footer>

    <!-- start back to top -->
    <a href="#" id="back-to-top">
      <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- End back to top -->
  </div>
