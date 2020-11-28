<?php
if(isset($_GET["login"])){
    $phoneno=$_GET['email'];
    $password=$_GET['pass'];
    include 'database.php';
    $sql="select * from user";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result)) {
        if($row["email"]==trim($phoneno) && $row["password"]==trim($password)) {
            header("Location:http://localhost:8080//ip/zhatpat/index.html");
        }
    }
            echo "Username & Password incorrect";
}

?>