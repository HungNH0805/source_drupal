<!--[name]{{}}[field_image]{{}}[path]-->
<div class="container mt-30">
  <div class="category-icon text-center">
    <div class="owl-icons owl-carousel owl-theme" data-icons-sm="3" data-icons-md="4" data-icons-lg="8">
      <?php foreach ($rows as $id => $row): ?>
        <?php $ex = explode('{{}}',$row); ?>
        <a href="<?=$ex[2] ;?>">
          <figure>
            <div class="image">
              <?=$ex[1];?>
            </div>
            <figcaption><?=$ex[0];?></figcaption>
          </figure>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</div>
