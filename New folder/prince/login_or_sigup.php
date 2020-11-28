<!DOCTYPE html>
<html lang="en">
<head>
	<title>Jhatpat</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">



</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
        <button type='button' name=sell value="jjjj">
            <?php
            $flag=0;
            $phoneno=$_GET['phoneno'];
    $password=$_GET['password'];
    include 'database.php';
    $sql="select * from user";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result)) {
        if($row["phoneno"]==trim($phoneno) && $row["password"]==trim($password)) {
            $_SESSION['userid']=$row['id'];
            header("Location:http://localhost:8080//ip/zhatpat/sellorbuy.php?action=");
        }
        $flag=1;
    }
    if($flag==1) {
        
   header("Location:http://localhost:8080//ip/zhatpat/index.php?action=pass_incorrect");
    }
?>
			
		</div>
	</div>
	
	

	

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="js/main.js"></script>



</body>
</html>






<?php
session_start();



//      localhost:8080//ip/zhatpat/login_or_sigup.php?action=adminlogin&username=&password=

function adminlogin() {
    $username=$_GET['username'];
    $password=$_GET['password'];
    include 'database.php';
    $sql1="select username,password from admin";
    $result=mysqli_query($conn,$sql1);
    while($row=mysqli_fetch_array($result)) {
        $name=$row['username'];
	    $pass=$row['password'];
    }
    if($username==$name && $password==$pass) {
	    echo "Login Sucessful!!";	
        header("Location:http://localhost:8080//ip/zhatpat/admin.php?action=");		
    }	
	else
		echo "Wrong Username or Password";
}




//      localhost:8080//ip/zhatpat/login_or_sigup.php?action=usersignup&name=nikita&password=123&confirmpass=123&location=HR&email=nikita@gmail.com&phoneno=9646628084

function usersignup() {
    session_start();
    $name=$_SESSION['name']=$_GET['name'];
    $password=$_SESSION['password']=$_GET['password'];
    $confirmpass=$_SESSION['confirmpass']=$_GET['confirmpass'];
    $phoneno=$_SESSION['phoneno']=$_GET['phoneno'];
    $location=$_SESSION['location']=$_GET['location'];
    $email=$_SESSION['email']=$_GET['email'];
    trim($name,$password);
    trim($confirmpass,$phoneno);
    trim($location);
    if($name=='' || $password=='' || $confirmpass=='' || $phoneno=='' || $location==''|| $email=='')
        echo "Fill all inputs";
    else {
        if($password==$confirmpass){
            $_SESSION['otp']=7574;
            $otp=$_SESSION['otp'];
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_URL, "https://www.uengage.in/ueapi/sendTemplate?usr=243&pwd=life123&mobileNo=$phoneno&senderId=SSTECH&templateId=1479&param=$otp");
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_exec($ch);
            curl_close($ch);
            header("Location:http://localhost:8080/ip/zhatpat/userdetail.php?otp=7574");
        }
        else
            echo "password Error";
    } 
}
?>