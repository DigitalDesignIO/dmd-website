    <!-- team-person-ehret -->
    <div class="row content flex team">
      <div class="small-12 medium-offset-3 medium-7 columns">
        <?php snippet('sections/image', array('image' => $content->picture(), 'class' =>'')); ?>
      </div>
      <div class="medium-2 columns">
        <p class="img-caption">
          <?php echo $content->caption()->kirbytextRaw() ?>
        </p>
      </div>
    </div>

    <div class="row content team">
      <div class="small-3 medium-offset-3 medium-1 columns">
        <?php snippet('sections/image', array('image' => $content->portrait(), 'class' =>'portrait')); ?>
      </div>
      <div class="small-9 medium-6 end columns description">
        <div class="pers-name"><?php echo $content->name() ?></div>
        <?php echo $content->text()->kirbytext() ?>
      </div>
    </div>
    <!-- ./team-person-ehret -->

  <!-- ./content-block -->