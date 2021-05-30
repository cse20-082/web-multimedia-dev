<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$country=$_POST['country'];
$objective=$_POST['objective'];
$message=$_POST['message'];

$email_from ='info@yourwebsite.com';

$email_objective ='new form submission';

$email_body="User Name: $name.\n".
            "User Email: $visitor_email.\n".
            "Objective: $objective.\n".
            "User Message: $message .\n";

$to = 'tshepommoloki@gmail.com';

$headers = "From: $email_from\r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_objective,$email_body,$headers);

header("Location: contact.html")
?>