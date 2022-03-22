<?php
session_start();
include "api/core.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Arellano University</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/mdb.min.css">

   <!-- Datatables -->
   <link href="assets/dataTables.bootstrap4.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/addons.css" rel="stylesheet">

</head>
<body>
  <!--==========================
  Header
  ============================-->
  
  <header id="header" class="fixed-top">
    <div class="container">
      <div class="logo float-left">
       <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid">&nbsp;<strong>AURESPOR</strong></a>
      </div>
      <div class="col-<?php if(isset($_SESSION['id'])){if($_SESSION['role'] == 1) { echo"6";}elseif($_SESSION['role'] == 2){echo"6";}else{echo"9";}}else{echo"10";}?>"></div>
      <nav class="main-nav float-right d-none d-lg-block" >
        <ul>
        <?php if (isset($_SESSION['id'])) { if ($_SESSION['role']==1 || $_SESSION['role']==2) { ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Management
                </a>
                <?php } ?>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Account Management</a>
                  <?php if ($_SESSION['role'] ==1 || $_SESSION['role'] ==2) { ?>
                  <a class="dropdown-item" href="#">Research Management</a>
                  <?php } ?>
                  <a class="dropdown-item" href="#">Author Management</a>
                  <?php if ($_SESSION['role']==1 || $_SESSION['role']==2) { ?>
                  <a class="dropdown-item" href="#">Article Journal Management</a>
                  <?php } ?>
                  <a class="dropdown-item" href="#">Events Management</a>
                  </li>
                  <?php if ($_SESSION['role']==1 || $_SESSION['role']==2 || $_SESSION['role']==3) { ?>
                  <li class="nav-item active" >
                    <a class="nav-link" href="Journal/journal_dashboard.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <?php } ?>
                  <li class="nav-item dropdown" >
                  <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user"></i>&nbsp;</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#settings">Settings</a>
                    <a class="dropdown-item" href="#aboutus">About Us</a>
                   
                    <a class="dropdown-item" href="logout.php">Signout</a>
                  </div>
                  </li>
                  <?php } else { ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php"  class="btn btn-primary btn-sm rounded-pill"><span style="color:#fff"> Sign Up</span></a></li>
          
          <?php } ?>
        </ul>
      </nav><!-- .main-nav -->
    </div>
  </header><!-- #header -->



  
</footer><!-- #footer -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->
  <!-- Tables CDN -->
  <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script>
  $(document).ready( function () {
    $('#table_id').DataTable();
    } );
  </script>
  <script src="js/main.js"></script>
  </body>
</html>
