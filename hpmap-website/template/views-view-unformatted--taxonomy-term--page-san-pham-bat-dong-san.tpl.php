<div class="row">
  <?php
  $dvt_new = [];
  $dvt = getKhuVuc('Đơn vị tính');
  foreach (json_decode($dvt) as $item) {
    $dvt_new[$item->id] = $item->name;
  };
  ?>
  <?php foreach ($rows as $id => $row) :

  ?>
    <div class="col-6 col-md-4 prl-7">
      <?php $arr = explode('{{}}', $row); ?>
      <div class="single-feature no-border">
        <div class="thumb">
          <a href="<?php print $arr[0] ?>" class="d-block position-unset-img"><?php print $arr[1] ?></a>
        </div>
        <div class="details">
          <h6 class="title min-height-title"><?php print $arr[2] ?></h6>
          <ul class="info-list">
            <li>
              <i class="fas fa-expand"></i>
              <span class="text-color-default font-roboto-condensed w-600 font-size-12pt">
                <?php print $arr[3] ?>
              </span>
              <span class="text-color-default">
                m<sup>2</sup>
              </span>
            </li>
            <li>
              <i class="fab fa-safari"></i>
              <span class="text-color-default font-roboto-condensed font-size-10pt pb-3px inline-block">
                <?php print $arr[6] ?>
              </span>
            </li>
          </ul>
          <div class="info-price">
            <div class="left-info">
              <h6 class="price text-blue font-size-12pt">
                <span class="pri">
                  <?=$arr[7] ?>
                  <span class="text-color-default font-size-10pt font-weight-400">
                    <?=$dvt_new[(int) $arr[8]]; ?>
                  </span>
                </span>
              </h6>
              <span class="id-properties"></span>
            </div>
            <div class="right-info">
              <a class="btn btn-red contact-us font-roboto-condensed" href="#" data-uid="<?= trim($arr[10]) ?>"> <i class="fas fa-phone"></i> Gọi ngay</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
