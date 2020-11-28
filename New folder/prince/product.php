<body>
<form action="" method="post" enctype="multipart/form-data">
Select profile image:<input type="file" name="image" >
<input type="submit"  name="submit" value="UPLOAD"/><br><br>
</form>
</body>


<?php
echo "insert(),delete(),update(),approve(),reject()";
//     localhost:8080/ip/zhatpat/product.php?action=insert&category=phone&product_name=samsung&price=20000&description=color%20black&sellid=11

$_GET['action']();
function insert() {
    $category=$_GET['category'];
    $name=$_GET['product_name'];
    $description=$_GET['description'];
    $price=$_GET['price'];
    $sellid=$_GET['sellid'];
    date_default_timezone_set('Asia/Kolkata');
    $date=date('Y-m-d H:i:s');
    
    $picture=$_FILES['image']['name'];
    $target_dir = "upload/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    $extensions_arr = array("jpg","jpeg","png","gif");
                    if( in_array($imageFileType,$extensions_arr) ){
                        move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$picture);
    
    trim($name,$category);
    trim($price,$description);
    if($name=='' || $category=='' || $price=='' || $description=='')
        echo "Fill all inputs";
    else {
        $host="localhost";
        $user="root";
        $pwd="";
        $db="jhatpat";
        $conn=mysqli_connect($host,$user,$pwd,$db);
        $pid=uniqid();
        echo $description,$category,$price,$name;
        $sql="insert into product(pid,name,category,description,price,picture,sellid,date)values('$pid','$name','$category','$description','$price','$picture','$sellid','$date')";
        if(mysqli_query($conn,$sql)) {
            echo "insert";
        }
        else
            echo mysqli_error($conn);
    } 
    }
}

//     localhost:8080/ip/zhatpat/product.php?action=delete$productID=;


function delete() {
    include 'database.php';
    $product=$_GET['productID'];
    $sql="DELETE FROM `product` WHERE pid='$product'";
    if(mysqli_query( $conn,$sql)) {
        echo "delete".$product;
    }
    else
        echo mysqli_error($conn);
}

//     localhost:8080/ip/zhatpat/product.php?action=update&productID= &category=phone&product_name=samsung&price=20000&description=color%20black


function update() {
    include 'database.php';
    $category=$_GET['category'];
    $name=$_GET['product_name'];
    $description=$_GET['description'];
    $price=$_GET['price'];
    $product=$_GET['productID'];
    $sql1="select * from product where pid='$product'";
    $result=mysqli_query($conn,$sql1);
    $row=mysqli_fetch_array($result);
    if($row['name']==$name && $row['description']==$description && $row['price']==$price && $row['category']==$category) {
        echo "No Change";
    }
    else {
        $sql="UPDATE `product` SET `name`='$name',`description`='$description',`price`='$price',`category`='$category' WHERE pid='$product'";
        if(mysqli_query( $conn,$sql)) {
            echo "update".$product;
        }
        else
            echo mysqli_error($conn);
    }

}

// localhost:8080/ip/zhatpat/product.php?action=approve&buyerid=5e60ca5e8f4ac&pid=
function approve()
{
    $true=1;
	$buyer=$_GET['buyerid'];
	$productid=$_GET['pid']; //add buyer id in product table
	include 'database.php';
	$sql="UPDATE `buyer` SET `remarks`='$true' WHERE b_id='$buyer'";
    if(mysqli_query( $conn,$sql))
        echo "approve";
}

// localhost:8080/ip/zhatpat/product.php?action=reject&buyerid=5e60ca5e8f4ac
function reject()
{
    $false=2;
	$buyer=$_GET['buyerid'];
	include 'database.php';
	$sql="UPDATE `buyer` SET `remarks`='$false' WHERE b_id='$buyer'";
    if(mysqli_query( $conn,$sql)) {
        echo "Reject";
    }
    else
        echo mysqli_error($conn);	
}


//http://localhost:8080//ip/zhatpat/product.php?action=sellerProductList&sellid=
function sellerProductList()
{
	$sellid=$_GET['sellid'];
	include 'database.php';
    $sql="select * from product where sellid='$sellid'";
	$result=mysqli_query($conn,$sql);
	echo "<table border=1 ; border-color:white>";
	echo "<thead>";
	echo "<tr>";
	echo "<th>Name</th>";
	echo "<th>Description</th>";
	echo "<th>Price</th>";
	echo "<th>Category</th>";
	echo "<th>Date</th>";
	echo "<th>Status</th>";
	echo "<th>picture</th>";
	echo "</tr>";echo "</thead>";
	while($row=mysqli_fetch_array($result)) {
		echo "<tr>";	
        echo "<td>" . $row["name"] . "</td>";	
        echo "<td>" . $row["description"] . "</td>";	
		echo "<td>" . $row["price"] . "</td>";
		echo "<td>" . $row["category"] . "</td>";	
		echo "<td>" . $row["date"] . "</td>";	
		echo "<td>" . $row["status"] . "</td>";	
        $image = $row['picture'];
        $image_src = "upload/". $image;
	    echo "<td><img src=" . $image_src . " width=50 height=50></td>";
    }	
}


//http://localhost:8080//ip/zhatpat/product.php?action=productBidding&pid=
function productBidding()
{
	$productid=$_GET['pid'];
	include 'database.php';
    $sql="select bid_price,date from buyer where p_id='$productid'";
	$result=mysqli_query($conn,$sql);
	echo "<table border=1 ; border-color:white>";
	echo "<thead>";
	echo "<tr>";
	echo "<th>Date</th>";
	echo "<th>Bidding</th>";
	echo "</tr>";
	echo "</thead>";
	while($row=mysqli_fetch_array($result)) {
		echo "<tr>";	
		echo "<td>" . $row["date"] . "</td>";	
		echo "<td>" . $row["bid_price"] . "</td>";	
    }	
}


?>