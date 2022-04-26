<?php global $user; ?>
<?php
$current_user = user_load($user->uid);
?>
<nav class="navbar navbar-area navbar-expand-lg navbar-light bg-blue menu-map">
  <div class="logo mr-30">
    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Bất động sản HPLand'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Bất động sản HPLand'); ?>"/>
      </a>
    <?php endif; ?>
  </div>
  <button class="navbar-toggler toggle-btn mt-5px" type="button">
    <span class="icon-left"></span>
    <span class="icon-right"></span>
  </button>
  <div class="pl-10 collapse navbar-collapse hidden-sm" id="navbarSupportedContent">
    <form class="form-inline my-2 my-lg-0">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text bg-white" id="basic-addon1"><i class="fa fa-search"></i></span>
        </div>
        <input class="form-control modified input-search-map" placeholder="Nhập địa chỉ, tọa độ cần tra cứu">
      </div>
      <a id="btn-loc-bds">
        <i class="fas fa-filter"></i>  Lọc tin
      </a>
    </form>
    <div class="noi_hien_thi_form"></div>
    <div class="menu_2_trang_chu">
      <?php print getMenu2LeMinhLand();?>
    </div>
  </div>
</nav>

<div class="chuyen_vi_tri d-none">
  <div class="ktra_form" id="TimKiemSPPC">
    <div class="d-flex justify-content-between">
      <div class="dropdown mr-3">
        <a class="dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Phân loại
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset" id="drop-phan-loai">
          <form class="px-3 py-2">
            <div class="form-check">
              <label class="form-check-label" for="mua-ban">
                <input type="checkbox" class="form-check-input" value="Mua bán" id="mua-ban"> Mua bán
              </label>
            </div>
          </form>
        </div>
      </div>
      <div class="dropdown mr-3">
        <a class="dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Giá tiền
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset" id="drop-gia-tien">
          <form class="px-3 py-2">
            <div class="form-check">
              <label class="form-check-label" for="thoa-thuan">
                <input type="checkbox" class="form-check-input" value="Thỏa thuận" id="thoa-thuan"> Thỏa thuận
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label" for="tu0den2">
                <input type="checkbox" class="form-check-input" value="0 - 2" id="tu0den2">
                <= 2 triệu
              </label>
            </div>
          </form>
        </div>
      </div>
      <div class="dropdown mr-3">
        <a class="dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Diện tích
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset" id="drop-dien-tich">
          <form class="px-3 py-2">
            <div class="form-check">
              <label class="form-check-label" for="duoi20">
                <input type="checkbox" class="form-check-input" value="0 - 2" id="duoi20">
                < 20 m²
              </label>
            </div>
          </form>
        </div>
      </div>
      <div class="dropdown">
        <a class="btn-submit" href="#">
          Tìm kiếm
        </a>
      </div>
    </div>
  </div>
</div>

<div class="breadcrumb-area jarallax" style="background-image:url(https://hpmap.vn/sites/default/files/khu-cong-vien-cay-xanh-tai-angel-island.jpg)">
  <div class="container">
    <div class="breadcrumb-inner">
      <h1 class="page-title">Thông tin tài khoản <?=$title?></h1>
      <ul class="page-list">
        <li><a href="<?=$front_page?>" title="Bất động sản HPLand">Trang chủ</a></li>
        <li>Tài khoản <?=$title?></li>
      </ul>
    </div>
  </div>
</div>
<div class="property-area pd-top-30">
  <?php print $messages;  ?>
  <div class="container">
    <?php if((strpos(current_path(), 'login') !== false)||((arg(0)=='user')&&(arg(1)=='register'))): ?>
      <?php if($page['content']) print render($page['content']); ?>
    <?php else: ?>
      <?php if(strpos(current_path(), 'edit') === false): ?>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
              <?php print t('Thông tin chung')?>
            </a>
          </li>
          <li class="nav-item <?=strpos(current_path(), 'edit') !== false ? '  active': ''?>">
            <a class="nav-link" id="pills-profile-tab"  href="https://hpmap.vn/user/<?=$user->uid; ?>/edit">
              <?php print t('Sửa thông tin')?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="tree-tab" data-toggle="tab" href="app.hpmap.vn/user/cay-he-thong" role="tab" aria-controls="tree" aria-selected="true">
              <?php print t('Cây hệ thống')?>
            </a>
          </li>
        </ul>
      <?php else: ?>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
              <?php print t('Thông tin chung')?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="home" aria-selected="true">
              <?php print t('Sửa thông tin')?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="tree-tab" data-toggle="tab" href="app.hpmap.vn/user/cay-he-thong" role="tab" aria-controls="tree" aria-selected="true">
              <?php print t('Cây hệ thống')?>
            </a>
          </li>
        </ul>
      <?php endif; ?>
      <div class="pt-20">
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade <?=strpos(current_path(), 'edit') !== false ? ' ': 'show active'?>" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="row">
              <div class="col-md-2">
                <div class="row mb-mb-15">
                  <div class="col-4 col-md-12">
                    <div class="pr-15 pr-mb-0">
                      <?php if(!empty($current_user->field_image)):?>
                        <?php print theme('image_style',[
                          'style_name' => '400_x_400',
                          'path' => $current_user->field_image['und'][0]['uri'],
                          'alt' => $current_user->name,
                          'attributes' => array('class' => 'img-responsive img-fluid img-avatar-user'),
                          'width' => '100%',
                          'height' => 'auto',
                        ]); ?>
                      <?php else:?>
                        <img class="img-responsive img-fluid img-avatar-user" alt="hpmap" src="https://hpmap.vn/sites/default/files/pictures/no-avarta.jpg">
                      <?php endif;?>
                    </div>

                  </div>
                  <div class="col-8 col-md-12">
                    <div class="d-flex-center">
                      <div class="d-none-pc">
                        <h3 class="name_user mb-0">
                          <?php isset($current_user->field_ho_ten['und'][0]['value']) ? print $current_user->field_ho_ten['und'][0]['value']: print t('Đang cập nhật');?>
                        </h3>
                        <p class="hien_thi_so"><strong>Điện thoại: </strong>
                          <?php isset($current_user->field_so_dien_thoai_vn['und'][0]['value']) ? print $current_user->field_so_dien_thoai_vn['und'][0]['value']: print t('Đang cập nhật'); ?>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-10">
                <div class="d-flex-center">
                  <div>
                    <h3 class="name_user d-none-mb">
                      <?php isset($current_user->field_ho_ten['und'][0]['value']) ?
                        print $current_user->field_ho_ten['und'][0]['value']: print t('Đang cập nhật');
                      ?>
                    </h3>
                    <div class="thong-tin-user">
                      <p class="">
                        <strong>Tài khoản: </strong><?php print $current_user->name; ?>
                      </p>
                      <p class="">
                        <strong>Địa chỉ: </strong>
                        <?php isset($current_user->field_dia_chi_du_an['und'][0]['value']) ?
                          print $current_user->field_dia_chi_du_an['und'][0]['value']: print t('Đang cập nhật');
                        ?>
                      </p>
                      <p class="d-none-mb">
                        <strong>Điện thoại: </strong>
                        <?php
                        isset($current_user->field_so_dien_thoai_vn['und'][0]['value']) ?
                          print $current_user->field_so_dien_thoai_vn['und'][0]['value']: print t('Đang cập nhật');
                        ?>
                      </p>
                    </div>
                    <div class="thong-tin-user">
                      <p class=""><strong>Ngày tạo: </strong><?php print date('d-m-Y',$current_user->created); ?></p>
                      <p class=""><strong>Người giới thiệu: </strong>
                        <?php
                        isset($current_user->field_dt_nguoi_gioi_thieu['und'][0]['value']) ?
                          print $current_user->field_dt_nguoi_gioi_thieu['und'][0]['value']: print t('');
                        ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr/>
            <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
            <?php if(isset($user->roles[5]) || isset($user->roles[4]) || isset($user->roles[3])): ?>
              <?php if($page['tat_ca_san_pham_table']) print render($page['tat_ca_san_pham_table']); ?>
            <?php else: ?>
              <?php if($page['san_pham_cua_toi_table']) print render($page['san_pham_cua_toi_table']); ?>
            <?php endif; ?>
          </div>
          <div class="tab-pane fade <?=strpos(current_path(), 'edit') !== false ? ' show active': ''?>" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <?php if($page['content']) print render($page['content']) ?>
          </div>
          <div class="tab-pane fade" id="pills-tree" role="tabpanel" aria-labelledby="tree-tab">

          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>
<?php print getFooterHPLand($page)?>
