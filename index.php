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
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="script.js"></script>
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
			                                <li><a href="index.php">home</a>
                                                
			                           
			                                </li> 
                                                        <li id="mine" class="mega-position"><a href="shop-page.php">Shop</a>
			                                
			                                </li>
                                            <li><a href="#">Categories</a>
                                          <ul class="dropdown">
                                            <?php 
                                            $sql=mysqli_query($conn,"SELECT * FROM categories");
                                            if(mysqli_num_rows($sql)>0)
                                            {

                                            while($row=mysqli_fetch_assoc($sql))
                                            {
                                              echo'<li id="me" ><a  href="#">'; echo $row['name']; echo'</a></li>';                                                                                           
                                           }
                                         }?>
                                          </ul>
                                      </li> 
                                            <?php
                                            
                                         if($_SESSION["set"]==1)
                                            {

                                             echo '<li class="mega-position"><a href="#"> WELCOME '; echo $_SESSION["name"] ;
                                              echo' </a>
                                            
                                            </li>';
                                            echo '<li class="mega-position"><a href="logout.php">Log Out</a>';
                          }
                          else{
                             echo '<li><a href="login.php" id="onclick"> Login</a></li>';
                          }
                          ?>
			              
			                               
			                                   
			                                
			                                <li><a href="contact.php">contact</a></li>
			                            </ul>
			                        </nav>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
		</header>
		<!-- header end -->
		<!-- mobile-menu-area start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a class="active1" href="index.php">Home</a>
                                    </li>

                               <li class="mega-position"><a href="shop-page.php">Shop</a>
			                                
			                                </li>
                                   
                                      
                                    </li>
                                    
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
                            
        
                           <?php echo "<img src='images/products/".$row['image']."'>";
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


 
        <div class="center hideform subscribe-area gray-bg" style="display: none" >
    <button id="close" style="float: right; ">X</button>
    <p> Thankyou! You have been subscribed</p>
</div>

	
		<div class="subscribe-area gray-bg" id="tohide">
		    <div class="container">
                <div class="subscribe-bg ptb-80">

                    
                    <div class="row">
                        <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 " >
                            <div class="subscribe-from text-center" >
                                <h3>subscribe to our newsletter</h3>
                                <form name="formm" action="#">
                                    <input placeholder="Enter your Email address" name="email" type="email" id="email">
                                    <button type="submit" id="show" >Subscribe</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
		    </div>
		</div>
  


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>



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

    

<script type="text/javascript">
    $('#show').on('click', function () {
    if(document.formm.email.value == "") {
        alert("Please Enter A Valid Email Address");
        return false;
    } else {
       
    email=$('#email').val(),
    $.ajax({
                type:"POST",
                url:"email.php",
                data: "email=" + email,
                success:function(data)
                {
                    $('.center').show();
    $(this).hide();
    $('#tohide').hide();
    
    return false;
                }
            
            });
            
            return false;

    }
})

$('#close').on('click', function () {
    $('.center').hide();
    $('#show').show();
    $('#tohide').show();
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
<script type="text/javascript">
    $('#mine').on('click', function () {
        <?php $_SESSION['value']=1?>
        window.location.href="shop-page.php"
        return false;
    })
</script>
<script type="text/javascript">
    $('#me').on('click', function () {
      <?php $_SESSION['value']=2 ?>
      window.location.href="men.php";
        
        return false;
    })
     
</script>
</div>
</div>

    </body>

</div>

</html>
