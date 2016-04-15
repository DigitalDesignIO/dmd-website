
  <!-- content-arrowlist -->
  <div class="row">
    <div class="medium-12 columns"><h4><?php echo $data->title()->html() ?></h4></div>
    <div class="medium-12 columns"><h5><?php echo $content->headline()->html() ?></h5></div>
  </div>

  <div class="row content-list">
    <?php echo $content->text()->kirbytext() ?>
  </div>
  <!-- ./content-arrowlist -->