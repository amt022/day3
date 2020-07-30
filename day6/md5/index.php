<?php

// $string = 'password';
// $string_hash=md5($string);
// echo $string_hash;

if(isset($_POST['password']) && !empty($_POST['password'])){
    $user_password=md5($_POST['password']);

    $filename='hash.txt';
    $handle=fopen($filename,'r');
    $file_password=fread($handle,filesize($filename));

    if($user_password==$file_password){
        echo'password ok!';

    }else{
       echo 'Incorrect password.';
    }
}else{
    echo 'Please enter a password';
}
?>


<form action='index.php' method='Post'>
    Password:<input type='password' name='password'><br><br>
    <input type='submit' name='submit' value='Submit'>
</form>