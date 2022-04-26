<!-- [title]{{}}[field_image]{{}}[field_khu_vuc] -->

<div class="widget widget-listing-box1">
  <h3 class="widget-subtitle">SẢN PHẨM MỚI NHẤT</h3>
  <?php $i = 0; ?>
  <?php foreach ($rows as $item) : ?>
    <?php
    $arr = explode('{{}}', $item);
    $title = trim($arr[0]);
    $image = $arr[1];
    $khu_vuc = $arr[2];
    $path = $arr[3];
    $price = $arr[4];
    ?>
    <?php if ($i == 0) : ?>
      <?php
      $image_avatar = theme_image_style([
        'style_name' => '540_x_360',
        'path' => $image,
        'alt' => $title,
        'title' => $title,
        'attributes' => array('class' => 'img-fluid'),
        'width' => '540px',
        'height' => '360px',
      ]);

      ?>
      <div class="item-img">
        <a href="<?= $path ?>"><?= $image_avatar ?></a>
      </div>
      <div class="widget-content">
        <h4 class="item-title">
          <?= $title ?>
        </h4>
        <div class="location-area">
          <i class="flaticon-maps-and-flags"></i><?= $khu_vuc ?>
        </div>
        <div class="item-price"><?= $price ?></div>
      </div>
    <?php else : ?>
      <?php
      $image_avatar = theme_image_style([
        'style_name' => '360_x_300',
        'path' => $image,
        'alt' => $title,
        'title' => $title,
        'attributes' => array('class' => 'img-fluid'),
        'width' => '360px',
        'height' => '300px',
      ]);
      ?>
      <div class="widget-listing">
        <div class="item-img">
          <a href="<?= $path ?>" title="<?= $title ?>"><?= $image_avatar ?></a>
        </div>
        <div class="item-content">
          <h5 class="item-title">
            <a href="<?= $path ?>" title="<?= $title ?>"><?= $title ?></a>
          </h5>
          <div class="location-area">
            <i class="flaticon-maps-and-flags"></i><?= $khu_vuc ?>
          </div>
          <div class="item-price"><?= $price ?></div>
        </div>
      </div>
    <?php endif ?>
    <?php $i++; ?>
  <?php endforeach ?>
</div>
