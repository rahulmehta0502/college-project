<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>

<script src="regis.js"></script>
</head>
<body>
<form id="msform" method="POST" action="">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Profile Picture</li>
    <li>Personal Details</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Create your account</h2>
    <h3 class="fs-subtitle">This is step 1</h3>
    <input type="text" name="email" placeholder="Email" />
    <input type="password" name="pass" placeholder="Password" />
    <input type="password" name="cpass" placeholder="Confirm Password" />
    <input type="button" name="next" id="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Profile Picture</h2>
    <input type="file" name="image"  class="input"/> 
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">We will never sell it</h3>
    <input type="text" name="name" placeholder="Name" />
    <input type="text" name="phone" placeholder="Phone" />
    <textarea name="address" placeholder="Address"></textarea>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="next action-button" value="Submit" />
  </fieldset>
</form>
</body>
</html>

<?php
	if(isset($_POST["submit"])){
		/*$imgname = $_FILES['image']['name'];
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $extensions_arr = array("jpg","jpeg","png","gif");
        if(in_array($imageFileType,$extensions_arr) ){
        move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$imgname);
		}*/
		if(isset($_POST["name"])){
            $_SESSION["name"]=$_POST["name"];
            $name=$_SESSION["name"];
        } 
		if(isset($_POST["email"])){
            $_SESSION["email"]=$_POST["email"];
            $email=$_SESSION["email"];
        } 
		if(isset($_POST["phone"])){
            $_SESSION["phone"]=$_POST["phone"];
            $phone=$_SESSION["phone"];
        } 
		if(isset($_POST["address"])){
            $_SESSION["address"]=$_POST["address"];
            $address=$_SESSION["address"];
        } 
		if(isset($_POST["pass"])){
            $_SESSION["pass"]=$_POST["pass"];
            $pass=$_SESSION["pass"];
        } 
		if(isset($_POST["cpass"])){
            $_SESSION["cpass"]=$_POST["cpass"];
            $cpass=$_SESSION["cpass"];
        } 
		trim($name,$pass);
        trim($cpass,$phone);
        trim($address,$email);
        if($name=='' || $pass=='' || $cpass=='' || $phone=='' || $address==''|| $email=='')  {
			echo '<script language="javascript">';
            echo 'alert("Fill all inputs")';
            echo '</script>';
		}	
        else {
			if($pass==$cpass){
				$_SESSION['otp']=7574;
				$otp=$_SESSION['otp'];
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($ch, CURLOPT_URL, "https://www.uengage.in/ueapi/sendTemplate?usr=243&pwd=life123&mobileNo=$phone&senderId=SSTECH&templateId=1479&param=$otp");
				curl_setopt($ch, CURLOPT_HEADER, 0);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_exec($ch);
				curl_close($ch);
				header("Location:http://localhost:8080/ip/zhatpat/otp.php");
			}
			else
				echo '<script language="javascript">';
                echo 'alert("Passwords not matched")';
                echo '</script>';
        }
		
	}	   
		
	 		
?>		 