<?php 
if (!empty($_POST['send'])) {
 	# code...
 	$name = $_POST['name'];
 	$email = $_POST['email'];
 	$message = $_POST['message'];

 	$toEmail = "dev.jordanempire@gmail.com";
 	$mailHeaders = "From: " . $name . "<" . $email .">\r\n";
 	if (mail($toEmail, $mailHeaders, $message)){
 		$message = "Your contact information is recieved successfully.";
 		$type = "success";
 	}
 } 
 require_once "contact.php"; 
 ?>