
	<!-- content-image -->
  <div class="row content flex">
    <div class="medium-offset-3 medium-7 columns">
      <?php snippet('sections/image', array('image' => $content->picture(), 'class' =>'')); ?>
    </div>
    <div class="medium-2 columns">
      <p class="img-caption"><?php echo $content->caption()->kirbytextRaw() ?></p>
    </div>
  </div>
  <!-- ./content-image -->