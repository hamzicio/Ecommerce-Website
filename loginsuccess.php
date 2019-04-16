<?php
session_start();
require("conn.php");

if(mysqli_connect_errno())
{
    echo "<script>alert('Not connected to DataBase!');</script>";
}
?>


<!doctype html>
<html class="no-js" lang="en">

<head>
          <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Style Can't Wait - An Online Store</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
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

<style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Lato:300,400,700);
@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css);
*, *:before, *:after {
  box-sizing: border-box;
}


.lighter-text {
  color: #ABB0BE;
}

.main-color-text {
  color: #6394F8;
}



.container {
  margin: auto;
  width: 90%;
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

@media only screen and (max-width: 450px) {
    #labell
    {
        margin-left: -10px;
    }
    #op
    {
        width: 100px;
    }
    .search-input-button2
    {
        width: 100px;
    }
   
}

    </style>
    </head>
    <div class="js">

    <body>

        

        <!-- header start -->
		<header class="header-area home-style-2">
			<div class="header-bottom">
			    <div class="container">
			        <div class="row">
			            <div class="col-md-4 col-sm-3 col-xs-6">
			                <div class="logo">
			                    <a href="index.php">
                                    <img src="assets/img/logo/logo-black.png" alt="">
                                </a>
			                </div>
			            </div>
			            <div class="col-md-8 col-sm-9 col-xs-6">
			                <div class="cart-menu">
                               
                               
			                    
			                    <div class="main-menu f-right">
			                        <nav>
			                            <ul>
			                              
                                            <li class="mega-position"><a href="shop-page.php">Shop</a>
			                                
			                                </li>
                                            <li><a href="#">Categories</a>
                                          <ul class="dropdown">
                                            <?php 
                                            $sql=mysqli_query($conn,"SELECT * FROM categories");
                                            if(mysqli_num_rows($sql)>0)
                                            {

                                            while($row=mysqli_fetch_assoc($sql))
                                            {
                                              echo'<li><a  href="men.php">'; echo $row['name']; echo'</a></li>';                                                                                           
                                           }
                                         }?>
                                          </ul>
                                      </li> 
                                            <li><a href="contact.php">contact</a></li>
                                            <?php 
                                            if($_SESSION["set"]==1)
                                            {
			                                
                                            echo '<li class="mega-position"><a href="profile.php">Welcome  '; echo $_SESSION['name']; echo'</a>
                                            
                                            </li>
                                            <li class="mega-position"><a href="logout.php">Log Out</a>
                                            
                                            </li>';
                                             echo '<li class="mega-position" id="hmm"><a href="#">Cart</a>
                                            
                                            </li>';
                                        }
                                        else
                                        {
                                         
                                            echo '<li class="mega-position"><a href="login.php">Login</a></li>';
                                             echo '<li class="mega-position" id="hmm"><a href="#">Cart</a>
                                            
                                            </li>';  
                                        }
                                         ?>
			                            </ul>
			                        </nav>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
		</header>

    <?php
       if($_SESSION["set"]==1)
{
$userid=$_SESSION["id"];
$query= "SELECT * FROM cart WHERE userid='$userid'";
$sql=mysqli_query($conn,$query);
$totalp=0;
$totalpro=0;
$productid=0;
if(mysqli_num_rows($sql)>0)
{
  while($row=mysqli_fetch_assoc($sql))
  {
    $totalpro+=1;
    $totalp=$totalp + $row['totalprice'];
  }
}
else
{
  $totalp=0;
}

?>


<div class="container" style="position: absolute;z-index: 2">
  <div class="shopping-cart" id="mycart" style="display: none">
  
    <div class="shopping-cart-header" >
      <i class="fa fa-shopping-cart cart-icon" ></i><span class="badge"><?php echo $totalpro; ?></span>
      <div class="shopping-cart-total">
        <span class="lighter-text">Total:</span>
        <span class="main-color-text"><?php echo $totalp; ?></span>
        <span id="close" style="padding-left: 5px;">X</span>
      </div>
         <ul class="shopping-cart-items" style="margin-left: 30px; margin-top: 20px">
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
            echo "<img src='images/products/".$roww['image']."' style=width:20px;height:20px>";
        echo '<span class="item-name">';echo $roww['name']; echo'</span>';
        echo '<span class="item-price">'; echo $roww['price']; }}echo'</span>
        <span class="item-quantity"> Quantity: '; echo $row['quantity'];  echo'</span> 
        <span class="item-quantity" style="padding-left:5em; font-weighy:bold" ><a href="deletecart?id='; echo $row['id']; echo'"> X</a>'; echo'</span>
      </li>

    
    ';
  }}

  ?>
</ul>
    </div> <!--end shopping-cart-header -->
    <a href="#" class="button">Checkout</a>
  </div> <!--end shopping-cart -->
</div> <!--end container -->
 
<?php
}
?>        
  
		<!-- header end -->
		<!-- mobile-menu-area start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a class="active1" href="loginsuccess.php">Home</a>
                                    </li>

                               <li id="mine" class="mega-position"><a href="shop-page.php">Shop</a>
			                                
			                                </li>
                                             <?php 
                                            if($_SESSION["set"]==1)
                                            {
                                            
                                            echo '<li class="mega-position"><a href="profile.php">Welcome  '; echo $_SESSION['name']; echo'</a>
                                            
                                            </li>
                                            <li class="mega-position"><a href="logout.php">Log Out</a>
                                            
                                            </li>';
                                        }
                                        else
                                        {
                                         
                                            echo '<li class="mega-position"><a href="login.php">Login</a>';  
                                        }
                                         ?>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>					
                    </div>
                </div>
            </div>
        </div>


        <!-- mobile-menu-area end -->
		<!-- slider start -->
		    <div class="slider-area" >
      <div class="bend niceties preview-2">
        <div id="ensign-nivoslider" class="slides"> 
          <img src="assets/img/slider/1.jpg" alt="" title="#slider-direction-1"  />
          <img src="assets/img/slider/2.jpg" alt="" title="#slider-direction-2"  />
        </div>
        <!-- direction 1 -->
        <div id="slider-direction-1" class="t-cn slider-direction" >
            <div class="container">
                <div class="slider-content t-lfl s-tb slider-1">
                            <div class="title-container s-tb-c title-compress">
                                                  
                                
                            </div>
                        </div>
            </div>
        </div>
        <!-- direction 2 -->
        <div id="slider-direction-2" class="slider-direction" >
          <div class="container">
              <div class="slider-content s-tb slider-2">
                            <div class="title-container s-tb-c">
                               
                                
                                
                            </div>
                        </div>  


          </div>
        </div>
      </div>
    </div>
		
		<!-- slider end -->
		<!-- service area start  -->

		<!-- service area end -->
		<!-- shop area start -->
                <div class="portfolio-area ptb-10">
            <div class="container">
                <div class="section-title text-center mb-50">
                    <h2>OUR Collections <i class="fa fa-shopping-cart"></i></h2>
                </div>
           
	<div class="row portfolio-style-2">
    <div class="grid">

         <?php  
           $sql = "SELECT * FROM product  LIMIT 0,4";  
$result = mysqli_query ($conn,$sql);

                       while($row = mysqli_fetch_assoc($result))
                        {    
                        echo '<div class="col-md-3 col-sm-6 col-xs-12 grid-item mix1 mb-50">';

                            echo '<div class="single-shop">
                            <div class="shop-img">';?>
                            

                         
                           <?php echo "<img src='images/products/".$row['image']."'style=width:200px;height:200px> ";
                            echo '<div class="shop-quick-view">';?>
                                        <a href="single-product.php?id=<?php echo $row['id']?>" <?php echo'title="Quick View">
                                            <i class="pe-7s-look"></i>
                                        </a>
                                    </div>
                                    <div class="price-up-down">
                                        <span class="sale-new">sale</span>
                                    </div>
                                    <div class="button-group">
                                       
                                        <a class="wishlist" href="';echo $row['category']; echo '"title="Buy Now">
                                            <i class="pe-7s-like"></i>
                                            Buy Now
                                        </a>
                                    </div>
                                </div>
                                <div class="shop-text-all" style="display:block;width: 100%;height: 100px;">
                                    <div class="title-color fix">
                                        <div class="shop-title f-left">
                                            <h3><a href="#">'; echo $row['name']; echo '</a></h3>
                                        </div>
                                        <div class="price f-right">
                                            <span class="new">'; echo '$'.$row['price']; echo'</span>
                                        </div>
                                    </div>
                                </div>                                  
                            </div>
                        </div>';
                    }
            
        ?>    
        </div>

        </div>

				<div class="text-center">
					<a class="hvr-shutter-out-horizontal" href="shop-page.php">view more <i class="fa fa-angle-double-right"></i></a>
				</div>
			

      
		<div class="special-offer ptb-100">
		    <div class="container">
		        <div class="section-title text-center mb-50">
                    <h2>New Collections<i class="fa fa-shopping-cart"></i></h2>
                </div>
                <div class="row">
                    <div class="special-slider-active owl-carousel">
            <?php  
           $query = "SELECT * FROM product ORDER BY id DESC LIMIT 0,5";
           $result=mysqli_query($conn, $query);
               if (mysqli_num_rows($result) > 0)
                    {
                       while($row = mysqli_fetch_assoc($result))
                        {    
                        echo '<div class="single-special-slider">

                            <div class="col-lg-12 col-md-12 col-xs-12">
                                <div class="single-shop">
                                    <div class="shop-img">';?>
                            

    
                           <?php echo "<img src='images/products/".$row['image']."'style=width:200px;height:200px> ";
                            echo '<div class="shop-quick-view">';?>
                                        <a href="single-product.php?id=<?php echo $row['id']?>" <?php echo' title="Quick View">
                                            <i class="pe-7s-look"></i>
                                        </a>
                                    </div>
                                        <div class="price-up-down">
                                            <span class="sale-new">sale</span>
                                        </div>
                                        <div class="button-group">
                                           
                                           <a class="wishlist"  text-align:"center" href="'; echo $row['category']; echo '"title="Buy Now">
                                            <i class="pe-7s-like"></i>
                                            Buy Now
                                        </a>
                                    </div>
                                </div>
                                <div class="shop-text-all" style="display: block;width: 100%;height: 100px;">
                                    <div class="title-color fix">
                                        <div class="shop-title f-left">
                                            <h3><a href="#">'; echo $row['name']; echo '</a></h3>
                                        </div>
                                        <div class="price f-right">
                                            <span class="new">'; echo '$'.$row['price']; echo'</span>
                                        </div>
                                    </div>
                                </div>                                      
                                </div>
                            </div>
                        </div>';
                    }
                }                 
                        ?>
              </div>
              </div>
              </div>
          </div>
      

		<!-- special-offer area end -->
		<!-- blog area start -->
		     
                       <?php
                                                 
$limit = 3;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM blog LIMIT $start_from, $limit";  
$result = mysqli_query ($conn,$sql); ?>


 
    
	
	
        </div>







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
          <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>



<script type="text/javascript">
    $('#mine').on('click', function () {
        <?php $_SESSION['value']=1?>
        window.location.href="shop-page.php"
        return false;
    })
</script>


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


		
		<!-- all js here -->
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.meanmenu.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
		    <script src="lib/js/jquery.nivo.slider.js"  ></script>
		    <script src="lib/home.js"  ></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Counter js -->
        <script src="js/jquery.counterup.min.js"></script>
        <!-- waypoint js -->
        <script src="js/waypoints.js"></script>
        <!-- isotope js -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- stellar js -->
        <script src="js/jquery.stellar.min.js"></script>
        <!-- magnific js -->
        <script src="js/magnific.min.js"></script>
        <!-- venobox js -->
        <script src="js/venobox.min.js"></script>
        <!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
        <!-- Form validator js -->
        <script src="js/form-validator.min.js"></script>
        <!-- plugins js -->
        <script src="js/plugins.js"></script>
        <!-- main js -->
        <script src="js/main.js"></script>
      
<script type="text/javascript">
jQuery(document).ready(function($) {  

// site preloader -- also uncomment the div in the header and the css style for #preloader
$(window).load(function(){
    $('#preloader').fadeOut('slow',function(){$(this).remove();});
});

});
</script>
    </body>

</div>

</html>
