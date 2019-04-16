<?php


session_start();

require("conn.php");

if(mysqli_connect_errno())
{
    echo "<script>alert('Not connected to DataBase!');</script>";
}


$_SESSION["set"]=2;
session_destroy();

 echo '<script>
      window.location.href = "index.php";
      </script>';

?>
