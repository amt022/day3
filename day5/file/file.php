<?php
// w write
// r reading
// a appending
if(isset($_POST['name'])){
    $name =$_POST['name'];
    if(!empty($name)){
        $handle =fopen('names.txt','a');
        fwrite($handle,$name."\n");
        fclose($handle);
        echo 'Current names in file: ';
        $readin = file('names.txt');
        $count =1;
        $readinCount = count($readin);
        foreach($readin as $fname){
            echo trim($fname);
            if($count < $readinCount){
                echo ', ';
            }
            $count++;
        }
    }else {
        echo 'Please type a name.';
    }
}

?>


<form action = 'file.php' method='Post'>
    <input type='text' name='name'><br><br>
    <input type='submit'name='Submit'>
</from>