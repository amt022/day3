<?php
if(isset($_POST['submit'])){

    $name = $_FILES['file']['name'];

    $extension = strtolower(substr($name, strpos($name,'.')+1));
    
    $size =$_FILES['file']['size'];
    $type =$_FILES['file']['type'];
    $maxSize =2097152;
    $tmp_name =$_FILES['file']['tmp_name'];
    // echo $name.'<br>'.$size.'<br>'.$type.'<br>'.$tmp_name;
    
    if(isset($name)){
        if(!empty($name)){
            $location ='uploads/';
    
            if(($extension=='jpg'|| $extension=='jpeg')&& $type=='image/jpeg'&&$size<=$maxSize){
                if(move_uploaded_file($tmp_name, $location.$name)){
                    echo 'Uploaded!';
                }else{
                    echo 'There was an error.';
                }
                }else{
                    echo 'File must be jpg/jpeg and must be 2mb or less.';
                }
            }
    }



}


?>

<form action='upload.php' method='POST' enctype='multipart/form-data'>
    <input type='file' name='file'><br><br>
    <input type='submit' name='submit' value='Submit'>
</form>