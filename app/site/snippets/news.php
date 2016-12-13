  <?php
    $news = $pages->findByURI('news');
  ?>

  <!-- scroll-to anker mark -->
  <span data-magellan-destination="<?php echo $news->title()->html() ?>">
    <a name="<?php echo $news->title()->html() ?>"></a>
  </span>

  <!-- ./content-block -->
  <div class="row">
    <div class="medium-12 columns"><h4><?php echo $news->title()->html() ?></h4></div>
    <div class="medium-12 columns"><h5><?php echo $news->headline()->html() ?></h5></div>
  </div>

  <span id="fb-news"></span>

  <div class="row content">
    <div class="medium-offset-3 medium-7 columns">
      <p class="text-center"><a class="icon-link-ext button round" target="_blank" href="https://www.facebook.com/digitaldesign.de/events">Alle Termine</a></p>
    </div>
  </div>
  <!-- ./content-block -->
