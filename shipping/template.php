<?php
function getMainMenuTopShippng()
{
    $mainMenu = menu_tree_all_data('main-menu');
    $str = "";
    $dem = 0;
    foreach ($mainMenu as $item) {
        if ($item['link']['hidden'] == 0) {
            $dem++;
        }
    }
    $bien_chay = 0;
    foreach ($mainMenu as $item) {
        if ($item['link']['hidden'] == 0) {
            // Nếu không có menu con
            $bien_chay++;
            if (count($item['below']) == 0) {
                $str .= "<li>";
                if ($bien_chay == $dem) {
                    $str .= l(
                        $item['link']['title'],
                        $item['link']['link_path'],
                        array(
                            'attributes' => array(
                                'title' => $item['link']['link_title'],
                                'class' => array('nut_menu'),
                            ),
                            'html' => true
                        )
                    );
                } else {
                    $str .= l(
                        $item['link']['title'],
                        $item['link']['link_path'],
                        array(
                            'attributes' => array(
                                'title' => $item['link']['link_title'],
                            ),
                            'html' => true
                        )
                    );
                }
            } else {
                $str .= '<li>';
                $str .= l(
                    $item['link']['link_title'] . '<i class="fas fa-angle-down"></i>',
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title']
                        ),
                        'html' => true,
                    )
                );
            }

            // nếu có menu con
            if (count($item['below']) > 0) {
                $str .= '<ul class="sub-menu">';
                foreach ($item['below'] as $subItem) {
                    if ($subItem['link']['hidden'] == 0) {
                        $str .= "<li>" . l(
                            $subItem['link']['link_title'],
                            $subItem['link']['link_path'],
                            array(
                                'attributes' => array(
                                    'title' => $item['link']['link_title']
                                ),
                                'html' => true,
                            )
                        ) . "</li>";
                    }
                }
                $str .= '</ul>';
            }
            $str .= '</li>';
        }
    }
    return '<ul>' . $str . '</ul>';
}
function getMainMenuMobileTopShippng()
{
    $mainMenu = menu_tree_all_data('main-menu');
    $str = "";
    $dem = 0;
    foreach ($mainMenu as $item) {
        if ($item['link']['hidden'] == 0) {
            $dem++;
        }
    }
    $bien_chay = 0;
    foreach ($mainMenu as $item) {
        if ($item['link']['hidden'] == 0) {
            // Nếu không có menu con
            $bien_chay++;
            if (count($item['below']) == 0) {
                $str .= "<li>";
                if ($bien_chay == $dem) {
                    $str .= l(
                        $item['link']['title'],
                        $item['link']['link_path'],
                        array(
                            'attributes' => array(
                                'title' => $item['link']['link_title'],
                                'class' => array('nut_menu'),
                            ),
                            'html' => true
                        )
                    );
                } else {
                    $str .= l(
                        $item['link']['title'],
                        $item['link']['link_path'],
                        array(
                            'attributes' => array(
                                'title' => $item['link']['link_title'],
                            ),
                            'html' => true
                        )
                    );
                }
            } else {
                $str .= '<li>';
                $str .= l(
                    $item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                            'class' => array('has-arrow'),
                        ),
                        'html' => true,
                    )
                );
            }

            // nếu có menu con
            if (count($item['below']) > 0) {
                $str .= '<ul class="sub-menu">';
                foreach ($item['below'] as $subItem) {
                    if ($subItem['link']['hidden'] == 0) {
                        $str .= "<li>" . l(
                            $subItem['link']['link_title'],
                            $subItem['link']['link_path'],
                            array(
                                'attributes' => array(
                                    'title' => $item['link']['link_title']
                                ),
                                'html' => true,
                            )
                        ) . "</li>";
                    }
                }
                $str .= '</ul>';
            }
            $str .= '</li>';
        }
    }
    return '<ul class="metismenu" id="mobile-menu">' . $str . '</ul>';
}
/**
 * Implements hook_form_alter().
 */
function shipping_form_alter(&$form, &$form_state, $form_id)
{
}
function shipping_form_webform_client_form_27_alter(&$form, &$form_state, $form_id)
{
    $form['submitted']['ho_ten']['#prefix'] = t('<div class="row d-flex align-item-center">
                <div class="col-sm-12 col-12">');
    $form['submitted']['ho_ten']['#suffix'] = t('</div>');
    $form['submitted']['so_dien_thoai']['#prefix'] = t('<div class="col-sm-6 col-12">');
    $form['submitted']['so_dien_thoai']['#suffix'] = t('</div>');
    $form['submitted']['email']['#prefix'] = t('<div class="col-sm-6 col-12">');
    $form['submitted']['email']['#suffix'] = t('</div>');
    $form['submitted']['noi_dung']['#prefix'] = t('<div class="col-sm-12 col-12">');
    $form['submitted']['noi_dung']['#suffix'] = t('</div></div>');
    $form['actions']['submit']['#attributes']['class'] = array('theme-btn');
}
function getMenuFooter()
{
    $footer_menu = menu_tree_all_data('main-menu');
    $str = "";
    $abc = -1;
    foreach ($footer_menu as $item) {
        if ($item['link']['hidden'] == 0) {
            // Nếu không có menu con
            if (strlen($item['link']['title']) < 20) {
                if ($abc >= 0) {
                    $str .= "<li>";
                    $str .= l(
                        '<i class="fas fa-angle-right"></i> ' . $item['link']['title'],
                        $item['link']['link_path'],
                        array(
                            'attributes' => array(
                                'title' => $item['link']['link_title'],
                            ),
                            'html' => true
                        )
                    );
                }
                $abc = $abc + 1;
            }
            $str .= '</li>';
        }
    }
    return '<ul>' . $str . '</ul>';
}
function getMenuFooterDichvu()
{
    $footer_menu = menu_tree_all_data('main-menu');
    $str = "";
    $abc = 0;
    foreach ($footer_menu as $item) {
        if ($item['link']['hidden'] == 0) {
            // Nếu không có menu con
            if (trim($item['link']['title']) == 'Dịch vụ') {
                $str .= '<ul>';
                foreach ($item['below'] as $subItem) {
                    if ($subItem['link']['hidden'] == 0 && $abc < 5) {
                        $str .= "<li>" . l(
                            '<i class="fas fa-angle-right"></i> ' . $subItem['link']['link_title'],
                            $subItem['link']['link_path'],
                            array(
                                'attributes' => array(
                                    'title' => $item['link']['link_title']
                                ),
                                'html' => true,
                            )
                        ) . "</li>";
                    }
                    $abc = $abc + 1;
                }
                $str .= '</ul>';
            }
        }
    }
    return $str;
}
/**
 * Implements hook_form_FORM_ID_alter().
 */
function shipping_form_webform_client_form_1_alter(&$form, &$form_state, $form_id)
{
    $form['submitted']['so_dien_thoai']['#prefix'] = t('<div class="row"><div class="col-lg-6 "><div class="single-personal-info">');
    $form['submitted']['so_dien_thoai']['#suffix'] = t('</div></div>');
    $form['submitted']['email']['#prefix'] = t('<div class="col-lg-6 "><div class="single-personal-info">');
    $form['submitted']['email']['#suffix'] = t('</div></div></div>');
}
function form_tim_kiem()
{
    return '<div class="search_widget">
                                <form action="/tim-kiem?" method="get">
                                    <input type="text" name="title" placeholder="Tìm kiếm ...">
                                    <button type="submit"><i class="fal fa-search"></i></button>
                                </form>
                            </div>';
}
function noi_dung($nid)
{
    return node_load($nid)->field_mo_ta_slider['und'][0]['value'];
}
