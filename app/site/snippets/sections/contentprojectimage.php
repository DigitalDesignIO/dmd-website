  
  <!-- content-image -->
  <div class="col-sm-7 middle-col col-sm-offset-3">
      <img class="img-responsive" src="<?php echo $content->picture()->toFile()->url() ?>" alt="<?php echo $content->picture() ?>" >
  </div>

  <div class="col-sm-2 caption">
    <p><?php echo $content->caption()->kirbytextRaw() ?></p>
  </div>
  <!-- ./content-image -->