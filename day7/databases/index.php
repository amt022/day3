<?php
include 'connect.php';

$query = "Select `food`,`colories` From `food` ORDER BY `id`";
$run = mysqli_query($connection,$query);
if($run == true){
    echo 'Success';
}else{
    echo 'Failed';
}
?>