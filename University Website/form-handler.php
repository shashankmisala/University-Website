<?php
$name = $_POST['name'];
$visitors_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'info@yourwebsite';

$email_subject = 'New Form Submission';

$email_body = "User name : $name.\n ";
              "User name : $visitors_email.\n "
              "User name : $subject.\n "
              "User name : $message.\n "

$to = 'misala.shashank@gmail.com'

$headers = "From:$visitors_email \r\n";

$headers .= "Reply-to: $visitors_email \r\n"

?>