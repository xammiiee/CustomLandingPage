<?php
  
  
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
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#accountmanagement">Account Management</a></li>
          <li><a href="#portfolio">Research Management</a></li>
       
          
          <li><a href="" class="signin" data-toggle="modal" data-target="#signinPage">Sign in</a></li>
          <li>  <a href="" class="signup" data-toggle="modal" data-target="#signupPage">Sign up</a></li>
  </ul>
      </nav><!-- .main-nav -->
    </div>
  </header><!-- #header -->
<br>
    </div>
  </section>
  <!-- #intro -->
  <main id="main">
    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Account Management</h3>
          <p>Admin can manage all of the account that are stored in database</p>
        </header>

        <div class="row">

              <!---------------------Account Management Section---------------------------->
<section id="account">
<div class="container pt-5" id="accountdiv">
 <?php include ("./accounts/api/action.php");?>
  <table>
    <tr>
      <td>
      <a type="button" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Add New User Account</a>
      </td>
      <td>
        <div class="input-group" style="margin: 0 0 0 100%;">
          <input type="search" class="form-control rounded" placeholder="Search First Name" aria-label="Search" style="width: 275px;" >
          <button type="button" class="btn btn-primary" id="accountsearch">Search</button>
        </div>
      </td>
      <td>
      </td>
    </tr>
    <tr><td><h4> </h4></td></tr>
  </table>

  <!-- Modal for New Account -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">New Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <div id="name-group" class="form-group" id="value-form">
            <label for="name">First Name</label>
            <input
              type="text"
              class="form-control"
              id="fname"
              name="fname"
              placeholder="First Name"/>
          </div>

          <div id="name-group" class="form-group" id="value-form">
          <label for="name">Last Name</label>
          <input
            type="text"
            class="form-control"
            id="lname"
            name="lname"
            placeholder="Last Name"
          />
        </div>

        <div id="email-group" class="form-group">
          <label for="email">Email</label>
          <input
            type="text"
            class="form-control"
            id="email"
            name="email"
            placeholder="email@example.com"
          />
        </div>

        <div id="password-group" class="form-group">
          <label for="password">Password</label>
          <input
            type="password"
            class="form-control"
            id="password"
            name="password"
            placeholder="Password"
          />
        </div>

        <div id="member-group" class="form-group">
          <label for="aumember">Category</label>
          <select 
            id="aumember"
            class="form-control"
            name="aumember"
            value=" ">
            <option selected>--Are you a member of Arellano Community?--</option>
            <option value="Yes">Yes
            <option value="No">No
          </select>
        </div><br>

        <button type="submit" class="btn btn-success" id="submit" name="btnsubmitaccount" >
          Submit
        </button>
        </form>
      </div>
    </div>
    </div>
  </div>
          <!----------------- Table of Account----------------->
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 m-auto d-block">
            <table class="table table-striped" id="firstTable">
                <thead class="bg-primary text-white" id="firstThead">
                    <th> First Name </th>
                    <th> Last Name </th>
                    <th> Email </th>
                    <th> Category </th>
                    <th> AU Member? </th>
                    <th> Status</th>
                    <th colspan="3">Action</th>
                </thead>
                <tbody>
                    <?php
                         $sql = "SELECT * FROM tblaccount";
                         $result = mysqli_query($con, $sql);
                 
                         if(mysqli_num_rows($result) > 0) {
                             $account = mysqli_fetch_all($result,MYSQLI_ASSOC);
                             foreach($account as $user) : ?>
                                <tr id="result">
                                    <td><?php echo $user['fname']; ?> </td>
                                    <td><?php echo $user['lname']; ?> </td>
                                    <td><?php echo $user['email']; ?> </td>
                                    <td><?php echo $user['ucategory']; ?> </td>
                                    <td><?php echo $user['au_member']; ?> </td>
                                    <td><?php echo $user['status']; ?> </td>
                                    <td>
                                        <?php 
                                          $status = $user['status'];
                                          if($status == "Active")
                                          {
                                            $stat1="Deactivate";
                                          }
                                          elseif($status =="Inactive")
                                          {
                                            $stat1 = "Activate";
                                          }
                                          $id = $user['id'];
                                        ?>
                                            <a href="admindashboard.php?status=<?php echo $user['status']?>&id=<?php echo $user['id']?>"><input type="submit" class="btn btn-primary btn-sm" id="btn_edit1" style="padding: left 10px;" value="<?php echo "$stat1" ?>" >&nbsp;</input></a>
                                            <?php 
                                          ?>
                                          <a href="#editaccount"><input type="submit" class="btn btn-warning btn-sm" id="btn_edit" value="Edit" data-bs-toggle="modal" data-bs-target="#editaccount">
                                          </input></a>
                                          
                                          <a href="admindashboard.php?delete=<?php echo $user['id'];?>"><input type="submit" class="btn btn-danger btn-sm" id="btn_delete" value="Delete">
                                          </input></a>
                                    </td>
                                </tr>
                          <?php endforeach; 
                         }   
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</section><br><br><br><br>
 
    </section>

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
  <script src="js/main.js"></script>

</body>
</html>
