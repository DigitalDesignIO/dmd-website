
	<!-- footer -->
	<div class="row footer">
	  <div class="medium-offset-3 medium-4 columns">
	    <div class="heading"><?php echo page('footer')->contact()->html() ?></div>
	    <?php echo page('footer')->secretaryText()->kirbytext() ?>

	    <div class="heading">Find us on</div>
	    <a href="https://www.facebook.com/digitaldesign.de" target="_blank"><i class="icon icon-facebook-rect"></i></a>
			<a href="https://www.instagram.com/digitalmediadesign.io/" target="_blank"><i class="icon icon-instagram"></i></a>
			<a href="https://github.com/DigitalDesignIO/dmd-website" target="_blank"><i class="icon icon-github"></i></a>
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
