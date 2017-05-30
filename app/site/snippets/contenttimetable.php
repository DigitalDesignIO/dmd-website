  <!-- content-timetable -->
    <div class="content-table">
      <div class="row content-table-headlines">
        <div class="medium-12 columns"><h4><?php echo $data->title()->html() ?></h4></div>
        <div class="medium-12 columns"><h5><?php echo $content->headline()->html() ?></h5></div>
      </div>

      <!-- content-image -->
      <div class="row content">
        <?php if( $content->imageDesktop()->isNotEmpty() && $content->imageMobile()->isNotEmpty()): ?>
          <picture>
            <source srcset="<?php echo $content->imageDesktop()->toFile()->thumb(['width' => 1220, 'quality' => 80])->url(); ?>" media="(min-width: 768px)">
            <source srcset="<?php echo $content->imageMobile()->toFile()->thumb(['width' => 767, 'quality' => 80])->url(); ?>" media="(min-width: 500px) and (max-width: 767px)">
            <img srcset="<?php echo $content->imageDesktop()->toFile()->thumb(['width' => 1220, 'quality' => 80])->url(); ?>" alt="Timetable DigitalMediaDesign">
          </picture>
        <?php endif ?>
      </div>
      <!-- ./content-image -->

      <div class="show-for-small-only text-center">
        <?php echo $content->flyer()->kirbytext() ?>
      </div>

    </div>
  <!-- content-timetable -->