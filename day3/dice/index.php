<?php

// $rand = rand();
// $maxRand = getrandmax();
// echo $rand.'/'.$maxRand;

if(isset($_POST['roll'])){
    $rand = rand(1,6);
    echo $rand;
}

?>


<form action ="index.php" method ='Post'>
    <input type ='submit' name = 'roll' value ='Roll dice.'>
</form>    