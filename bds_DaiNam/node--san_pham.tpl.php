<?php


?>
<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<section class="single-listing-wrap1">
  <div class="single-property">
    <div class="content-wrapper">
      <div class="property-heading">

        <div class="single-verified-area">
          <div class="item-title">
            <h3>
              <?= $node->title ?>
            </h3>
          </div>
        </div>
        <div class="single-list-price"><?= $node->field_gia_bang_chu['und'][0]['value'] ?></div>
        <div class="single-item-address">
          <ul>
            <li>
              <i class="fas fa-map-marker-alt"></i><?php print $node->field_dia_chi['und'][0]['value'] ?>
            </li>
          </ul>
        </div>
      </div>


      <?php if (!empty($node->field_images)) : ?>
        <?php array_unshift($node->field_images['und'], $node->field_image['und'][0]) ?>
        <div class="featured-thumb-slider-area wow fadeInUp" data-wow-delay=".4s">
          <div class="feature-box3 swiper-container">
            <div class="swiper-wrapper">
              <?php foreach ($node->field_images['und'] as $item) : ?>
                <?php $image = theme_image_style([
                  'style_name' => '1170_x_630',
                  'path' => $item['uri'],
                  'alt' => $item['alt'],
                  'title' => $item['alt'],
                  'attributes' => array('class' => 'img-fluid'),
                  'width' => '1170px',
                  'height' => '630px',
                ]) ?>
                <div class="swiper-slide">
                  <div class="feature-img1 zoom-image-hover">
                    <?= $image ?>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="featured-thum-slider2 swiper-container">
            <div class="swiper-wrapper">
              <?php foreach ($node->field_images['und'] as $item) : ?>
                <?php $image = theme_image_style([
                  'style_name' => '1170_x_630',
                  'path' => $item['uri'],
                  'alt' => $item['alt'],
                  'title' => $item['alt'],
                  'attributes' => array('class' => 'img-fluid'),
                  'width' => '1170px',
                  'height' => '630px',
                ]) ?>
                <div class="swiper-slide">
                  <div class="item-img">
                    <?= $image ?>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      <?php else : ?>
        <div class="featured-thumb-slider-area wow fadeInUp" data-wow-delay=".4s">
          <div class="feature-box3-1 swiper-container">
            <div class="swiper-wrapper">
              <?php $image = theme_image_style([
                'style_name' => '1170_x_630',
                'path' => $node->field_image['und'][0]['uri'],
                'alt' => $node->field_image['und'][0]['alt'],
                'title' => $node->field_image['und'][0]['title'],
                'attributes' => array('class' => 'img-fluid'),
                'width' => '1170px',
                'height' => '630px',
              ]) ?>
              <div class="swiper-slide">
                <div class="feature-img1 zoom-image-hover">
                  <?= $image ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif ?>
      <div class="single-listing-box1">
        <div class="overview-area">
          <h3 class="item-title">Tổng quan</h3>
          <div class="gallery-icon-box">
            <div class="item-icon-box">
              <div class="item-icon">
                <i class="flaticon-home"></i>
              </div>
              <ul class="item-number">
                <li>ID BDS :</li>
                <li class="deep-clr">ĐN - 0<?= $node->nid ?></li>
              </ul>
            </div>

            <div class="item-icon-box">
              <div class="item-icon">
                <i class="flaticon-bed"></i>
              </div>
              <ul class="item-number">
                <li>Phòng ngủ :</li>
                <li class="deep-clr"><?= $node->field_phong['und'][0]['value'] ?></li>
              </ul>
            </div>
            <div class="item-icon-box">
              <div class="item-icon">
                <i class="flaticon-shower"></i>
              </div>
              <ul class="item-number">
                <li>Phòng tắm :</li>
                <li class="deep-clr"><?= $node->field_so_phong_tam['und'][0]['value'] ?></li>
              </ul>
            </div>
            <div class="item-icon-box">
              <div class="item-icon">
                <i class="flaticon-home"></i>
              </div>
              <ul class="item-number">
                <li>Diện tích :</li>
                <li class="deep-clr"><?= substr($node->field_dien_tich['und'][0]['value'], 0, -3) ?> m<sup>2</sup></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="overview-area listing-area">
          <h3 class="item-title">Mô tả</h3>
          <?= $node->body['und'][0]['value'] ?>
        </div>
        <div class="overview-area map-box">
          <h3 class="item-title">BẢN ĐỒ</h3>
          <div class="item-map">
            <?= render($content['field_map']) ?>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
