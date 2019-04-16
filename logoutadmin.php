<?php


session_start();
$server= "localhost";
$password = "";
$username= "root";
$data= "mystore";
$conn= mysqli_connect($server,$username,$password,$data);

if(mysqli_connect_errno())
{
    echo "<script>alert('Not connected to DataBase!');</script>";
}

session_destroy();

 echo '<script>
      window.location.href = "admin.php";
      </script>';
      


?>
