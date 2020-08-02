<?php
$con = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
if(isset($_POST['username'])&&isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  if(!empty($username)&&!empty($password)) {
    $query = "SELECT 'id' FROM 'users' WHERE 'username'='$username' AND 'password'='$password'";
     if($query_run = mysqli_query($con,$query))  {
      $query_nun_rows = mysql_num_rows($query_run);
      if($query_num_rows==0){
        echo'Invalid username/password combination.';
      }else if($query_num_rows==1){
        $user_id = mysqli_result($query_run, 0, 'id');
        $_SESSION['user_id']=$user_id;
        header('Location: index.php');
      }


     }
  }else {
    echo 'You must supply a username and password.';
  }
  }

?>
<form action ="index.php"<?php echo $current_file;?> method="POST">
Username: <input type="text" name="username"><br><br> Password: <input type="password" name="password"><br><br>
<input type="submit" value="Log in">
</form>

