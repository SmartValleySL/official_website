<?php


$name = $_POST['cf-name'];
$email = $_POST['cf-email'];
$contact = $_POST['cf-contact'];
$org= $_POST['cf-org'];
$message = $_POST['cf-message'];
$formcontent=" NEW FEEDBACK FROM CONTACT US \n\n *| Name: $name  \n *| E-Mail: $email \n *| Phone Number: $contact \n *| Organization: $org  \n\n *| Message: $message \n\n\n ***Please be informed this information are automatically sent from 'Contact Us' area of the website. ***";
$recipient = "hello@smartvalley.lk";
$subject = "New Smart Valley Message From $name";
$headers = "SV Mailer";
mail($recipient, $subject, $formcontent, $headers) or die("Error!");
header("location: ../home.php#?msg");
echo "Thank You very much! We are redirecting to the successful page...";
?>