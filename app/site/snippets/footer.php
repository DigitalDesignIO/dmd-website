  
	<!-- footer -->
	<div class="row footer">
	  <div class="medium-offset-3 medium-4 columns">
	    <div class="heading"><?php echo page('footer')->contact()->html() ?></div>
	    <?php echo page('footer')->secretaryText()->kirbytext() ?>

	    <div class="heading">Social Media</div>
	    <a href="https://www.facebook.com/digitaldesign.de" target="_blank" class="button facebook icon-facebook"></a>
	    <br />
	    <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fdigitaldesign.de&amp;layout=button_count&amp;show_faces=true&amp;action=like&amp;colorscheme=light" style="width:300px;height:20px;" id="lkbtn" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
	    <br /> 
	  </div>
	  <div class="medium-3 columns end">
	    <div class="heading"><?php echo page('footer')->impressum()->html() ?></div>
	    <?php echo page('footer')->impressumText()->kirbytext() ?>
	    
	  </div>
	</div>
	<!-- ./footer -->	
	
	<!-- build:js(app) scripts/vendor.js defer -->
	<script src="scripts/modernizr.js"></script>
	<script src="scripts/bootstrap.min.js"></script>
	<script src="scripts/picturefill.min.js"></script>
	<script src="scripts/foundation.js"></script>
	<script src="scripts/foundation.orbit.js"></script>
	<script src="scripts/foundation.magellan.js"></script>
	<script src="scripts/jquery.cookie.js"></script>
	<script src="scripts/fastclick.js"></script>
	<script src="scripts/custom.js"></script>
	<!-- endbuild -->
	
</body>
</html>