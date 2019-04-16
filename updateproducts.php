 <?php 

  session_start();
require("conn.php");

  // Initialize message variable



  // If upload button is clicked ...
if (isset($_POST['upload'])) {

    // Get image name
    $image = $_FILES['image']['name'];
    $name= $_POST["name"];
    $category=$_POST["category"];
    $price=$_POST["price"];
    $description=$_POST["description"];

      // Get text
    // image file directory
    $target = "images/products/".basename($image);

    $sql = "INSERT INTO  product (name,image,description,price,category) VALUES ('$name','$image','$description','$price','$category')";

    $succ=mysqli_query($conn, $sql);


if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  }


?>
 <script type="text/javascript">alert("Product Added")</script>
<script type="text/javascript">window.location.href="admin.php"</script> 