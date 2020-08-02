<?php
 require 'connect.inc.php';
 require 'core.inc.php';
 
 if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
   echo 'You are logged in.';

 }else {

 include 'loginform.inc.php';

 }
?>