
<div class="row content flex">
  <div class="medium-offset-3 medium-7 columns">
    <h3><?php echo $fb_event->name() ?></h3>
    <p><?php echo kirbytext($fb_event->description()) ?></p>

    <div class="news">
      <img
        src="<?php
          if( ($news->hasImages() ) AND hash('md5', $fb_event->cover()) === $news->images()->first()->name() ) {
            echo thumb($news->images()->first(), ['width' => 690, 'height' => 320, 'crop' => true], false);
          } else {
            echo thumb($fb_event->cover(), ['width' => 690, 'height' => 320, 'crop' => true], false);
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

