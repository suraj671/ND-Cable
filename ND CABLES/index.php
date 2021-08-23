<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- font Awsome css -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
      
     <!-- custom css -->
    <link rel="stylesheet" href="css/custom.css">

    <title> ND CABLE </title>
</head>
    <body>
        <!-- navigation bar -->
        <nav class='navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top'>
            <a href="index.php" class="navbar-brand"> ND CABLE </a>
            <span class="navbar-text"> We make quality! </span>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mymenu">
            <ul class="navbar-nav pl-5 custom-nav">
            <li class="nav-item"><a href="index.php" class="nav-link"> Home </a></li>
            <li class="nav-item"><a href="#Services" class="nav-link"> Service </a></li>
            <li class="nav-item"><a href="#Products" class="nav-link"> Products </a></li>
            <li class="nav-item"><a href="#registration" class="nav-link"> Rsegistration </a></li>
            <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link"> Login </a></li>
            <li class="nav-item"><a href="#Contact" class="nav-link"> Contact </a></li>
            </ul>
            </div>
            
        </nav> <!-- Nevigation ends -->
        <!-- Start Header jumbotron -->
        <header class="jumbotron back-image" style="background-image: url(images/Cable1.jpg);">
            <div class="myclass mainHeading">
            <h1 class="text-uppercase text-danger font-weight-bold">Welcome to ND CABLE </h1>
            <p class="font-italic">A company of quality</p>
            <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
            <a href="#registration" class="btn btn-danger mr-4">Sign Up</a>
            </div>
        </header> 
   
   <!-- End Header Jumbotron -->


  
    
      <!-- Start Services -->
  <div class="container text-center border-bottom" id="Services">
    <h2>Our Services</h2>
    <div class="row mt-4">
      <div class="col-sm-4 mb-4">
        <a href="Requester/RequesterLogin.php"><i class="fas fa-wifi fa-8x text-success"></i></a>
        <h4 class="mt-4">Electronic Appliances</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="Requester/RequesterLogin.php"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
        <h4 class="mt-4"> Products </h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="Requester/RequesterLogin.php"><i class="fas fa-tasks fa-8x text-info"></i></a>
        <h4 class="mt-4">Fault Repair</h4>
      </div>
    </div>
  </div> <!-- End Services -->

   <!--  About ND CABLE -->
   <div class="container">
    <!--Introduction Section-->
    <div class="jumbotron">
      <h3 class="text-center"> ABOUT </h3>
      <p>
      ND CABLES has pioneered the development of India's electrical industry. YASH THAKKAR founded the company while spearheading innovation rooted in integrity. 
      Our commitment to quality has been the most integral aspect. Even today we are making cables, wires and switchgear products, revered for the reliability and safety.
       Our customers trust us. 
      ND CABLE have been claiming their brandby providing quality products to Automation sector since 20 long years.
      With the constant effort by our dedicated team, which is always curious and looking forward for
      new innovation in this sector, we have been very successful in providing cost effective and robust solutions.
      With the constant endeavor towards delivering top notch solutions, we aim at providing the best quality product to our customers.

      we provide different kinds of cables Coxile cable, LAN cables, CCTV cables, Telephoe cable, Shilded cable & other Electronics Cable
      and we also provide WIFI router services also

      </p>

    </div>
  </div>
  <!--Introduction Section End-->

 <!-- start registration form -->
  <?php include "UserRegistration.php" ?>
 <!-- end registration form -->
  
   <!-- our products  -->
  <div class="jumbotron bg-danger" id="Products">
    <!-- product  Jumbotron -->
    <div class="container">
      <!-- Start product Container -->
      <h2 class="text-center text-white">Our Products</h2>
      <div class="row mt-5">
        <div class="col-lg-3 col-sm-6">
          <!-- Start product1st Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
            <a href="Requester/RequesterLogin.php">
              <img src="images/cables.jpg" class="img-fluid" style="border-radius: 100px;"></a>
              <h4 class="card-title">Different kind of cables</h4>
              <p class="card-text">
              used for transmission of electrical power Coaxial cable, an electrical cable</p>
            </div>
          </div>
        </div> <!-- End product 1st Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start product 2nd Column-->
          <div class="card shadow-lg mb-2">
          <a href="Requester/RequesterLogin.php">
            <div class="card-body text-center">
              <img src="images/cctvcable.jpg" class="img-fluid" style="border-radius: 100px;"></a>
              <h4 class="card-title">CCTV cables</h4>
              <p class="card-text">CCTV cables  are used for 
              the purpose of wiring digital video recorders DVRs as well as CCTV camera.</p>
            </div>
          </div>
        </div> <!-- End product 2nd Column-->

        
        <div class="col-lg-3 col-sm-6">
          <!-- Start prodct 5th Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
            <a href="Requester/RequesterLogin.php">
              <img src="images/wifi.jpg" class="img-fluid" style="border-radius: 100px;"></a>
              <h4 class="card-title">Double antenna wifi</h4>
              <p class="card-text">  Home WiFi router will have 2 WiFi antennas, and just like a TV, 
              it matches which way you point the antenna</p>
            </div>
          </div>
        </div> <!-- End prodct 5th Column-->
        <div class="col-lg-3 col-sm-6">
          <!-- Start prodct 6th Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
            <a href="Requester/RequesterLogin.php">
              <img src="images/3wifi.jpg" class="img-fluid" style="border-radius: 100px;"></a>
              <h4 class="card-title">3 antenna wifi</h4>
              <p class="card-text">Most of the Home WiFi router will have 1, 2 or 3 WiFi antennas, and just like a TV, 
              it matches which way you point the antenna</p>
            </div>
          </div>
        </div> <!-- End prodct 6th Column-->
          
      </div> <!-- End prodct Row-->
    </div> <!-- End prodct Container -->
  </div> <!-- End prodct Jumbotron -->



  <!--Start Contact Us Row-->
  <div class="container" id="Contact">
    <!--Start Contact Us Container-->
    <h2 class="text-center mb-4">Contact Us</h2> <!-- Contact Us Heading -->
    <div class="row">
 <!--Start  1st Column-->
<?php include "contactform.php" ?>
 <!-- End  1st Column-->

<!-- start second column -->
<div class ='col-md-4 text-center'>
<strong>Address:</strong><br>
ND CABLE pvt Ltd, <br>
Malwani no.6, Malad (west)<br> 
mumbai: 400095<br>
Email: navdax@rediffmail.com <br>
Phone: +91 9665340263 <br>

<!-- We can also add a link here  -->

<a href="#" target="_blank" >www.ND CABLE.com</a> <br>

</div><!-- End second column -->
</div><!-- end contact us   -->

<!-- Start Footer-->
<footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start Footer 1st Column -->
          <span class="pr-2">Follow Us: </span>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
        </div> <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->
          <small> Designed by suraj &copy; 2020.
          </small>
          <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->
    

        <!-- Bootstrap javascript -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/all.min.js"></script>

    </body>
</html>