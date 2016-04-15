	
	  <!-- ./content-block -->
	  <div class="row">
	    <div class="medium-12 columns"><h4><?php echo $data->title()->html() ?></h4></div>
	    <div class="medium-12 columns"><h5><?php echo $content->headline()->html() ?></h5></div>
	  </div>

	  <div class="row content flex">
	    <div class="medium-offset-3 medium-7 columns">
	      <?php echo $content->text()->kirbytext() ?>
	    </div>
	    <div class="medium-2 columns">
	      <p class="img-caption">
	        <?php echo $content->imagecaption()->kirbytextRaw() ?>
	      </p>
	    </div>
	  </div>
	  <!-- ./content-block -->


	  <?php foreach($content->builder()->toStructure() as $content): ?>

	    <?php snippet('sections/' . $content->_fieldset(), array('content' => $content)) ?>
	    
	  <?php endforeach ?>