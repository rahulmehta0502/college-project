<?php
if(isset($_GET["login"])){
	$phone=$_GET["phone"];
	$pass=$_GET["pass"];
	$flag=false;
	include 'database.php';
	$sql="select * from user ";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($result)) {
		$phone1=$row["phoneno"];
		$pass1=$row["password"];
		if($phone1==$phone && $pass1==$pass) {
			header("Location:http://localhost:8080/ip/zhatpat/buysell.php");
			alert("sucessfully login");
			$flag=true;
			
        }	
	}
    if($flag==false)	{
        echo '<script language="javascript">';
        echo 'alert("invalid Phone no. and Password")';
		echo '</script>';
		
         $a="confirm('')";
        if($a==true) 
        header("Location:http://localhost:8080/ip/zhatpat/index.php");
    }	
}
?>