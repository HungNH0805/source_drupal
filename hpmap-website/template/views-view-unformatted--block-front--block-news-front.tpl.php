<div class="property-news-area pt-30 pb-30">
    <div class="container">
        <div class="section-title">
            <h1 class="title text-uppercase text-center"><?php print $view->get_title()?></h1>
        </div>
        <div class="row">
            <?php foreach ($rows as $row):?>
                <div class="col-lg-4">
                   <?php print $row?>
                </div>
            <?php endforeach;?>
        </div>
        <div class="details-news text-center">
          <div class="text-center">
            <a href="/du-an" class="back_hover_ccc link_xem_chi_tiet mt-0"><i class="fas fa-angle-double-right" aria-hidden="true"></i> Xem Thêm</a>
          </div>
        </div>
    </div>
</div>
