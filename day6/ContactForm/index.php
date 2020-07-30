<?php

if(isset($_POST['name']) && isset($_POST['email'])&& isset($_POST['text'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $text = $_POST['text'];
    if(!empty($name)&&!empty($email)&&!empty($text)){
        $to ='amtece022@gmail.com';
        $subject='This is email';
        $body=$name."\n".$text;
        $headers='From:'.$email;

        if(@mail($to,$subject,$body,$headers)){
            echo 'Email has been sent.'; 
        }else{
            echo 'There was an error sending the email.';
        }
    }else{
        echo 'All fields are requried';
    }
}


?>

<form action='index.php' method='POST'>
    Name:<br><input type='text' name='name'><br><br>
    Email:<br><input type='email' name='email'><br><br>
    Message:<br>
    <textarea name='text' rows='6' cols='30'></textarea><br><br>
    <input type='submit' name='submit' value='send'>
</form>