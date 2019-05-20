<?php

if(isset($_POST['submit']))
{

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$admin = "wajiha1234javed@gmail.com";

	$headers = "Reply-to: $email";
	mail($admin,$message,$headers);

}

?>