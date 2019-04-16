<?php

require("conn.php");


if($_POST)
{
	
	$email=$_POST['email'];
	$message="Thankyou For Subscribing";  
    $sql = "INSERT INTO `subscribers` (`email`) VALUES ('$email')";
	mysqli_query($conn, $sql);      
	mail($email,"STYLECANTWAIT",$message);
}

?>