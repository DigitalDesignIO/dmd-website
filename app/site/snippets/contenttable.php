  <!-- content-table -->
  <div class="row">

    <div class="medium-12 columns"><h4><?php echo $data->title()->html() ?></h4></div>
    <div class="medium-12 columns"><h5><?php echo $content->headline()->html() ?></h5></div>
  </div>

  <div class="row content facts">
    <div class="medium-offset-3 medium-4 columns">
      <?php echo $content->textLeftColumn()->kirbytext() ?>
    </div>
    <div class="medium-3 columns end">
      <?php echo $content->textRightColumn()->kirbytext() ?>
    </div>
  </div>
  <!-- ./content-table -->