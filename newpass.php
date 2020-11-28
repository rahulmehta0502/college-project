<?php
session_start();
if($_SESSION["true"]=="1") {
if(array_key_exists('submit',$_POST)) {
  newpass();
}

}
else
header("Location:http://localhost:8080/ip/zhatpat/index.php");
function newpass(){
    $uid=$_SESSION['uid'];
    $pass=$_POST['pass'];
    $confirmpass=$_POST['confirmpass'];
    if($pass==$confirmpass){
        include 'database.php';
        $sql="update user set password='$pass' where id='$uid'";
        if(mysqli_query($conn,$sql)){
            echo '<script type="text/javascript">'; 
            echo 'alert("Password Change");'; 
            echo 'window.location.href = "http://localhost:8080/ip/zhatpat/index.php";';
            echo '</script>';
        }
    }
}
?>
<html>
	<head>
		<link rel="stylesheet" href="style1.css">
	</head>
	<body background="images\hero_2.jpg">
		<form id="msform" method="post" action="">
			<h1 class="otp-title"><font color="white">RESET PASSWORD</h1><br>
			<h2 class="fs-subtitle" align="left"> <font color="white">Password:</h3>
			<input type="text" name="pass" placeholder="Enter New password"/><br><br>
            <h2 class="fs-subtitle" align="left"> <font color="white">Confirm Password:</h3>
            <input type="text" name="confirmpass" placeholder="Enter Confirm password"/>
			<input type="submit" name="submit" class="previous action-button" value="Proceed" />
		</form>
    </body>
</html>	