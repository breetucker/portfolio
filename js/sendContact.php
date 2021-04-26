<?php

if(isset($_POST["submit"])){
$to = 'contact@itbree.com';
$mailheader = "From: ".$_POST["email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n";
$mailheader .= "Content-Type: text/html; charset=iso-8859-1\r\n";
$message_body = "Name: ".$_POST['fullName']."";
$message_body .= "Number: ".$_POST['contactNumber']."";
$message_body .= "Email :".$_POST['email']."";
$message_body .= "Message :".$_POST['contactMessage']."";
mail($to,$message_body, $mailheader);
}
?>
<h1> Message Sent! </h1>