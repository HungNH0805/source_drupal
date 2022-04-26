<?php
function getMainMenuBDSDaiNam()
{
  $mainMenu = menu_tree_all_data('main-menu');
  $str = "";
  foreach ($mainMenu as $item) {
    //        dpm($item);
    if ($item['link']['hidden'] == 0) {
      // Nếu không có menu con
      if (count($item['below']) == 0) {
        $str .= "<li>";
        $str .= l(
            $item['link']['link_title'],
            $item['link']['link_path'],
            array(
                'attributes' => array(
                    'title' => $item['link']['link_title'],
                    'class' => array('text-uppercase'),
                ),
              'html' => TRUE
            )
        );
      }
      else{
        $str .= '<li>';
        $str .= l(
            $item['link']['link_title'],
            $item['link']['link_path'],
            array(
                'attributes' => array(
                    'title' => $item['link']['link_title'],
                    'class' => array('text-uppercase'),
                ),
              'html' => TRUE,
            )
        );
      }

      // nếu có menu con
      if (count($item['below']) > 0) {
        $str .= '<ul class="dropdown-menu-col-1">';
        foreach ($item['below'] as $subItem) {
          if ($subItem['link']['hidden'] == 0)
            $str .= "<li>" . l(
                    $subItem['link']['link_title'],
                    $subItem['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title']
                        ),
                      'html' => TRUE,
                    )
                ) . "</li>";
        }
        $str .= '</ul>';
      }
      $str .= '</li>';

    }
  }

  return '<ul>' . $str . '</ul>';
}

function getMainMenuBDSDaiNamSide()
{
  $mainMenu = menu_tree_all_data('main-menu');
  $str = "";
  foreach ($mainMenu as $item) {
    //        dpm($item);
    if ($item['link']['hidden'] == 0) {
      // Nếu không có menu con
      if (count($item['below']) == 0) {
        $str .= '<li class="list menu-item-parent">';
        $str .= l(
          '<span>'.$item['link']['link_title'].'</span>',
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title'],
              'class' => array(
                'animation'
              )
            ),
            'html' => TRUE,
          )
        );
      }
      else{
        $str .= '<li class="list menu-item-parent menu-item-has-children">';
        $str .= l(
          $item['link']['link_title'],
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title']
            ),
            'html' => TRUE,
          )
        );
      }

      // nếu có menu con
      if (count($item['below']) > 0) {
        $str .= '<ul class="main-menu__dropdown sub-menu">';
        foreach ($item['below'] as $subItem) {
          if ($subItem['link']['hidden'] == 0)
            $str .= "<li>" . l(
                $subItem['link']['link_title'],
                $subItem['link']['link_path'],
                array(
                  'attributes' => array(
                    'title' => $item['link']['link_title']
                  ),
                  'html' => TRUE,
                )
              ) . "</li>";
        }
        $str .= '</ul>';
      }
      $str .= '</li>';

    }
  }

  return '<ul class="menu">' . $str . '</ul>';
}
function anphat_preprocess_node(&$variables) {
    if (isset($variables['node']->type)) {
        $nodetype = $variables['node']->type;
        $variables['theme_hook_suggestions'][] = 'page__' . $nodetype;
    }
}


function DaiNam_form_webform_client_form_35_alter(&$form, &$form_state, $form_id) {
  $form['actions']['submit']['#attributes']['class'] = array('call-btn');
}
function DaiNam_form_webform_client_form_44_alter(&$form, &$form_state, $form_id) {
  $form['submitted']['ho_ten']['#prefix'] = t('<div class="row"><div class="col-md-6 form-group">');
  $form['submitted']['ho_ten']['#suffix'] = t('</div>');
  $form['submitted']['so_dien_thoai']['#prefix'] = t('<div class="col-md-6 form-group">');
  $form['submitted']['so_dien_thoai']['#suffix'] = t('</div></div>');
  $form['actions']['submit']['#attributes']['class'] = array('item-btn');
  $form['#attributes']['class'] = array('contact-box rt-contact-form');
  $form['actions']['submit']['#prefix'] = t('<div class="form-group">');
  $form['actions']['submit']['#suffix'] = t('</div>');

}
function load_node_by_categories($id_blog_category, $limit)
{
  $query = new EntityFieldQuery;
  $results = $query->entityCondition('entity_type', 'node')
  ->fieldCondition('field_chuyen_muc', 'tid', $id_blog_category)
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
