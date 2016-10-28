<!-- bootstrap navigation -->
  <nav id="navigation" class="navbar navbar-default" data-magellan-expedition>
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
        <a class="navbar-brand" href="<?php echo url() ?>">
          <img src="<?= url('assets/images/logo.svg') ?>" height="36" width="36" alt="Digital Media Design Logo">
          Digital Media Design
        </a>
        <!-- ./navbar-brand -->
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav">

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php foreach($pages->visible() as $p): ?>

            <li data-magellan-arrival="<?php echo $p->title()->html() ?>">
              <a href="#<?php echo $p->title()->html() ?>"><?php echo $p->title()->html() ?></a>
            </li>

          <?php endforeach ?>

        </ul>
      </div>  <!-- /.navbar-collapse -->
    </div>  <!-- /.container-fluid -->
  </nav>
<!-- ./bootstrap-navigation -->