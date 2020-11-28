<?php
session_start();
$userid=$_SESSION['userid'];
$pid=$_GET['pid'];
if(array_key_exists('pay',$_POST))	{
    $paymentmethod=$_POST["pay"];
$dc=$_SESSION['dc'];
$comm=$_SESSION['comm'];
$pprice=$_SESSION['pprice'];
$total=$_SESSION['total'];
include 'database.php';
$sql="select * from product where pid='$pid'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

$sql1="select * from user where id='".$row['sellid']."'";
$result1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_array($result1);

$sql2="insert INTO `payment`(`buyerid`, `methodpay`, `amount`, `deliverycharges`, `total`, `location`, `commission`, `p_id`, `sellerid`, `paymentstatus`) VALUES ('$userid','$paymentmethod','$pprice','$dc','$total','".$row1['address']."','$comm','$pid','".$row['sellid']."','0')";
mysqli_query($conn,$sql2);
}
?>
<html class='no-js' lang='en'>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='x-ua-compatible' content='ie=edge'>
    <title>User Payment</title>
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
	
    <link rel='stylesheet' href='css/style.css'>
    <!-- modernizr JS
		============================================ -->
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
                              
                                <li><a title='Payment' href='userpayment.php'><i class='fa fa-circle sub-icon-mg' aria-hidden='true'></i> <span class='mini-sub-pro'>Product Payment</span></a></li>
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
                                                        
                                                        <li><a href=''><span class='fa fa-user author-log-ic'></span>My Profile</a>
                                                        </li>
                                                        
                                                        <li><a href='#'><span class='fa fa-cog author-log-ic'></span>Settings</a>
                                                        </li>
                                                        <li><a href='http://localhost:8080/ip/selling/selling/index.php'><span class='fa fa-lock author-log-ic'></span>Log Out</a>
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
        
        <!-- Single pro tab review Start-->
        <div class='single-pro-review-area mt-t-30 mg-b-15'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class='product-payment-inner-st'>
                            <ul id='myTab4' class='tab-review-design'>
                                <br><li class='active'><a href='#description'>Credit Card</a></li>
                                <li><a href='#reviews'> Debit Card</a></li>
                                
                            </ul>
                            <div id='myTabContent' class='tab-content custom-product-edit'>
                                <div class='product-tab-list tab-pane fade active in' id='description'>
                                    <div class='row'>
                                        <div class='col-lg-3'></div>
                                        <div class='col-lg-6 col-md-6 col-sm-6 col-xs-12' >
                                            <div class='review-content-section'>
                                                <div class='demo-container'>
                                                    <div class='card-wrapper'></div>
                                                    <form class='payment-form mg-tb-15' method='post'>
                                                    <?php
                                                    echo "
                                                        <div class='form-group'>
                                                            <input name='number' type='tel' class='form-control' placeholder='Card Number' required>
                                                        </div>
                                                        <div class='form-group'>
                                                            <input name='name' type='text' class='form-control' placeholder='Full Name' required>
                                                        </div>
                                                        <div class='form-group'>
                                                            <input name='expiry' type='tel' class='form-control' placeholder='MM/YY' required>
                                                        </div>
                                                        <div class='form-group'>
                                                            <input name='cvc' type='number' class='form-control' placeholder='CVV' required>
                                                        </div>
                                                        <div class='text-center credit-card-custom'>
                                                            <button class='btn btn-primary waves-effect waves-light' value='Credit card' name='pay'>Submit</button>
                                                        </div>";
                                                        ?>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-lg-3'></div>
                                    </div>
                                </div>
                                <div class='product-tab-list tab-pane fade' id='reviews'>
                                    <div class='row'>
                                        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                                            <div class='review-content-section'>
                                                <div class='row'>
                                                    <div class='col-lg-3'></div>
                                                    <div class='col-lg-6'>
                                                        <div class='devit-card-custom'>
                                                        <form class='payment-form mg-tb-15' method='post'>
                                                    <?php
                                                    echo "
                                                            <div class='form-group'>
                                                                <input type='text' class='form-control' placeholder='Type your Full Name' required>
                                                            </div>
                                                            <div class='form-group CVV'>
                                                                <input type='text' class='form-control' id='cvv' placeholder='CVV' required>
                                                            </div>
                                                            <div class='form-group' id='card-number-field'>
                                                                <input type='text' name='name' class='form-control' id='cardNumber' placeholder='Card Number' required>
                                                            </div>
                                                            <select class='form-control mg-b-15' required>
																	<option>Select Month</option>
																	<option value='01'>January</option>
																	<option value='02'>February </option>
																	<option value='03'>March</option>
																	<option value='04'>April</option>
																	<option value='05'>May</option>
																	<option value='06'>June</option>
																	<option value='07'>July</option>
																	<option value='08'>August</option>
																	<option value='09'>September</option>
																	<option value='10'>October</option>
																	<option value='11'>November</option>
																	<option value='12'>December</option>
																</select>
                                                            <select class='form-control' required>
																	<option>Select Year</option>
																	<option value='16'> 2016</option>
																	<option value='17'> 2017</option>
																	<option value='18'> 2018</option>
																	<option value='19'> 2019</option>
																	<option value='20'> 2020</option>
																	<option value='21'> 2021</option>
																</select>
                                                            <div class='payment-method-ht'>
                                                                <span><i class='fa fa-cc-paypal' aria-hidden='true'></i></span>
                                                                <span><i class='fa fa-cc-visa' aria-hidden='true'></i></span>
                                                                <span><i class='fa fa-credit-card' aria-hidden='true'></i></span>
                                                                <span><i class='fa fa-cc-mastercard' aria-hidden='true'></i></span>
                                                            </div>
                                                            <button class='btn btn-primary waves-effect waves-light' value='Debit card' name='pay'>Submit</button>
                                                        </div>
                                                        ";
                                                        ?>
                                                    </div>
                                                    <div class='col-lg-3'></div>
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
    <script src='js1/sparkline/jquery.sparkline.min.js'></script>
    <script src='js1/sparkline/jquery.charts-sparkline.js'></script>
    <!-- calendar JS
		============================================ -->
    <script src='js1/calendar/moment.min.js'></script>
    <script src='js1/calendar/fullcalendar.min.js'></script>
    <script src='js1/calendar/fullcalendar-active.js'></script>
    <!-- tab JS
		============================================ -->
    <script src='js1/tab.js'></script>
    <!-- payment away JS
		============================================ -->
    <script src='js1/card.js'></script>
    <script src='js1/jquery.payform.min.js'></script>
    <script src='js1/e-payment.js'></script>
    <!-- plugins JS
		============================================ -->
    <script src='js1/plugins.js'></script>
    <!-- main JS
		============================================ -->
    <script src='js1/main.js'></script>
</body>

</html>