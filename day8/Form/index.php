<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db ='a_database';
$conn_error = 'Could not connect.';
$conn = mysqli_connect($host, $user, $password, $db);

?>
<form action='index.php' method='GET'>
    choose a food type:
    <select name='uh'>
    <option value='u'>Unhealthy</option>
    <option value='h'>Healthy</option>
    </select><br><br>
    <input type='submit' value='Submit'>
</form>

<?php
// $connection = mysqli_connect('localhost','root','','a_database');
if(isset($_GET['uh']) && !empty($_GET['uh'])){
    $uh = strtolower($_GET['uh']);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
    if($uh=='u'){
        $query = "SELECT * FROM `food` WHERE `healthy_unhealthy`='$uh' ORDER BY `id` DESC";

    }else{
        $query = "SELECT * FROM `food` WHERE `healthy_unhealthy`='$uh' ORDER BY `id` DESC";

    }      
    
    if ($result = mysqli_query($conn, $query)) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo   "food: " . $row["food"].  "  calories: ". $row["calories"]. "<br>";
        }
      } else {
        echo "0 results";
      }
}
?>



