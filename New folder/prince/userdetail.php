<!-- <body>
<form action="" method="post" enctype="multipart/form-data">
Select profile image:<input type="file" name="image" id="user" class="input"/>
<input type="submit" class="button" name="submit" value="UPLOAD"/><br><br>
</form>
</body> -->


<?php
session_start();
$otp=$_GET['otp'];
if($otp==$_SESSION['otp']) {
	if(isset($_POST["submit"])){
                $imgname = $_FILES['image']['name'];
                $target_dir = "upload/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                $extensions_arr = array("jpg","jpeg","png","gif");
                if(in_array($imageFileType,$extensions_arr) ){
                    move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$imgname);
                    $name=$_SESSION['name'];
                    $password=$_SESSION['password'];
                    $confirmpass=$_SESSION['confirmpass'];
                    $phoneno=$_SESSION['phoneno'];
                    $location=$_SESSION['location'];
	                $email=$_SESSION['email'];
                    include 'database.php';
	                $id=uniqid(); 
                    if($password==$confirmpass) {
	                    $sql="insert into user(id,name,password,phoneno,address,email,profile)values('$id','$name','$password','$phoneno','$location','$email','$imgname')";
                        if(mysqli_query($conn,$sql))
                        header("Location:http://localhost:8080//ip/zhatpat/login_or_sigup.php?action=");
	                    else	
	                        echo mysqli_error($conn);	
	                }
					else
                        echo"confirm password not match";
				}
	}
}
else
    echo "OTP incorrect"; 

	
?>