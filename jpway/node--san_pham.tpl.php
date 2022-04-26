<?php
?>
<div class="product-detail">
  <div class="images">
    <div class="row">
      <div class="col-lg-5">
        <?= render($content['field_image'])?>
      </div>
      <div class="col-lg-7">
        <h2><?=$node->title?></h2>
        <p><?=$node->body['und'][0]['summary']?></p>
        <div class="readmore"><a href="tel:02253654599">Liên hệ</a></div>
      </div>
    </div>
  </div>
  <div class="descriptions">
    <h3>Mô tả chi tiết</h3>
    <?= render($content['body'])?>
  </div>
</div>
