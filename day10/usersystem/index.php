<?php
 require 'connect.inc.php';
 require 'core.inc.php';


 if(loggedin()) {
   $username = getuserfield('username');
   echo 'You are logged in, '.$username.'. <a href="logout.php">Log out</a>';
   echo getuserfield('username');

 }else {

 include 'loginform.inc.php';

 }
?>