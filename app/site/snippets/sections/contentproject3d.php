   <!-- content-3d-model -->
  <div class="col-sm-6 middle-col col-sm-offset-3">
      
    <iframe width="630" height="450" src="<?php echo $content->sketchfabmodel() ?>/embed" 
        frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" onmousewheel="">
    </iframe>
  </div>

  <div class="col-sm-3 caption">
    <p><?php echo $content->modelcaption()->kirbytextRaw() ?></p>
  </div>
  <!-- ./content-3d-model -->