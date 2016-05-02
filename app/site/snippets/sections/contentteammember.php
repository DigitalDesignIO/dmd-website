        

    <!-- team-person-ehret -->
    <div class="row content flex team">
      <div class="small-12 medium-offset-3 medium-7 columns">
        <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $content->picture()->toFile()->url() ?>" alt="<?php echo $content->name() ?>" width="690" height="390">
      </div>
      <div class="medium-2 columns">
        <p class="img-caption">
          <?php echo $content->caption()->kirbytextRaw() ?>
        </p>
      </div>
    </div>

    <div class="row content team">
      <div class="small-3 medium-offset-3 medium-1 columns">
        <img class="portrait" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $content->portrait()->toFile()->url() ?>" alt="<?php echo $content->name() ?>" width="100" height="100">
      </div>
      <div class="small-9 medium-6 end columns description">
        <div class="pers-name"><?php echo $content->name() ?></div>
        <?php echo $content->text()->kirbytext() ?>
      </div>
    </div>
    <!-- ./team-person-ehret -->

  <!-- ./content-block -->