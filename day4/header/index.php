<?php ob_start();?>

<h1>My Page </h1>

<?php
$ip_address = $_SERVER['REMOTE_ADDR'];
echo $ip_address;

?>


<?php 
$render_page = 'http://google.co.in';
$redirect = false;

if($redirect == true)
    header('Location: '.$render_page );

ob_end_flush();
?>
