<?php
?>
<section class="our-service-provide theme-bg section-padding">
  <div class="container">
    <div class="col-12 col-lg-12">
      <div class="block-contents text-center">
        <div class="section-title">
          <h5>Dịch vụ</h5>
          <span>SHIPPING IT RIGHT AWAY</span>
          <h2>DỊCH VỤ <span>TOP SHIPPING</span></h2>
        </div>
      </div>
    </div>

    <div class="row text-center">
        <?php foreach ($rows as $row) :?>
          <div class="col-xl-4 col-md-6 col-12">
                <?= html_entity_decode($row)?>
          </div>
        <?php endforeach;?>
    </div>
  </div>
</section>

