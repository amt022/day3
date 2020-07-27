<?php
$time = time();
$actualTime = date('d M Y @ H:i:s',$time);
$modifiedTime = date('d M Y @ H:i:s', strtotime('+1 week'));

echo 'current date/time is '. $actualTime.'<br>';
echo 'modified date/time is '. $modifiedTime;
?>