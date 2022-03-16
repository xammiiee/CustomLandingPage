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
<?php
      include("./accounts/api/post_signup.php");
      include_once ("./login/api/login_api_authenticate.php");
?>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">
  
      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid">&nbsp;<strong>AURESPOR</strong></a>
      </div>
      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          
          <li><a href="" class="signup" data-toggle="modal" data-target="#signupPage">Sign Up</a></li>
          <li>  <a href="#aboutus">About Us</a></li>

        </ul>
      </nav><!-- .main-nav -->

      
    </div>
    
  </header><!-- #header -->
  
  
  <!-- #sign up modal -->
  <div class="modal fade" id="signupPage">

    
    <div class="modal-dialog">
      <div class="modal-content">
        
        <div class="modal-header text-center">
          <h4 class="modal-title text-center w-100 font-weight-bold" style="color: #007bff;">Sign Up</h4>
          <button type="button" class="close" data-dismiss="modal" aria-lable="close">&times;</button>
        </div>

        <form action="" method="POST">
        <div class="modal-body mx-3" style="margin: 0;padding: 0;">
          <div class="md-form mb-5">
            <input type="text" class="form-control validate"
            id="fname"
            name="fname"
            placeholder="First Name">
            <label data-error="wrong" data-success="right"></label>
          </div>

          <div class="md-form mb-5">
            <input type="text" class="form-control validate" 
            id="lname"
            name="lname"
            placeholder="Last Name">
            <label data-error="wrong" data-success="right"></label>
          </div>

          <div class="md-form mb-5">
            
            <input type="email" class="form-control validate"
            id="email"
            name="email"
            placeholder="email@example.com">
            <label data-error="wrong" data-success="right"></label>
          </div>
          <div class="md-form mb-5">
            <input type="password" class="form-control validate  
            id="password"
            name="password"
            placeholder="Your Password"">
            <label data-error="wrong" data-success="right"></label>
          </div>

          <div class="md-form mb-5">
            <select 
            id="aumember"
            class="form-control"
            name="aumember"
            value=" ">
            <option selected  data-error="wrong" data-success="right">Are you a member of Arellano Community?</option>
            <option value="Yes">Yes
            <option value="No">No
          </select>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-primary" id="submit" name="btnsubmit" >Sign up</button>
        </div>
        </form>
      </div>
    </div>
  </div>

<!-- #sign in modal -->

<div class="modal fade" id="signinPage">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold" style="color: #007bff;">Sign In</h3>
        <button type="button" class="close" data-dismiss="modal" aria-lable="close">&times;</button>
      </div>

        <form action="" method="POST">
          <div class="modal-body mx-4">
            <div class="md-form">
              <input type="email" class="form-control validate"  
              id="txt_uemail"
              name="txt_email"
              placeholder="Your Email">
              <label data-error="wrong" data-success="right"></label>
            </div>

            <div class="md-form">
              <input type="password" class="form-control validate"
              id="txt_upwd"
              name="txt_pwd"
              placeholder="Your Password">
              <label data-error="wrong" data-success="right"></label>

              <p class="font-small blue-text d-flex justify-content-end">Forgot<a href="#" class="blue-text ml-1">Password?</a></p>
            </div>

          <div class="text-center mb-3">
            <button type="button" class="btn btn-primary btn-block z-depth-1a" id="but_submit" name="but_submit" >Sign in</button>
          </div>
        </form>
        


        <p class="font-small dark-grey-text d-flex justify-content-center">or sign in with:</p>
        <div class="row my-3 justify-content-center">
          <button type="button" class="btn btn-primary z-depth-1a"><i class="fab fa-facebook-f text-center"></i></button>
          <button type="button" class="btn btn-purple z-depth-1a"><i class="fab fa-twitter text-center"></i></button>
          <button type="button" class="btn btn-red z-depth-1a"><i class="fab fa-google-plus-g text-center"></i></button>
        </div>
      </div>
    </div>
    </div> 
</div>


  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="/" alt="" class="img-fluid">
      </div>

      <input class="form-control form-control-lg" type="text" placeholder="Search 205,289,363 papers from all fields of science" aria-label=".form-control-lg example">
<br>

      <div class="intro-info">    
        <h2>Arellano Research <span> Portal <span></h2>
        <div>
          <a href="#about" class="btn-get-started scrollto" >Search</a>   
          <a href="" class="btn-services scrollto" data-toggle="modal" data-target="#signupPage"> Login</a>
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
        
        </header>

        <div class="row">

          <table id="table_id">
            <tbody>
              <tr>
                  <div class="col-md-6 col-lg-10 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                      <h4 class="title"><a href="">Title</a></h4>
                      <p class="description"><span>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</span></p>
                    </div>
                  </div>
              </tr>
            </tbody>
          </table>

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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

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
