<?php
session_start();
require("conn.php");
$check= $_SESSION['id'];
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

	$sql = "UPDATE  users SET name='$name' , email='$email', password='$password',postalcode='$postalcode',city='$city' , country='$country',address='$address',phone='$phone' WHERE id='$check' ";
    if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

?>


