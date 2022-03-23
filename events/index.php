<?php
/**
* Simple PHP CRUD Script
* Developed by TutorialsClass.com
* URL:  http://tutorialsclass.com/code/php-simple-crud-application
**/

// Create database connection using config file
include_once("/xampp/htdocs/researchportal/news/config.php");

// Fetch all users data from database

$events = mysqli_query($mysqli, "SELECT * FROM tblevents ORDER BY id DESC");
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
  <link href="../img/favicon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/mdb.min.css">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/addons.css" rel="stylesheet">

</head>

<body>
<?php
    //   include("./accounts/api/post_signup.php");
    //   include_once ("./login/api/login_api_authenticate.php");
?>

  <!--==========================
  Header EVENTS
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">
      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><img src="../img/logo.png" alt="" class="img-fluid">&nbsp;<strong>AURESPOR</strong></a>
      </div>
      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
        <li class="active"><a href="/researchportal/news/index.php">News Management</a></li>
          <li class="active"><a href="">Events Management</a></li>
          <li class="active"><a href="#intro">About Us</a></li>

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
          <h2>Event <span> Management <span></h2>
          <div>

          </div>
        </div>
    </div>
  </section>
  
  <!-- #intro -->
  

  <main id="main">
  <body>

    

<section id="research"> 
<div class="container" id="researchdiv">
<table>
  <br>
  <tr>
      <td><h2 style="font-weight: bold;"></h2></td>
    </tr>
    <tr>
      <td>
      <a href="addevents.php"  name="uploadingresearch" data-toggle="modal" data-target="#researchmodal"> <button type="button" class="btn btn-primary btn-md"  name="uploadingresearch">
              Add New Events</button></a>
   
      </td>
      <td>
        <!----------------------text box search----------------------->
        </td>
    </tr>
      <tr><td><h4> </h4></td></tr>
  </table>
<div class="row">
      
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 m-auto d-block">
          <table class="table table-striped" id="firstTable" >
            
  
              <thead class="bg-primary text-white" id="firstThead"">
                  <th> Events </th>
                  <th> Description  </th>
                  <th> Date </th>
                  <th> Time </th>
                  <th colspan="3"> Action </th>
              </thead>
              <tbody>

              </tbody>
              <tr>

</tr>
<?php  
while($user_data = mysqli_fetch_array($events)) {         
  echo "<tr>";
  echo "<td>".$user_data['event_name']."</td>";
  echo "<td>".$user_data['event_description']."</td>";
  echo "<td>".$user_data['date']."</td>";    
  echo "<td>".$user_data['time']."</td>";    
    echo "<td>
    <a href='viewevents.php?id=$user_data[id]'>View</a> |
    <a href='editevents.php?id=$user_data[id]'>Edit</a> | 
    <a href='deleteevents.php?id=$user_data[id]'>Delete</a>
    </td>
</tr>";        
}
?>
          </table>
      </div>
  </div>

        </table>
      </div>
  </div>

</div>


</section>




















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



  </main>

<!--==========================
    View all Section
  ============================-->
  
  
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
  <script src="../contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script>
  $(document).ready( function () {
    $('#table_id').DataTable();
} );
  </script>
  <script src="../js/main.js"></script>

</body>
</html>
