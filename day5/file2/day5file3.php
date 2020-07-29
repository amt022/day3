<?php
$filename_or = 'image.jpg';
$filename = rand(100,999) .md5($filename_or).rand(100,999);
echo $filename;

?>