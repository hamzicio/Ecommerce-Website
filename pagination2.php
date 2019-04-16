<?php
session_start();
require("conn.php");



if(mysqli_connect_errno())
{
    echo "<script>alert('Not connected to DataBase!');</script>";
}


?>
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
          <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
         <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="script.js"></script>
    </head>


		<center><div class="container" id="toohide">
	
         
                                <div class="tab-menu-sort">
                                    
                                    <div class="tab-sort" style="margin-top: 20px;">
                                      
                                    </div>
                                    </div>
                                
                                <div class="tab-product">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="grid"> 
                                            <div class="row">
                       <?php
                                                 
$limit= 8;
$sql = "SELECT COUNT(id) FROM product";  
$rs_result = mysqli_query($conn,$sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  

$total_pages = ceil($total_records / $limit); 
 
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM product ORDER BY price ASC  LIMIT $start_from, $limit";  
$result = mysqli_query ($conn,$sql);

                       while($row = mysqli_fetch_assoc($result))
                        {    
                        echo '<div class="col-md-3 col-sm-6 col-xs-12 grid-item mix1 mb-50">';

                            echo '<div class="single-shop">
                          <div class="shop-img">';?>
                            

                           <?php echo "<img src='images/products/".$row['image']."'style=width:200px;height:200px> ";
                            echo '<div class="shop-quick-view">';?>
                                        <a href="single-product.php?id=<?php echo $row['id']?>" <?php echo'data-toggle="modal" data-target="#quick-view" title="Quick View">
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
                        </div>';
                    }
            
            ?>
        </div>
         </div>
     </div>
 </div>
</div></center>


</html>
 