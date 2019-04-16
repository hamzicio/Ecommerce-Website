<?php
session_start();
require("conn.php");

if(mysqli_connect_errno())
{
    echo "<script>alert('Not connected to DataBase!');</script>";
}
?>

       <div class="tab-menu-sort">
                                    
                                    <div class="tab-sort" style="margin-top: 20px;">
                                    
                                    </div>
                               
                                
                                    </div>
                        
                                <div class="tab-product">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="grid"> 
                                            <div class="row">
                                             <?php   

$limit = 8;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
//Getting value of "search" variable from "script.js".
if (isset($_POST['searchh'])) {
//Search box value assigning to $Name variable.
$Designation1=$_POST['searchh'];
//Search query.

$Query="SELECT * FROM product WHERE name LIKE '%$Designation1%' LIMIT 5";
//Query execution
$ExecQuery=MySQLi_query($conn, $Query);
                       while($row = mysqli_fetch_assoc($ExecQuery))
                        {
                       echo '<div class="col-md-3 col-sm-6 col-xs-12 grid-item mix1 mb-50">';

                            echo '<div class="single-shop">
                            <div class="shop-img">';?>
                            

                           <?php echo "<img src='images/products/".$row['image']."'>";
                            echo '<div class="shop-quick-view">';?>
                                        <a href="single-product.php?id=<?php echo $row['id']?>" <?php echo' data-toggle="modal" data-target="#quick-view" title="Quick View">
                                            <i class="pe-7s-look"></i>
                                        </a>
                                    </div>
                                    <div class="price-up-down">
                                        <span class="sale-new">sale</span>
                                    </div>
                                    <div class="button-group">
                                       
                                        <a class="wishlist" href="';echo $row['link']; echo '"title="Buy Now">
                                            <i class="pe-7s-like"></i>
                                            Buy Now
                                        </a>
                                    </div>
                                </div>
                                <div class="shop-text-all">
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
                  }
                  ?>