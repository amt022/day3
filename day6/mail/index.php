<?php

 $to ='amtece022@gmail.com';
 $subject='This is email';
 $body='This is a testt email';
 $headers='From:ashish.tri1997@gmail.com';

if(mail($to,$subject,$body,$headers)){
   echo 'Email has been sent.'; 
}else{
    echo 'There was an error sending the email.';
}

?>