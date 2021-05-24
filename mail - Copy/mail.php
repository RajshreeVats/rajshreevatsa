<?php

   $name = $_POST{'name'};
   $email_visitors = $_POST{'email'};
   $message = $_POST['message'];


   $email_from = 'jharuhi379@gmail.com';

   $email_subject = "New contact form submission on website";

   $email_body = "User Name: $name.\n".
                    "User Email: $email_visitors.\n".
                         "User message: $message.\n";
                       
   

    $to = "littlekidandco@gmail.com";
    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $email_visitors\r\n";

    mail ("$to" , $email_subject, $email_body,$headers);

    header("location: index.html");

    
?>


