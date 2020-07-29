<?php

$filename = 'names.txt';
$handle = fopen($filename,'r');
echo fread($handle,filesize($filename));
$nameArray = array($handle);
echo $nameArray;

$string = impode(', ',$filename);
echo $string;
?>