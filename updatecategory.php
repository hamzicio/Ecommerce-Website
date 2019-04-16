 <?php 

  session_start();
require("conn.php");

  // Initialize message variable



  // If upload button is clicked ...
if (isset($_POST['uploadd'])) {

    // Get image name
  
    $category=$_POST["category"];

      // Get text
    // image file directory

    $sql = "INSERT INTO  categories (name) VALUES ('$category')";

    $succ=mysqli_query($conn, $sql);


}


?>
 <script type="text/javascript">alert("Category Added")</script>
<script type="text/javascript">window.location.href="admin.php"</script> 