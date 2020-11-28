<?php
session_start();
$_SESSION["true"]="0";
if(array_key_exists('userlogin',$_POST)) {
  userlogin();
}
else if(array_key_exists('registration',$_GET)) {
  registration();
}
else if(array_key_exists('contact',$_POST)) {
  contact();
}

function userlogin(){
    $email=strtoupper($_POST['email']);
    $password=$_POST['pass'];
    include 'database.php';
    $sql="select * from user";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result)) {
        if($row["email"]==trim($email) && $row["password"]==trim($password)) {
          $_SESSION["true"]="1";
          $_SESSION['userid']=$row['id'];
          header("Location:http://localhost:8080/ip/zhatpat/useraccount/useraccount.php");
      
        }
    }
    adminlogin();
    
         
}
function adminlogin(){
  $username=$_POST['email'];
  $password=$_POST['pass'];
  include 'database.php';
  $sql="select * from admin";
  $result=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($result)) {
      if($row["username"]==trim($username) && $row["password"]==trim($password)) {
        $_SESSION['admin']=$row['username'];
        $_SESSION["true"]="1";
        header("Location:http://localhost:8080/ip/zhatpat/admin/adminaccount.php");
      }
      else{
        echo '<script>alert("Username & Password incorrect")</script>';
        break;
      }
  }
}

function registration() {
$name=$_SESSION['name']=$_GET['name'];
$password=$_SESSION['password']=$_GET['pass'];
$confirmpass=$_SESSION['confirmpass']=$_GET['cpass'];
$phoneno=$_SESSION['phoneno']=$_GET['phone'];
$location=$_SESSION['address']=$_GET['address'];
$email=$_SESSION['email']=$_GET['email'];


trim($name,$password);
trim($confirmpass,$phoneno);
trim($location);
if($name=='' || $password=='' || $confirmpass=='' || $phoneno=='' || $location==''|| $email=='')
	echo '<script>alert("Fill all inputs")</script>';
else {
	if($password==$confirmpass){
    $otp=$_SESSION['otp']=mt_rand(1111, 9999);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_URL, "https://www.uengage.in/ueapi/sendTemplate?usr=243&pwd=life123&mobileNo=$phoneno&senderId=SSTECH&templateId=1479&param=$otp");
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_exec($ch);
		curl_close($ch);
    echo '<script>alert("otp send")</script>';
    header("Location:http://localhost:8080/ip/zhatpat/otpcheck.php");
        
	}
  else
    echo '<script>alert("password Error")</script>';
}
}

function sell() {
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

function contact() {
  $first=strtoupper($_POST['fname']);
  $last=strtoupper($_POST['lname']);
  $email=strtoupper($_POST['email']);
  $subject=strtoupper($_POST['subject']);
  $message=$_POST['message'];
  
  include 'database.php';
  $sql="insert into contact(firstname,lastname,email,subject,message)values('$first','$last','$email','$subject','$message')";
        if(mysqli_query($conn,$sql)) {
          echo '<script>alert("Done")</script>';
        }
        else
            echo mysqli_error($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Jhatpat-Buying And Selling site</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="css/style1.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <div class="top-bar py-3 bg-light" id="home-section">
      <div class="container">
        <div class="row align-items-center">
         
          <div class="col-6 text-left">
            <ul class="social-media">
              <li><a href="#" class=""><span class="icon-facebook"></span></a></li>
              <li><a href="#" class=""><span class="icon-twitter"></span></a></li>
              <li><a href="#" class=""><span class="icon-instagram"></span></a></li>
              <li><a href="#" class=""><span class="icon-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="col-6">
            <p class="mb-0 float-right">
              <span class="mr-3"><a href="tel://#"> <span class="icon-phone mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">964**28084</span></a></span>
              <span><a href="#"><span class="icon-envelope mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">jhatpatsell.com</span></a></span>
            </p>
            
          </div>
        </div>
      </div> 
    </div>

    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.php" class="text-black mb-0">JhaTpaT<span class="text-primary">.</span> </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#products-section" class="nav-link">Categories</a></li>
                <li><a href="#about-section" class="nav-link">About Us</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
				<li><a href="#login-section" class="nav-link">Login</a></li>
				<li><a href="#sell-section" class="nav-link">Sell</a></li>
				
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  
     
    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row mb-4">
              <div class="col-md-7">
                <h1>SeLL And BuY With Us</h1>
                <p class="mb-5 lead"></p>
                <div>
                  <a href="#registration-section" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 mb-lg-0 mb-2 d-block d-sm-inline-block">Register Now</a>
                  <a href="#contact-section" class="btn btn-white py-3 px-5 rounded-0 d-block d-sm-inline-block"> Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  


    
    <div class="site-section" id="products-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center">
            <h3 class="section-sub-title"></h3>
            <h2 class="section-title mb-3">Browse Categories</h2>
            <p> </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
            <a href="http://localhost:8080/ip/zhatpat/categories/index_mobiles.php"> <figure>
                <br><img src="images/m3.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="px-4">
                <h2>Mobile Phones</h2>
                
              </div>
            </div>
          </div></a>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
            <a href="http://localhost:8080/ip/zhatpat/categories/index_cars.php">
              <figure>
                <br><img src="images/car2.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="px-4">
                <h2>Cars</h2>
               
              </div>
            </div>
          </div></a>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
            <a href="http://localhost:8080/ip/zhatpat/categories/index_furnitures.php">
              <figure>
                <br><img src="images/furniture.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="px-4">
                <h2>Furnitures</h2>
              
              </div>
            </div>
          </div></a>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
            <a href="http://localhost:8080/ip/zhatpat/categories/index_bikes.php">
              <figure>
                <img src="images/bike1.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="px-4">
                <h2>Bikes</h2>
                
              </div>
            </div>
          </div></a>
          
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
            <a href="http://localhost:8080/ip/zhatpat/categories/index_electronics.php">
              <figure>
                <img src="images/eanda.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="px-4">
                <h2>Electronics & Appliances</h2>
                
              </div>
            </div>
          </div></a>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
            <a href="http://localhost:8080/ip/zhatpat/categories/index_books.php">
              <figure>
                <img src="images/book.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="px-4">
                <h2>Books</h2></a>
                
              </div>
            </div>
          </div></a>

          
        </div>
      </div>
    </div>
    
    <div class="site-blocks-cover inner-page-cover overlay get-notification"  style="background-image: url(images/hero_2.jpg); background-attachment: fixed;" data-aos="fade">
      <div class="container" id="sell-section">

        <div class="row align-items-center justify-content-center">
          <form class="col-md-7" method="post">
            <B><font color="white" size="10"> SeLL YouR StuFF Here.</font><B>
            <div class="d-flex mb-4">
             <a href='#login-section'> <input type="button" name=sell style="font-size:30px;" class="btn btn-white btn-outline-white1 rounded-0" value="SELL"></a>
            </div>
            <p>Make money online by selling your old things.</p>
          </form>
        </div>

      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center">
            <h3 class="section-sub-title">Awesome Products</h3>
            <h2 class="section-title mb-3">Featured Products</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.</p>
          </div>
        </div>
        <div class="bg-white py-4 mb-4">
          <div class="row mx-4 my-4 product-item-2 align-items-start">
            <div class="col-md-6 mb-5 mb-md-0">
              <img src="images/model_1_bg.jpg" alt="Image" class="img-fluid">
            </div>
           
            <div class="col-md-5 ml-auto product-title-wrap">
              <span class="number">01.</span>
              <h3 class="text-black mb-4 font-weight-bold">About This Product</h3>
              <p class="mb-4">Et tempora id nostrum saepe amet doloribus deserunt totam officiis cupiditate asperiores quasi accusantium voluptatum dolorem quae sapiente voluptatem ratione odio iure blanditiis earum fuga molestiae alias dicta perferendis inventore!</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus soluta assumenda sed optio, error at?</p>
              
              <div class="mb-4"> 
                <h3 class="text-black font-weight-bold h5">Price:</h3>
                <div class="price"><del class="mr-2">$269.00</del> $69.00</div>
              </div>
              <p>
                <a href="#products-section" class="btn btn-black btn-outline-black rounded-0 d-block mb-2 mb-lg-0 d-lg-inline-block">View Details</a>
                <a href="#products-section" class="btn btn-black rounded-0 d-block d-lg-inline-block">Add To Cart</a>
              </p>
            </div>
          </div>
        </div>

        <div class="bg-white py-4">
          <div class="row mx-4 my-4 product-item-2 align-items-start">
            <div class="col-md-6 mb-5 mb-md-0 order-1 order-md-2">
              <img src="images/product_1_bg.jpg" alt="Image" class="img-fluid">
            </div>
           
            <div class="col-md-5 mr-auto product-title-wrap order-2 order-md-1">
              <span class="number">02.</span>
              <h3 class="text-black mb-4 font-weight-bold">About This Product</h3>
              <p class="mb-4">Et tempora id nostrum saepe amet doloribus deserunt totam officiis cupiditate asperiores quasi accusantium voluptatum dolorem quae sapiente voluptatem ratione odio iure blanditiis earum fuga molestiae alias dicta perferendis inventore!</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus soluta assumenda sed optio, error at?</p>
              
              <div class="mb-4"> 
                <h3 class="text-black font-weight-bold h5">Price:</h3>
                <div class="price"><del class="mr-2">$269.00</del> $69.00</div>
              </div>
              <p>
                <a href="#products-section" class="btn btn-black btn-outline-black rounded-0 d-block mb-2 mb-lg-0 d-lg-inline-block">View Details</a>
                <a href="#products-section" class="btn btn-black rounded-0 d-block d-lg-inline-block">Add To Cart</a>
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>


    <div class="site-section" id="about-section">
      <div class="container">
        <div class="row align-items-lg-center">
          <div class="col-md-8 mb-5 mb-lg-0 position-relative">
            <img  src="images/app1.png" class="img-fluid" alt="Image">
            
          </div>
          <div class="col-md-3 ml-auto">
            <h3 class="section-sub-title">Merchant Company</h3>
            <h2 class="section-title mb-3">About Us</h2>
            <p class="mb-4">Jhatpat is a platform for buying and selling second hand and used services and goods such as electronics, fashion items, books, vehicles etc. Using this platform the buyer can bid on the products that the seller wants to sell and the bidder can buy the products after the seller approval.This platform is secure because payment is done only through the website!</p>
          </div>
        </div>
      </div>
    </div>


<div id="login-section">
      <br><br><center><h1 class="section-title mb-3"><font color="black"> <u>Login Form </u></form></h1></center>
      <form id="msform" method="post" >
        <fieldset>
        <h1 class="fs-title">Login your account</h1><br>
        <input type="text" name="email" placeholder="Email" required />
        <input type="password" name="pass" placeholder="Password" required />
        <input type="submit"    name="userlogin" class="action-button" value="Login" /><br>
        <div>
        <a align="right" class="" href="http://localhost:8080//ip/zhatpat/forgot.php"> <font color="#ADDFFF">Forgot password?</u></font> </a><br>
        <a align="right" class="" href="#registration-section"> <font color="#ADDFFF">Create New Account</u></font> </a><br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        </div>		
        </fieldset>
      </form> 
    








    <div id="registration-section" style="background-image: url(images/hero_2.jpg); background-attachment: fixed; background-position:top; height:750px;">
    <div class="site-section border-bottom" id="registration-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
			<h2><font color="white"><center><b><u> Registration form </u> </b></center></font></h2>
			
      <form name=myform id="msform" method="GET" >
		
				      <ul id="progressbar">
					      <li class="active"><font color="black">Account Setup</li>
					      <!-- <li> <font color="black">Profile Picture</li> -->
					      <li> <font color="black">Personal Details</li>
				      </ul>
				
				      <fieldset>
					      <h2 class="fs-title">Create your account</h2>
					      <h3 class="fs-subtitle">This is step 1</h3>
					      <input type="email" name="email" placeholder="Email" required />
					      <input type="password" name="pass" placeholder="Password" required/>
					      <input type="password" name="cpass" placeholder="Confirm Password" required/>
					      <input type="button" name="next" id="next " class="next action-button" value="Next" />
				      </fieldset>
				
              <fieldset>
					      <h2 class="fs-title">Personal Details</h2>
					      <h3 class="fs-subtitle">We will never sell it</h3>
					      <input type="text" name="name" placeholder="Name" required/>
					      <input type="text" name="phone" placeholder="Phone" />
					      <textarea name="address" placeholder="Address"></textarea>
					      <input type="button" name="previous" class="previous action-button" value="Previous" />
					      <input type="submit" name="registration"  class=" previous action-button" value="Submit" />
				      </fieldset>
			
      </form>
      </div>
      </div>
      </div>   
      </div>
      </div>
	
	
	
	<div class="site-section bg-light"  id="contact-section">
      <div class="container"> 
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">Contact Form</h3>
            <h2 class="section-title mb-3">Get In Touch</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 mb-5">

            <form  class="p-5 bg-white" method="POST">
              <h2 class="h4 text-black mb-5">Contact Form</h2> 
                <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" name="fname" class="form-control rounded-0" required>
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" name="lname" class="form-control rounded-0" required>
                </div>
                </div>

                <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" name="email" class="form-control rounded-0" required>
                </div>
                </div>

                <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" name="subject" class="form-control rounded-0" required>
                </div>
                </div>

                <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" name="message" cols="30" rows="7" class="form-control rounded-0" placeholder="Write your notes or questions here..." required></textarea>
                </div>
                </div>

                <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="contact" value="Send Message" class="btn btn-black rounded-0 py-3 px-4">
                </div>
                </div>
                </form>
          </div>
        </div>
      </div>
    </div>
	
	
	
	
	

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/regis.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>