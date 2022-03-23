<?php
  // include "../research/api/submitpost.php";
  include "../author/api/co_authorlsit.php";
  include "../author/api/displayallresearch.php";
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
  <link href="../../img/favicon.png" rel="icon">
  <link href="../../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/mdb.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

  <!-- Libraries CSS Files -->
  <link href="../../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../../css/style.css" rel="stylesheet">
  <link href="../../css/addons.css" rel="stylesheet">

</head>

<body>
<?php
  session_start();
  // include ("../research/api/submitpost.php");
?>

<!--===============================================================================================
                                          START HEADER
=================================================================================================-->
  <header id="header" class="fixed-top">
    <div class="container">
      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="../../index.php" class="scrollto"><img src="../../img/logo.png" alt="" class="img-fluid">&nbsp;<strong>AURESPOR</strong></a>
      </div>
      <nav class="main-nav float-right d-none d-lg-block" >
        <ul>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Management
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="../account/account.php">Account Management</a>
                  <a class="dropdown-item" href="../research/research.php">Research Management</a>
               
                  <a class="dropdown-item" href="#">Author Management</a>
                  <a class="dropdown-item" href="#">Article Management</a>
                  <a class="dropdown-item" href="../journal/journal.php">Journal Management</a>
                  <a class="dropdown-item" href="#">Events Management</a>
              </li>

              <li class="nav-item dropdown" >
              <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user"></i>&nbsp;</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#profile">Profile</a>
                <a class="dropdown-item" href="#aboutus">About Us</a>
                <a class="dropdown-item" href="logout.php">Signout</a>
              </div>
              </li>
        </ul>
      </nav>
    </div>
  </header>
  <!--================================================================================================ 
                                              END HEADER 
  ====================================================================================================-->
  


<!--==================================================================================================
                                          START BODY SECTION
====================================================================================================-->
  <section id="intro" class="clearfix">
  <div class="container">
  <h3 style="color:#fff;">&nbsp;<b> Author Management </b></h3>
    <div class="card-group">
          <div class="col-md-3 col-sm-5">
            <div class="card">
              <div class="card-body">
                <i class="fa fa-book fa-2x " style="color:#007bff"></i>
                <h2 class="float-right" style="color: #007bff;"><?php echo "$result_count"; ?></h2>
                 <h5 class="card-title">All Author</h5>
                <p class="card-text"><small class="text-muted"><span>Last updated 3 mins ago</span> </small></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-5">
            <div class="card">
              <div class="card-body"> 
               <i class="fa fa-upload fa-2x" style="color:#007bff"></i>
                <h5 class="card-title">Recent upload</h5>     
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>

  <main id="main">
<!--=============================================================================================
                                        Result Section
===============================================================================================-->
<section id="services" class="section-bg">
  <div class="container">

<!--==================================== Table List =============================================-->  
<!-- <div class="row"> -->
    <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 m-auto d-block"> -->
      <div class="table-responsive-lg" id="a">
        <tr>
        <button type="button" class="btn btn-outline-lightblue btn-md" data-toggle="modal" data-target="#adding-research" id = "btnadd">Add Author</button>
        <a href="research.php #a"><button type="button" class="btn btn-outline-lightblue btn-md">
          Refresh
        </button></a>
          <td>
          
          </td>
        </tr>
        <tr>
        <nav class="navbar">
          <form class="form-inline">
            <input id="txtsearch_title" type="search" class="form-control" placeholder="Search" style=" width: 250px">
          </form>
        </nav>
        </tr>
      <table class="table table-hover table-responsive-md" id="firstTable" >
        <thead id="firstThead"">
          <th> ID </th>
          <th> Full Name </th>
          <th> Email </th>
          <th> PDF File </th>
          <th colspan="3"> Action </th>
        </thead>
        <tbody id="myTable" style="width:100%">
          <?php
          include "../author/api/displayallresearch.php";

            foreach($result as $rs)
            { ?>
              <tr id="result">
                <td id="res-id"><?php echo $rs['id']; ?> </td>
                <td id="res-fullname"><?php echo $rs['fullname']; ?> </td>
                <td id="res-email"><?php echo $rs['email']; ?> </td>
                <td id="res-pdffile"><?php echo $rs['pdf_file']; ?> </td>
                <td align="center"><div class="dropdown">
                  <button class="btn btn-light" type="button" id="option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-ellipsis-h"></i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="option">
                    <a class="dropdown-item" href="../research/view.php?view= echo $data['id']?>">View</a>
                    <a class="dropdown-item" href="../research/edit.php?edit= echo $data['id']?>">Edit</a>
                    <a class="dropdown-item" href="" data-toggle="modal" data-target="#modaldelete">Delete</a>
                  </div>
                </div>
              </td>
              </tr>
              <?php
            }
          ?>
        </tbody>
      </table>
      </div>
    <!-- </div> -->
  <!-- </div> -->
<!--=========================================== END ================================================-->

<!--================================== MODAL ADDING RESEARCH =======================================-->
<div class="modal fadeInDown  adding-research-lg " id="adding-research" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="box">
    <center><h1>Add New Author</h1></center>
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
  </div>
</div>
 <!--========================================== END  ===============================================-->
  </div>
  <!--==================================== MODAL DELETE NOTIF ======================================-->
  <div class="modal fade" id="modaldelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div><h4>Do you want to Delete?</h4></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-default">Yes</button>
      </div>
    </div>
  </div>
</div>
</section>

<!--===================================================================================================
                                          END OF BODY SECTION
  ====================================================================================================-->
  </main> 


  
  <!--================================================================================================
                                              FOOTER
  ==================================================================================================-->
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
  </footer>
<!--================================================================================================
  END FOOTER 
====================================================================================================-->
</body>
</html>
<!-- ===============================================================================================
                                      LIBRARIES AND SCRIPT
 ==================================================================================================-->

 <!-- JavaScript Libraries -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="../../js/jquery.min.js"></script>
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


  <script src="../author/script/main.js"></script>
  <script src="../../js/main.js"></script>

