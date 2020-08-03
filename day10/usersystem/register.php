<?php
require 'core.inc.php';
require 'connect.inc.php';
$con = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
if(!loggedin()) {
  if(isset($_POST['username'])&& isset($_POST['password'])&& isset($_POST['password_again'])
  && isset($_POST['firstname'])&& isset($_POST['surname'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];
   $password_again = $_POST['password_again'];
   $firstname = $_POST['firstname'];
   $surname = $_POST['surname'];
   if(!empty($username)&&!empty($password)&&!empty($password_again)&&!empty($firstname)&&!empty($surname)) {
    if($password!=$password_again) {
      echo 'Password do not match.';
    } else {
      //start registration process
      $query = "SELECT `username` FROM `users` WHERE `username`='$username'";
      $query_run = mysqli_query($con, $query);
      
      if(mysqli_num_rows($query_run)==1) {
        echo 'The username '.$username.' already exists.';
      } else {
        $query = "INSERT INTO `users` VALUES('','".$username."','".$password."','".$firstname."','".$surname."')";
       if($query_run= mysqli_query($con, $query)) {
         header('Location: register_success.php');
       }else {
         echo 'Sorry, we could not register you at this time. Try again later.';
       }
       }
      }

   } else {
     echo 'All fields are required.';
   }





  }

?>
<form action="register.php" method="POST">
Username: <br> <input type="text" name="username" value="<?php if(isset($username)) { echo $username;} ?>"><br><br>
Password:<br> <input type="password" name="password"><br><br>
Password again:<br> <input type="password" name="password again"><br><br>
Firstname:<br> <input type="text" name="firstname" value="<?php if(isset($firstname)){ echo $firstname; } ?>"><br><br>
Surname:<br> <input type="text" name="surname"  value="<?php if(isset($surname)){ echo $surname; } ?>"><br><br>
<input type="submit" value="Register">
<?php
} else if(loggedin()) {
  echo 'You are already registered and logged in.';
}
?>