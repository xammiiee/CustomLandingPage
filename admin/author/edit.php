<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Arellano University</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../../img/favicon.png" rel="icon">
  <link href="../../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
	 <link rel="stylesheet" href="../../css/mdb.min.css">

  <!-- Libraries CSS Files -->
  <link href="../../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../../lib/lightbox/css/lightbox.min.css" rel="stylesheet">
../../
  <!-- Main Stylesheet File -->
  <link href="../../css/management.css" rel="stylesheet">
  <!-- <link href="../../css/style.css" rel="stylesheet"> -->
  <link href="../../css/addons.css" rel="stylesheet">

</head>

<body>
<?php
  // include("./accounts/api/post_signup.php");
  // include_once ("./login/api/login_api_authenticate.php");
?>

  <!--===============================================================================================================
                                                         HEADER
  ==================================================================================================================-->
  <header id="header" class="fixed-top">
    <div class="container">
      <div class="logo float-left">
       <a href="#intro" class="scrollto"><img src="../../img/logo.png" alt="" class="img-fluid">&nbsp;<strong>AURESPOR</strong></a>
      </div>
      <nav class="main-nav float-right d-none d-lg-block" >
        <ul>
          <li class="active" id="aurespor"><a href="../research/research.php">Research Management</a></li>
          <li class="active" id=aboutus><a href="#intro">About Us</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!--================================================================================================================= 
                                                              END 
  ====================================================================================================================-->

  <!--=================================================================================================================
                                                         INTRO SECTION
  ===================================================================================================================-->
  <section id="intro" class="clearfix">
    <div class="container" id="container-form">
      <div class="intro-img">
      </div>
      
    </div>
  </section>
  
  <!--================================================================================================================ 
                                                             END
  ====================================================================================================================-->
  
  <main id="main">
<!--===================================================================================================================
                                                        MAIN BODY
=====================================================================================================================-->
    <section id="services" class="section-bg">
      <div class="container">
        <header class="section-header">
        
      </header><br>
      <div class="row">
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 m-auto d-block">
            <div class="box">
            <center><h1>Add New Research Paper</h1></center>
               <form action="" method="POST" name="form" enctype="multipart/form-data">
               
               <!-- TITLE -->
               <div class="form-group">
                  <label class="label">Title *</label>
                  <textarea rows="2" cols="60" type="text "name="title" id="title" class="form-control"></textarea>
               </div>

               <!-- MAIN AUTHOR -->
               <div class="form-group">
                     <label class="label">Main Author *</label><br>
                     <select class="custom-select" id="txtmain-author" name="txtmain-author">
                     <option selected> </option>
                     <?php
                     include "../research/api/mainauthorlist.php";
                     foreach($result as $row)
                     {
                        echo  "<option value=".$row['fullname'].">".$row['fullname']."</option>";
                     }
                     ?>
                     </select>
                  </div>
               
               <!-- CO AUTHOR -->
               <div class="row">
                  <div class="col">
                  <label class="label">Co-Author(s) *</label><br>
                  <select class="custom-select" id="txtco-authors" name="co-author">
                  <option selected disabled> </option>
                  <?php
                     foreach($result as $row)
                     {
                     echo  "<option value=".$row['id']." id=".$row['fullname'].">".$row['fullname']."</option>";
                     }
                  ?>
                  </select>
                  <div class="input-group-append">
                     <button class="btn btn-info" type="button" id="btn-co-author">Add</button>
                  </div>
                  </div>
                  <div class="col" id="co-author-list" >
                     <label>--Co-Authors Added--</label>
                  <ul class="list-group" id='co-list'>
                     <?php
                     $a="list-group-item";
                     foreach($result as $row)
                     {
                        echo  "<li class ='list-group-item' value='".$row['id']."' id='".$row['fullname']."'>".$row['fullname']."</li>";
                     }
                     ?>
                  </ul>
                  </div>
               </div>

               <!-- ABSTRACT -->
               <div class="form-group">
               <label class="label">Abstract *</label>
               <textarea rows="5" cols="60" type="text "name="abstract" id="title" class="form-control"></textarea>
               </div>

               <div class="row">
               <!-- DATE PUBLISH -->
               <div class="col">
                  <div class="form-group">
                     <label>Date Publish *</label>
                     <input type="date" name="dpub" id="dpub" class="form-control" />
                  </div>
               </div>

               <!-- FIELD OF STUDY -->
               <div class="col">
                  <div class="form-group">
                     <label class="label">Field of Study *</label><br>
                     <select class="custom-select" id="fstudy" name="fstudy">
                     <option selected> </option>
                     <option value="Accounting and Finance">Accounting and Finance</option>
                     <option value="Business and Economics">Business and Economics</option>
                     <option value="Computer Studies">Computer Studies</option>
                     <option value="Hospitality">Hospitality</option>
                     <option value="Nursing">Nursing</option>
                     </select>
                  </div>
               </div>
               </div>

               <div class="row">

               <!-- TAGS -->
               <div class="col">
                  <label class="label">Tag(s) *</label>
                  <select class="custom-select" id="drop-tags">
                     <option selected disabled> </option>
                     <option value="Computer" id="Computer">Computer</option>
                     <option value="WebDesign" id="WebDesign">Web Design</option>
                     <option value="InternetSecurity" id="InternetSecurity">Internet Security</option>
                  </select>
                  <div class="input-group-append">
                     <button class="btn btn-info" type="button" id="btn-tags">Add</button>
                  </div>
               </div>
               <div class="col">
                  <label>--Tags Added--</label>
                  <ul class="list-group" id="tags-list">
                  </ul>
               </div>
               </div><br>
               <div class="form-group">
               <label for="" class="form-label">File Pdf *</label><br>
               <div style="padding: 10px; border: 1px solid #999">
                  <input type="hidden" name="MAX_FILE_SIZE" value="20000000"/><input
                     type="file" name="pdfFile">
               </div>
               </div>
               <div class="form-group">
               <button type="submit" class="btn btn-info" id="submit" name="btnsubmit" >
                     Submit
               </button>
               </div>
               </form>
            </div>
         </div>
      </div>
    </section>
<!--==================================================================================================================
                                                           END
  ====================================================================================================================-->
  </main>

  <!--=================================================================================================================
                                                     FOOTER
  ==================================================================================================================-->
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
      <center><h4>Malindog Group</h4></center>
    </div>

  </footer>
  <!--=================================================================================================================
                                                          END 
   =================================================================================================================-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

  <!-- JavaScript Libraries -->
  <script src="../../lib/jquery/jquery.min.js"></script>
  <script src="../../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../lib/easing/easing.min.js"></script>
  <script src="../../lib/mobile-nav/mobile-nav.js"></script>
  <script src="../../lib/wow/wow.min.js"></script>
  <script src="../../lib/waypoints/waypoints.min.js"></script>
  <script src="../../lib/counterup/counterup.min.js"></script>
  <script src="../../lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../../lib/isotope/isotope.pkgd.min.js"></script>
  <script src="../../lib/lightbox/js/lightbox.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../../js/main.js"></script>

</body>
</html>
