  <?php

    // get $page object from kirby
    $news = $pages->findByURI('news');
    // if the field "local" does not exist in "content/1-news/news.de.txt" create it
    $news->local()->exists() ? : $news->update(array('local' => 'true'), 'de');

    $fb_event = getFacebookEvents($news);
    $fb_event = $fb_event->getNews('1676014109285451');

    // serve content from local "content/1-news/**" folder or from facebook if news is outdated
    $fromLocal = $fb_event->local();
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

  <div class="row content flex">
    <div class="medium-offset-3 medium-7 columns">
      <h3><?php echo $fb_event->name() ?></h3>

        <p>
          <?php
            if($fromLocal == 'true') {
              echo $fb_event->description()->kt();
            }
            else {
              echo $fb_event->description();
            }
          ?>
        </p>

      <div class="news">
        <img
          src=""
          srcset="
          <?php
            if($fromLocal == 'true') {
              echo thumb($news->images()->first(), ['width' => 690, 'height' => 320, 'crop' => true], false);
            } else {
              echo thumb($fb_event->generateThumbnail($fb_event->cover(), $news), ['width' => 690, 'height' => 320, 'crop' => true], false);
            }
          ?>"
          width="690"
          height="320"
        />
        <div class="news-text">
          <span class="news-date">
            <span class="month"><?php echo $fb_event->start_date_month()?></span>
            <span class="day"><?php echo $fb_event->start_date_day()?></span>
          </span>
          <div>
            <span class="news-description"><a target="_blank" href="<?php echo $fb_event->event_url() ?>"><?php echo $fb_event->name() ?></a></span>
          </div>
        </div>
      </div>

    </div>
    <div class="medium-2 columns">
      <p class="img-caption">
        <strong>Datum:</strong> <br>
        <?php echo $fb_event->start_date_humanized() . ' '?> <br>
        <?php echo $fb_event->start_date_time() .' Uhr' ?> <br>
        <br>

        <?php
          if(($fb_event->place_city() != '' || $fb_event->place_street() != '')) {
           echo '<strong>Location</strong><br>';
           echo $fb_event->place_city() .'<br>';
           echo $fb_event->place_street() .'<br>';
          }
        ?>
      </p>
    </div>
  </div>
  <!-- ./content-block -->
