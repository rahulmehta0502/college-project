<html>
	<head>
		<link rel="stylesheet" href="style1.css">
	</head>
	<body background="images\hero_2.jpg">
	    
		<form id="msform" action="" method="POST" enctype="multipart/form-data">
		        <h1 class="otp-title"><font color="white"><u>Profile Picture</u></font></h1><br>
                <fieldset>
                    Select profile image:<input type="file" name="image" id="user" class="input"/> 
					<input type="submit" name="submit" class="previous action-button" value="submit" />
			    </fieldset>
		</form>
		
    </body>
</html>	
<?php
session_start();
if(isset($_POST['submit'])) {
    $id=uniqid(); 
    $imgname = $_FILES["image"]["name"];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $extensions_arr = array("jpg","jpeg","png","gif","ico");
    if(in_array($imageFileType,$extensions_arr) ) {
        move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$imgname);
        rename($target_dir.$imgname,$target_dir.$id.".jpg");
    }
    $imgname1 =$id.".jpg";
    include 'database.php';
    $name=$_SESSION['name'];
    $password=$_SESSION['password'];
    $confirmpass=$_SESSION['confirmpass'];
    $phoneno=$_SESSION['phoneno'];
    $location=$_SESSION['address'];
    $email=$_SESSION['email'];
    $name1=strtoupper($name);
    $location1=strtoupper($location);
    $email1=strtoupper($email);
    $sql="insert into user(id,name,password,phoneno,address,email,profile)values('$id','$name1','$password','$phoneno','$location1','$email1','$imgname1')";
    if(mysqli_query($conn,$sql)) {
        echo '<script>alert("inserted")</script>';
        header("Location:http://localhost:8080/ip/zhatpat/index.php");
    }
    else	
        echo mysqli_error($conn);
}
?>