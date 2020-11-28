<?php
echo "users() , products() , productApprove() , productReject() , blockUser() , payment()<br>" ;
$_GET['action']();

// http://localhost:8080//ip/zhatpat/admin.php?action=users
function users() {
	include 'database.php';
    $sql="select name,email,phoneno,address,profile from user";
	$result=mysqli_query($conn,$sql);
	echo "<table border=1 ; border-color:white>";
	echo "<thead>";
	echo "<tr>";
	echo "<th>Name</th>";
	echo "<th>Email</th>";
	echo "<th>Phone no</th>";
	echo "<th>Address</th>";
	echo "<th>Profile Picture</th>";
	echo "</tr>";
	echo "</thead>";
	while($row=mysqli_fetch_array($result)) {
		echo "<tr>";	
		echo "<td>" . $row["name"] . "</td>";	
        echo "<td>" . $row["email"] . "</td>";	
        echo "<td>" . $row["phoneno"] . "</td>";	
		echo "<td>" . $row["address"] . "</td>";	
        $image = $row['profile'];
        $image_src = "upload/". $image;
	    echo "<td><img src=" . $image_src . " width=50 height=50></td>";
    }
	
    echo "blockUser()";	
}

// http://localhost:8080//ip/zhatpat/admin.php?action=products
function products() {
	include 'database.php';
    $sql="select * from product";
	$result=mysqli_query($conn,$sql);
	echo "<table border=1 ; border-color:white>";
	echo "<thead>";
	echo "<tr>";
	echo "<th>ID</th>";
	echo "<th>Name</th>";
	echo "<th>Description</th>";
	echo "<th>Price</th>";
	echo "<th>Category</th>";
	echo "<th>Seller ID</th>";
	echo "<th>Date</th>";
	echo "<th>Status</th>";
	echo "<th>picture</th>";
	
	echo "</tr>";echo "</thead>";
	while($row=mysqli_fetch_array($result)) {
		echo "<tr>";	
		echo "<td>" . $row["pid"] . "</td>";	
        echo "<td>" . $row["name"] . "</td>";	
        echo "<td>" . $row["description"] . "</td>";	
		echo "<td>" . $row["price"] . "</td>";
		echo "<td>" . $row["category"] . "</td>";	
		echo "<td>" . $row["sellid"] . "</td>";	
		echo "<td>" . $row["date"] . "</td>";	
		echo "<td>" . $row["status"] . "</td>";	
        $image = $row['picture'];
        $image_src = "upload/". $image;
	    echo "<td><img src=" . $image_src . " width=50 height=50></td>";
    }	
    	
}

// http://localhost:8080//ip/zhatpat/admin.php?action=productApprove&productid=5e5b724f1af60
function productApprove() {
 	$true=1;
	$product=$_GET['productid'];
	include 'database.php';
	$sql="UPDATE `product` SET `status`='$true' WHERE pid='$product'";     //staus=1 means product  accepted by the admin
    if(mysqli_query( $conn,$sql)) {
        echo "approve";
    }
    else
        echo mysqli_error($conn);
}

// http://localhost:8080//ip/zhatpat/admin.php?action=productReject&productid=5e5b724f1af60
function productReject() {
 	$false=2;
	$product=$_GET['productid'];
	include 'database.php';
	$sql="UPDATE `product` SET `status`='$false' WHERE pid='$product'";    //staus=2 means product not accepted by the admin
    if(mysqli_query( $conn,$sql)) {
        echo "reject";
    }
    else
        echo mysqli_error($conn);
}

// http://localhost:8080//ip/zhatpat/admin.php?action=blockUser&userID=
function blockUser(){
	include 'database.php';
    $userID=$_GET['userID'];
	$sql="delete from cart where userid='$userID'";
	mysqli_query($conn,$sql);
	$sql4="delete from buyer where b_id='$userID'";
	mysqli_query($conn,$sql4);
    $sql1="DELETE FROM product WHERE sellid='$userID' AND buyid='$userID'";
	mysqli_query($conn,$sql1);
	$sql2="INSERT INTO blockusers 
    SELECT * FROM user WHERE id ='$userID'";
	mysqli_query( $conn,$sql2);
    $sql3="DELETE FROM user WHERE id = '$userID'";
	if(mysqli_query( $conn,$sql3))
		echo "block";
	else
		echo mysqli_error($conn);
}


//http://localhost:8080//ip/zhatpat/admin.php?action=paymentToSeller&pid=
function paymentToSeller() {
$productid=$_GET['pid'];
include 'database.php';
$sql="select sellid from product where pid='$productid'";
$result=mysqli_query($conn,$sql);	
while($row=mysqli_fetch_array($result))  {
	echo$sellid=$row['sellid'];
}
$true=1;
$sql1="update payment set sellerid='$sellid',paymentstatus='$true' where p_id='$productid'";
if(mysqli_query($conn,$sql1))
echo "payment done!!";
else
echo mysqli_error($conn);	
}	

