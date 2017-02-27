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

	<!-- build:js(app) scripts/vendor_projects.js async -->
	<?php echo js('assets/scripts/vendor/bootstrap.min.js', false); ?>
	<!-- endbuild -->

</body>
</html>