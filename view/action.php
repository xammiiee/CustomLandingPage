<?php
session_start();
include "/xampp/htdocs/CustomLandingPage/admin/research/inc/db.php";
include "/xampp/htdocs/CustomLandingPage/admin/research/functions/DB.func.php";
include "/xampp/htdocs/CustomLandingPage/admin/research/functions/Message.func.php";
include "/xampp/htdocs/CustomLandingPage/admin/research/functions/functions.php";
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
  <link href="../resource/img/favicon.png" rel="icon">
  <link href="../resource/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" href="../resource/css/bootstrap.min.css">
	<link rel="stylesheet" href="../resource/css/mdb.min.css">

   <!-- Datatables -->
   <link href="../resource/ts/dataTables.bootstrap4.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../resource/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../resource/lib/animate/animate.min.css" rel="stylesheet">
  <link href="../resource/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../resource/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../resource/lib/lightbox/css/lightbox.min.css" rel="stylesheet">


  
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>



  <!-- Main Stylesheet File -->
  <link href="../resource/css/style.css" rel="stylesheet">
  <link href="../resource/css/addons.css" rel="stylesheet">
  <style type="text/css">
   .modal-dialog{
    max-width: 75%!important;
  }
</style>
</head>
<body>
  <!--==========================
  Header
  ============================-->
  
  <header id="header" class="fixed-top">
    <div class="container">
      <div class="logo float-left">
       <a href="/CustomLandingPage/index.php" class="scrollto"><img src="../resource/img/logo.png" alt="" class="img-fluid" >&nbsp;<strong>AURESPOR</strong></a>
      </div>
      
      <nav class="main-nav float-right d-none d-lg-block" >
        <ul>
        <?php 
          if (isset($_SESSION['id'])) 
          { 
            if ($_SESSION['role']=="Administrator")
            { ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#"id="navbarDropdown" role="button"data-toggle="dropdown" aria-haspopup="true"aria-expanded="false">Management</a>
              <?php 
            }
            ?>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <?php if ($_SESSION['role'] == "Administrator") { ?>
                  <a class="dropdown-item" href="../../account/account.php">Account Management</a>
                  <?php } ?>

                  <?php if ($_SESSION['role'] == "Administrator") { ?>
                  <a class="dropdown-item" href="../../research/research.php">Research Management</a>
                  <?php } ?>

                  <?php if ($_SESSION['role'] == "Administrator") { ?>
                  <a class="dropdown-item" href="../../author/author.php">Author Management</a>
                  <?php } ?>
                  
                  <?php if ($_SESSION['role'] == "Administrator") { ?>
                  <a class="dropdown-item" href="../../journal/journal.php">Journal Management</a>
                  <?php } ?>
                  
                  <?php if ($_SESSION['role'] == "Administrator") { ?>
                  <a class="dropdown-item" href="../../article/article.php">Article Management</a>
                  <?php } ?>

                  <?php if ($_SESSION['role'] == "Administrator") { ?>
                  <a class="dropdown-item" href="../../author/author.php">Author Management</a>
                  <?php } ?>

                  <?php if ($_SESSION['role'] == "Administrator") { ?>
                  <a class="dropdown-item" href="../../events/index.php">Events Management</a>
                  <?php } ?>

                  <?php if ($_SESSION['role'] == "Administrator") { ?>
                  <a class="dropdown-item" href="../../news/index.php">News Management</a>
                  <?php } ?>
                  </div>
                </li>
                  <li><a><?php echo $_SESSION['name'];?></a></li>
                  <li class="nav-item dropdown" >
                  <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user"></i>&nbsp;</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="../../profile/profile.php">Profile</a>
                      <a class="dropdown-item" href="#aboutus">About Us</a>
                      <a class="dropdown-item" href="../../signup/logout.php">Signout</a>
                    </div>
                  </li>
                  <?php
          } 
          else 
          { 
            header("Location: ../../login/login.php");
          }?>
        </ul>
      </nav><!-- .main-nav -->
    </div>
  </header>
<?php

if(empty($_SESSION['id']))
{
	echo "Empty";
}
$_SESSION['id'];

// Get Research id
if (!empty($_GET['id'])) 
{
	// RESEARCH
	if($_GET['u'] == "r")
	{
		$data = get_researchaction($connect,$_GET['id']);
		// include "";
		$pdf_file = $data['pdf_file'];
		$fstudy = $data['field_of_study'];
		$tags = $data['tagging'];
		?>
			<br><br><br><br>
			<!--View Research-->
			<div class="container">
			<div class="card">
				<div class="card-body">
				<div style="line-height: 20px;">
				<style>
					h2,p{
						padding:0;
						margin:0;
						
					}
					/* .card{

					} */
				</style>
							<div class="badge badge-info text-wrap" style="width: 5rem; padding:5px;" >
							<!-- change to.. -->
							<span >Research</span>
							</div>
							<?php 
							$logged_id = $_SESSION['id'];
							$sql = "SELECT * FROM tblaccount WHERE id = '$logged_id'";
							$result = mysqli_query($connect,$sql);
							$count = mysqli_fetch_array($result);
							// check email if exist
							if($count >= 1)
							{
								$subscribe = $count['subcribe'];
							}
								if(!empty($logged_id) || $subscribe != "No")
								{
									if($subscribe =="Yes")
									{
										?>
										<div>
											<!-- <button type ="button" class="btn btn-primary btn-sm float-right" style="position:relative;bottom:40px;" name="btn-download"><span class="fa fa-download"> Download Fulltext PDF&nbsp;</span></button> -->
											<a href="../admin/research/<?php echo $data['pdf_file']?>"><button type ="button" class="btn btn-outline-primary btn-sm float-right" style="position:relative;bottom:40px;" name="btn-fullview"><i class="fa fa-file-text"> View Fulltext PDF&nbsp;</i></button></a>
										</div>
										<?php
									}
								}
								?>
								<!--  -->
								
								<!--  -->
								<div>
								<h2 class="text-left" style="margin-top:10px; font-family:'Lucida Sans';" ><b><?php echo $data['title']?></b></h2>
								<ul class="list-inline" style="font-size: small;">
									<li class="list-inline-item"><a href="author.php?u=r&author=<?php echo $data['main_author'];?>"><u><?php echo $data['main_author']?></u></a></li>
									<li class="list-inline-item"><a href="author.php?u=r&author=<?php echo $data['co_authors'];?>"><u><?php echo $data['co_authors']?></u></a></li>
									<li class="list-inline-item ">* Published <?php echo $data['date_publish'];?></li>
									<li class="list-inline-item">* <?php echo $data['field_of_study'];?></li>
								</ul>
							</div>
							<p class="font-weight-normal text-left" style="width:80%;"><?php echo ($data['abstract']); ?></p><br>
							<button type="button" class="btn btn-sm badge badge-info text-wrap" style="width: 5rem; padding:6px; float:left" data-bs-toggle="modal" data-bs-target="#modalciting"><span>Cite</span></button>

							<!-- Citation Modal -->
							<div class="modal fade" id="modalciting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
										...
										</div>
										<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div>
		<!-- ============================================================== -->
				</div>
				</div>
			</div>
			</div>

			<br<br><br>
			<div class="container">
				<div id="result"></div>
					<div class="modal-footer">
						<!-- change location of href..-->
						<a href="../index.php"><button class="btn btn-dark btn-sm">Back</button></a>	
					</div>	
			</div>
			
			<!-- Related Studies -->
			<br<br><br>
			<div class="container">
				<h2>Related Studies</h2><br>
				<!-- <div class="row"> -->
				<div class="card-group">
				<?php
				$result1 = get_researchrelated($connect,$fstudy,$tags);
				if ($result1->num_rows>0) {
					while ($data1 = mysqli_fetch_array($result1))
					{
						if($data1['id'] != $_GET['id'])
						{
						?>
						
							<div class="col-md-3 col-sm-5">
							<div class="card">
								<div class="card-body">
									<!-- change function to the designated function ofyouassign management -->
									<a href="action.php?id=<?php echo $data1['id'];?>"><p class="card-title"><?php echo $data1['title'];?></p></a>
									<p class="card-text"><small class="text-muted"><?php ?></small></p>
								</div>
							</div>
							</div>
					<?php
						}
					}
				}
				?>
				</div>
				</div>
			<!-- </div> -->
			<br><br>
		<?php
	}
	// JOURNAL
	elseif($_GET['u'] == "j")
	{
		$data = get_journalaction($connect,$_GET['id']);
		// include "";
		$pdf_file = $data['pdf_file'];
		$fstudy = $data['field_of_study'];
		$tags = $data['tagging'];
		?>
			<br><br><br><br>
			<!--View Research-->
			<div class="container">
			<div class="card">
				<div class="card-body">
				<div style="line-height: 20px;">
				<style>
					h2,p{
						padding:0;
						margin:0;
						
					}
					/* .card{

					} */
				</style>
							<div class="badge badge-info text-wrap" style="width: 5rem; padding:5px;" >
							<!-- change to.. -->
							<span >Journal</span>
							</div>
							<?php 
							$logged_id = $_SESSION['id'];
							$sql = "SELECT * FROM tblaccount WHERE id = '$logged_id'";
							$result = mysqli_query($connect,$sql);
							$count = mysqli_fetch_array($result);
							// check email if exist
							if($count >= 1)
							{
								$subscribe = $count['subcribe'];
							}
								if(!empty($logged_id) || $subscribe != "No")
								{
									if($subscribe =="Yes")
									{
										?>
										<div>
											<!-- <button type ="button" class="btn btn-primary btn-sm float-right" style="position:relative;bottom:40px;" name="btn-download"><span class="fa fa-download"> Download Fulltext PDF&nbsp;</span></button> -->
											<a href="../admin/journal/<?php echo $data['pdf_file']?>"><button type ="button" class="btn btn-outline-primary btn-sm float-right" style="position:relative;bottom:40px;" name="btn-fullview"><i class="fa fa-file-text"> View Fulltext PDF&nbsp;</i></button></a>
										</div>
										<?php
									}
								}
								?>
								<!--  -->
								
								<!--  -->
								<div>
								<h2 class="text-left" style="margin-top:10px; font-family:'Lucida Sans';" ><b><?php echo $data['title']?></b></h2>
								<ul class="list-inline" style="font-size: small;">
									<li class="list-inline-item"><a href="author.php?u=j&author=<?php echo $data['author'];?>"><u><?php echo $data['author']?></u></a></li>
									<li class="list-inline-item ">* Published <?php echo $data['datepub'];?></li>
									<li class="list-inline-item"><?php //echo $data['field_of_study'];?></li>
								</ul>
							</div>
							<p class="font-weight-normal text-left" style="width:80%;"><?php echo ($data['description']); ?></p><br>
							<button type="button" class="btn btn-sm badge badge-info text-wrap" style="width: 5rem; padding:6px; float:left" data-bs-toggle="modal" data-bs-target="#modalciting"><span>Cite</span></button>

							<!-- Citation Modal -->
							<div class="modal fade" id="modalciting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
										...
										</div>
										<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div>
		<!-- ============================================================== -->
				</div>
				</div>
			</div>
			</div>

			<br<br><br>
			<div class="container">
				<div id="result"></div>
					<div class="modal-footer">
						<!-- change location of href..-->
						<a href="../index.php"><button class="btn btn-dark btn-sm">Back</button></a>	
					</div>	
			</div>
			
			<!-- Related Studies -->
			<br<br><br>
			<div class="container">
				<h2>Related Studies</h2><br>
				<!-- <div class="row"> -->
				<div class="card-group">
				<?php
				$result1 = get_journalrelated($connect,$fstudy,$tags);
				if ($result1->num_rows>0) {
					while ($data1 = mysqli_fetch_array($result1))
					{
						if($data1['id'] != $_GET['id'])
						{
						?>
						
							<div class="col-md-3 col-sm-5">
							<div class="card">
								<div class="card-body">
									<!-- change function to the designated function ofyouassign management -->
									<a href="action.php?id=<?php echo $data1['id'];?>"><p class="card-title"><?php echo $data1['title'];?></p></a>
									<p class="card-text"><small class="text-muted"><?php ?></small></p>
								</div>
							</div>
							</div>
					<?php
						}
					}
				}
				?>
				</div>
				</div>
			<!-- </div> -->
			<br><br>
		<?php
	}
	// ARTICLE
	elseif($_GET['u'] == "a")
	{
		$data = get_articleaction($connect,$_GET['id']);
		// include "";
		// $pdf_file = $data['pdf_file'];
		// $fstudy = $data['field_of_study'];
		// $tags = $data['tagging'];
		?>
			<br><br><br><br>
			<!--View Research-->
			<div class="container">
			<div class="card">
				<div class="card-body">
				<div style="line-height: 20px;">
				<style>
					h2,p{
						padding:0;
						margin:0;
						
					}
					/* .card{

					} */
				</style>
							<div class="badge badge-info text-wrap" style="width: 5rem; padding:5px;" >
							<!-- change to.. -->
							<span >Article</span>
							</div>
							<?php 
							$logged_id = $_SESSION['id'];
							$sql = "SELECT * FROM tblaccount WHERE id = '$logged_id'";
							$result = mysqli_query($connect,$sql);
							$count = mysqli_fetch_array($result);
							// check email if exist
							if($count >= 1)
							{
								$subscribe = $count['subcribe'];
							}
								if(!empty($logged_id) || $subscribe != "No")
								{
									if($subscribe =="Yes")
									{
										?>
										<div>
											<!-- <button type ="button" class="btn btn-primary btn-sm float-right" style="position:relative;bottom:40px;" name="btn-download"><span class="fa fa-download"> Download Fulltext PDF&nbsp;</span></button> -->
											<a href="../admin/article/<?php echo $data['pdf_file']?>"><button type ="button" class="btn btn-outline-primary btn-sm float-right" style="position:relative;bottom:40px;" name="btn-fullview"><i class="fa fa-file-text"> View FullArticle PDF&nbsp;</i></button></a>
										</div>
										<?php
									}
								}
								?>
								<!--  -->
								
								<!--  -->
								<div>
								<h2 class="text-left" style="margin-top:10px; font-family:'Lucida Sans';" ><b><?php echo $data['title']?></b></h2>
								<ul class="list-inline" style="font-size: small;">
									<li class="list-inline-item"><a href="author.php?author=<?php echo $data['author'];?>"><u><?php echo $data['author']?></u></a></li>
									<li class="list-inline-item ">* Published <?php echo $data['date_pub'];?></li>
									<li class="list-inline-item"><?php //echo $data['field_of_study'];?></li>
								</ul>
							</div>
							<p class="font-weight-normal text-left" style="width:80%;"><?php echo ($data['description']); ?></p><br>
							<button type="button" class="btn btn-sm badge badge-info text-wrap" style="width: 5rem; padding:6px; float:left" data-bs-toggle="modal" data-bs-target="#modalciting"><span>Cite</span></button>

							<!-- Citation Modal -->
							<div class="modal fade" id="modalciting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
										...
										</div>
										<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div>
		<!-- ============================================================== -->
				</div>
				</div>
			</div>
			</div>

			<br<br><br>
			<div class="container">
				<div id="result"></div>
					<div class="modal-footer">
						<!-- change location of href..-->
						<a href="../index.php"><button class="btn btn-dark btn-sm">Back</button></a>	
					</div>	
			</div>
			
			<!-- Related Studies -->
			<br<br><br>
			<div class="container">
				<h2>Related Studies</h2><br>
				<!-- <div class="row"> -->
				<div class="card-group">
				<?php
				$result1 = get_articlerelated($connect,$fstudy,$tags);
				if ($result1->num_rows>0) {
					while ($data1 = mysqli_fetch_array($result1))
					{
						if($data1['id'] != $_GET['id'])
						{
						?>
						
							<div class="col-md-3 col-sm-5">
							<div class="card">
								<div class="card-body">
									<!-- change function to the designated function ofyouassign management -->
									<a href="action.php?id=<?php echo $data1['id'];?>"><p class="card-title"><?php echo $data1['title'];?></p></a>
									<p class="card-text"><small class="text-muted"><?php ?></small></p>
								</div>
							</div>
							</div>
					<?php
						}
					}
				}
				?>
				</div>
				</div>
			<!-- </div> -->
			<br><br>
		<?php
	}
	elseif($_GET['u'] == "n")
	{
		$data = get_newsaction($connect,$_GET['id']);
		// include "";
		// $pdf_file = $data['pdf_file'];
		// $fstudy = $data['field_of_study'];
		// $tags = $data['tagging'];
		?>
			<br><br><br><br>
			<!--View Research-->
			<div class="container">
			<div class="card">
				<div class="card-body">
				<div style="line-height: 20px;">
				<style>
					h2,p{
						padding:0;
						margin:0;
						
					}
					/* .card{

					} */
				</style>
							<div class="badge badge-info text-wrap" style="width: 5rem; padding:5px;" >
							<!-- change to.. -->
							<span >News</span>
							</div>
							<?php 
							$logged_id = $_SESSION['id'];
							$sql = "SELECT * FROM tblaccount WHERE id = '$logged_id'";
							$result = mysqli_query($connect,$sql);
							$count = mysqli_fetch_array($result);
							// check email if exist
							if($count >= 1)
							{
								$subscribe = $count['subcribe'];
							}
								if(!empty($logged_id) || $subscribe != "No")
								{
									if($subscribe =="Yes")
									{
										?>
										<div>
											<!-- <button type ="button" class="btn btn-primary btn-sm float-right" style="position:relative;bottom:40px;" name="btn-download"><span class="fa fa-download"> Download Fulltext PDF&nbsp;</span></button> -->
											<a href="../admin/news/<?php //echo $data['pdf_file']?>"><button type ="button" class="btn btn-outline-primary btn-sm float-right" style="position:relative;bottom:40px;" name="btn-fullview"><i class="fa fa-file-text"> View FullNews PDF&nbsp;</i></button></a>
										</div>
										<?php
									}
								}
								?>
								<!--  -->
								
								<!--  -->
								<div>
								<h2 class="text-left" style="margin-top:10px; font-family:'Lucida Sans';" ><b><?php echo $data['name']?></b></h2>
								<ul class="list-inline" style="font-size: small;">
									<li class="list-inline-item"><a href="author.php?author=<?php //echo $data['author'];?>"><u><?php echo $data['author']?></u></a></li>
									<li class="list-inline-item ">* Published <?php echo $data['email'];?></li>
									<li class="list-inline-item"><?php //echo $data['field_of_study'];?></li>
								</ul>
							</div>
							<p class="font-weight-normal text-left" style="width:80%;"><?php echo ($data['mobile']); ?></p><br>
							<button type="button" class="btn btn-sm badge badge-info text-wrap" style="width: 5rem; padding:6px; float:left" data-bs-toggle="modal" data-bs-target="#modalciting"><span>Cite</span></button>

							<!-- Citation Modal -->
							<div class="modal fade" id="modalciting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
										...
										</div>
										<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div>
		<!-- ============================================================== -->
				</div>
				</div>
			</div>
			</div>

			<br<br><br>
			<div class="container">
				<div id="result"></div>
					<div class="modal-footer">
						<!-- change location of href..-->
						<a href="../index.php"><button class="btn btn-dark btn-sm">Back</button></a>	
					</div>	
			</div>
			
			<!-- Related Studies -->
			<br<br><br>
			<div class="container">
				<h2>Related Studies</h2><br>
				<!-- <div class="row"> -->
				<div class="card-group">
				<?php
				$result1 = get_newsrelated($connect,$fstudy,$tags);
				if ($result1->num_rows>0) {
					while ($data1 = mysqli_fetch_array($result1))
					{
						if($data1['id'] != $_GET['id'])
						{
						?>
						
							<div class="col-md-3 col-sm-5">
							<div class="card">
								<div class="card-body">
									<!-- change function to the designated function ofyouassign management -->
									<a href="action.php?id=<?php echo $data1['id'];?>"><p class="card-title"><?php echo $data1['title'];?></p></a>
									<p class="card-text"><small class="text-muted"><?php ?></small></p>
								</div>
							</div>
							</div>
					<?php
						}
					}
				}
				?>
				</div>
				</div>
			<!-- </div> -->
			<br><br>
		<?php
	}

	// change function to the designated function of your assign management
}
?>

<!-- #footer -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->
  <!-- Tables CDN -->

  <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <!-- JavaScript Libraries -->
  <script src="../resource/lib/jquery/jquery.min.js"></script>  
  <script src="../resource/lib/jquery/jquery-migrat.min.js"></script>
  <script src="../resource/lib/bootstrap/js/bootstrap.bunle.min.js"></script>
  <script src="../resource/lib/easing/easing.min.js"></script> 
  <script src="../resource/lib/mobile-nav/mobile-nav.js"></script>
  <script src="../resource/lib/wow/wow.min.js"></script>  
  <script src="../resource/lib/waypoints/waypoints.minjs"></script>
  <script src="../resource/lib/counterup/counterup.minjs"></script>
  <script src="../resource/lib/owlcarousel/owl.carousel.min.s"></script>
  <script src="../resource/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="../resource/lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script>
  $(document).ready( function () {
    $('#table_id').DataTable();
    } );
  </script>
  <script src="../resource/js/main.js"></script>
  <script src="../script/main.js"></script>


