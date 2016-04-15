
    <!-- team-wrapper -->
    <div class="team-wrapper">
      <!-- team -->
      
      <!-- content block -->
      <div class="row">
        <div class="medium-12 columns"><h4><?php echo $data->title()->html() ?></h4></div>
        <div class="medium-12 columns"><h5><?php echo $content->headline()->html() ?></h5></div>
      </div>

      <?php foreach($content->builder()->toStructure() as $content): ?>

      	<!-- <?php echo $content->picture() ?> -->

        <?php snippet('sections/' . $content->_fieldset(), array('content' => $content)) ?>
        
      <?php endforeach ?>


      <!-- ./team -->
    </div>
    <!-- ./team-wrapper -->

  <!-- ./hochschule -->

	  