<?php
$dir = "/images/";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    // List files in images directory
    while (($file = readdir($dh)) !== false){
      echo "filename:" . $file . "<br>";
    }
    rewinddir();
    // List once again files in images directory
    while (($file = readdir($dh)) !== false){
      echo "filename:" . $file . "<br>";
    }
    closedir($dh);
  }
}
?>
