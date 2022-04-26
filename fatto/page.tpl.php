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

    <div class="container">
      <div class="row">
        <?php $cls = 12 ?>
        <?php if ($page['sidebar_right']) : ?>
        <?php if(isset($node->nid) && ($node->nid=='1272')):?>
            <?php $cls = 12 ?>
          <?php else:?>
            <?php $cls = 8 ?>
          <?php endif;?>
        <?php endif; ?>
        <div class="col-lg-<?= $cls ?>">
          <?php print $messages ?>
          <?php if ($tabs) : ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links) : ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
          <?php print render($page['content']); ?>
        </div>
        <?php if ($page['sidebar_right'] && ($cls!=12)) : ?>
          <div class="col-lg-4">
            <aside>
              <?php print str_replace('<p>{{}}</p>', form_tim_kiem(), render($page['sidebar_right'])) ?>
            </aside>
          </div>
        <?php endif ?>
      </div>
    </div>
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
