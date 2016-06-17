<div class="col-sm-6 middle-col col-sm-offset-3">
  
  <?php 
    // init variables
    $iframeUID = uniqid(); 
    $matches = array();
    $file = $content->pfile()->toFile()->url();
    $fileContent = file_get_contents($file);

    // get canvas height out of the js file via regex matching
    $regex = '/createCanvas\((.*),\s?(.*)\)/';
    preg_match ($regex , $fileContent, $matches);
    $height = (int) $matches[2];
    
    //  Default value if regex could not find a height 
    if(getType($height) !== 'integer' || $height === 0) {
      $height = 600;
    }
  ?>
  
  <iframe id="<?php echo ($iframeUID) ?>" scrolling="no" seamless="seamless" frameBorder="0" width="100%" height="<?php echo($height); ?>" src="<?php echo url('assets/p5/p5-iframe-template.html'); ?>"></iframe>

  <script> 
    document.addEventListener("DOMContentLoaded", function(event) {
      var iframe = document.getElementById("<?php echo ($iframeUID) ?>");
      console.log(iframe.contentWindow.document.readyState);
        iframe.onload = function() {
          if(iframe.contentWindow.document.readyState == 'complete') {
            var userScript = iframe.contentWindow.document.createElement('script');
            userScript.type = 'text/javascript';
            userScript.src = '<?php echo($file) ?>';
            userScript.async = false;
            iframe.contentWindow.document.body.appendChild(userScript);
          }
        }
    });
  </script>
</div>

<div class="col-sm-3 caption">
  <p><?php echo $content->caption()->kirbytextRaw() ?></p>
</div>
