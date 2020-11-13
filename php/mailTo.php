<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$formcontent="Name: $name \n Email ID: $email \n Message: $msg";
$recipient = "akash2231999@gmail.com";
$subject = "Mail from website visitor";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "<script type='text/javascript'>alert('Message sent successfully!')</script>";
header("Location: {$_SERVER['HTTP_REFERER']}");
exit;
?>