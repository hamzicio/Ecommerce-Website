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
  #cim
  {
     margin-left: 0px !important ; 
     margin-top: 0px !important;
}
}
@media only screen and (max-width: 450px) {
  #ci
  {
     margin-left: 0px !important ; 
     margin-top: 0px !important;
     width:250px !important;
     height:200px !important; 
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
                                    <li><a class="active1" href="loginsuccess.php">Home</a>
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


 <body>

  <?php

$name="";
$email="";
$address="";
$country="";
$password="";
$postalcode="";
$city="";
$phone="";
$image="";
if($_SESSION["set"]==1)
{
$userid=$_SESSION["id"];
$query= "SELECT * FROM users WHERE id='$userid'";
$sql=mysqli_query($conn,$query);

if(mysqli_num_rows($sql)>0)
{
  $row=mysqli_fetch_assoc($sql);
  $name= $row['name'];
  $email= $row['email'];
  $address= $row['address'];
  $country= $row['country'];
  $password=$row['password'];
  $postalcode= $row['postalcode'];
  $city=$row['city'];
  $phone=$row['phone']; 
  $image=$row['image'];
}
}

else
{
  ?>
  <script type="text/javascript">window.location.href="login.php"</script>
  <?php
}
?>
<div class="container" style="margin-top: 50px;">
<div class="row">
<div class="col-lg-6" id="contactdiv">
   
<form   name="new" id="contact" action="#">
 <center><h3>My Profile</h3></center>
    <hr/><br/>
<label>Name: <span style="color: red">*</span></label>
<br/>
<input type="text" id="name"  placeholder="<?php echo $name ?>" required="" name="name"  /><br/>
<br/>
<label>Email: <span style="color: red">*</span></label>
<br/>
<input type="text" id="emaill"  placeholder="<?php echo $email ?>" name="emaill" required=""  /><br/>
<br/>
<label>Password: <span style="color: red">*</span></label>
<br/>
<input type="password" id="passwordd"  placeholder="<?php echo $password ?>" name="passwordd" required=""  /><br/>
<br/>
<label>Contact No: <span style="color: red">*</span></label>
<br/>
<input type="text" id="phone" placeholder="<?php echo $phone ?>" name="phone" required="" /><br/>
<br/>
<label>Address: <span style="color: red">*</span></label>
<br/>
<input type="text" id="address"  placeholder="<?php echo $address ?>"  name="address" required="" /><br/>
<br/>
<label>Postal Code: <span style="color: red">*</span></label>
<br/>
<input type="text" id="postalcode"  placeholder="<?php echo $postalcode ?>" name="postalcode" required=""  /><br/>
<br/>
<label>City: <span style="color: red">*</span></label>
<br/>
<input type="text" id="city"  placeholder="<?php echo $city ?>" name="city"  required="" /><br/>
<br/>
<label>Country: <span style="color: red">*</span></label>
<br/>
<input type="text" id="country"  placeholder="<?php echo $country ?>" name="country" required=""  /><br/>
<br/>

<center><button type="submit" id="sendd"  class="btn btn-primary" style="margin-top: 20px;width: 140px; border-radius: 5%">Update</button></center></form>
<br/>


</div>
<div class="col-lg-6" id="cim" >

  <?php
   $result = mysqli_query($conn, "SELECT * FROM users WHERE id='$userid'");
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='cim'  style=margin-top:200px; >";
        echo "<img src='images/".$row['image']."' id=ci style=width:300px;height:300px;margin-left:200px >";
      echo "</div>";}?>
  <div>
<form method="POST" action="updateprofile.php" enctype="multipart/form-data">
    
    <div id="cim" style="margin-top: 20px; width: 300px;  margin-left: 200px">
      <input type="file" style=" background: transparent; border:transparent;" name="image" id="image">
    </div>
    <div>
      <button type="submit" id="cim" style="margin-left: 200px" name="upload">Upload</button>
    </div>
  </form>
  </div>

  </div>

</div>
<p id="centerr" style="color: red; font-size: 12px; display: none; "> Profile Updated</p>
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

</body>

<script type="text/javascript">
    $('#sendd').on('click', function () {
    var email,password,name,postalcode,city,country,address,phone;
    email=$('#emaill').val();
    password=$('#passwordd').val();   
    name=$('#name').val();
    postalcode=$('#postalcode').val();
    city=$('#city').val();
    country=$('#country').val();
    address=$('#address').val();
    phone=$('#phone').val();
    if(password=="")
    {
      password="<?php echo $password; ?>";

    }
     if(email=="")
    {
      email="<?php echo $email; ?>";
    
    }
     if(name=="")
    {
      name="<?php echo $name; ?>";

    }
     if(postalcode=="")
    {
      postalcode="<?php echo $postalcode; ?>";

    }
     if(city=="")
    {
      city="<?php echo $city; ?>";

    }
     if(country=="")
    {
      country="<?php echo $country; ?>";

    }
     if(address=="")
    {
      address="<?php echo $address; ?>";

    }
     if(phone=="")
    {
      phone="<?php echo $phone; ?>";

    }
    
    $.ajax({
                type:"POST",
                url:"updateusers.php",
                 data: "phone=" + phone + "&password=" + password + "&name=" + name + "&postalcode=" + postalcode + "&city=" + city +"&country=" + country + "&address=" + address +  "&email=" + email,
                success:function(data)
                {
                    $('#centerr').show();

    
    return false;
                }
            
            });
            
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
<script type="text/javascript">
    $('#me').on('click', function () {
      <?php $_SESSION['value']=2 ?>
      window.location.href="men.php";
        
        return false;
    })
     
</script>
</div>
</div>

</div>

</html>