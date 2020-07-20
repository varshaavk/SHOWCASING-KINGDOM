<?php
	$name=$_POST['name'];
	$from = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$to="<shreelakshmiengg2004@gmail.com>";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: '.$from . "\r\n";
	mail($to,$subject,$message,$headers);
	echo "<h1 style='padding-top: 250px;'>Thank you for sending the reports.<a href='index.html'>Click here</a> to go back.</h1>";
	
?>