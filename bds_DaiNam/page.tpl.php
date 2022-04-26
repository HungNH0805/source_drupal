<div class="sticky-header">
  <div class="wrapper" id="wrapper">
    <!--=====================================-->
    <!--=   Header     Start                =-->
    <!--=====================================-->

    <header class="rt-header sticky-on">
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
    <!--=====================================-->
    <!--=   Breadcrumb     Start            =-->
    <!--=====================================-->

    <div class="breadcrumb-wrap breadcrumb-wrap-2">
      <div class="container">
        <?php print render($title_prefix); ?>
        <?php if ($title) : ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php print render($title_suffix); ?>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
          </ol>
        </nav>
      </div>
    </div>
    <!--=====================================-->
    <!--=   Grid     Start                  =-->
    <!--=====================================-->

    <section class="grid-wrap3">
      <div class="container">
        <?php print $messages?>
        <div class="row gutters-40">
          <?php
          $cls = 12;
          if ($page['sidebar_first']) {
            $cls = 8;
          }
          ?>

          <div class="col-lg-<?= $cls ?>">
            <?php if ($tabs) : ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links) : ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
            <?php print render($page['content']); ?>
          </div>
          <?php if ($page['sidebar_first']) : ?>
            <div class="col-lg-4 widget-break-lg sidebar-widget">
              <?php print str_replace('<p>{{}}</p>', '<div class="widget widget-search-box mb-30">
                            <h3 class="widget-subtitle">Tìm kiếm</h3>
                            <div class="widget-form-box">
                                <input class="form-control" type="text" placeholder="Tìm kiếm">
                                <div class="item-search"><i class="fas fa-search"></i></div>
                            </div>
                        </div>', render( $page['sidebar_first'])) ?>
            </div>
          <?php endif ?>
        </div>
      </div>
    </section>
    <!--=====================================-->
    <!--=   Newsletter     Start            =-->
    <!--=====================================-->



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
    <a href="javascript:void(0)" id="back-to-top">
      <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- End back to top -->

  </div>
</div>
