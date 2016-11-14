
  <!-- content-image -->
  <div class="col-sm-6 middle-col col-sm-offset-3">
    <?php snippet('sections/image', array('image' => $content->picture(), 'class' => 'img-responsive')); ?>
  </div>

  <div class="col-sm-3 caption">
    <p><?php echo $content->caption()->kirbytextRaw() ?></p>
  </div>
  <!-- ./content-image -->