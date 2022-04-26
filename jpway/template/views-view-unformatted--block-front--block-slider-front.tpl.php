<div class="tp-banner-container">
  <div class="tp-banner">
    <ul>
      <?php foreach ($rows as $row):?>
        <li data-slotamount="7" data-transition="3dcurtain-horizontal" data-masterspeed="1000" data-saveperformance="on">
          <img alt="image" src="<?=trim($row)?>" data-lazyload="<?=trim($row)?>">
          <div class="caption lft large-title tp-resizeme slidertext2" data-x="left"
               data-y="150" data-speed="600" data-start="1600">
          </div>
          <div class="caption lfb large-title tp-resizeme slidertext3" data-x="left" data-y="240"
               data-speed="600" data-start="2200">
          </div>
          <div class="caption lfb large-title tp-resizeme slidertext4 slidertext5"
               data-x="left" data-y="330" data-speed="600" data-start="2800">
          </div>
        </li>
      <?php endforeach;?>
    </ul>
  </div>
</div>
