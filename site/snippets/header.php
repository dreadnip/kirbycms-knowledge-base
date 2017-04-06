<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
	<meta name="description" content="<?= $site->description()->html() ?>">
	<?= css('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700') ?>
	<?= css('assets/css/style.css') ?>
	<?= css('assets/css/prism.css') ?>
	<link rel="icon" href="<?php echo url('assets/images/favicon.ico') ?>" />
</head>
<body>
	<div class="wrap">
		<nav class="menu">
			<a class="logo" href="<?php echo url() ?>"><img src="<?= url() ?>/assets/images/logo.png" alt="" /></a>
			<form action="<?= url() ?>/search"><input type="search" class="search" name="q" placeholder="Search..."/></form>
			<?php snippet('treemenu') ?>			
		</nav>
