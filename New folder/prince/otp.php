
<html>
	<head>
		<link rel="stylesheet" href="style.css">
		
	</head>
	<body background="images\hero_2.jpg">
		<form id="msform" method="POST" action="">
			<h1 class="otp-title"><font color="white">Verification Code</h1><br>
			<h3 class="fs-subtitle"> <font color="white">Please type the verification code sent to your mobile number</h3>
			<input type="text" name="otp" placeholder="OTP"/>
			<input type="submit" name="submit" class="previous action-button" value="Proceed" />
		</form>
    </body>
</html>	

<?php
session_start();
include 'database.php';
$name=$_SESSION['name'];
$password=$_SESSION['password'];
$confirmpass=$_SESSION['confirmpass'];
$phoneno=$_SESSION['phoneno'];
$location=$_SESSION['address'];
$email=$_SESSION['email'];
$otp=$_SESSION['otp'];
if(isset($_POST['submit'])) {
	
	$otp1=$_POST["otp"];
	if($otp==$otp1) {
		
                    
	                $id=uniqid(); 
                    if($password==$confirmpass) {
	                    $sql="insert into user(id,name,password,phoneno,address,email)values('$id','$name','$password','$phoneno','$location','$email')";
                        if(mysqli_query($conn,$sql))
                        header("Location:http://localhost:8080//ip/zhatpat/login_or_sigup.php?action=");
	                    else	
	                        echo mysqli_error($conn);	
	                }
					else
						echo"confirm password not match";
	}
}







// $_SESSION["email"]=$_POST["email"];;
// $_SESSION["pass"]=$_POST["pass"];
// $_SESSION["name"]=$_POST["name"];
// $_SESSION["phone"]=$_POST["phone"];
// $_SESSION["address"]=$_POST["address"];
// $_SESSION[""]=$_POST[""];
// $otp=$_GET['otp'];

// 	if(isset($_POST["submit"])){
//                 $imgname = $_FILES['image']['name'];
//                 $target_dir = "upload/";
//                 $target_file = $target_dir . basename($_FILES["image"]["name"]);
//                 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//                 $extensions_arr = array("jpg","jpeg","png","gif");
//                 if(in_array($imageFileType,$extensions_arr) ){
//                     move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$imgname);
//                     $name=$_SESSION['name'];
//                     $password=$_SESSION['password'];
//                     $confirmpass=$_SESSION['confirmpass'];
//                     $phoneno=$_SESSION['phoneno'];
//                     $location=$_SESSION['location'];
// 	                $email=$_SESSION['email'];
//                     include 'database.php';
// 	                $id=uniqid(); 
//                     if($password==$confirmpass) {
// 	                    $sql="insert into user(id,name,password,phoneno,address,email,profile)values('$id','$name','$password','$phoneno','$location','$email','$imgname')";
//                         if(mysqli_query($conn,$sql))
//                         header("Location:http://localhost:8080//ip/zhatpat/login_or_sigup.php?action=");
// 	                    else	
// 	                        echo mysqli_error($conn);	
// 	                }
// 					else
//                         echo"confirm password not match";
// 				}
// 	}
// }
// else
// 	echo "OTP incorrect"; 
// }
?>