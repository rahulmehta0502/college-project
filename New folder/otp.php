<?php
session_start();
?>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
		
	</head>
	<body>
		<form id="msform" method="POST" action="">
			<h1 class="otp-title">Verification Code</h1><br>
			<h3 class="fs-subtitle">Please type the verification code sent to your mobile number</h3>
			<input type="text" name="otp" placeholder="OTP"/>
			<input type="submit" name="submit" class="previous action-button" value="Login" />
		</form>
    </body>
</html>	

<?php
	if(isset($_POST["submit"])){
		if(isset($_POST["otp"])){
            $_SESSION["otp"]=$_POST["otp"];
            $otp=$_SESSION["otp"];
        }
	    if($otp==$_SESSION['otp']) {
			/*$imgname=$_FILES['$image']['name'];
			$target_dir = "upload/";
			$target_file = $target_dir . basename($_FILES["image"]["name"]);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$extensions_arr = array("jpg","jpeg","png","gif");
			if(in_array($imageFileType,$extensions_arr) ){
				move_uploaded_file($_FILES['$image']['tmp_name'],$target_dir.$imgname);	*/
				$name=$_SESSION['name'];
				$pass=$_SESSION['pass'];
				$cpass=$_SESSION['cpass'];
				$phone=$_SESSION['phone'];
				$location=$_SESSION['address'];
				$email=$_SESSION['email'];
				include 'database.php';
				$id=uniqid(); 
				$sql="insert into user(id,name,password,phoneno,address,email,profile)values('$id','$name','$pass','$phone','$location','$email','$imgname')";
				if(mysqli_query($conn,$sql))
					echo '<script language="javascript">';
                    echo 'alert("Sucessfully Registered!!")';
                    echo '</script>';
				else	
					echo mysqli_error($conn);	
						
					
			
		}
        else
			echo '<script language="javascript">';
            echo 'alert("OTP incorrect")';
            echo '</script>';	
	}	

	
?>	