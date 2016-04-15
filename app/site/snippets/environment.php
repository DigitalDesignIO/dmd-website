	
	<!-- environment -->

		<!-- scroll-to anker mark -->
	  <span data-magellan-destination="<?php echo $data->title()->html() ?>">
	  	<a name="<?php echo $data->title()->html() ?>"></a>
	  </span>

		<?php

			foreach(page('environment')->children()->visible() as $content):
				snippet($content->intendedTemplate(), array('data' => $data, 'content' => $content));
			endforeach

		?>
	