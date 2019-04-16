 <?php 

  session_start();
require("conn.php");

  // Initialize message variable

    // Get image name
 $userid=$_SESSION['id'];
  
    $id=$_GET['id'];

      // Get text
    // image file directory

    $sql = "DELETE  FROM  cart WHERE id='$id'";

    $succ=mysqli_query($conn, $sql);





?>
<script>
function goBack() {
    window.history.go(-1);
}
</script>
 <script type="text/javascript">alert("Product Deleted")</script>
<script>goBack();</script>