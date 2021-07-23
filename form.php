<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$event = $_POST['event'];
$date = $_POST['date'];
$mobile = $_POST['mobile-no'];
$email_from = 'info@cherishevents.com'
$email_subject = 'New Form Submission'
$email_body = "User Name: $name.\n".
"User Email: $visitor_email.\n".
"Subject: $subject.\n".
"User Message: $message.\n";
$to = 'sparshasakthivel04@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header(
    "Location: contact.html"
);


?>