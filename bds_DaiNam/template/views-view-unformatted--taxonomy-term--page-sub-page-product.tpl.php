<!-- [title]{{}}[field_image]{{}}[body]{{}}[path]{{}}[field_gia_bang_chu]
{{}}[field_dien_tich]{{}}[field_khu_vuc]{{}}[field_phong]{{}}[nid] -->
<div class="row">
  <?php foreach ($rows as $item) : ?>
    <?php
    $arr = explode('{{}}', $item);
    $title = $arr[0];
    $image = $arr[1];
    $body = $arr[2];
    $path = $arr[3];
    $field_gia_bang_chu = $arr[4];
    $field_dien_tich = $arr[5];
    $field_khu_vuc = $arr[6];
    $field_phong = $arr[7];
    $nid = $arr[8];
    $node_1 = node_load(intval($nid));
    $taxonomy = taxonomy_term_load($node_1->field_loai_san_pham['und'][1]['tid']);
    $path_taxonomy = drupal_get_path_alias('taxonomy/term/' . $taxonomy->tid);
    $categories = explode(' ', $taxonomy->name);
    $business_categories = array_shift($categories);
    $product_category = implode(' ', $categories);
    ?>
    <div class="col-xl-6 col-lg-6 col-md-6">
      <div class="property-box2 wow animated fadeInUp" data-wow-delay=".3s">
        <div class="item-img">
          <?= $image ?>
        </div>
        <div class="item-category-box1">
          <div class="item-category"><?= $business_categories ?></div>
        </div>

        <div class="item-category10"><a href="<?= $path_taxonomy ?>"><?= ucfirst($product_category) ?></a></div>
        <div class="item-content">
          <div class="verified-area">
            <h3 class="item-title"><?= $title ?></h3>
          </div>
          <div class="item-price"><?= $field_gia_bang_chu ?></div>

          <div class="item-categoery3">
            <ul>
              <li><i class="flaticon-maps-and-flags"></i> KV: <?= $field_khu_vuc ?></li>
              <li><i class="fas fa-bed"></i>PN: <?= $field_phong ?></li>
              <li><i class="fas fa-expand"></i> <?= $field_dien_tich ?> m<sup>2</sup></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach ?>
</div>
