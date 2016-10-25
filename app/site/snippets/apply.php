	<!-- apply -->
		<!-- scroll-to anker mark -->
	  <span data-magellan-destination="<?php echo $data->title()->html() ?>">
	  	<a name="<?php echo $data->title()->html() ?>"></a>
	  </span>

		<?php
			foreach(page('apply')->children()->visible() as $content):
				snippet($content->intendedTemplate(), array('data' => $data, 'content' => $content));
			endforeach
		?>

		<div class="row">
			<div class="medium-offset-2 medium-8 small-12 columns end">
				<a href="https://www.lsf.hs-weingarten.de/qisserver/servlet/de.his.servlet.RequestDispatcherServlet?state=wimma&stg=n&imma=einl&language=de" class="button-apply button round" target="_blank">Jetzt bewerben!</a>
			</div>
		</div>
	<!-- ./apply -->