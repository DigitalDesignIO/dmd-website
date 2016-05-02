<?php

	kirbytext::$tags['image'] = array(
		'html' => function($tag) {
			return 
			'<figure>
				<img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
				data-src="'
					.$tag->page()->uri() . DS 
					.$tag->attr('image').
				'" alt="'
					.$tag->attr('image').
				'">
			</figure>';
			}
	);

?>