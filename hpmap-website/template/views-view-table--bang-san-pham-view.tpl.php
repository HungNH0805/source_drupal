<?php $arr=['7','20','5','5','1','1','1']?>
<?php $arr1=['0','0','0','1','1','1','1']?>
<table class="table table-bordered table-striped text-nowrap table_center">
  <?php if (!empty($title) || !empty($caption)): ?>
    <caption><?php print $caption . $title; ?></caption>
  <?php endif; ?>
  <?php if (!empty($header)) : ?>
    <thead>
    <tr>
      <?php $bien=0;?>
      <?php foreach ($header as $field => $label): ?>
        <th width="<?php print $arr[$bien];?>%" <?php if ($header_classes[$field]): ?> class="<?php ($arr1[$bien]=='1') ? print 'text-center ' : print ' '?><?php print $header_classes[$field]; ?>"<?php endif; ?> scope="col">
          <?php print $label; ?>
        </th>
        <?php $bien++;?>
      <?php endforeach; ?>
    </tr>
    </thead>
  <?php endif; ?>
  <tbody>
  <?php foreach ($rows as $row_count => $row): ?>
    <tr <?php if ($row_classes[$row_count]): ?> class="<?php print implode(' ', $row_classes[$row_count]); ?>"<?php endif; ?>>
      <?php $bien=0;?>
      <?php foreach ($row as $field => $content): ?>
        <td width="<?php print $arr[$bien];?>%" <?php if ($field_classes[$field][$row_count]): ?> class="<?php ($arr1[$bien]=='1') ? print 'text-center ' : print ''?><?php print $field_classes[$field][$row_count]; ?>"<?php endif; ?><?php print drupal_attributes($field_attributes[$field][$row_count]); ?>>
          <?php print $content; ?>
        </td>
        <?php $bien++;?>
      <?php endforeach; ?>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
