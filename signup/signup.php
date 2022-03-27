<?php
include "/xampp/htdocs/CustomLandingPage/signup/inc/header.php";
?>

<section id="intro" class="clearfix">
<div class="container">
<div class="row">
	<div class="col-3"></div>
	 <div class="col-6">
    <div class="card">
          <?php
          if (isset($_POST['btnsubmit'])) {

            $name=$_POST['name'];
            $email=$_POST['email'];

            $query = "SELECT * FROM tblaccount WHERE email = '$email'";
            $result = $connect->query($query);
            if($result->num_rows>0)
            {
              message("Already exits",0);
            }
            else{

                if ($_SERVER['REQUEST_METHOD']=="POST") 
                { 
                    // add if not exist
                    $query = "INSERT INTO tblaccount (name, email, pass,status, ucategory, au_member) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['password']."','Inactive','User','".$_POST['aumember']."')";
                    $result = $connect->query($query);
                    if ($result->num_rows > 0) {
                      add_data($query1,$connect,"You are successfully registered!");
                      header("location: ../login/login.php");
                    }

                    if (isset($_SESSION['id'])) {
                      // include "../";
                      
                    }
                }
              }
              }
              ?>
            <h5 class="card-header  text-center lead text-muted">Join us! Find your study here.</h5>
            <div class="card-body" id="margin-top">
              <?php 
              // echo "$query";
              ?>
            <h5 class="card-title text-center">Signup</h5>
            <form action="" method="POST">
            <div class="form-group">
                  <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                </div>
                <div class="form-group">
               <select class="browser-default custom-select"  id="aumember"
                  class="form-control"
                  name="aumember"
                  value=" ">
                  <option selected disabled>Are you a member of Arellano Community?</option>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="btnsubmit">Register</button>
              <br>
              Are you already registered? <a href="login.php">Login Now</a>
          </form>
          </div>
        </div>
        </div>
</div>
</div>
</section>

  <br>
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
  </footer>