<?php
	kirbytext::$tags['arrow'] = array(
		'html' => function($tag) {
			return
				'<div class="small-2 medium-3 columns icons">
				<img src="' . url('assets/images/arrow.svg') . '" alt="list-arrow">
				</div><div class="small-10 medium-9 columns text">'. $tag->attr('arrow').'</div>';
		}
	);
?>