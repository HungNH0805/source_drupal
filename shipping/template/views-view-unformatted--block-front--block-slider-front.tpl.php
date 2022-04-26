<?php
/** @var array $rows */
//[field_caption]{{}}[field_mo_ta_slider]{{}}[field_link]{{}}[field_image]/**/
?>
<section class="hero-slide-wrapper hero-3">
        <div class="hero-slider-3 transland-dots">
          <?php
            foreach ($rows as $row) :?>
                <?php
                $arr = explode('{{}}', $row);
                $caption = $arr[0];
                $image = trim($arr[3]);
                $link = trim($arr[2]);
                ?>
            <div class="single-slide bg-cover" style="background-image: url('<?=$image?>')">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-9 mt-5 mt-lg-0 order-2 order-lg-1 text-center text-lg-start">
                            <div class="hero-contents text-white">
                                <p class="animated" data-animation-in="fadeInLeft" data-delay-in="0.04">SHIPPING IT RIGHT AWAY</p>
                                <h2 class="animated" data-animation-in="fadeInLeft" data-delay-in="0.3"><?=html_entity_decode($caption)?></h2>
                                <a href="<?=$link?>" class="theme-btn animated" data-animation-in="fadeInLeft" data-delay-in="0.9">Gọi Ngay <i class="fas fa-arrow-right"></i></a>
                              <a href="/lien-he" class="theme-btn minimal-btn animated" data-animation-in="fadeInLeft" data-delay-in="0.6">Để lại liên hệ <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12 order-1 order-lg-2 text-center text-lg-end">
                            <div class="video-play-btn animated" data-animation-in="fadeInUp" data-delay-in="0.8">
                                <a href="https://www.youtube.com/watch?v=E1xkXZs0cAQ" class="play-video popup-video"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <?php endforeach; ?>
        </div>
</section>
