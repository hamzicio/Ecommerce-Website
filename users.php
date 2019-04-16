<?php
session_start();
require("conn.php");

if($_POST)
{
	$name=$_POST['name'];
	$email=$_POST['email'];
    $password=$_POST['password'];  
    $postalcode=$_POST['postalcode'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];

	$sql = "INSERT INTO users (name, email, password,phone,address,postalcode,city,country)
VALUES ('$name', '$email', '$password','$phone','$address','$postalcode','$city','$country')";
    if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

?>