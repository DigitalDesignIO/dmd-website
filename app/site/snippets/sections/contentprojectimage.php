  
  <!-- content-image -->
  <div class="col-sm-6 middle-col col-sm-offset-3">
      <img class="img-responsive" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $content->picture()->toFile()->url() ?>" alt="<?php echo $content->picture() ?>" >
  </div>

  <div class="col-sm-3 caption">
    <p><?php echo $content->caption()->kirbytextRaw() ?></p>
  </div>
  <!-- ./content-image -->