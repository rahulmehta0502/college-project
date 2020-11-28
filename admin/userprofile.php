<?php
      session_start();
      $id=$_GET['id'];
      ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Profile</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css1/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css1/owl.carousel.css">
    <link rel="stylesheet" href="css1/owl.theme.css">
    <link rel="stylesheet" href="css1/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css1/animate.css">
	<link rel="stylesheet" href="css1/style2.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css1/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css1/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css1/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css1/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css1/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css1/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css1/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css1/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css1/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css1/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js1/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
  

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <br><a href=""><h1 class="main-logo"><font color="Black">JhaTpaT.</h1></a>
                <strong><img src="img/logo/logosn.png" alt="" /></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    
					<ul class="metismenu" id="menu1">
                        
						<li class="active">
                            <a class="has-arrow" href="index.php">
								   <i class="fa fa-heart-o sub-icon-mg"></i>
								   <span class="mini-click-non">Product</span>
							</a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Product List" href="product-list.php"><i class="fa fa-circle sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Product List</span></a></li>
                                <li><a title="Product delivered" href="product-del.php"><i class="fa fa-circle sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Delivered Products</span></a></li>
                                <li><a title="Product request" href="product-req.php"><i class="fa fa-circle sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Product Request</span></a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a class="has-arrow" href="" aria-expanded="false"><i class="fa fa-female sub-icon-mg"></i> <span class="mini-click-non">User</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Users" href="users.php"><i class="fa fa-circle sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Users</span></a></li>
                              
                                <li><a title="Block users" href="blockusers.php"><i class="fa fa-frown-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Block Users</span></a></li>
                            </ul>
                        </li>
						
						<li>
                            <a class="has-arrow" href="" aria-expanded="false"><i class="fa fa-bolt sub-icon-mg"></i> <span class="mini-click-non">Payment</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Payment Detail" href="paymentdetail.php"><i class="fa fa-circle sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Payment Detail</span></a></li>
                              
                                <li><a title="Payment" href="payment.php"><i class="fa fa-circle sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Product Payment</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="fa fa-bars"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="adminaccount.php" class="nav-link">Home</a>
                                                </li>
                                               
                         
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-envelope-o adminpro-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                        <ul class="message-menu">
                                                            <li>
                                                                <a href="#">
                                
                                                                    <div class="message-content">
                                                                        <span class="message-date"> </span>
                                                                        <h2>kanika Saini</h2>
                                                                        <p>Hloo.</p>
                                                                        <h2>Amit </h2>
                                                                        <p>Hloo.</p>
                                                                        <h2>Rahul </h2>
                                                                        <p>Hloo.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            
                                                            
                                                        </ul>
                                                        <div class="message-view">
                                                            <a href="#">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
															<span class="admin-name">Admin Account</span>
															<i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        
                                                        <li><a href="#"><span name="profile" class="fa fa-user author-log-ic"></span>My Profile</a>
                                                        </li>
                                                        
                                                        <li><a href="#"><span class="fa fa-cog author-log-ic"></span>Settings</a>
                                                        </li>
                                                        <li><a href="http://localhost:8080/ip/selling/selling/index.php"><span class="fa fa-lock author-log-ic"></span>Log Out</a>
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
        
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
     
                                                <li><a href="product-list.php">Product List</a></li>
                                              
                                                <li><a href="product-del.php">Product Delivered</a></li>
                                                <li><a href="product-req.php">Product Request</a></li>
                                                <li><a href="product-payment.php">Product Payment</a></li>
                                               
                                            </ul>
                                        </li>
                                        
                                        
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">User <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="users.php">Users</a>
                                                </li>
                                                
                                                <li><a href="blockusers.php">Block Users</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
		
		<div class="card">
			<br><u><b><font size="9">Profile</font></b></u><br><br>
			
      <?php
      include 'database.php';
      $sql="select * from user where id='$id'";
      $result=mysqli_query($conn,$sql);
      $row=mysqli_fetch_array($result);
      
      
      echo "
      <img src='http://localhost:8080//ip/zhatpat/upload/".$row['profile']."' alt='admin' height='30px'style='width:50%'>
      <br>
			<p class='title'>Username : ".$row['name']."</p>
			<p class='title'>Email : ".$row['email']."</p>
			<p class='title'>Contact : ".$row['phoneno']."</p>
			<p class='title'>Password :".$row['password']."</p>
			<p>Chitkara University</p>";
      ?>
			
			
			<p><button></button></p>
		</div>
        
    </div>

    <!-- jquery
		============================================ -->
    <script src="js1/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js1/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js1/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js1/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js1/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js1/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js1/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js1/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js1/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js1/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js1/metisMenu/metisMenu.min.js"></script>
    <script src="js1/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js1/sparkline/jquery.sparkline.min.js"></script>
    <script src="js1/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js1/calendar/moment.min.js"></script>
    <script src="js1/calendar/fullcalendar.min.js"></script>
    <script src="js1/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js1/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js1/main.js"></script>
</body>

</html>