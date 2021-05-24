<?php

   $name = $_POST{'name'};
   $email_visitors = $_POST{'email'};
   $message = $_POST['message'];

   $to = "littlekidandco@gmail.com";

   $email_subject = "New mail from website";


   $email_body = "Name =". $name. "\r\n email = " .$email_visitors. "\r\n message =" .$message ." ;



    
    $headers = "From: rajshreevats42@gmail.com" . "\r\n" .
    "CC: jharuhi379@gmail.com";


    $headers = "Reply-To: $email_visitors\r\n";

    mail ("$to" , $email_subject, $email_body,$headers);
    

    header("location: thankyou.html");

    
?>


