
	<!-- footer -->
	<div class="row footer">
	  <div class="medium-offset-3 medium-4 columns">
	    <div class="heading"><?php echo page('footer')->contact()->html() ?></div>
	    <?php echo page('footer')->secretaryText()->kirbytext() ?>

	    <div class="heading">Social Media</div>
	    <a href="https://www.facebook.com/digitaldesign.de" class="button facebook icon-facebook"></a>
	    <br />
	    <div class="fb-like" data-href="https://www.facebook.com/digitaldesign.de" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false"></div>
	    <br />
	  </div>
	  <div class="medium-4 columns end">
	    <div class="heading"><?php echo page('footer')->impressum()->html() ?></div>
	    <?php echo page('footer')->impressumText()->kirbytext() ?>

	  </div>
	</div>
	<!-- ./footer -->

	<!-- scripts -->
	<?php echo js('assets/scripts/vendor/vendor.js', false); ?>
	<?php echo js('assets/scripts/defer/defer.js', true); ?>
	<!-- endscripts -->

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
