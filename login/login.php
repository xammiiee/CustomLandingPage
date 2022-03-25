<?php
include "../resource/inc/header.php";

if (isset($_POST['email']) && isset($_POST['password'])) {
$query ="SELECT * FROM tblaccount WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'";
$result = select_data($query,$connect);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()){
  $_SESSION['id'] = $row['id'];
  $_SESSION['name'] = $row['name'];
  $_SESSION['role'] = $row['role'];
}
} else {
  message("Your email/password was incorrect!","0");

}
}
if (isset($_SESSION['id'])) {
  //verification for user
  if ($_SESSION['role']==3) {
    header("location: ../signup/pending_user.php");
  } else{
  // header("Location: ../journal.php");
}
}
?>
<section id="intro" class="clearfix">
<!-- #sign in -->
<div class="container">
<div class="row">
	<div class="col-3"></div>
	<div class="col-6">
            <div class="card">
            <div class="card-body" id="margin-top">
            <h5 class="card-title text-center">Login</h5>
        <form action="" method="POST">
            <div class="md-form">
              <input type="email" class="form-control validate"  
              id="email"
              name="email"
              placeholder="Your Email">
              <label data-error="wrong" data-success="right"></label>
            </div>

            <div class="md-form">
              <input type="password" class="form-control validate"
              id="password"
              name="password"
              placeholder="Your Password">
              <label data-error="wrong" data-success="right"></label>

              <p class="font-small blue-text d-flex justify-content-end">Forgot<a href="#" class="blue-text ml-1">Password?</a></p>
            </div>

          <div class="text-center mb-3">
            <button type="submit" class="btn btn-primary btn-block z-depth-1a" id="but_submit" name="but_submit" >Sign in</button>
          </div>
          <span>Don't have an account? <a href="../signup/signup.php" >Create a free account</span>
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
</div>

</section>

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