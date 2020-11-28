<?php
session_start();
echo "bookorder(),cartinsert(), cartselect(), cartdelete(). <br>";
$_GET['action']();

//localhost:8080/ip/zhatpat/buyer.php?action=myBiding&bid=5e60ca5e8f4ac
function myBiding()
{
	$buyerid=$_GET['bid'];
    include 'database.php';
    $sql="select p_id,date,bid_price,remarks from buyer where b_id='$buyerid'";
	$result=mysqli_query($conn,$sql) or die( mysqli_error($conn));
	echo "<table border=1 ; border-color:white>";
	echo "<thead>";
	echo "<tr>";
	echo "<th>Product Name</th>";
	echo "<th>Product category</th>";
	echo "<th>Date</th>";
	echo "<th>Bid Price</th>";
	echo "<th>Status</th>";
	echo "</tr>";
	echo "</thead>";
	while($row=mysqli_fetch_array($result)) {
		echo "<tr>";	
		$a=$row["p_id"];	
		$sql1="select name,category from product where pid='$a'";
		$result1=mysqli_query($conn,$sql1);
		while($b=mysqli_fetch_array($result1)){
			$pname=$b["name"];
			$pcat=$b["category"];
		}	
		    echo "<td>" . $pname . "</td>";	
			echo "<td>" . $pcat . "</td>";	
			echo "<td>" . $row["date"] . "</td>";	
			echo "<td>" . $row["bid_price"] . "</td>";	
			echo "<td>" . $row["remarks"] . "</td>";	
	        echo "</tr>";
      
    }
}


//localhost:8080/ip/zhatpat/buyer.php?action=selectCategory&category=book
function selectCategory()
{
	$category=$_GET['category'];
	$true=1;
	include 'database.php';
	$sql="select name,picture,price from product where category='$category' and status='$true'";
	$result=mysqli_query($conn,$sql) or die( mysqli_error($conn));
	echo "<table border=1 ; border-color:white>";
	echo "<thead>";
	echo "<tr>";
	echo "<th>Picture</th>";
	echo "<th>Name</th>";
	echo "<th>Price</th>";
	echo "</tr>";echo "</thead>";
	while($row=mysqli_fetch_array($result)) {
		echo "<tr>";	
		$image = $row['picture'];
		$image_src = "upload/". $image;
		echo "<td><img src=" . $image_src . " width=50 height=50></td>";
		echo "<td>" . $row["name"] . "</td>";	
		echo "<td>" . $row["price"] . "</td>";
		echo "</tr>";
	}		
}

//localhost:8080/ip/zhatpat/buyer.php?action=prodDes&pid=5e60cac4ba7d8
function prodDes()
{
	
	include 'database.php';
	$sql="select * from product where buyid='' && status='1'";
	$result=mysqli_query($conn,$sql) or die( mysqli_error($conn));
	echo "<table border=1 ; border-color:white>";
	echo "<thead>";
	echo "<tr>";
	echo "<th>Product id</th>";
	echo "<th>Category</th>";
	echo "<th>Name</th>";
	echo "<th>Description</th>";
	echo "<th>Price</th>";
	echo "<th>Picture</th>";
	echo "</tr>";echo "</thead>";
	while($row=mysqli_fetch_array($result)) {
		echo "<tr>";	
		echo "<td>" . $row["pid"] . "</td>";
		echo "<td>" . $row["category"] . "</td>";
		echo "<td>" . $row["name"] . "</td>";	
		echo "<td>" . $row["description"] . "</td>";
		echo "<td>" . $row["price"] . "</td>";
		$_SESSION['price']=$row["price"];
		$image = $row['picture'];
		$image_src = "upload/". $image;
		echo "<td><img src=" . $image_src . " width=50 height=50></td>";
		
		echo "</tr>";
	}		
}

//localhost:8080/ip/zhatpat/buyer.php?action=buyerinsert&buyerid=5e5d471edc16b &productid=5e5b724f1af60 &bidprice=1000
function bookorder() {
	include 'database.php';
$buyerid=$_SESSION['userid'];
$productid=$_GET['productid'];
$sql="select * from product where pid='$productid'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$price=$row['price'];
date_default_timezone_set('Asia/Kolkata');
$date=date('Y-m-d H:i:s');
$remarks= 0;
include 'database.php';

$sql="insert into buyer(b_id,p_id,date,bid_price,remarks)values('$buyerid','$productid','$date','$price','$remarks')";
if(mysqli_query($conn,$sql)) {
	echo "insert";
	$sql1="update product set buyid='$buyerid' where pid='$productid'";
	mysqli_query($conn,$sql1);
}
else
    echo mysqli_error($conn);
}

//localhost:8080//ip/zhatpat/buyer.php?action=cartinsert&userid=11111&productid=5e5a8206cbb0f

function cartinsert() {
$userid=$_SESSION['userid'];
$productid=$_GET['productid'];
$cartid=uniqid();
include 'database.php';
$sql="insert into cart(cartid,userid,pid)values('$cartid','$userid','$productid')";
if(mysqli_query($conn,$sql)) 
    echo "insert";
else
    echo mysqli_error($conn);
}

//localhost:8080//ip/zhatpat/buyer.php?action=cartselect&productid=5e5a8206cbb0f
function cartselect() {
$userid=$_SESSION['userid'];
include 'database.php';
$sql1="select pid from cart where userid='$userid'";
$result=mysqli_query($conn,$sql1);
echo "<table border=1 ; border-color:white>";
echo "<thead>";
echo "<tr>";
echo "<th>product id</th>";
echo "<th>Name</th>";
echo "<th>Description</th>";
echo "<th>Price</th>";
echo "<th>Picture</th>";
echo "</tr>";echo "</thead>";
while($row=mysqli_fetch_array($result)) {
    $a=$row['pid'];
    $sql2="select * from product where pid='$a'";
    $result1=mysqli_query($conn,$sql2);
    while($row1=mysqli_fetch_array($result1)) {
		echo "<tr>";	
		echo "<td>" . $row1["pid"] . "</td>";
	    echo "<td>" . $row1["name"] . "</td>";	
        echo "<td>" . $row1["description"] . "</td>";	
        echo "<td>" . $row1["price"] . "</td>";	
        $image = $row1['picture'];
        $image_src = "upload/". $image;
	    echo "<td><img src=" . $image_src . " width=50 height=50></td>";
    }		
}
}

//localhost:8080//ip/zhatpat/buyer.php?action=cartdelete&productid=5e5a8206cbb0f
function cartdelete(){
$productid=$_GET['productid'];
include 'database.php';
$sql="delete from cart where pid='$productid'";	
if(mysqli_query($conn,$sql)) 
    echo "delete";
else
    echo mysqli_error($conn);
}	


//localhost:8080//ip/zhatpat/buyer.php?action=buyerPayment&productid=5e5a8206cbb0f&buyerid= &amount= &paymethod= &location=
function buyerPayment() {
$buyerid=$_GET['buyerid'];
$productid=$_GET['productid'];
$delivery=100;
$amount=$_GET['amount'];
$commission=0.1*$amount;
$total=$delivery+$amount+$commission;
$paymethod=$_GET['paymethod'];
$location=$_GET['location'];
include 'database.php';
$sql="insert into payment(buyerid,p_id,methodpay,amount,deliverycharges,commission,total,location)values('$buyerid','$productid','$paymethod','$amount','$delivery','$commission','$total','$location')";
if(mysqli_query($conn,$sql)) 
    echo "insert";
else
    echo mysqli_error($conn);
$sql1="delete from cart where pid='$productid'";	
mysqli_query($conn,$sql1);
$sql3="delete from buyer where p_id='$productid'";	
mysqli_query($conn,$sql3);
$sql2="update product set status=3,buyid='$buyerid' where pid='$productid'";	
mysqli_query($conn,$sql2);                                    
}	
	
	
	
	
	
