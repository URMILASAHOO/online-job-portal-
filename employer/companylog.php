<?php
 include '../admincon.php';
 session_start();
 if(isset($_POST['res']))
 {
  $u=$_POST["name"];
  $p=$_POST["pass"];
$retrive=mysqli_query($con,"select * from employer_master where username='$u'");
$row=mysqli_num_rows($retrive);
if($row>0)
{
    $data=mysqli_fetch_array($retrive);
     $rpass=$data['password'];
     if($rpass==$p)
     {
       
  echo"<script>window.location='employerdash.php?id=".$data['cid']."'</script>";
  $_SESSION['id']=$data['cid'];
     }
     else
     {
        echo"<script>alert('incorrect password')</script>";
     }
    } 

else
    echo"<script>alert('ERROR!!!!invalid username')</script>";
}
?>



<!doctype html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>employerlogin page</title>
	<link rel="stylesheet" href="../assets/css/styles.css">
    
            <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="../assets/css/price_rangs.css">
            <link rel="stylesheet" href="../assets/css/flaticon.css">
            <link rel="stylesheet" href="../assets/css/slicknav.css">
            <link rel="stylesheet" href="../assets/css/animate.min.css">
            <link rel="stylesheet" href="../assets/css/magnific-popup.css">
            <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="../assets/css/themify-icons.css">
            <link rel="stylesheet" href="../assets/css/slick.css">
            <link rel="stylesheet" href="../assets/css/nice-select.css">
            <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="../assets/css/style.css">
            <link rel="stylesheet"
          href="../assets/css/dash.css">
    <link rel="stylesheet"
          href="../assets/cssdashres.css">
            
	
</head>
<body>

<div class="wrapper">
	<div class="header">
		<div class="top">
			<div class="logo">
				<img src="../assets/img/logo/logo.png" alt="logo" style="width: 175px;">
			</div>
			<div class="form">
			<form id="resister"action="" method="post" onsubmit="myfun()" enctype="multipart/form-data">  
				<div class="input_field">
					<h8>Username:</h8>
					<input type="text" name="name"placeholder="Phone number, username, or email" class="input">
				</div>
				<div class="input_field">
				<h8>Password:</h8>
					<input type="password" placeholder="Password" name="pass" class="input">
				</div>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
				<div class="btn">
				
				<button type="submit"  class="view"  name="res" ><span class=front>login</span></button>
				
			
</div>
			
		<div class="signup">
			<p>New User? <a href="companyres.php">Sign up</a></p>
			<form>
		</div>
		
	</div>
	
		</div>
	</div>
</div>
<footer>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area footer-bg">
           <div class="container">
               <div class="footer-border">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-10 col-lg-10 ">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="#" target="_blank">team-mpc</a>
 <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="footer-social f-right">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>

 <!-- JS here -->
   
       <!-- All JS Custom Plugins Link Here here -->
       <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
       <!-- Jquery, Popper, Bootstrap -->
       <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
       <script src="./assets/js/popper.min.js"></script>
       <script src="./assets/js/bootstrap.min.js"></script>
       <!-- Jquery Mobile Menu -->
       <script src="./assets/js/jquery.slicknav.min.js"></script>

       <!-- Jquery Slick , Owl-Carousel Plugins -->
       <script src="./assets/js/owl.carousel.min.js"></script>
       <script src="./assets/js/slick.min.js"></script>
       <script src="./assets/js/price_rangs.js"></script>
       
       <!-- One Page, Animated-HeadLin -->
       <script src="./assets/js/wow.min.js"></script>
       <script src="./assets/js/animated.headline.js"></script>
       <script src="./assets/js/jquery.magnific-popup.js"></script>

       <!-- Scrollup, nice-select, sticky -->
       <script src="./assets/js/jquery.scrollUp.min.js"></script>
       <script src="./assets/js/jquery.nice-select.min.js"></script>
       <script src="./assets/js/jquery.sticky.js"></script>
       
       <!-- contact js -->
       <script src="./assets/js/contact.js"></script>
       <script src="./assets/js/jquery.form.js"></script>
       <script src="./assets/js/jquery.validate.min.js"></script>
       <script src="./assets/js/mail-script.js"></script>
       <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
       
       <!-- Jquery Plugins, main Jquery -->	
       <script src="./assets/js/plugins.js"></script>
       <script src="./assets/js/main.js"></script>
    
       

</body>
</html>