<?php
session_start();
require("conn.php");

$_SESSION['value']=1;

$limit= 9;
$sql = "SELECT COUNT(id) FROM product";  
$rs_result = mysqli_query($conn,$sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);   

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
		
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
		<!-- all css here -->
        

    <style type="text/css">
    .js div#preloader { position: fixed; left: 0; top: 0; z-index: 999; width: 100%; height: 100%; overflow: visible; background: #333 url('http://files.mimoymima.com/images/loading.gif') no-repeat center center; }
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
    <body onload="myFunction();">
        <div id="preloader"></div>
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
			                                <li><a href="loginsuccess.php">home</a>
			                           
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
                                            
                                            echo '<li class="mega-position"><a href="#">Welcome  '; echo $_SESSION['name']; echo'</a>
                                            
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
                                    <li><a class="active1" href="index.php">Home</a>
                                    </li>
                                     <li class="mega-position"><a href="shop-page.php">Shop</a>
			                                
			                                </li>

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
                                   
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>					
                    </div>
                </div>
            </div>
        </div>
		<div class="breadcrumbs-area breadcrumb-bg ptb-100">
		    <div class="container">
		        <div class="breadcrumbs text-center">
                    <h2 class="breadcrumb-title">WELCOME</h2>
                    <ul>
                        <li>
                            <a class="active" href="index-3.php">Home</a>
                        </li>
                        <li>shop</li>
                    </ul>
                </div>
		    </div>
		</div>

             <div class="tab-sort" style="margin: 20px">
                                        <label id="labell">Sort By : </label>
                                        <select id="op" onchange="window.location.href=this.value;">
                                            <option value="">-</option>
                                            <option value="hightolow.php" >Price (High to Low)</option>
                                            <option value="lowtohigh.php">Price (Low to High)</option>
                                        </select>
                                          <div class="search-style-2 f-right">
                                   
                                     
                                        
                                            <div class="search-input-button2">
                                                <input class="" style="height: 33px; margin-left: 5px;width: 190px" placeholder="Search For Products" type="search" id="search" name="search">
                                               
                                            
                                    
                                    </div>
                                </div>
                                    </div>
		<div id="page_container">
            <div id="target-content" class="page_navigation" ></div>
		

<center><div class="container" id="display">
    
         
                                <div class="tab-menu-sort">
                                    
                                    <div class="tab-sort" style="margin-top: 30px;">
                                    
                                    </div>
                               
                                
                                    </div>
                        
                                <div class="tab-product">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="grid"> 
                                            <div class="row">


</div>
</div>
</div> 

</div> 
</div>  </center>       
          
<?php
$limit= 9;
$sql = "SELECT COUNT(id) FROM product";  
$rs_result = mysqli_query($conn,$sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  

$total_pages = ceil($total_records / $limit);   
?>
<div align="center">
<ul class='pagination text-center ' id="pagination">
<?php if(!empty($total_pages)):for($i=1; $i<=$total_pages; $i++):  
			if($i == 1):?>
            <li class='active'  id="<?php echo $i;?>"><a href='pagination.php?page=<?php echo $i;?>'><?php echo $i;?></a></li> 
			<?php else:?>
			<li id="<?php echo $i;?>"><a href='pagination.php?page=<?php echo $i;?>'><?php echo $i;?></a></li>
		<?php endif;?>			
<?php endfor;endif;?>  
</div>


<script>
jQuery(document).ready(function() {
jQuery("#target-content").load("pagination.php?page=1");
    jQuery("#pagination li").live('click',function(e){
	e.preventDefault();
		
		jQuery("#pagination li").removeClass('active');
		jQuery(this).addClass('active');
        var pageNum = this.id;
        jQuery("#target-content").load("pagination.php?page=" + pageNum);
    });
    });
</script>

                                      
		<!-- login area end -->
		<!-- subscribe area start -->
		
		<!-- subscribe area end -->
		<!-- footer area start -->
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



		

		

		<!-- all js here -->
       
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
        <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>

</html>
