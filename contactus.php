<?php

require("conn.php");



if($_POST)
{
	
	$email=$_POST['email'];
	$message=$_POST['message'];
	$name=$_POST['name'];


	$sql = "INSERT INTO `messages`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";


	mysqli_query($conn, $sql);



}

?>