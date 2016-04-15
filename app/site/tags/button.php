<?php

	kirbytext::$tags['button'] = array(
	  'attr' => array(
	    'url', 'text', 'size',
	  ),
	  'html' => function($tag) {

	    $url     = $tag->attr('url');
	    $text    = $tag->attr('text');
	    $size		 = $tag->attr('size');

	    if($size == 'm') {
	    	$size = '';
	    } 
	    elseif($size === 'xl') {
	    	$size = 'button-apply';
	    }

	    return '<p class="text-center">
	           	<a class="'.$size.' button round" href="'.$url.'" title="'.$text.'">'.$text.'</a></button>
	        	 </p>';

	    // return '<a href="' . $url . '/' . $article . '">' . $text . '</a>';

  });
?>