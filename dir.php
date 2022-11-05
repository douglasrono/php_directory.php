<?php
$d = dir(getcwd());

echo "Handle: " . $d->handle . "<br>";
echo "Path: " . $d->path . "<br>";

while (($file = $d->read()) !== false){
  echo "filename: " . $file . "<br>";
}
$d->close();
?>
