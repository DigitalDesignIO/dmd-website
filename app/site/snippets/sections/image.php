<?php $picture = $image->toFile();

  echo '<img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
    data-src="' . $picture->url() .'"
    alt="' . $picture->name() .'"
    width="' . $picture->width() .'"
    height="' . $picture->height() .'"
    class="' . $class . '"
  >';