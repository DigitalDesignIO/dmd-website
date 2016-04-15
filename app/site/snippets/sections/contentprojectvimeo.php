  
  <!-- content-vimeo -->
  <div class="col-sm-7 middle-col col-sm-offset-3">
    <iframe src="https://player.vimeo.com/video/<?php echo $content->vimeoid() ?>" width="690" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  </div>

  <div class="col-sm-2 caption">
    <p><?php echo $content->vimeocaption()->kirbytextRaw() ?></p>
  </div>
  <!-- ./content-vimeo -->