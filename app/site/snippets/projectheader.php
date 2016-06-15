<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, minimum-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= url('/favicon-32x32.png') ?>">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

	<?php
		echo css('assets/css/bootstrap.min.css');
		echo css('assets/css/project.css');
	?>
	
</head>

	<a href="<?php echo $kirby->url().'#Projekte' ?>"><button type="button" class="back-to-home button show-for-medium-up"></button></a>
	
	<div class="container-fluid project-heading">
		<div class="container">
			<div class="row">
				<div class="col-xs-2 col-sm-3 logo">
					<a href="<?php echo $kirby->url().'#Projekte' ?>" title="back home">
            
						<img src="<?= url('assets/images/logo.svg') ?>" alt="logo">
						<span class="logo-title hidden-xs">Digital Design</span>
					</a>
				</div>
				<div class="col-xs-10 col-sm-9 school">
					<?php
            if ($page->template() === 'project') {
              echo $page->coursedata()->kt();
            } elseif($page->template() === 'projectitem') {
              echo $page->parent()->coursedata()->kt();
            } else {
              echo "HS Ravensburg-Weingarten";
            }
            
           ?>
				</div>
			</div>
		</div>
	</div>