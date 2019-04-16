<?php
  // Create database connection
  session_start();
require("conn.php");

  // Initialize message variable
  $userid = $_SESSION['id'];


  // If upload button is clicked ...
if (isset($_POST['upload'])) {

    // Get image name
    $image = $_FILES['image']['name'];
      // Get text


    // image file directory
    $target = "images/".basename($image);

  $sql = "UPDATE users SET image='$image'  WHERE id='$userid'";

  mysqli_query($conn,$sql);




    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  }

?>

<script type="text/javascript">window.location.href="profile.php" </script>