<form action = "index.php" method="GET">
    Name: <input type="text" name="userName"><br><br>
    <input type="submit" value = "Submit">

<br>

<?php

if(isset($_GET['userName'])&& !empty($_GET['userName'])){
    $userName = $_GET['userName'];
    $uppercase = strtoupper($userName);
    $lowercase = strtolower($userName);
    echo '<br>';
    if ($userName==$lowercase)
        echo 'Entered UserName is in lower case. <br> ';
    echo $userName .'<br>';
    echo $lowercase .'<br>';
    echo $uppercase .'<br>';
}

?>



<br><br>

<?php
$offset =0;
$find = $_GET['userName'];
$findLength = strlen($find);
$string = 'This is a string, and it is an example.';
while ($string_pos=strpos($string,$find,$offset)){
    echo '<strong>'.$find.'</strong> found at '. $string_pos.'<br>';
    $offset = $string_pos + $findLength;
}
?>


<br><br>

<?php
$line = 'This part don\'t search. This part search.';
$string_new = substr_replace($line,'Ashish',29,4);
echo $string_new .'<br>';
?>

<br>

<?php
// str_replace(looking for, to replace, string)
$find1 = array('is','string','example');
$replace = array('IS','STRING','');
$string1 = "This is a string, and is an example.";
$newString = str_replace($find1,$replace,$string1);
echo $newString;
?>