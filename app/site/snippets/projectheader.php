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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  
</head>

  <a href="<?php echo $kirby->url().'#Projekte' ?>"><button type="button" class="back-to-home button show-for-medium-up"></button></a>

  <!-- Display this navbar for tablets and greater -->
  <div class="container-fluid project-heading hidden-xs">
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

  <!--  Else display this navbar for smartphones -->
  <!-- bootstrap navigation -->
  <nav id="navigation" class="navbar navbar-default hidden-sm" data-magellan-expedition>
    <div class="container-fluid">
      <div class="navbar-header">
        <!-- burger-button  -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- ./burger-button -->

        <!-- navbar-brand -->
      <div class="container project-heading ">
        <div class="row">
          <div class="col-xs-2 col-sm-3 logo">
            <a href="<?php echo $kirby->url().'#Projekte' ?>" title="back home">
              <img src="<?= url('assets/images/logo.svg') ?>" alt="logo">
            </a>
          </div>
          <div class="col-xs-8 col-sm-6 school">
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
      <!-- ./navbar-brand -->
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav"></ul>

        <ul class="nav navbar-nav navbar-right hidden-sm">
        <?php
          if($page->template() == 'projectitem') {
            foreach($page->parent()->children()->visible() as $projectitem) {
              if($projectitem->isOpen()) {
                $activeItem = $projectitem->title();
                echo ('<div class="active '. $projectitem->Pageclass() .'"><a href="'. $projectitem->url() .'">' . $projectitem->title() .'</a></div>');
              } else {
                echo ('<div class="'. $projectitem->Pageclass() .'"><a href="'. $projectitem->url() .'">' . $projectitem->title() .'</a></div>');
              }
            }
          } elseif ($page->template() == 'project') {
            foreach($page->children()->visible() as $projectitem) {
              if($projectitem == $page->children()->visible()->first()) {
                $activeItem = $projectitem->title();
                echo ('<div class="active '. $projectitem->Pageclass() .'"><a href="'. $projectitem->url() .'">' . $projectitem->title() .'</a></div>');
              } else {
                echo ('<div class="'. $projectitem->Pageclass() .'"><a href="'. $projectitem->url() .'">' . $projectitem->title() .'</a></div>');
              }
            }
          }
        ?>
        </ul>
      </div>  <!-- /.navbar-collapse -->
    </div>  <!-- /.container-fluid -->
  </nav>
<!-- ./bootstrap-navigation -->

