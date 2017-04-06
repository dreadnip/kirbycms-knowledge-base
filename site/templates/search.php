<?php
	snippet('header');
?>

<div class="content">

	<?php snippet('breadcrumb') ?>
	
	<div class="results">

		<?php if($results): ?>

		<ul>
		  <?php foreach($results as $result): ?>
		  <li>
		    <a href="<?php echo $result->url() ?>">
		      <?php echo $result->title()->html() ?>
		    </a>
		  </li>
		  <?php endforeach ?>
		</ul>

		<?php elseif($search->query()): ?>
		<div class="no-results">No results for <strong><?= html($search->query()) ?></strong></div>
		<?php endif ?>

	</div>

</div>
<div style="clear:both"></div>

<?php snippet('footer') ?>