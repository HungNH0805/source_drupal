<section class="faq-wrapper section-padding section-bg">
  <div class="container mt-30 mt-mb-0">
    <div class="col-xl-6">
      <div class="section-title-2">
        <span>SHIPPING IT RIGHT AWAY</span>
        <h1>Câu hỏi thường gặp</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-12 pe-lg-5">
        <div class="faq-content">
          <div class="faq-accordion mtm-20">
            <div class="accordion" id="accordion">
              <?php $dem=0;?>
              <?php foreach ($rows as $row) : ?>
              <?php $dem++;?>
                <?php $arr=explode('{{/',$row); ?>
                <div class="accordion-item">
                  <h4 class="accordion-header">
                    <button class="accordion-button <?php ($dem==2) ? print 'collapsed' : print ''?>" type="button" data-bs-toggle="collapse" data-bs-target="#faq<?=$dem?>" aria-expanded="<?php ($dem==2) ? print 'true' : print 'false'?>" aria-controls="faq<?=$dem?>">
                      <?=$arr[0];?>
                    </button>
                  </h4>
                  <div id="faq<?=$dem?>" class="accordion-collapse collapse <?php ($dem==2) ? print 'show' : print ''?>" data-bs-parent="#accordion">
                    <div class="accordion-body">
                      <?=$arr[1];?>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mt-5 mt-lg-0">
        <div class="can_chinh_dung">
          <div class="featured-video-wrapper text-center d-flex justify-content-center align-items-center bg-cover">
            <div class="video-play-btn">
              <a href="https://www.youtube.com/watch?v=E1xkXZs0cAQ" class="popup-video play-video"><i class="fas fa-play"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
