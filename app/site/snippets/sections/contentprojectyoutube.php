  
  <!-- content-youtube -->
  <div class="col-sm-7 middle-col col-sm-offset-3">
    <iframe src="https://www.youtube.com/embed/<?php echo $content->youtubeid() ?>" width="690" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  </div>

  <div class="col-sm-2 caption">
    <p><?php echo $content->youtubecaption()->kirbytextRaw() ?></p>
  </div>
  <!-- ./content-youtube -->