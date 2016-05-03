<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, minimum-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

	<?php
		echo css('assets/css/bootstrap.min.css');
		echo css('assets/css/project.css');
	?>
	
</head>
<body>

	<a href="<?php echo $kirby->url().'#Projekte' ?>"><button type="button" class="back-to-home button show-for-medium-up"></button></a>
	
	<div class="container-fluid project-heading">
		<div class="container">
			<div class="row">
				<div class="col-xs-2 col-sm-3 logo">
					<a href="<?php echo $kirby->url().'#Projekte' ?>" title="back home">
						<img src="../assets/images/logo.svg" alt="logo">
						<span class="logo-title hidden-xs">Digital Design</span>
					</a>
				</div>
				<div class="col-xs-10 col-sm-9 school">
					<?php echo $page->coursedata()->kt() ?>
				</div>
			</div>
		</div>
	</div>

	<div class="container doc-wrapper">
		<div class="row">
			<div class="col-xs-12">
				<div class="doc-title"><?php echo $page->subheadline()->ktr() ?></div>
				<div class="doc-autor"><?php echo $page->headline()->ktr() ?></div>
			</div>
		</div>
	</div>

	<div class="container margin-bottom-200">
		<div class="row">
			<div class="hidden-xs col-sm-2 left-col">

				<div class="content-block">
					<?php echo $page->textleft()->kt() ?>
				</div>

			</div>
		</div>

		<div class="row">
			<div class="col-sm-7 middle-col col-sm-offset-3">
				<?php echo $page->text()->kt() ?>
			</div>

			<?php foreach($page->builder()->toStructure() as $content): ?>

			  <?php snippet('sections/' . $content->_fieldset(), array('content' => $content)) ?>
			  
			<?php endforeach ?>


		</div>
	</div>
	
	<!--defer loading images (@see: https://varvy.com/pagespeed/defer-images.html -->
	<script>
		function init() {
		var imgDefer = document.getElementsByTagName('img');
		for (var i=0; i<imgDefer.length; i++) {
		if(imgDefer[i].getAttribute('data-src')) {
		imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
		} } }
		window.onload = init;
	</script>
	
</body>
</html>