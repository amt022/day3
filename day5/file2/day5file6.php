<?php

$filename = '313.txt';
$rand = rand(100,999);

if(rename($filename, $rand.'.txt')) {
  echo 'File <strong>'.$filename.'</strong> has been renamed to <strong>' .$rand.'.txt</strong>';
} else {
  echo 'Error renaming.';
}
?>