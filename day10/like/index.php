<?php

require 'connect.php';
if(isset($_POST['name'])){
    $name = $_POST['name'];
    if(!empty($name)){
        $query = "SELECT `name` FROM `names` WHERE `name` LIKE '%".$name."%' ";
        $query_run= mysqli_query($conn,$query);

        if(mysqli_num_rows($query_run)>=1){
            echo 'Found Result: '.'<br>';
            while ($query_row = mysqli_fetch_assoc($query_run)){
                echo $query_row['name'].'<br>';
            }
        }else{
            echo 'No result found';
        }
    }
}

?>

<form action= 'index.php' method='POST'>
    Name: <input type ='text' name ='name'><br><br>
    <input type='submit' value='Submit'>
</form>