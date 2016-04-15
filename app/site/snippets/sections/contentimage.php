	
	<!-- content-image -->
  <div class="row content flex">
    <div class="medium-offset-3 medium-7 columns">
      <img src="<?php echo $content->picture()->toFile()->url() ?>" height="388" width="690" alt="<?php echo $content->picture() ?>">
    </div>
    <div class="medium-2 columns">
      <p class="img-caption"><?php echo $content->caption()->kirbytextRaw() ?></p>
    </div>
  </div>
  <!-- ./content-image -->