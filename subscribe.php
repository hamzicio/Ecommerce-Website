<?php

if($_POST)
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message="Hello Thankyou For Subscribing";

	mail("hamza.ashfaque2012@gmail.com","email from :".$email,$message);

}

?>