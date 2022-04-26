<?php
$dvt_new = [];
$dvt = getKhuVuc('Đơn vị tính');
foreach (json_decode($dvt) as $item) {
  $dvt_new[$item->id] = $item->name;
};
?>
<?php foreach ($rows as $id => $row) : ?>
  <?php $arr = explode('{{}}', $row) ?>
  <div class="product-sidebar_front">
    <div class="single-feature">
      <div class="thumb">
        <?php print $arr[0] ?>
      </div>
      <div class="details">
        <h3 class="title"><a href="<?php print $arr[1] ?>"><?php print $arr[3] ?></a></h3>
        <h6 class="price text-blue font-size-12pt">
          <span class="text-color-default font-size-10pt font-weight-400">
            <span class="font-roboto-condensed w-600 pri">
              <?= $arr[5] ?>
            </span>
            m<sup>2</sup>
          </span>
          <span class="pri">
           <?=$arr[2] ?>
            <span class="text-color-default font-size-10pt font-weight-400">
             <?=$dvt_new[(int) $arr[4]]?>
            </span>
          </span>
        </h6>
      </div>
    </div>
  </div>
<?php endforeach; ?>
