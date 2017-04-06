<nav class="breadcrumb">
  <ul>
    <?php $x = 1; foreach($site->breadcrumb() as $crumb_key => $crumb): ?>
    <li<?php e($crumb->isActive(), ' class="is-active"') ?>><a href="<?php echo $crumb->url() ?>"><?php echo $crumb->title()->html(); echo $x != count($site->breadcrumb()) ? ' &rsaquo;' : ''; $x++ ?></a></li>
    <?php endforeach; ?>
  </ul>
</nav>