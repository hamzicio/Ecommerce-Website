<?php
require("conn.php");


if($conn)
{

if(isset($_POST['email'])  || isset($_POST['password']))
{
  $email=$_POST['email'];
  $password=$_POST['password'];
  

  if(!empty($email) && (!empty($password)))
  {
	
	$email=$_POST['email'];
    $password=$_POST['password'];  
    
	$query=mysqli_query($conn,"SELECT * FROM  users WHERE email='$email' AND password='$password'");
    $que=mysqli_num_rows($query);
        
      
    if($que>0) 
    {
      session_start();  
      $row=mysqli_fetch_assoc($query);  
      $_SESSION["set"] = 1;
      $_SESSION["id"] = $row["id"];
      $_SESSION['name']=$row["name"];
      
          echo '<script>
      window.location.href = "loginsuccess.php";
      </script>';

    }
 else {
 echo '<script>alert("Incorrect Credentials");</script>';
      echo '<script>
      window.location.href = "login.php";
      </script>';
     
}
}
}
}

?>