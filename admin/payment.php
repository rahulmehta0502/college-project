<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Payment</title>
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
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

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
                            <a class="has-arrow" href="mailbox.php" aria-expanded="false"><i class="fa fa-female sub-icon-mg"></i> <span class="mini-click-non">User</span></a>
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
                                                        
                                                        <li><a href="adminmyprofile.php"><span class="fa fa-user author-log-ic"></span>My Profile</a>
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
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Product / Product Payment</span>
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
        
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTab4" class="tab-review-design">
                                <li class="active"><a href="#description">Credit Card</a></li>
                                <li><a href="#reviews"> Debit Card</a></li>
                                <li><a href="#netbanking">Banking</a></li>
                                <li><a href="#cod">Address</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="demo-container">
                                                    <div class="card-wrapper"></div>
                                                    <form class="payment-form mg-tb-15">
                                                        <div class="form-group">
                                                            <input name="number" type="tel" class="form-control" placeholder="Card Number">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="name" type="text" class="form-control" placeholder="Full Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="expiry" type="tel" class="form-control" placeholder="MM/YY">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="cvc" type="number" class="form-control" placeholder="CVC">
                                                        </div>
                                                        <div class="text-center credit-card-custom">
                                                            <a href="#!" class="btn btn-primary waves-effect waves-light">Submit</a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3"></div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-3"></div>
                                                    <div class="col-lg-6">
                                                        <div class="devit-card-custom">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Type your Full Name">
                                                            </div>
                                                            <div class="form-group CVV">
                                                                <input type="text" class="form-control" id="cvv" placeholder="CVV">
                                                            </div>
                                                            <div class="form-group" id="card-number-field">
                                                                <input type="text" name="name" class="form-control" id="cardNumber" placeholder="Card Number">
                                                            </div>
                                                            <select class="form-control mg-b-15">
																	<option>Select Month</option>
																	<option value="01">January</option>
																	<option value="02">February </option>
																	<option value="03">March</option>
																	<option value="04">April</option>
																	<option value="05">May</option>
																	<option value="06">June</option>
																	<option value="07">July</option>
																	<option value="08">August</option>
																	<option value="09">September</option>
																	<option value="10">October</option>
																	<option value="11">November</option>
																	<option value="12">December</option>
																</select>
                                                            <select class="form-control">
																	<option>Select Year</option>
																	<option value="16"> 2016</option>
																	<option value="17"> 2017</option>
																	<option value="18"> 2018</option>
																	<option value="19"> 2019</option>
																	<option value="20"> 2020</option>
																	<option value="21"> 2021</option>
																</select>
                                                            <div class="payment-method-ht">
                                                                <span><i class="fa fa-cc-paypal" aria-hidden="true"></i></span>
                                                                <span><i class="fa fa-cc-visa" aria-hidden="true"></i></span>
                                                                <span><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                                                                <span><i class="fa fa-cc-mastercard" aria-hidden="true"></i></span>
                                                            </div>
                                                            <a href="#!" class="btn btn-primary waves-effect waves-light mg-b-15">Submit</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="product-tab-list tab-pane fade" id="netbanking">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="col-lg-3"></div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="review-content-section">
                                                        <select class="form-control mg-b-15">
																<option>Select Bank</option>
																<option>State bank of india</option>
																<option>Bank of baroda</option>
																<option>Central bank of india</option>
																<option>Punjab national bank</option>
																<option>Yes bank</option>
																<option>Kotak mahindra bank</option>
															</select>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15">Submit</button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="cod">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <input name="number" type="text" class="form-control" placeholder="First Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Last Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Address">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" placeholder="Pincode">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <select class="form-control">
																	<option>Select country</option>
																	<option>India</option>
																	<option>Pakistan</option>
																	<option>Amerika</option>
																	<option>China</option>
																	<option>Dubai</option>
																	<option>Nepal</option>
																</select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control">
																	<option>Select state</option>
																	<option>Gujarat</option>
																	<option>Maharastra</option>
																	<option>Rajastan</option>
																	<option>Maharastra</option>
																	<option>Rajastan</option>
																	<option>Gujarat</option>
																</select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control">
																	<option>Select city</option>
																	<option>Surat</option>
																	<option>Baroda</option>
																	<option>Navsari</option>
																	<option>Baroda</option>
																	<option>Surat</option>
																</select>
                                                        </div>
                                                        <input type="number" class="form-control" placeholder="Mobile no.">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            
                        </div>
                    </div>
                </div>
            </div>
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
    <!-- tab JS
		============================================ -->
    <script src="js1/tab.js"></script>
    <!-- payment away JS
		============================================ -->
    <script src="js1/card.js"></script>
    <script src="js1/jquery.payform.min.js"></script>
    <script src="js1/e-payment.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js1/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js1/main.js"></script>
</body>

</html>