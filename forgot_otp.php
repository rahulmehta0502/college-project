
<html>
	<head>
		<link rel="stylesheet" href="style1.css">
	</head>
	<body background="images\hero_2.jpg">
		<form id="msform" method="GET" action="">
			<h1 class="otp-title"><font color="white">Verification Code</h1><br>
			<h3 class="fs-subtitle"> <font color="white">Please type the verification code sent to your mobile number</h3>
			<input type="text" name="otp" placeholder="OTP"/>
			<input type="submit" name="submit" class="previous action-button" value="Proceed" />
		</form>
    </body>
</html>	

<?php
session_start();
if($_SESSION["true"]=="1") {
$otp=$_SESSION['otp'];
if(isset($_GET['submit'])) {
	$otp1=$_GET["otp"];
	if($otp==$otp1) {
                header("Location:http://localhost:8080//ip/zhatpat/newpass.php");	
	}
	else
		echo "<script>alert('OTP invalid')</script>";
}
}
else
header("Location:http://localhost:8080/ip/zhatpat/index.php");
?>