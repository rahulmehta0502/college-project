<?php
session_start();
$userid=$_SESSION['userid'];
$pid=$_GET['pid'];
include 'database.php';
$sql="select * from product where sellid='$userid' && pid='$pid'";
$result=mysqli_query($conn,$sql) or die( mysqli_error($conn));
$row=mysqli_fetch_array($result);

if(array_key_exists('update',$_POST)) {
	
	$category=$_POST['category'];
    $name=strtoupper($_POST['name']);
    $description=$_POST['description'];
	$price=$_POST['price'];
	$sql="update product set name='$name',category='$category',description='$description',price='$price' where pid='$pid'";
	mysqli_query($conn,$sql);
	header("Refresh:0");
}
?>
<html lang='en'>
<head>
<title>Post Ad</title>
<link rel='stylesheet' href='css2/bootstrap.min.css'><!-- bootstrap-CSS -->
<link rel='stylesheet' href='css2/bootstrap-select.css'><!-- bootstrap-select-CSS -->
<link href='css2/style.css' rel='stylesheet' type='text/css' media='all' /><!-- style.css -->
<link rel='stylesheet' href='css2/font-awesome.min.css' /><!-- fontawesome-CSS -->
<link rel='stylesheet' href='css2/menu_sideslide.css' type='text/css' media='all'><!-- Navigation-CSS -->
<!-- meta tags -->
<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta name='keywords' content='Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design' />
<script type='application/x-javascript'> addEventListener('load', function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	
<!-- js -->
<script type='text/javascript' src='js2/jquery.min.js'></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src='js2/bootstrap.js'></script>
<script src='js2/bootstrap-select.js'></script>
<script type='text/javascript' src='js2/jquery.leanModal.min.js'></script>
<link href='css2/jquery.uls.css' rel='stylesheet'/>
<link href='css2/jquery.uls.grid.css' rel='stylesheet'/>
<link href='css2/jquery.uls.lcd.css' rel='stylesheet'/>
<!-- Source -->
<script src='js2/jquery.uls.data.js'></script>
<script src='js2/jquery.uls.data.utils.js'></script>
<script src='js2/jquery.uls.lcd.js'></script>
<script src='js2/jquery.uls.languagefilter.js'></script>
<script src='js2/jquery.uls.regionfilter.js'></script>
<script src='js2/jquery.uls.core.js'></script>
</head>
<body>
	
		<div class='container'>
			<div class='agile-its-header'>
				<div class='logo'>
					<h2><a href='index.html'><span><font color='black'><b>JhaTpaT</font></b></span>.</a></h2>
				</div>
			</div>
		</div>
	</header>
	
	<div class='submit-ad main-grid-border'>
		<div class='container'>
			<h2 class='w3-head'><font color='red'><center><u><b>Update</b></u></center></font></h2>
			<div class='post-ad-form'>
				<form method='post'>
					<?php
					echo"
					<label>Select Category <span>*</span></label>
					<select class='' name='category'  required>
					  <option>".$row['category']."</option>
					  <option value='mobiles'>Mobiles</option>
					  <option value='electronics and Appliances'>Electronics and Appliances</option>
					  <option value='cars'>Cars</option>
					  <option value='bikes'>Bikes</option>
					  <option value='furniture'>Furniture</option>
				      <option value='books'>Books</option>
					</select>
					<div class='clearfix'></div>
					<label>Product Name <span>*</span></label>
					<input type='text' class='phone' name='name' value='".$row['name']."' required>
					<div class='clearfix'></div>
					<label>Product Price <span>*</span></label>
					<input type='text' class='phone' name='price' value='".$row['price']."' required>
					<div class='clearfix'></div>
					<label>Product Description <span>*</span></label>
					<textarea class='mess' name='description' required>".$row['description']."</textarea>
					<div class='clearfix'></div>
				    <div class='upload-ad-photos'>
				    
					<input type='submit' name='update' value='Post'>		
					";	
					?>				
				</form>
			</div>				
		</div>
	</div>
		
	
</body>
</html>