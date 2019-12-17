<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_form = 'a.danilinas@gmail.com';

$email_subject = "News From Submission";

$email-body = "user name: $name.\n".
                "user email: $visitor_email.\n".
                   "user message: $message.\n". 

$to = "driucha999@gmail.com";

$headers = "form: $email_from \r\n";

$headers ="reply-to: $visitor_email \r\n";

mail($to,$email_subject;$email_body,$headers);

header("location: contact.html");

?>