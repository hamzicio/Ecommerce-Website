<?php
require ("conn.php");
session_start();

if(isset($_POST['login']))
{

$e= $_POST['email'];
$p= $_POST['password'];



$sql="SELECT * FROM admin WHERE email='$e' AND password='$p'";
$query=mysqli_query($conn,$sql);

if(mysqli_num_rows($query)>0)
{
    $_SESSION['sett']=1;
    echo' <script type="text/javascript">window.location.href="admin.php"</script>';
}
else
{
	$_SESSION['sett']=2;
echo '<script type="text/javascript">alert("Incorrect Credentials")</script>';
echo '<script type="text/javascript">window.location.href="adminlogin.php"</script>';

}
}

?>