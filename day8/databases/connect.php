<!-- server : localhost
username : root
password : NULL -->
<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db ='a_database';
$conn_error = 'Could not connect.';
$conn = mysqli_connect($host, $user, $password, $db);

// mysql_connect($host,$user,$password);
// mysql_select_db($db);


?>