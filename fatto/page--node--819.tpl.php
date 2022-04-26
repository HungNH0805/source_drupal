<div class="wrapper">

  <!-- ======================== Navigation ======================== -->

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

  <!-- ========================  Blog ======================== -->

  <section class="blog blog-category blog-animated pt-100">

    <!--Header-->

    <header>
      <div class="container">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
          <li class="breadcrumb-item " aria-current="page"><?= $title ?></li>
        </ol>
        <h1 class="title"><?= $title ?></h1>
      </div>
    </header>

    <!--Content-->

    <section class="contact">


      <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59658.0439491774!2d106.6637272416725!3d20.84673329079707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7af39e3f1ad3%3A0xa5ffc85ff87a07e8!2zSOG6o2kgUGjDsm5nLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1648092113211!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>

      <div class="container">

        <div class="row">

          <div class="col-md-10 offset-md-1">

            <div class="contact-block">

              <div class="contact-info">
                <div class="row">
                  <div class="col-md-6 col-12">
                    <div class="text-center border_new d-flex align-items-center">
                      <div class="block_before_contact">
                        <span class="icon icon-map-marker"></span>
                        <strong>Địa chỉ</strong>
                      </div>
                      <div class="d-flex flex-column">
                        <strong class="text-justify"><a href="#">HA 3.03 - 3.04 Vinhome Marina Cầu Rào 2, Vĩnh Niệm, Lê Chân, Hải Phòng</a></strong>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="text-center border_new d-flex align-items-center">
                      <div class="block_before_contact">
                        <span class="icon icon-phone"></span>
                        <strong>Hotline/Zalo</strong>
                      </div>
                      <div class="d-flex flex-column">
                        <strong>
                          <a href="tel:0968495199">0968495199</a>
                        </strong>
                        <strong>
                          <a href="tel:0398743247">0398743247</a>
                        </strong>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="text-center border_new d-flex align-items-center">
                      <div class="block_before_contact">
                        <span class="icon icon-envelope"></span>
                        <strong>Email</strong>
                      </div>
                      <div class="d-flex flex-column">
                        <strong><a href="mailto:fattovietnam@gmail.com">fattovietnam<br>@gmail.com</a></strong>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="text-center border_new d-flex align-items-center">
                      <div class="block_before_contact">
                        <div class="text-center">
                          <img src="/sites/default/files/icon-fb.svg" alt="icon_face">
                        </div>
                        <strong>Fanpage</strong>
                      </div>
                      <div class="d-flex flex-column">
                        <strong><a href="https://www.facebook.com/fatto.vn" target="_blank">Fatto Furniture</a></strong>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="contact-info">
                <h2 class="title">Để lại thông tin</h2>
                <div class="contact-form-wrapper">

                  <div class="contact-form clearfix">
                    <?php
                    $node = node_load(40);
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
    </section>
  </section>


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
