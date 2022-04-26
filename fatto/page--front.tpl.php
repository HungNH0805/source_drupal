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

  <?php /** @var string $messages */
    print $messages ?>
  <div class="hero-area hero-bg" id="hero-home-7">
    <div id="bgndVideo7" data-property="{videoURL:'https://www.youtube.com/watch?v=pb--8tOKKrI',containment:'#hero-home-7', quality:'large', autoPlay:true, loop:true, mute:true, opacity:1, showControls:false, showAnnotations:false}"></div>
  </div>
  <?php if ($page['main-content-front']) {
        print render($page['main-content-front']);
  } ?>

  <?php if ($page['html-main-content-front']) {
        print html_entity_decode(render($page['html-main-content-front']));
  } ?>


  <section class="banner">

    <div class="container-fluid">

      <div class="banner-image">

        <header>
          <div class="container">
            <h2 class="h2 title text-uppercase">Để lại thông tin tư vấn</h2>
          </div>
        </header>

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

  </section>


  <section class="blog blog-widget blog-animated">


    <header>
      <div class="container">
        <h2 class="h2 title text-uppercase">Tin tức</h2>
      </div>
    </header>


    <div class="container">

      <div class="row">
        <?php $news = load_node_by_categories(442, 'field_chuyen_muc_bai_viet', 3) ?>
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
                    <h3 class="h5"><a href="<?= $path ?>"><?= $item->title ?></a></h3>
                  </div>
                </div>
                <div class="text-blogs">
                  <?php if (!empty($item->body)) : ?>
                    <div class="line-clamp-3"><?= $item->body['und'][0]['summary'] ?></div>
                  <?php endif ?>
                  <span><a href="<?= $path ?>">Xem thêm <i class="fa fa-long-arrow-right"></i></a></span>
                </div>
              </a>
            </article>
          </div>
        <?php endforeach ?>
      </div>

    </div>
  </section>
  <?php print views_embed_view('demo_content_slideshow','block_doi_tac');?>
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
