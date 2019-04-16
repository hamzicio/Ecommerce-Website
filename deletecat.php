 <?php 

  session_start();
require("conn.php");

  // Initialize message variable

    // Get image name
  
    $id=$_GET['id'];

      // Get text
    // image file directory

    $sql = "DELETE  FROM   categories WHERE id='$id'";

    $succ=mysqli_query($conn, $sql);





?>
 <script type="text/javascript">alert("Category Deleted")</script>
<script type="text/javascript">window.location.href="admin.php"</script> 