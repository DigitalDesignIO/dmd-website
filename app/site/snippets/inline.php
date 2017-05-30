
	<?php
		// this snippet includes the content of the inline.css file located in the asset folder after building the project via npm run build
		$filename = kirby()->roots()->assets() . DS . 'css' . DS . 'inline.css';

		if (file_exists($filename))
		{
			echo '<style>';
			echo (file_get_contents( $filename ));
			echo '</style>';
		}
	?>
