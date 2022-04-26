<!--[title_field]{{}}[field_image]{{}}[path]{{}}[commerce_price_1]{{}}[add_to_cart_form]{{}}[field_cho_phep_dat_hang_vao_gio]-->
<?php
$center_image = node_load(2422);
$path_center_image = file_create_url($center_image->field_image['vi'][0]['uri']);
?>
<div class="page-product">
    <div class="caregory-products-area">
        <div class="grid-product">
            <?php $i = 0; ?>
            <?php foreach ($rows as $row): ?>
                <?php $arr = explode('{{}}', $row);
                $title = $arr[0];
                $field_image = $arr[1];
                $path = $arr[2];
                $price = $arr[3];
                $add_to_cart = $arr[4];
                $state_product = $arr[5];
                $nid = $arr[6];
                ?>
                <?php if ($i < 9): ?>
                    <div class="single-new-product category-new-product ">
                        <div class="product-img">
                            <a href="<?= $path ?>">
                                <img src="<?= $field_image ?>" class="first_img" alt="<?= trim($title) ?>"
                                     title="<?= trim($title) ?>"/>
                            </a>
                            <div class="new-product-action">
                                <?php if ($state_product == 'Có'): ?>
                                    <a href="#" class="link-add-to-cart"><span class="lnr lnr-cart"></span> Thêm vào giỏ
                                        hàng</a>
                                    <div class="add-to-cart d-none">
                                        <?= $add_to_cart ?>
                                    </div>
                                <?php else: ?>
                                    <a href="/bao-gia-san-pham?id=<?= trim($nid) ?>"><span class="lnr lnr-phone-handset"></span> Liên hệ</a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <h3><a href="<?= $path ?>">
                                    <?= (trim($title)) ?>
                                </a>
                            </h3>
                            <?php if ($state_product == 'Có'): ?>
                                <div class="price">
                                    <h4><?= $price ?></h4>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php elseif ($i == 9): ?>
                    <div class="grid-products-img">
                        <?php print views_embed_view('front_block', 'block_feature_product_page_product') ?>
                    </div>
                <?php elseif ($i > 9): ?>
                    <div class="single-new-product category-new-product ">
                        <div class="product-img">
                            <a href="<?= $path ?>">
                                <img src="<?= $field_image ?>" class="first_img" alt="<?= trim($title) ?>"
                                     title="<?= trim($title) ?>"/>
                            </a>
                            <div class="new-product-action">
                                <?php if ($state_product == 'Có'): ?>
                                    <a href="#" class="link-add-to-cart"><span class="lnr lnr-cart"></span> Thêm vào giỏ
                                        hàng</a>
                                    <div class="add-to-cart d-none">
                                        <?= $add_to_cart ?>
                                    </div>
                                <?php else: ?>
                                    <a href="/bao-gia-san-pham?id=<?= trim($nid) ?>"><span
                                                class="lnr lnr-phone-handset"></span> Liên
                                        hệ</a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <h3><a href="<?= $path ?>">
                                    <?= (trim($title)) ?>
                                </a>
                            </h3>
                            <?php if ($state_product == 'Có'): ?>
                                <div class="price">
                                    <h4><?= $price ?></h4>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php $i++; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>


