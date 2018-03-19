  <!-- projects -->

    <!-- scroll-to anker mark -->
    <span data-magellan-destination="<?php echo $data->title()->html() ?>">
      <a name="<?php echo $data->title()->html() ?>"></a>
    </span>

    <!-- ./content-block -->
    <div class="row">
      <div class="medium-12 columns"><h4><?php echo $data->title()->html() ?></h4></div>
      <div class="medium-12 columns"><h5><?php echo $data->headline()->html() ?></h5></div>
    </div>

    <div class="row content flex">
      <div class="medium-offset-3 medium-7 columns">

        <?php echo $data->text()->kirbytext() ?>
        <div class="grid row">

        <?php foreach(page('projects')->children()->visible() as $project):?>
          <div class="medium-12 large-6 columns">
            <figure class="effect-digitaldesign">
              
              <?php if($project->previewimage()->isNotEmpty()): ?>
                <?php echo thumb($project->image($project->previewimage()), array('width' => 355, 'height' => 250, 'crop' => true)); ?>
              <?php endif ?>

              <figcaption>
                <h2><?php echo $project->headline()->kirbytextRaw() ?></h2>
                <p><?php echo $project->subheadline()->kirbytextRaw() ?></p>

                <?php 
                  if($project->hasChildren()) {
                    $projectUrl = $project->children()->visible()->first()->url();
                    echo ('<a href="' . $projectUrl . '">View more</a>');
                  } else {
                    echo ('<a href="'. $project->url() .'">View more</a>');
                  }
                ?>

              </figcaption>
            </figure>
            <?php  ?>
          </div>
        <?php endforeach ?>
      
      <!-- instagramm link tile -->

          <div class="medium-12 large-6 columns">
            <figure class="effect-digitaldesign">
                <img src="https://digitalmediadesign.io/content/1-projects/test/findusoninstagram.png" height="355" width="250" alt="Digital Media Design Logo">
              <figcaption>
                <h2>Instagram</h2>
                <p>There are more projects to discover on instagram.</p>
                <a href="https://www.instagram.com/digitalmediadesign.io/" target="_blank" >View more</a>
              </figcaption>
            </figure>
          </div>

        </div>
      </div>
      <div class="medium-2 columns">
      </div>
    </div>
    <!-- ./content-block -->
