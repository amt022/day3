<?php
$offset = 0 ;
if(isset($_POST['userInput']) && isset($_POST['searchfor']) && isset($_POST['replacewith'])){
    $text = $_POST['userInput'];
    $search = $_POST['searchfor'];
    $replace = $_POST['replacewith'];

    $searchLength = strlen($search);

    if(!empty($text)&&!empty($search)&&!empty($replace)){
          while($strpos=strpos($text,$search,$offset)){
              $offset = $strpos + $searchLength;
              $text =substr_replace($text,$replace,$strpos, $searchLength);
            }
          echo $text;
    }else {
        echo 'Please fill in all fields.';
    }
}

?>
<hr>
<form action = 'index.php' method='post'>
    <textarea name="userInput" rows ='6' cols='30'></textarea><br><br>
    Search for: <br>
    <input type ='text' name='searchfor'><br><br>
    Replace with:<br>
    <input type ='text' name='replacewith'><br><br>
    <input type ='submit' value ='Find and Replace'>
</form>