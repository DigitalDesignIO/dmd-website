  <picture>
    <source srcset="<?php echo $content->picture()->toFile()->focusCrop(1920, 960)->url(); ?>" media="(min-width: 1200px)">
    <source srcset="<?php echo $content->picture()->toFile()->focusCrop(1024, 768, 80)->url(); ?>" media="(min-width: 768px)">
    <source srcset="<?php echo $content->picture()->toFile()->focusCrop(375, 600, 80)->url(); ?>" media="(min-width: 300px)">
    <img srcset="<?php echo $content->picture()->toFile()->focusCrop(1920, 960)->url(); ?>" alt="<?php echo $content->caption()->kirbytextRaw() ?>">
  </picture>

  <div class="orbit-caption"><?php echo $content->caption()->kirbytextRaw() ?></div>
