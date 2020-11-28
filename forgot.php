<?php
session_start();
$_SESSION["true"]="0";
if(array_key_exists('otp',$_POST)) {
  otp();
}
function otp(){
  $phoneno=$_POST['phone'];
  
    include 'database.php';
    $sql="select * from user";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result)) {
            if($phoneno==$row['phoneno']){
              $_SESSION['uid']=$row['id'];
              $otp=$_SESSION['otp']=mt_rand(1111, 9999);
              $ch = curl_init();
              curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
              curl_setopt($ch, CURLOPT_URL, "https://www.uengage.in/ueapi/sendTemplate?usr=243&pwd=life123&mobileNo=$phoneno&senderId=SSTECH&templateId=1479&param=$otp");
              curl_setopt($ch, CURLOPT_HEADER, 0);
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              curl_exec($ch);
              curl_close($ch);
              echo '<script>alert("otp send")</script>';
              header("Location:http://localhost:8080/ip/zhatpat/forgot_otp.php");
              $_SESSION["true"]="1";
            }            
    }
    if($flag==0)
        echo '<script>alert("password Error")</script>';
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
              <span class="mr-3"><a href="tel://#"> <span class="icon-phone mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">9034836851</span></a></span>
              <span><a href="#"><span class="icon-envelope mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">zhatpatsell.com</span></a></span>
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
                 <h1 class="mb-0 site-logo"></h1>
              
            </nav>
          </div>
        </div>
      </div>
    </header>

  
     
    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
            <div class="row mb-4">
              <div class="col-md-7">
			    <div class="row justify-content-center">
				  <form id="msform" method="POST" action="">
					<fieldset>
						<h2 class="mb-0 site-logo">Forgot Password</h2> <br>
						<input type="text" name="phone" placeholder="Enter Mobile no." pattern="[789][0-9]{9}" required />
						<input type="submit" name="otp"  class="action-button" value="Send OTP" /><br>	
					</fieldset>
				  </form> 
                </div>
              </div>
            </div>
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