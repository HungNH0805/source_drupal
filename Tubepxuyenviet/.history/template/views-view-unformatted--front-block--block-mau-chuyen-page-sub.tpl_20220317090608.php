<?php
$i = 0;
$quantily = count($rows);
?>
<div class="story mb-30 mt-30">
  <div class="container">
    <div class="text-center item-story ">
      <?php if (isset($_GET['page'])) : ?>
        <?php if ($_GET['page'] < $quantily) : ?>
          <?php print $rows[$_GET['page']] ?>
        <?php else : ?>
          <?php print $rows[0] ?>
        <?php endif; ?>
      <?php else : ?>
        <?php print $rows[0] ?>
      <?php endif; ?>
    </div>
    <div class="d-flex justify-content-end">
      <i class="story-author">Tủ Bếp Xuyên Việt _ trên google không có!</i>
    </div>
  </div>
</div>
