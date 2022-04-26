<?php
/**
 * Created by PhpStorm.
 * User: hungluong
 * Date: 9/19/17
 * Time: 10:07 PM
 */

function getMainMenufattoGrp()
{
    $mainMenu = menu_tree_all_data('main-menu');
    $str = "";
    foreach ($mainMenu as $item) {
      //        dpm($item);
        if ($item['link']['hidden'] == 0) {
          // Nếu không có menu con
            if (count($item['below']) == 0) {
                $str .='<li>';
                $str .=l(
                    $item['link']['link_title'],
                    check_plain(url($item['link']['link_path'],array())),
                    array(
                    'attributes' => array(
                    'title' => $item['link']['link_title']
                    )
                    )
                );
            } else {
                if (trim($item['link']['link_path'])=='<front>') {
                    $str .='<li>';
                    $them_the =l(
                        $item['link']['link_title'],
                        '',
                        array(
                        'attributes' => array(
                        'title' => $item['link']['link_title']
                        ),
                        'fragment' => '',
                        'external' => true,
                        )
                    );
                } else {
                    $str .='<li>';
                    $them_the =l(
                        $item['link']['link_title'],
                        check_plain(url($item['link']['link_path'],array())),
                        array(
                        'attributes' => array(
                        'title' => $item['link']['link_title']
                        ),
                        'fragment' => '',
                        'external' => true,
                        )
                    );
                }
                $str .=str_replace('</a', '<span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a', $them_the);
            }

          // nếu có menu con
            if (trim($item['link']['link_title'])=='Sản phẩm') {
                if (count($item['below']) > 0) {
                    $str .='
              <div class="navbar-dropdown">
                <div class="navbar-box">
                  <div class="box-full">
                    <div class="box clearfix">
                      <div class="row">
                        ';
                    foreach ($item['below'] as $subItem) {
                        if ($subItem['link']['hidden'] == 0) {
                            $str .='<div class="col-md-3"><ul><li class="label">'.l(
                                $subItem['link']['link_title'],
                                check_plain(url($subItem['link']['link_path'],array())),
                                array(
                                'attributes' => array(
                                'title' => $subItem['link']['link_title']
                                )
                                )
                            )."</li>";
                            foreach ($subItem['below'] as $sub_Item) {
                                if ($sub_Item['link']['hidden'] == 0) {
                                    $str .='<li>'.l(
                                        $sub_Item['link']['link_title'],
                                        $sub_Item['link']['link_path'],
                                        array(
                                        'attributes' => array(
                                        'title' => $sub_Item['link']['link_title']
                                              )
                                             )
                                    )."</li>";
                                }
                            }
                            $str.='</ul></div>';
                        }
                    }
                    $str .='</div></div></div></div></div>';
                }
                $str .='</li>';
            } else {
                if (count($item['below']) > 0) {
                    $str .='
                <div class="navbar-dropdown navbar-dropdown-single">
                  <div class="navbar-box">
                    <div class="box-full">
                      <div class="box clearfix">
                        <ul>';
                    foreach ($item['below'] as $subItem) {
                        if ($subItem['link']['hidden'] == 0) {
                            $str .='<li>'.l(
                                $subItem['link']['link_title'],
                                check_plain(url($subItem['link']['link_path'],array())),
                                array(
                                'attributes' => array(
                                'title' => $item['link']['link_title']
                                )
                                )
                            )."</li>";
                        }
                    }
                    $str .='</ul></div></div></div></div>';
                }
                $str .='</li>';
            }
        }
    }
    return '<ul><li>
          <a href="<--front-->" class="logo-icon" title="Fatto" rel="home" id="logo" >
            <img src="<--logo-->" alt="Fatto" width="auto" height="50"/>
          </a></li>'.str_replace('<front>', '', $str).'</ul>';
}

function getMenuFooter($san_pham){
  $footer_menu = menu_tree_all_data('main-menu');
  $str = "";
  $abc=0;
  foreach ($footer_menu as $item) {
    if ($item['link']['hidden'] == 0) {
      // Nếu không có menu con
      if (strlen($item['link']['title'])<20) {
        if($abc>=2 && $abc<=5)
        {
          $str .= "<li>";
          $str .= l(
            '<i class="fa fa-angle-right"></i>'.$item['link']['title'],
            check_plain(url($item['link']['link_path'],array())),
            array(
              'attributes' => array(
                'title' => $item['link']['link_title'],
              ),
              'html' => TRUE
            )
          );
        }
        $abc=$abc+1;
      }
      $str .= '</li>';
    }
  }
  return '<h5>'.$san_pham.'</h5><ul>' . $str . '</ul>';
}

/**
 * Implements hook_form_alter().
 */
function fatto_form_alter(&$form, &$form_state, $form_id)
{
//  if($form['#form_id'] == 'webform_client_form_28'){
//    $form['submitted']['ho_ten']['#prefix'] = '<div class="row"><div class="col-md-4">';
//    $form['submitted']['ho_ten']['#suffix'] = '</div>';
//    $form['submitted']['dien_thoai']['#prefix'] = '<div class="col-md-4">';
//    $form['submitted']['dien_thoai']['#suffix'] = '</div>';
//    $form['submitted']['email']['#prefix'] = '<div class="col-md-4">';
//    $form['submitted']['email']['#suffix'] = '</div></div>';
//
//    $form['submitted']['dia_chi']['#prefix'] = '<div class="row"><div class="col-md-8">';
//    $form['submitted']['dia_chi']['#suffix'] = '</div>';
//    $form['submitted']['san_pham_quan_tam']['#prefix'] = '<div class="col-md-4">';
//    $form['submitted']['san_pham_quan_tam']['#suffix'] = '</div></div>';
//  }
//  if($form['#form_id'] == 'webform_client_form_44'){
//    $form['submitted']['ho_ten']['#attributes']['placeholder']=array('placeholder'=>'Họ và tên');
//    $form['submitted']['dien_thoai']['#attributes']['placeholder']=array('placeholder'=>'Số điện thoại');
//    $form['submitted']['email']['#attributes']['placeholder']=array('placeholder'=>'Email');
//    $form['submitted']['dia_chi']['#attributes']['placeholder']=array('placeholder'=>'Địa chỉ');
//  }
}

function noi_dung($nid)
{
    return node_load($nid)->field_noi_dung['und'][0]['value'];
}

function fatto_form_webform_client_form_655_alter(&$form, &$form_state, $form_id)
{
    $form['actions']['submit']['#attributes']['class'] = array('btn btn-secondary btn-sm');
}
function fatto_form_webform_client_form_827_alter(&$form, &$form_state, $form_id)
{
    $form['actions']['submit']['#attributes']['class'] = array('btn btn-clean');
    $form['submitted']['so_dien_thoai']['#theme_wrappers'] = array();
    $form['submitted']['so_dien_thoai']['#prefix'] = t('<div class="row align-items-center">
            <div class="col-md-4 col-7">');
    $form['submitted']['so_dien_thoai']['#suffix'] = t('</div>');
    $form['actions']['#prefix'] = t('<div class="col-md-4 col-5">');
    $form['actions']['#suffix'] = t('</div></div>');
}

function fatto_form_webform_client_form_40_alter(&$form, &$form_state, $form_id)
{
    $form['submitted']['ho_ten']['#prefix'] = t('<div class="row"><div class="col-md-6">');
    $form['submitted']['ho_ten']['#suffix'] = t('</div>');
    $form['submitted']['dien_thoai']['#prefix'] = t('<div class="col-md-6">');
    $form['submitted']['dien_thoai']['#suffix'] = t('</div></div>');
    $form['actions']['submit']['#attributes']['class'] = array('btn btn-primary mt-30');
}

function load_node_by_categories($id_blog_category, $field_tid_fillter, $limit)
{
    $query = new EntityFieldQuery;
    $results = $query->entityCondition('entity_type', 'node')
        ->fieldCondition($field_tid_fillter, 'tid', $id_blog_category)
        ->propertyCondition('status', 1)
        ->propertyOrderBy('created', 'desc')
        ->range(0, $limit)
        ->execute();
    if (!empty($results['node'])) {
        $nids = array_keys($results['node']);
        // Now use node_load_multiple() to load the nodes belonging to those node IDs.
        $nodes = node_load_multiple($nids);
        // .... continue as before
    }
    return $nodes;
}
function fatto_form_commerce_cart_add_to_cart_form_alter(&$form, &$form_state, $form_id)
{
    $form['quantity']['#theme_wrappers']=array();
    $form['quantity']['#attributes']['class'] = array('form-control');
    $form['quantity']['#prefix']='<label class="lable_quantity">Số lượng:</label><div class="row"><div class="col-md-6 col-6"><div class="khoi_input_quantity"><span class="minus_quantity"><i class="fa fa-minus" aria-hidden="true"></i></span>';
    $form['quantity']['#suffix']='<span class="plus_quantity"><i class="fa fa-plus" aria-hidden="true"></i></span></div></div><div class="col-md-6 col-6"><a href="tel:0968495199" class="btn btn-danger"><i class="fa fa-phone"></i> Liên hệ</a></div></div>';
    $form['submit']['#prefix']='<div class="d-none">';
    $form['submit']['#suffix']='</div>';
}
function fatto_preprocess_page(&$variables)
{
    if (isset($variables['node']->type)) {
        $nodetype = $variables['node']->type;
        $variables['theme_hook_suggestions'][] = 'page__' . $nodetype;
    }
}
function form_tim_kiem()
{
    $str = '<div class="box box-search">
  <form action="/tim-kiem">
    <input type="text" value="" class="form-control" placeholder="Tìm kiếm sản phẩm" name="title">
    <button class="btn btn-primary btn-sm">Tìm kiếm</button>
  </form>
</div>';
    return $str;
}
function webpImage($source, $quality = 100, $removeOld = false)
{
    $dir = pathinfo($source, PATHINFO_DIRNAME);
    $name = pathinfo($source, PATHINFO_FILENAME);
    $destination = $dir . DIRECTORY_SEPARATOR . $name . '.webp';
    $info = getimagesize($source);
    $isAlpha = false;
    if ($info['mime'] == 'image/jpeg') {
        $image = imagecreatefromjpeg($source);
    } elseif ($isAlpha = $info['mime'] == 'image/gif') {
        $image = imagecreatefromgif($source);
    } elseif ($isAlpha = $info['mime'] == 'image/png') {
        $image = imagecreatefrompng($source);
    } else {
        return $source;
    }
    if ($isAlpha) {
        imagepalettetotruecolor($image);
        imagealphablending($image, true);
        imagesavealpha($image, true);
    }
    imagewebp($image, $destination, $quality);

    if ($removeOld) {
        unlink($source);
    }

    return $destination;
}
