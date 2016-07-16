<?php snippet('projectheader') ?>

	<div class="container doc-wrapper">
		<div class="row">
			<div class="col-xs-12">
				<div class="doc-title"><?php echo $page->subheadline()->ktr() ?></div>
				<div class="doc-autor"><?php echo $page->headline()->ktr() ?></div>
			</div>
		</div>
	</div>
	
	<div class="container margin-bottom-200">

		<?php snippet('projectsidebar') ?>

		<div class="row">
			<div class="col-sm-6 middle-col col-sm-offset-3">
				<?php 
					
					if($page->hasVisibleChildren()) {
						echo $page->children()->visible()->first()->text()->kt();
					}
				?>
			</div>

			<?php
				if($page->hasVisibleChildren()) {
					foreach($page->children()->visible()->first()->builder()->toStructure() as $content) {

						snippet('sections/' . $content->_fieldset(), array('content' => $content));
					}
				}
			?>
		</div>
	</div>
	
	<!--defer loading images (@see: https://varvy.com/pagespeed/defer-images.html -->
	<script>
		function init() {
		var imgDefer = document.getElementsByTagName('img');
		for (var i=0; i<imgDefer.length; i++) {
		if(imgDefer[i].getAttribute('data-src')) {
		imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
		} } }
		window.onload = init;
	</script>
	
</body>
</html>