<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'premmpagare27@gmail.com';

$email_subject = 'New Form Submission';

$email_body="User Name: $name.\n"
            "User Email: $visitor_email.\n"  
            "Sbject: $subject.\n"
            "User MESSAGE: $message.\n";
$to = 'pagareprem6@gmail.com';
$headers = "Form: $email_form\r\n";
$headers .="Reply-To: $visitor_email\r\n";

mail($to, $email_subject, $email_body, $headers);
header("location: contact.html");

?>