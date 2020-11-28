
<!DOCTYPE html>
<html lang="en">
<head>
<title>Product Discription</title>
<link rel="stylesheet" href="css2/bootstrap.min.css"><!-- bootstrap-CSS -->
<link rel="stylesheet" href="css2/bootstrap-select.css"><!-- bootstrap-select-CSS -->
<link href="css2/style.css" rel="stylesheet" type="text/css" media="all" /><!-- style.css -->
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
<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
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
<script>
			$( document ).ready( function() {
				$( '.uls-trigger' ).uls( {
					onSelect : function( language ) {
						var languageName = $.uls.data.getAutonym( language );
						$( '.uls-trigger' ).text( languageName );
					},
					quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
				} );
			} );
		</script>
<!-- //language-select -->
<link rel="stylesheet" href="css2/flexslider.css" media="screen" /><!-- flexslider css -->

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
				<a class="post-w3layouts-ad" href=" http://localhost:8080/ip/zhatpat/index.php?#login-section">Post Free Ad</a>
				</div>	
				<div class="clearfix"></div>
			</div>
		</div>
	</header>
	<!-- //header -->
	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center" background-color="black">
	</div>
	
	
    <div class="single-page main-grid-border">
		<div class="container">
			<div class="product-desc">
				<div class="col-md-7 product-view">
					<h2><center><b><u> Product Description</u></center></b></h2>
					<div class="flexslider">
						<ul class="slides">
						<?php
						include 'database.php';
						
						$sellid=$_GET['sellid'];
						$picture=$_GET['id'];
						$pid=$_GET['pid'];

						$sql="select * from pictures where pid='$pid'";
						$result=mysqli_query($conn,$sql) or die( mysqli_error($conn));
						$count=0;
						while($row=mysqli_fetch_array($result)) {
							
							
							echo "<li data-thumb='http://localhost:8080//ip/zhatpat/upload/".$count."_".$picture."'>
								<img src='http://localhost:8080//ip/zhatpat/upload/".$count."_".$picture."' />
							</li>
							";
							$count=$count+1;
						}
						$sql1="select * from product where pid='$pid'";
					$result1=mysqli_query($conn,$sql1) or die( mysqli_error($conn));
					while($row1=mysqli_fetch_array($result1)) {	
					echo "	</ul>
					</div>
					
					  <script defer src='js2/jquery.flexslider.js'></script>

						<script>
					
					$(window).load(function() {
					  $('.flexslider').flexslider({
						animation: 'slide',
						controlNav: 'thumbnails'
					  });
					});
					</script>
					
					<div class='product-details'>
						<h4><span class='w3layouts-agileinfo'> Name </span> : <a href='#'>".$row1['name']."</a><div class='clearfix'></div></h4>
						<h4><span class='w3layouts-agileinfo'>Description</span> :<p>".$row1['description']."</p><div class='clearfix'></div></h4>
						
						
					
					</div>
				</div>
				<br>
				<div class='col-md-5 product-details-grid'>
					<div class='item-price'>";
					
					
						echo "
						<div class='product-price'>
						
							<p class='p-price'>Price</p>
							<h3 class='rate'>".$row1['price']."</h3>
							<div class='clearfix'></div>
						</div>
						<div class='condition'>
							<p class='p-price'>Condition</p>
							<h4>Good</h4>
							<div class='clearfix'></div>
						</div>
						<div class='itemtype'>
							<p class='p-price'> Category</p>
							<h4>".$row1['category']."</h4>
							<div class='clearfix'></div>
						</div>
						<div class='itemtype'>
						<h4>
						<button class='pd-setting' name=payment value=><a href='http://localhost:8080/ip/zhatpat/index.php?#login-section'> Payment  </button></a>
						</h4><div class='clearfix'></div>
						</div>
					</div>
					<div class='interested text-center'>
						<h3>Interested in this Product?<br> <small>You can bid on the product and be the winner!!</small></h3><br>
						<form method='post'>
						<input type='text' placeholder='Bidding Price' name='bidprice'>
						<button name='bid' ><a href='http://localhost:8080/ip/zhatpat/index.php?#login-section'> Bid</a> </button>
						</form>
					</div>";
				}
				?>
				</div>
			<div class="clearfix"></div>
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
<!-- Navigation-JavaScript -->
			<script src="js2/classie.js"></script>
			<script src="js2/main.js"></script>
		<!-- //Navigation-JavaScript -->
		<!-- here stars scrolling icon -->
			<script type="text/javascript">
				$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/
										
					$().UItoTop({ easingType: 'easeOutQuart' });
										
					});
			</script>
			<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="js2/move-top.js"></script>
			<script type="text/javascript" src="js2/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
			<!-- start-smoth-scrolling -->
		<!-- //here ends scrolling icon -->
</html>