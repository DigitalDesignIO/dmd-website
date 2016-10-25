	<!-- university -->

		<!-- scroll-to anker mark -->
	  <span data-magellan-destination="<?php echo $data->title()->html() ?>">
	  	<a name="<?php echo $data->title()->html() ?>"></a>
	  </span>

		<?php

			// TODO: rework template (hs and environment snippet only differ by their name (mb use data->title()))
			foreach(page('hs')->children()->visible() as $content):
				snippet($content->intendedTemplate(), array('data' => $data, 'content' => $content));
			endforeach

		?>
	