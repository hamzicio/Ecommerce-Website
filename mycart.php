<?php
session_start();
$_SESSION["set"]=2;
require("conn.php");

if(mysqli_connect_errno())
{
    echo "<script>alert('Not connected to DataBase!');</script>";
}
?>

<!doctype html>
<html class="no-js" lang="en">

<head>

<style type="text/css">
   
@import url(https://fonts.googleapis.com/css?family=Lato:300,400,700);
@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css);
*, *:before, *:after {
  box-sizing: border-box;
}

body {
  font: 14px/22px "Lato", Arial, sans-serif;
  background: #6394F8;
}

.lighter-text {
  color: #ABB0BE;
}

.main-color-text {
  color: #6394F8;
}

nav {
  padding: 20px 0 40px 0;
  background: #F8F8F8;
  font-size: 16px;
}
nav .navbar-left {
  float: left;
}
nav .navbar-right {
  float: right;
}
nav ul li {
  display: inline;
  padding-left: 20px;
}
nav ul li a {
  color: #777777;
  text-decoration: none;
}
nav ul li a:hover {
  color: black;
}

.container {
  margin: auto;
  width: 80%;
}

.badge {
  background-color: #6394F8;
  border-radius: 10px;
  color: white;
  display: inline-block;
  font-size: 12px;
  line-height: 1;
  padding: 3px 7px;
  text-align: center;
  vertical-align: middle;
  white-space: nowrap;
}

.shopping-cart {
  margin: 20px 0;
  float: right;
  background: white;
  width: 320px;
  position: relative;
  border-radius: 3px;
  padding: 20px;
}
.shopping-cart .shopping-cart-header {
  border-bottom: 1px solid #E8E8E8;
  padding-bottom: 15px;
}
.shopping-cart .shopping-cart-header .shopping-cart-total {
  float: right;
}
.shopping-cart .shopping-cart-items {
  padding-top: 20px;
}
.shopping-cart .shopping-cart-items li {
  margin-bottom: 18px;
}
.shopping-cart .shopping-cart-items img {
  float: left;
  margin-right: 12px;
}
.shopping-cart .shopping-cart-items .item-name {
  display: block;
  padding-top: 10px;
  font-size: 16px;
}
.shopping-cart .shopping-cart-items .item-price {
  color: #6394F8;
  margin-right: 8px;
}
.shopping-cart .shopping-cart-items .item-quantity {
  color: #ABB0BE;
}

.shopping-cart:after {
  bottom: 100%;
  left: 89%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-bottom-color: white;
  border-width: 8px;
  margin-left: -8px;
}

.cart-icon {
  color: #515783;
  font-size: 24px;
  margin-right: 7px;
  float: left;
}

.button {
  background: #6394F8;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  display: block;
  border-radius: 3px;
  font-size: 16px;
  margin: 25px 0 15px 0;
}
.button:hover {
  background: #729ef9;
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}


@media only screen and (max-width: 700px) {
    .footer-area {
        margin-left: -150px;
    }
}


</style>
    

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Style Can't Wait - An Online Store</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style.css">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    
    <!-- all css here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" href="lib/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="lib/css/preview.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/bundle.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="script.js"></script>
    </head>
    <div class="js">
<body>


<?php

$userid=$_SESSION["id"];
$query= "SELECT * FROM cart WHERE userid='$userid'";
$sql=mysqli_query($conn,$query);
$totalp=0;
$productid=0;
if(mysqli_num_rows($sql)>0)
{
  while($row=mysqli_fetch_assoc($sql))
  {
    $totalp=$totalp + $row['totalprice'];
  }
}
else
{
  $totalp=0;
}

?>


<div class="container">
  <div class="shopping-cart">
  
    <div class="shopping-cart-header">
      <i class="fa fa-shopping-cart cart-icon"></i><span class="badge">3</span>
      <div class="shopping-cart-total">
        <span class="lighter-text">Total:</span>
        <span class="main-color-text"><?php echo $totalp; ?></span>
      </div>
    </div> <!--end shopping-cart-header -->

    <ul class="shopping-cart-items">
      <?php
    $query= "SELECT * FROM cart WHERE userid='$userid'";
$sql=mysqli_query($conn,$query);
if(mysqli_num_rows($sql)>0)
{
  while($row=mysqli_fetch_assoc($sql))
  {
    $productid=$row['productid'];

    
      $queryy= "SELECT * FROM product WHERE id='$productid'";
         $sqli=mysqli_query($conn,$queryy);
         if(mysqli_num_rows($sqli)>0)
        {
        while($roww=mysqli_fetch_assoc($sqli))
        {
       echo '<li class="clearfix">';
            echo "<img src='images/products/".$row['image']."'>";
        echo '<span class="item-name">';echo $roww['name']; echo'</span>
        <span class="item-price">'; echo $roww['price']; }}echo'</span>
        <span class="item-quantity"> Quantity: '; echo $row['quantity']; echo'</span>
      </li>

    
    ';
  }}

  ?>
</ul>
    <a href="#" class="button">Checkout</a>
  </div> <!--end shopping-cart -->
</div> <!--end container -->


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




      <footer class="footer-area">
            <div class="container">
                <div class="footer-top pt-60 pb-30" style="margin-left: 150px">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-lg-4">
                            <div class="footer-widget mb-30">
                                <div class="footer-logo">
                                    <a href="index.php">
                                        <img src="assets/img/logo/logo-black.png" alt="">
                                    </a>
                                </div>
                                <div class="widget-info">
                                    <p>
                                        <i class="pe-7s-map-marker"> </i>
                                        <span>
                                            184 Main Rd E, St Albans
                                            <br>
                                            <span class="location">VIC 3021, Australia</span>
                                        </span>
                                    </p>
                                    <p>
                                        <i class="pe-7s-mail"></i>
                                        <span>
                                            <a href="mailto:contact@company.com">contact@company.com</a>
                                        </span>
                                    </p>
                                    <p>
                                        <i class="pe-7s-call"></i>
                                        <span>+001 2233 456 </span>
                                    </p>
                                </div>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
              </div>
                        <div class="col-md-2 col-sm-2 col-lg-4">
                            <div class="footer-widget mb-30">
                                <div class="footer-title">
                                    <h3>services</h3>
                                </div>
                                <div class="widget-text">
                                    <ul>
                                        <li><a href="#">About Us </a></li>
                                        <li><a href="#">Returns </a></li>
                                        <li><a href="#">Shipping </a></li>
                                        <li><a href="#">Track Orders </a></li>
                                        <li><a href="#">Contact Us  </a></li>
                                        <li><a href="#">Returns </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                   
                        <div class="col-md-3 col-sm-3 col-lg-4">
                            <div class="footer-widget mb-30">
                                <div class="footer-title">
                                    <h3>Company</h3>
                                </div>
                                <div class="widget-text">
                                    <ul>
                                        <li><a href="#">Return Policy </a></li>
                                        <li><a href="#">Privacy Policy </a></li>
                                        <li><a href="#">Product Warranty </a></li>
                                        <li><a href="#">Privacy Policy </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <div class="footer-bottom ptb-20">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-12">
                            <div class="copyright">
                                <p>
                                    Copyright © 2018
                                    <a href="https://www.facebook.com/hamza.shaikh97">Hamza Shaikh</a>
                                    . All Rights Reserved.
                                </p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                </div>
            </div>
        </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- all js here -->
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.meanmenu.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
    <script src="lib/js/jquery.nivo.slider.js"  ></script>
    <script src="lib/home.js"  ></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</div>
    <script type="text/javascript">
jQuery(document).ready(function($) {  

// site preloader -- also uncomment the div in the header and the css style for #preloader
$(window).load(function(){
    $('#preloader').fadeOut('xslow',function(){$(this).remove();});
});

});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
    $('#hmm').on('click', function () {
        $('#mycart').show();
        return false;
    })
     $('#close').on('click', function () {
        $('#mycart').hide();
        return false;
    })
</script>

</html>
    