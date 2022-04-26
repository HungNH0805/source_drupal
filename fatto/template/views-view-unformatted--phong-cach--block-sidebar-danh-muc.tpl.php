<div class="box box-animated box-categories">
  <h5 class="title"><?php print $view->get_title()?></h5>
  <ul>
    <?php foreach ($rows as $id => $row): ?>
      <li>
        <?php print $row;?>
      </li>
    <?php endforeach; ?>
  </ul>
</div>
