<?php
  // Replace the default $maxDimension to meet your needs
  // Read more about Kirby's Panel hooks at https://getkirby.com/docs/panel/developers/hooks
  // Shrink large images on upload

  function resizeImageOnUpload($file, $maxDimension = 1920, $quality = 80) {
    try {
      if ($file->type() == 'image' and ($file->width() > $maxDimension or $file->height() > $maxDimension)) {
        
        // Get original file path
        $originalPath = $file->dir().'/'.$file->filename();
        // Create a thumb and get its path
        $resized = $file->resize($maxDimension,$maxDimension, $quality);
        $resizedPath = $resized->dir().'/'.$resized->filename();
        // Replace the original file with the resized one
        copy($resizedPath, $originalPath);
        unlink($resizedPath);
      }
    } catch(Exception $e) {
      return response::error($e->getMessage());
    }
  }
?>