<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Arellano University</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../resource/img/favicon.png" rel="icon">
  <link href="../resource/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" href="../resource/css/bootstrap.min.css">
	<link rel="stylesheet" href="../resource/css/mdb.min.css">

  <!-- Libraries CSS Files -->
  <link href="../resource/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../resource/lib/animate/animate.min.css" rel="stylesheet">
  <link href="../resource/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../resource/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../resource/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../resource/css/management.css" rel="stylesheet">
  <link href="../resource/css/addons.css" rel="stylesheet">

</head>

<body>
<?php
  session_start();


?>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">
      <div class="logo float-left">
       <a href="#intro" class="scrollto"><img src="../resource/img/logo.png" alt="" class="img-fluid" >&nbsp;<strong>AURESPOR</strong></a>
      </div>
      
      <nav class="main-nav float-right d-none d-lg-block" >
        <ul>
<<<<<<< HEAD
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Managements
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="nav-side-view">
            <a class="dropdown-item" href="#">Account Management</a>
            <a class="dropdown-item" href="#">Research Management</a>
         
            <a class="dropdown-item" href="#">Author Management</a>
            <a class="dropdown-item" href="#">Article Journal Management</a>
            <a class="dropdown-item" href="#">Events Management</a>
            <a class="dropdown-item" href="../old/news/index2.php">News Management</a>
            </li>
          <li class="active"><a href="#intro">About Us</a></li>

=======
        <?php 
        if (isset($_SESSION['id'])) 
        { 
          if ($_SESSION['role']== "Administrator") 
          { ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"aria-expanded="false">
                Management
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../admin/account/acount.php">Account Management</a>
                <a class="dropdown-item" href="../admin/research/research.php">Research Management</a>
                <a class="dropdown-item" href="../admin/author/author.php">Author Management</a>
                <a class="dropdown-item" href="../admin/journal/journal.php">Journal Management</a>
                <a class="dropdown-item" href="../admin/article/article.php">Article Management</a>
                <a class="dropdown-item" href="#">Author Management</a>
                <a class="dropdown-item" href="#">Events Management</a>
            </li>
            <li class="nav-item active" >
              <a class="nav-link" href="/journal.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown" >
                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user"></i>&nbsp;</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#settings">Settings</a>
                  <a class="dropdown-item" href="#aboutus">About Us</a>
                
                  <a class="dropdown-item" href="../signup/logout.php">Signout</a>
              </div>
            </li>
        <?php 
          }
          else if($_SESSION['role']== "User")
          {?>
            <li class="nav-item dropdown" >
              <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user"></i>&nbsp;</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#settings">Settings</a>
                <a class="dropdown-item" href="#aboutus">About Us</a>
              
                <a class="dropdown-item" href="../signup/logout.php">Signout</a>
              </div>
          </li><?php
          }  
        } 
        else 
        { ?>
          <li><a href="../login/login.php">Login</a></li>
          <li><a href="../signup/signup.php"  class="btn btn-primary btn-sm rounded-pill"><span style="color:#fff"> Sign Up</span></a></li>
          
        <?php 
        } ?>
>>>>>>> deeb977df5c145cc507e5643045231271dddf56e
        </ul>
      </nav><!-- .main-nav -->
    </div>
  </header><!-- #header -->
  


  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="../" alt="" class="img-fluid">
      </div>
      <div class="intro-info">    
          <h2>Arellano Research <span> Portal <span></h2>
          <h2>
          <div>

          </div>
        </div>
    </div>
  </section>
  
  <!-- #intro -->
  

  <main id="main">

    <!--==========================
      Result Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">

        </header><br>

        <div class="row">

        </div>

      </div>
    </section>

<!--==========================
    View all Section
  ============================-->

  </main>


  
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>AURESPOR</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <b>Phone:</b> +1 5589 55488 55<br>
              <b>Email:</b> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->
  <!-- Tables CDN -->
  <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

  <!-- JavaScript Libraries -->
  <script src="../resource/lib/jquery/jquery.min.js"></script>
  <script src="../resource/lib/jquery/jquery-migrate.min.js"></script>
  <script src="../resource/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../resource/lib/easing/easing.min.js"></script>
  <script src="../resource/lib/mobile-nav/mobile-nav.js"></script>
  <script src="../resource/lib/wow/wow.min.js"></script>
  <script src="../resource/lib/waypoints/waypoints.min.js"></script>
  <script src="../resource/lib/counterup/counterup.min.js"></script>
  <script src="../resource/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../resource/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="../resource/lib/lightbox/js/lightbox.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <script src="../contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script>
  $(document).ready( function () {
    $('#table_id').DataTable();
} );
  </script>
  <script src="../resource/js/main.js"></script>

</body>
</html>
