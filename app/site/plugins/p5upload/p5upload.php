<?php
  /**
  * On file upload manipulate the .js file and append 
  * the string 'new p5()' to it and save it.
  */
  kirby()->hook('panel.file.upload', function($file) {

    $filetype = $file->extension();

    if($filetype == 'js') {
      $current = "new p5();\n";
      // Append the string to the file
      $current .= file_get_contents($file);
      // Write the contents back to the file
      file_put_contents($file, $current);
    }
  });
?>
