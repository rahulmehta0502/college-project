<?php
session_start();
if($_SESSION["true"]=="1") {
  $userid=$_SESSION['userid'];
if(array_key_exists('p',$_POST)) {
    $category=$_POST['category'];
    $name=strtoupper($_POST['product_name']);
    $description=$_POST['description'];
    $price=$_POST['price'];
    $sellid=$_SESSION['userid'];
    
    
    date_default_timezone_set('Asia/Kolkata');
    $date=date('Y-m-d H:i:s');
    $host='localhost';
    $user='root';
    $pwd='';
    $db='jhatpat';
    $conn=mysqli_connect($host,$user,$pwd,$db);
        $pid=uniqid();
        $name2=$pid.".jpg";
        $sql="insert into product(pid,name,category,description,price,sellid,date,picture)values('$pid','$name','$category','$description','$price','$sellid','$date','$name2')";
        if(mysqli_query($conn,$sql)){
    
     $extension = array('jpg','jpeg','png','gif');
    foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
        $file_name=$_FILES['files']['name'][$key];
        
        $file_tmp=$_FILES['files']['tmp_name'][$key];
        
        $ext = pathinfo($file_name,PATHINFO_EXTENSION);
        
        $target_dir = 'file:///C:/xampp/htdocs/ip/zhatpat/upload/';
        if( in_array($ext,$extension) ){
            move_uploaded_file($_FILES['files']['tmp_name'][$key],$target_dir.$key."_".$pid.".jpg");
            
            $name1=$key."_".$pid.".jpg";
            
            $sql1="insert into pictures(sellid,picture,pid)values('$sellid','$name1','$pid')";
            if(mysqli_query($conn,$sql1))
              echo "<script>alert('Ad Uploaded Successfully')</script>";
        }
      }
  } 
}
echo"
<!doctype html>
<html class='no-js' lang='en'>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='x-ua-compatible' content='ie=edge'>
    <title>Post New Product</title>
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
    <link rel='stylesheet' href='css2/bootstrap.min.css'><!-- bootstrap-CSS -->
    <link rel='stylesheet' href='css2/bootstrap-select.css'><!-- bootstrap-select-CSS -->
    <link href='css2/style.css' rel='stylesheet' type='text/css' media='all' /><!-- style.css -->
    <link rel='stylesheet' href='css2/font-awesome.min.css' /><!-- fontawesome-CSS -->
    <link rel='stylesheet' href='css2/menu_sideslide.css' type='text/css' media='all'>
	
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
        
	    <div class='submit-ad main-grid-border'>
		<div class='container'>
			<br><br><h2 class='w3-head'><font color='black'><center><b><u>Post an Ad</u></b></center></font></h2>
			<div class='post-ad-form'>
      <form   method='POST' enctype='multipart/form-data'>
					<label>Select Category <span>*</span></label>
					<select class='' name='category' required>
					  <option>Select Category</option>
					  <option value='mobiles'>Mobiles</option>
					  <option value='Electronics and Appliances'>Electronics and Appliances</option>
					  <option value='cars'>Cars</option>
					  <option value='bikes'>Bikes</option>
					  <option value='Furniture'>Furniture</option>
				      <option value='books'>Books</option>
					</select>
					<div class='clearfix'></div>
					<label>Product Name <span>*</span></label>
					<input type='text' class='phone' placeholder='Product Name' name='product_name' required>
					<div class='clearfix'></div>
					<label>Product Price <span>*</span></label>
					<input type='text' class='phone' placeholder='Price' name='price' required>
					<div class='clearfix'></div>
					<label>Product Description <span>*</span></label>
					<textarea class='mess' placeholder='Write few lines about your product' name='description' required></textarea>
					<div class='clearfix'></div>
				    <div class='upload-ad-photos'>
				    <label>Photos for your ad :</label>	
					<div class='photos-upload-view'>
          
                        <div>
							<input type='file' name='files[]' multiple='multiple' required/>
						</div>

					</div>
                    <input type='submit' value='Submit' name='p'/>							
				</form>
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

</html>";
}
else
header("Location:http://localhost:8080/ip/zhatpat/index.php");
      


?>