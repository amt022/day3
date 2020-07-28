<?php
if(isset($_POST['password'])&&!empty($_POST['password'])&&!empty($_POST['confirmpassword'])){
    $password = $_POST['password'];
    if($_POST['password']==$_POST['confirmpassword']){
        echo 'Entered password is correct';
    }
    else
    echo 'Entered password is incorrect';
}
    
else
    echo 'Fill is required';

?>

<form action='index.php' method='POST'>
    Password:<br>
    <Input type='password' name='password'><br><br>
    Confirm Password:<br>
    <Input type='password' name='confirmpassword'><br><br>
    <input type='submit' value='Submit'>
</form>