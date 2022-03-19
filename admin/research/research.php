<?php
  // include "../research/api/submitpost.php";
  include "../research/api/co_authorlsit.php";
  include "../research/api/displayallresearch.php";
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
    //   include("./accounts/api/post_signup.php");
    //   include_once ("./login/api/login_api_authenticate.php");
?>

<!--===============================================================================================
                                          START HEADER
=================================================================================================-->
  <header id="header" class="fixed-top">
    <div class="container">
      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><img src="../../img/logo.png" alt="" class="img-fluid">&nbsp;<strong>AURESPOR</strong></a>
      </div>
      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="../research/research.php">Research Management</a></li>
          <li class="active" id=aboutus><a href="#intro">About Us</a></li>

        </ul>
      </nav><!-- .main-nav -->
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
      <div class="intro-img">
        <img src="../" alt="" class="img-fluid">
      </div>

      <div class="intro-info">    
          <h2>Research Management </h2><br><br>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card">
              <div class="card-content">
                <p class="category"><strong>Total Researches</strong></p>
                <h3 class="card-title"><?php echo"$result_count"; ?></h3>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card">
              <div class="card-content">
                <p class="category"><strong>Total </strong></p>
                <h3 class="card-title">70,340</h3>
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
  <header class="section-header"> 

  </header><br>

<!--==================================== Table List =============================================-->  
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 m-auto d-block">
      <div class="box">
        <tr>
          <td><button class="btn btn-info" type="button" id="btn-add-research">Add Research Book</button></td>
          <td>
          
          </td>
        </tr>
      <table class="table table-striped table-responsive-md" id="firstTable" >
        <thead class="bg-primary text-white" id="firstThead"">
          <th> Title </th>
          <th> Author </th>
          <th> Date Publish </th>
          <th> Field of Study </th>
          <th> Views </th>
          <th> Cited </th>
          <th colspan="3"> Action </th>
        </thead>
        <tbody>
          <?php
          include "../research/api/displayallresearch.php";

            foreach($result as $rs)
            { ?>
              <tr id="result">
                <td><?php echo $rs['title']; ?> </td>
                <td><?php echo $rs['authors']; ?> </td>
                <td><?php echo $rs['date_publish']; ?> </td>
                <td><?php echo $rs['field_of_study']; ?> </td>
                <td><?php echo $rs['views']; ?> </td>
                <td><?php echo $rs['cites']; ?> </td>
                <td>
                  <a href="admin_dashboard.php?view=<?php echo $rs['id']?>"><input type="submit" class="btn btn-primary btn-sm" id="btn_edit1" value="View" >
                  </input></a>
                  <a href="#editresearch"><input type="submit" class="btn btn-warning btn-sm" id="btn_edit" value="Edit" data-bs-toggle="modal" data-bs-target="#editresearch">
                    </input></a>
                  <a href="admin_dashboard.php?rsdelete=<?php echo $rs['id'];?>"><input type="submit" class="btn btn-danger btn-sm" id="btn_deleteresearch" value="Delete">
                    </input></a>
                </td>
              </tr>
              <?php
            }
          ?>
        </tbody>
      </table>
      </div>
    </div>
  </div>
<!--=========================================== END ================================================-->

<!--================================== MODAL ADDING RESEARCH =======================================-->
<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add New Research Book</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer"></div>
    </div>
  </div>
</div>

<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 m-auto d-block">
    <div class="box">
    <center><h1>Add New Research Paper</h1></center>
      <form action="" method="POST" onclick="authentication()" name="form">
        <!-- TITLE -->
        <div class="form-group">
          <label class="label">Title *</label>
          <textarea rows="2" cols="60" type="text "name="title" id="title" class="form-control"></textarea>
        </div>

        <!-- MAIN AUTHOR -->
        <div class="form-group">
          <label class="label">Main Author *</label>
          <select class="custom-select" id="txtmain-author">
            <option selected disabled>Choose...</option>
            <?php
              include "../research/api/mainauthorlist.php";
              foreach($result as $row)
              {
                echo  "<option value=".$row['id'].">".$row['fullname']."</option>";
              }
            ?>
          </select>
        </div>
        
        <!-- CO AUTHOR -->
        <div class="row">
          <div class="col">
          <label class="label">Co-Author(s) *</label><br>
          <select class="custom-select" id="txtco-authors">
          <option selected disabled>Choose...</option>
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
          <div class="col" id="co-author-list">
            <label>--Co-Authors Added--</label>
          <ul class="list-group" id='co-list'>
            <?php
              $a="list-group-item";
              foreach($result as $row)
              {
                echo  "<li class ='list-group-item'>".$row['fullname']."</li>";
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
            <select class="custom-select" id="inputGroupSelect04">
            <option selected>Choose...</option>
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
            <option selected disabled>Choose...</option>
            <option value="Computer" id="Computer">Computer</option>
            <option value="Web Design" id="WebDesign">Web Design</option>
            <option value="Internet Security" id="InternetSecurity">Internet Security</option>
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
      </div>
      <div class="form-group">
        <div class="mb-3">
        <label for="formFileSm" class="form-label">File Pdf *</label>
        <input class="form-control form-control-md" id="formFileSm" type="file">
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
 <!--========================================== END  ===============================================-->
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

   <!-- Contact Form JavaScript File -->
  <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <script src="../../contactform/contactform.js"></script>

  <script>
  $(document).ready( function () {
    $("#co-list").toggle();
    $("#tags-list").toggle();


    $("#btn-co-author").click(function () {
      $("#co-list").show();

      var value1 = $('#txtco-authors').val();
      var val_id = $("#txtco-authors").attr('id')
      $('#tags-list').append('<li class ="list-group-item">'+ value1 +'</li>');

      $("#"+ value1+"").remove();
    })

    // TAGS
    $("#btn-tags").click(function () {
      $("#tags-list").show();
      
      var value = $('#drop-tags').val();
      $('#tags-list').append('<li class="list-group-item" id="'+value+'">' + value + '</li>');
      
      var trimStr = $.trim(value);
      console.log(trimStr);
      $("#"+trimStr+"").remove();
    })
  });
  

  </script>
  <script src="../../js/main.js"></script>

