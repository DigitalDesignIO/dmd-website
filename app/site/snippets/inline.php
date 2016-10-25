
	<?php 
		$filename = kirby()->roots()->assets() . DS . 'css' . DS . 'inline.css';

		if (file_exists($filename)) 
		{
			echo '<style>';
			echo (file_get_contents( $filename ));
			echo '</style>';
		}
	?>
