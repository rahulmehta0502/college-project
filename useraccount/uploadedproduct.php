<?php
      session_start();
      if($_SESSION["true"]=="1") {
        $userid=$_SESSION['userid'];
        
      ?>
<!doctype html>
<html class='no-js' lang='en'>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='x-ua-compatible' content='ie=edge'>
    <title>Uploaded Product List</title>
    <meta name='description' content=''>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- favicon
		============================================ -->
    <link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'>
    <!-- Google Fonts
		============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet'>
    <!-- Bootstrap CSS
		============================================ -->
    <link rel='stylesheet' href='css1/bootstrap.min.css'>
    <!-- Bootstrap CSS
		============================================ -->
    <link rel='stylesheet' href='css1/font-awesome.min.css'>
    <!-- owl.carousel CSS
		============================================ -->
    <link rel='stylesheet' href='css1/owl.carousel.css'>
    <link rel='stylesheet' href='css1/owl.theme.css'>
    <link rel='stylesheet' href='css1/owl.transitions.css'>
    <!-- animate CSS
		============================================ -->
    <link rel='stylesheet' href='css1/animate.css'>
    <!-- normalize CSS
		============================================ -->
    <link rel='stylesheet' href='css1/normalize.css'>
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel='stylesheet' href='css1/meanmenu.min.css'>
    <!-- main CSS
		============================================ -->
    <link rel='stylesheet' href='css1/main.css'>
    <!-- morrisjs CSS
		============================================ -->
    <link rel='stylesheet' href='css1/morrisjs/morris.css'>
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel='stylesheet' href='css1/scrollbar/jquery.mCustomScrollbar.min.css'>
    <!-- metisMenu CSS
		============================================ -->
    <link rel='stylesheet' href='css1/metisMenu/metisMenu.min.css'>
    <link rel='stylesheet' href='css1/metisMenu/metisMenu-vertical.css'>
    <!-- calendar CSS
		============================================ -->
    <link rel='stylesheet' href='css1/calendar/fullcalendar.min.css'>
    <link rel='stylesheet' href='css1/calendar/fullcalendar.print.min.css'>
    <!-- style CSS
		============================================ -->
    <link rel='stylesheet' href='style.css'>
    <!-- responsive CSS
		============================================ -->
    <link rel='stylesheet' href='css1/responsive.css'>
    <link rel='stylesheet' href='fonts/icomoon/style.css'>
    <link rel='stylesheet' href='css/bootstrap.min.css'>
    <link rel='stylesheet' href='css/style.css'>
	
    <script src='js1/vendor/modernizr-2.8.3.min.js'></script>
</head>

<body>

    <div class='left-sidebar-pro'>
        <nav id='sidebar' class=''>
            <div class='sidebar-header'>
                <a href=''><h1 class='main-logo'><font color='Black'><b>JhaTpaT.</b></h1></a>
            </div>
            <div class='left-custom-menu-adp-wrap comment-scrollbar'>
                <nav class='sidebar-nav left-sidebar-menu-pro'>
                    <ul class='metismenu' id='menu1'>
                        <li class='active'>
                            <a class='has-arrow' href='index.php'>
								   <i class='fa fa-file-image-o sub-icon-mg'></i>
								   <span class='mini-click-non'>Product</span>
								</a>
                            <ul class='submenu-angle' aria-expanded='true'>
                                
                                <li><a title='Product List' href='uploadedproduct.php'><i class='fa fa-circle sub-icon-mg' aria-hidden='true'></i> <span class='mini-sub-pro'> Uploaded Product</span></a></li>
                                <li><a title='Product Delivered' href='biddedproduct.php'><i class='fa fa-circle sub-icon-mg' aria-hidden='true'></i> <span class='mini-sub-pro'>Bidded Product</span></a></li>
							
                               
                            </ul>
                        </li>
                        
                        <li>
                            <a class='has-arrow' href='' aria-expanded='false'><i class='fa fa-heart-o sub-icon-mg'></i> <span class='mini-click-non'>Cart</span></a>
                            <ul class='submenu-angle' aria-expanded='false'>
                                <li><a title='Users' href='cart.php'><i class='fa fa-circle sub-icon-mg' aria-hidden='true'></i> <span class='mini-sub-pro'>Cart Products</span></a></li>
                              
                           
                            </ul>
                        </li>
						
						 <li>
                            <a class='has-arrow' href='' aria-expanded='false'><i class='fa fa-bolt sub-icon-mg'></i> <span class='mini-click-non'>Payment</span></a>
                            <ul class='submenu-angle' aria-expanded='false'>
                                <li><a title='Payment Detail' href='userpaymentdetail.php'><i class='fa fa-circle sub-icon-mg' aria-hidden='true'></i> <span class='mini-sub-pro'>Payment Detail</span></a></li>
                              
                                </ul>
                        </li>
						
						<li>
                            <a class='has-arrow' href='' aria-expanded='false'><i class='fa fa-folder sub-icon-mg'></i> <span class='mini-click-non'>Post an Ad</span></a>
                            <ul class='submenu-angle' aria-expanded='false'>
                                <li><a title='Payment Detail' href='post-ad.php'><i class='fa fa-circle sub-icon-mg' aria-hidden='true'></i> <span class='mini-sub-pro'>Upload new product</span></a></li>
                            </ul>
                        </li>
					</ul>	
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class='all-content-wrapper'>
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class='logo-pro'>
                        <a href='index.php'><img class='main-logo' src='img/logo/logo.png' alt='' /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class='header-advance-area'>
            <div class='header-top-area'>
                <div class='container-fluid'>
                    <div class='row'>
                        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                            <div class='header-top-wraper'>
                                <div class='row'>
                                    <div class='col-lg-1 col-md-0 col-sm-1 col-xs-12'>
                                        <div class='menu-switcher-pro'>
                                            <button type='button' id='sidebarCollapse' class='btn bar-button-pro header-drl-controller-btn btn-info navbar-btn'>
												<i class='fa fa-bars'></i>
											</button>
                                        </div>
                                    </div>
                                    <div class='col-lg-6 col-md-7 col-sm-6 col-xs-12'>
                                        <div class='header-top-menu tabl-d-n'>
                                            <ul class='nav navbar-nav mai-top-nav'>
                                                <li class='nav-item'><a href='useraccount.php' class='nav-link'>Home</a>
                                                </li>
                                               
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class='col-lg-5 col-md-5 col-sm-12 col-xs-12'>
                                        <div class='header-right-info'>
                                            <ul class='nav navbar-nav mai-top-nav header-right-menu'>
  
                                                <li class='nav-item'>
                                                    <a href='#' data-toggle='dropdown' role='button' aria-expanded='false' class='nav-link dropdown-toggle'>
															<i class='fa fa-user adminpro-user-rounded header-riht-inf' aria-hidden='true'></i>
															<span class='admin-name'>My Account</span>
												
														</a>
                                                    <ul role='menu' class='dropdown-header-top author-log dropdown-menu animated zoomIn'>
                                                        
                                                        <li><a href='http://localhost:8080/ip/zhatpat/useraccount/profile.php'><span class='fa fa-user author-log-ic'></span>My Profile</a>
                                                        </li>
                                                        
                                                        
                                                        <li><a href='http://localhost:8080/ip/zhatpat/index.php'><span class='fa fa-lock author-log-ic'></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                                                    
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
		<div class='product-status mg-tb-15'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class='product-status-wrap'>
                            <br><h4>Uploaded Products List</h4>
                            <?php
                                include 'database.php';
      $sql="select * from product where sellid='$userid' ";
      $result=mysqli_query($conn,$sql) or die( mysqli_error($conn));
      echo "<form method='post'>";
      echo "<table>";
      echo "<thead>";
      echo "<tr>";echo"
                                    <th>Image</th>
									                  <th>Category</th>
                                    <th>Product Name</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Price</th>
									                  <th>Status</th>
									                  <th>Delete</th>
									                  <th>Update</th>
									                  <th>Bid</th>";
      echo "</tr>";echo "</thead>";
     
while($row=mysqli_fetch_array($result)) {
  echo "<tr>";	
  $image = $row['picture'];
  $image_src = "http://localhost:8080//ip/zhatpat/upload/0_". $image;
  echo "<td><img src=" . $image_src . " width=150 height=150></td>";
  echo "<td>" . $row["category"] . "</td>";
  echo "<td>" . $row["name"] . "</td>";
  echo "<td>" . $row["description"] . "</td>";	
  echo "<td>" . $row["date"] . "</td>";
      echo "<td>" . $row["price"] . "</td>";
      if($row["status"]==0) 
      echo "<td>Processing..</td>";
      elseif($row["status"]==1)
      echo "<td>Approved</td>";
      else
      echo "<td>Rejected</td>";
      echo "<td>
                                  <button class='pd-setting' name=delete value=".$row['pid']."> Delete  </button>
                              </td>
            <td>
                                  <button class='pd-setting' name=update value=".$row['pid']."> <a href='http://localhost:8080/ip/zhatpat/categories/update.php?pid=".$row['pid']."'>Update  </a> </button>
                              </td>
            <td>
                                  <button class='pd-setting' name=checkbid value=".$row['pid']."> <a href='http://localhost:8080/ip/zhatpat/useraccount/checkbid.php?pid=".$row['pid']."'>Check Bid  </button>
                              </td>";
                              echo "</form>";
}
if(array_key_exists('delete',$_POST))	{
  $a=$_POST['delete'];
  $sql="delete FROM `product` WHERE pid='$a'";
  if(mysqli_query($conn,$sql)){
    $sql1="delete FROM `pictures` WHERE pid='$a'";
    if(mysqli_query($conn,$sql1)){
      $sql2="delete FROM `cart` WHERE pid='$a'";
    mysqli_query($conn,$sql2);
    }
  }
  header("Refresh:0");
}
                           ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
	  
    
        
        
        
        
        
    </div>

    <!-- jquery
		============================================ -->
    <script src='js1/vendor/jquery-1.11.3.min.js'></script>
    <!-- bootstrap JS
		============================================ -->
    <script src='js1/bootstrap.min.js'></script>
    <!-- wow JS
		============================================ -->
    <script src='js1/wow.min.js'></script>
    <!-- price-slider JS
		============================================ -->
    <script src='js1/jquery-price-slider.js'></script>
    <!-- meanmenu JS
		============================================ -->
    <script src='js1/jquery.meanmenu.js'></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src='js1/owl.carousel.min.js'></script>
    <!-- sticky JS
		============================================ -->
    <script src='js1/jquery.sticky.js'></script>
    <!-- scrollUp JS
		============================================ -->
    <script src='js1/jquery.scrollUp.min.js'></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src='js1/scrollbar/jquery.mCustomScrollbar.concat.min.js'></script>
    <script src='js1/scrollbar/mCustomScrollbar-active.js'></script>
    <!-- metisMenu JS
		============================================ -->
    <script src='js1/metisMenu/metisMenu.min.js'></script>
    <script src='js1/metisMenu/metisMenu-active.js'></script>
    <!-- morrisjs JS
		============================================ -->
    <script src='js1/morrisjs/raphael-min.js'></script>
    <script src='js1/morrisjs/morris.js'></script>
    <script src='js1/morrisjs/morris-active.js'></script>
    <!-- morrisjs JS
		============================================ -->
    <script src='js1/sparkline/jquery.sparkline.min.js'></script>
    <script src='js1/sparkline/jquery.charts-sparkline.js'></script>
    <!-- calendar JS
		============================================ -->
    <script src='js1/calendar/moment.min.js'></script>
    <script src='js1/calendar/fullcalendar.min.js'></script>
    <script src='js1/calendar/fullcalendar-active.js'></script>
    <!-- plugins JS
		============================================ -->
    <script src='js1/plugins.js'></script>
    <!-- main JS
		============================================ -->
    <script src='js1/main.js'></script>
</body>

</html>
<?php
}
else
header("Location:http://localhost:8080/ip/zhatpat/index.php");
      


?>