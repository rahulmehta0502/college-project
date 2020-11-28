

<!DOCTYPE html>
<html lang="en">
<head>
<title>Bike Category</title>
<link rel="stylesheet" href="css2/bootstrap.min.css"><!-- bootstrap-CSS -->
<link rel="stylesheet" href="css2/bootstrap-select.css"><!-- bootstrap-select-CSS -->
<link href="css2/style.css" rel="stylesheet" type="text/css" media="all" /><!-- style.css -->
<link rel="stylesheet" type="text/css" href="css2/jquery-ui1.css">
<link rel="stylesheet" href="css2/font-awesome.min.css" /><!-- fontawesome-CSS -->
<link rel="stylesheet" href="css2/menu_sideslide.css" type="text/css" media="all"><!-- Navigation-CSS -->
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	
<!-- js -->
<script type="text/javascript" src="js2/jquery.min.js"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js2/bootstrap.js"></script>
<script src="js2/bootstrap-select.js"></script>

<!-- language-select -->
<script type="text/javascript" src="js2/jquery.leanModal.min.js"></script>
<link href="css2/jquery.uls.css" rel="stylesheet"/>
<link href="css2/jquery.uls.grid.css" rel="stylesheet"/>
<link href="css2/jquery.uls.lcd.css" rel="stylesheet"/>
<!-- Source -->
<script src="js2/jquery.uls.data.js"></script>
<script src="js2/jquery.uls.data.utils.js"></script>
<script src="js2/jquery.uls.lcd.js"></script>
<script src="js2/jquery.uls.languagefilter.js"></script>
<script src="js2/jquery.uls.regionfilter.js"></script>
<script src="js2/jquery.uls.core.js"></script>

<script src="js2/tabs.js"></script>	
<script type="text/javascript">
$(document).ready(function () {    
var elem=$('#container ul');      
	$('#viewcontrols a').on('click',function(e) {
		if ($(this).hasClass('gridview')) {
			elem.fadeOut(1000, function () {
				$('#container ul').removeClass('list').addClass('grid');
				$('#viewcontrols').removeClass('view-controls-list').addClass('view-controls-grid');
				$('#viewcontrols .gridview').addClass('active');
				$('#viewcontrols .listview').removeClass('active');
				elem.fadeIn(1000);
			});						
		}
		else if($(this).hasClass('listview')) {
			elem.fadeOut(1000, function () {
				$('#container ul').removeClass('grid').addClass('list');
				$('#viewcontrols').removeClass('view-controls-grid').addClass('view-controls-list');
				$('#viewcontrols .gridview').removeClass('active');
				$('#viewcontrols .listview').addClass('active');
				elem.fadeIn(1000);
			});									
		}
	});
});
</script>
<!-- //switcher-grid and list alignment -->
</head>
<body>	
	
					
			
			
		<div class="container">
			<div class="agile-its-header">
				<div class="logo">
					<h1><a href="index.html"><span><font color="black"><b>JhaTpaT</b></font></span>.</a></h1>
				</div>
				<div class="agileits_search">
					<form action="#" method="post">
						
					<select onchange="location=this.options[this.selectedIndex].value;" id="agileinfo_search" name="agileinfo_search" required="">
							<option value="">All Categories</option>
							<option value="http://localhost:8080/ip/zhatpat/categories/index_mobiles.php">Mobiles</option>
							<option value="http://localhost:8080/ip/zhatpat/categories/index_electronics.php">Electronics & Appliances</option>
							<option value="http://localhost:8080/ip/zhatpat/categories/index_Cars.php">Cars</option>
							<option value="http://localhost:8080/ip/zhatpat/categories/index_Bikes.php">Bikes</option>
							<option value="http://localhost:8080/ip/zhatpat/categories/index_Furnitures.php">Furnitures</option>
							<option value="http://localhost:8080/ip/zhatpat/categories/index_Books.php">Books</option>
							
						</select>
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
					</form>
				<a class="post-w3layouts-ad" href="http://localhost:8080/ip/zhatpat/index.php?#login-section">Post Free Ad</a>
				</div>	
				<div class="clearfix"></div>
			</div>
		</div>
	</header>
	<!-- //header -->
	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center" background-color="black">
		<div class="container">
			<span class="agile-breadcrumbs">
			<a href="index.html"><i class="fa fa-home home_1"></i></a> / 
			<a href="index.html#products-section">Categories</a> / 
			<span>Electronics</span></span>
		</div>
	</div>
	
				<div class="clearfix"></div>
			</div>
			<div class="ads-grid">
				<div class="side-bar col-md-3">
					<div class="search-hotel">
					<h3 class="agileits-sear-head">Name contains</h3>
					<form>
						<input type="text" value="Product name..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product name...';}" required="">
						<input type="submit" value=" ">
					</form>
				</div>
				
				
				<div class="w3-brand-select">
					<h3 class="agileits-sear-head">Brand name</h3>
					  <select class="selectpicker" data-live-search="true">
					  <option data-tokens="All">All</option>
					  <option data-tokens="Bajaj">Bajaj</option>
					  <option data-tokens="Harley Davidson">Harley Davidson</option>
					  <option data-tokens="Hero">Hero</option>
					  <option data-tokens="Hero Honda">Hero Honda</option>
					  <option data-tokens="Honda">Honda</option>
					  <option data-tokens="Kawasaki">Kawasaki</option>
					  <option data-tokens="KTM">KTM</option>
					  <option data-tokens="Mahindra">Mahindra</option>
					  <option data-tokens="Royal Enfield">Royal Enfield</option>
					  <option data-tokens="Suzuki">Suzuki</option>
					  <option data-tokens="Yamaha">Yamaha</option>
					  <option data-tokens="Other Brands">Other Brands</option>
					</select>
				</div>
				
				<div class="w3ls-featured-ads">
					<h2 class="sear-head fer"></h2>
					<div class="w3l-featured-ad">
						
					</div>
					
					
					<div class="clearfix"></div>
				</div>
				</div>

				
				
				<div class="agileinfo-ads-display col-md-9">
					<div class="wrapper">					
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
							<li role="presentation" class="active">
							  <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
								<span class="text">All Ads</span>
							  </a>
							</li>
						</ul>
					    <div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
						    <div>
								<div id="container">
									<div class="view-controls-list" id="viewcontrols">
										<label>view :</label>
										<a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
										<a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
									</div>
								
									
												
					<?php
					
                    
						include 'database.php';
						$sql="select * from product where category	='electronics' && status= '1'";
						$result=mysqli_query($conn,$sql) or die( mysqli_error($conn));
						while($row=mysqli_fetch_array($result)) {
							$image="0_".$row['picture'];
						echo "<div class='clearfix'></div>
						<ul class='list'>
						<a href='http://localhost:8080/ip/zhatpat/categories/index_singleproduct.php?id=".$row['picture']." && sellid=".$row['sellid']." && pid=".$row['pid']."'> 
						<li>
						<img src='http://localhost:8080//ip/zhatpat/upload/".$image."' title='' alt='' />
	
						<section class='list-left'>
						<h5 class='title'> ".$row['name']." </h5>
						<span class='adprice'>".$row['price']."</span>
						
						<button class='pd-setting' name='view' value=".$row['pid'].">View </button>
						
						<p class='catpath'>Motorcycles » ".$row['description']."</p>
						</section>";
							
echo "<div class='clearfix'></div>
</li> </a>
";}


	
						?>
												
								
					
									</ul>
						        </div>
						    </div>
						</div>
					    <div>	
		            </div>
					</div>
				</div>
		
				
	
		<footer>
			<div class="w3-agileits-footer-top">
				<div class="container">
					<div class="wthree-foo-grids">
						
						
						
						<div class="col-md-3 wthree-footer-grid">
							<h4 class="footer-head">Contact Us</h4>
							<address>
									
								<div class="clearfix"> </div>
								<ul class="location">
									<li><span class="glyphicon glyphicon-earphone"></span></li>
									<li>91 9034836851</li>
								</ul>	
								<div class="clearfix"> </div>
								<ul class="location">
									<li><span class="glyphicon glyphicon-envelope"></span></li>
									<li><a href="mailto:info@example.com">jhatpatsell.com</a></li>
								</ul>						
							</address>
						</div>
						<div class="clearfix"></div>
					</div>						
				</div>	
			</div>	
			<div class="agileits-footer-bottom text-center">
				<div class="container">
					<div class="w3-footer-logo">
						<h1><a href="index.html"><span><font color="white">JhaTpaT</font></span>.	</a></h1>
					</div>
				</div>
		    </div>
		</footer>
        
</body>
</html>