<?
$name = $_POST{'name'};
$email = $_POST{'email'};
$message = $_POST['message'];

$email_message = "

Name: ".$name."
Email: ".$email."
Message: ".$message."

";

mail ("2006508@kiit.ac.in" , "New Message", $email_message);
header("location: ../mail-success.html ");
?>


