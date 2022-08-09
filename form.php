<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@eduford.com';

$email_subject = 'New From Submission';

$email_body = "User Name: $name.\n".
              "User mail: $visitor_email.\n".
              "Subject:  $subject.\n".
              "User Massage: $message .\n";

$to = 'pardeepsdr2525@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

email($to,$email_subject,$email_body,$headers);

header("Location:contact.html");

?>
