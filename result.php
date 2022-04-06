
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Arellano University</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="./resource/img/favicon.png" rel="icon">
  <link href="./resource/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" href="./resource/css/bootstrap.min.css">
	<link rel="stylesheet" href="./resource/css/mdb.min.css">

  <!-- Libraries CSS Files -->
  <link href="./resource/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="./resource/lib/animate/animate.min.css" rel="stylesheet">
  <link href="./resource/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="./resource/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="./resource/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="./resource/css/style_result.css" rel="stylesheet">
  <link href="./resource/css/addons.css" rel="stylesheet">

</head>
<!-- Try lng mag push -->
<body>

<?php
  session_start();
  if (!empty($_SESSION['id'])) 
  {?>  
    <?php 
      if($_SESSION['role'] == "Administrator")
      {?>

      <?php
      }
      elseif($_SESSION['role'] == "User")
      {?>
      
      <?php
      }
  }
  elseif(empty($_SESSION['id']))
  {
    header("Location: ./login/login.php");
  }
?>

  <!--======================================================================================================================
  Header
  ========================================================================================================================-->
  <header id="header" class="fixed-top">
    <div class="container">
      <div class="logo float-left">
       <a href="#intro" class="scrollto"><img src="./resource/img/logo.png" alt="" class="img-fluid">&nbsp;<strong>AURESPOR</strong></a>
      </div>
      <!-- Condition for user -->
      <nav class="main-nav float-right d-none d-lg-block" >
        <ul>
<!-- ================================================ -->
        <?php
          if(!empty($_SESSION['id'])) 
          { 
            if ($_SESSION['role']=="User" || $_SESSION['role']=="Administrator")
            {?>
              <li><a><?php echo $_SESSION['name'];?></a></li>
              <li class="nav-item dropdown"><?php 
              
            }
            ?>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              </li>
                  <li class="nav-item dropdown" >
                  <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user"></i>&nbsp;</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#profile">Profile</a>
                    <a class="dropdown-item" href="#aboutus">About Us</a>
                    <a class="dropdown-item" href="./signup/logout.php">Signout</a>
                  </div>
                  </li>
                  <?php
          }
        ?>
        </ul>
      </nav>
    </div>
  </header>
  <!--========================================================== #header ===================================================-->
 
  <!--==========================
    Intro Section
  ============================-->
  
  <!-- #intro -->
  

  <main id="main">
  
    <!--==========================
      Result Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">
  <?php
    include "../CustomLandingPage/admin/research/inc/db.php";
    include "../CustomLandingPage/admin/research/functions/DB.func.php";
    include "../CustomLandingPage/admin/research/functions/functions.php";
    include "../CustomLandingPage/admin/research/functions/Message.func.php";
  ?>
  <style>
     #header-one{
      padding-top: 95px; 
      width: 100%; 
      position: relative;
     }
  </style>
  <header class="section-header">
<div id="header-one">
<form action="" method="GET" onsubmit="">
        <div class="form-group">
          <input name="a" class="form-control form-control-md d-inline" type="text" placeholder="<?php echo $_GET['a'];?>" aria-label=".form-control-lg example" style="width: 35%;" value="<?php echo $_GET['a'];?>">
          <select class="custom-select d-inline" id="search_type" name="u" style="width: 10%; margin-bottom:2.5px;">
          <?php
          if($_GET['u'] =="Researches")
          {
            ?><option selected>Researches</option>
            <option>Journals</option>
            <option>Articles</option>
            <option>News</option>><?php
          }
          elseif($_GET['u'] =="Journals")
          {
            ?><option>Researches</option>
            <option selected>Journals</option>
            <option>Articles</option>
            <option>News</option><?php
          }
          elseif($_GET['u'] =="Articles")
          {
            ?><option>Researches</option>
            <option>Journals</option>
            <option selected>Articles</option>
            <option>News</option><?php
          }
          elseif($_GET['u'] =="News")
          {
            ?><option>Researches</option>
            <option>Journals</option>
            <option>Articles</option>
            <option selected>News</option><?php
          }
          else
          {
            ?>
            <option selected>Researches</option>
            <option>Journals</option>
            <option>Articles</option>
            <option>News</option>
            <?php
          }
          ?>
          </select>
          <a href="tblresult"><button class="btn btn-primary btn-md btn-get-started scrollto " name="b">Search</button></a>
        </div>
            
      <!-- ============================================ -->
      <?php
      if(empty($_SESSION['id'])) 
      {
        ?><a href="./login/login.php" class="btn-services scrollto">Login</a><?php
      }
      ?>
      <!-- ============================================ -->
      </form>
</div><hr>
<!----------------- Filtering Section ---------------------->

          <!-- <ul class="list-inline" style="padding-left: 40px;" id="filtering">
            <li class="list-inline-item" >
              <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle btn-md" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Sort by Relevance 
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Sort by Relevance</a></li>
                <li><a class="dropdown-item" href="#">Sort by Most Views</a></li>
                <li><a class="dropdown-item" href="#">Sorth by Citation Count</a></li>
              </ul>
            </div>
            </li>

            <li class="list-inline-item" id="fil_study">
              <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle btn-md" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Field of Study 
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </div>
            </li>

            <li class="list-inline-item" id="fil_date">
              <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle btn-md" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Date Published 
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </div>
            </li>

          </ul> -->
<!-------------------- End of Filtering Section ---------------------------->
        </header><br>

        <div class="row" id="rseult-tbl">
<!--=============================== Search Result Section ===============================-->
          <table id="table_id" class="display">
            <tbody id="tblresult">
              <?php 
              if(isset($_GET['b']))
              // function searching()
              {
                if($_GET['a'] != "")
                {
                  $title = $_GET['a'];
                  
                  if($_GET['u'] == "Researches")
                  {
                    $result = get_research_by_title($connect,$title);
                      if ($result->num_rows>0) 
                      {
                        while ($data = mysqli_fetch_array($result))
                        {
                           ?>
                           <tr>
                           <div class="col-md-6 col-lg-10 offset-lg-1 wow bounceInUp" data-wow-duration="0.3s">
                              <div class="box">
                                 <h4 class="title"><a href="./view/action.php?u=r&id=<?php echo $data['id'];?>"><span><?php echo $data['title'];?></span></a></h4>
                                 <ul class="list-inline" style="padding-left: 40px; font-size: small;">
                                    <li class="list-inline-item"><b><u><span><?php echo $data['main_author'];?></span></u></b></li>

                                    <li class="list-inline-item"><b><u><span><?php echo $data['co_authors'];?></span></u></b></li>

                                    <li class="list-inline-item"><b><span> * Published <?php echo $data['date_publish'];?></span></b></li>
                                    
                                    <li class="list-inline-item"><b><span> * <?php echo $data['field_of_study'];?></span></b></li>
                                    
                                 </ul>
                                 <p class="description"><span><?php echo $data['abstract'];?></span></p>
                                 <ul class="list-inline" style="padding-left: 40px; font-size: small;">
                                    <li class="list-inline-item"><b>Views: <?php echo $data['views'];?></b></li>
                                    <li class="list-inline-item"><b>Cite: <?php echo $data['cites'];?></b></li>
                                 </ul>
                              </div>
                           </div>
                           </tr>
                        <?php
                        }
                     }
                     else
                     {
                        ?>
                        <div style="padding-left: 12px;">
                           <h3>No Result Found</h3>
                        </div>
                        <?php
                     }
                  }
                  elseif($_GET['u'] == "Journals")
                  {
                    $result = get_journal_by_title($connect,$title);
                      if ($result->num_rows>0) 
                      {
                      while ($data = mysqli_fetch_array($result))
                      {
                        ?>
                        <tr>
                          <div class="col-md-6 col-lg-10 offset-lg-1 wow bounceInUp" data-wow-duration="0.3s">
                            <div class="box">
                              <h4 class="title"><a href="./view/action.php?u=j&id=<?php echo $data['id'];?>"><span><?php echo $data['title'];?></span></a></h4>
                                <ul class="list-inline" style="padding-left: 40px; font-size: small;">
                                  <li class="list-inline-item"><b><u><span><?php echo $data['author'];?></span></u></b></li>

                                  <li class="list-inline-item"><b><span> * Published <?php echo $data['datepub'];?></span></b></li>
                                  
                                  <li class="list-inline-item"><b><span> * <?php //echo $data['field_of_study'];?></span></b></li>
                                  
                                </ul>
                                <p class="description"><span><?php echo $data['description'];?></span></p>
                                <ul class="list-inline" style="padding-left: 40px; font-size: small;">
                                  <li class="list-inline-item"><b>Views: <?php //echo $data['views'];?></b></li>
                                  <li class="list-inline-item"><b>Cite: <?php //echo $data['cites'];?></b></li>
                                </ul>
                            </div>
                          </div>
                        </tr>
                      <?php
                      }
                    }
                    else
                     {
                        ?>
                        <div style="padding-left: 12px;">
                           <h3>No Result Found</h3>
                        </div>
                        <?php
                     }
                  }
                  elseif($_GET['u'] == "Articles")
                  {
                    $result = get_article_by_title($connect,$title);
                      if ($result->num_rows>0) 
                      {
                      while ($data = mysqli_fetch_array($result))
                      {
                        ?>
                        <tr>
                          <div class="col-md-6 col-lg-10 offset-lg-1 wow bounceInUp" data-wow-duration="0.3s">
                            <div class="box">
                              <h4 class="title"><a href="./view/action.php?u=a&id=<?php echo $data['id'];?>"><span><?php echo $data['title'];?></span></a></h4>
                                <ul class="list-inline" style="padding-left: 40px; font-size: small;">
                                  <li class="list-inline-item"><b><u><span><?php echo $data['author'];?></span></u></b></li>

                                  <li class="list-inline-item"><b><span> * Published <?php echo $data['datepub'];?></span></b></li>
                                  
                                  <li class="list-inline-item"><b><span> * <?php //echo $data['field_of_study'];?></span></b></li>
                                  
                                </ul>
                                <p class="description"><span><?php echo $data['description'];?></span></p>
                                <ul class="list-inline" style="padding-left: 40px; font-size: small;">
                                  <li class="list-inline-item"><b>Views: <?php //echo $data['views'];?></b></li>
                                  <li class="list-inline-item"><b>Cite: <?php //echo $data['cites'];?></b></li>
                                </ul>
                            </div>
                          </div>
                        </tr>
                      <?php
                      }
                    }
                    else
                     {
                        ?>
                        <div style="padding-left: 12px;">
                           <h3>No Result Found</h3>
                        </div>
                        <?php
                     }
                  }
                  elseif($_GET['u'] == "News")
                  {
                    $result = get_news_by_title($connect,$title);
                      if ($result->num_rows>0) 
                      {
                      while ($data = mysqli_fetch_array($result))
                      {
                        ?>
                        <tr>
                          <div class="col-md-6 col-lg-10 offset-lg-1 wow bounceInUp" data-wow-duration="0.3s">
                            <div class="box">
                              <h4 class="title"><a href="./view/action.php?u=n&id=<?php echo $data['name'];?>"><span><?php echo $data['title'];?></span></a></h4>
                                <ul class="list-inline" style="padding-left: 40px; font-size: small;">
                                  <li class="list-inline-item"><b><u><span><?php echo $data['author'];?></span></u></b></li>

                                  <li class="list-inline-item"><b><span> * Published <?php echo $data['email'];?></span></b></li>
                                  
                                  <li class="list-inline-item"><b><span> * <?php //echo $data['field_of_study'];?></span></b></li>
                                  
                                </ul>
                                <p class="description"><span><?php echo $data['mobile'];?></span></p>
                                <ul class="list-inline" style="padding-left: 40px; font-size: small;">
                                  <li class="list-inline-item"><b>Views: <?php //echo $data['views'];?></b></li>
                                  <li class="list-inline-item"><b>Cite: <?php //echo $data['cites'];?></b></li>
                                </ul>
                            </div>
                          </div>
                        </tr>
                      <?php
                      }
                    }
                    else
                     {
                        ?>
                        <div style="padding-left: 12px;">
                           <h3>No Result Found</h3>
                        </div>
                        <?php
                     }
                  }
              }
                
              }
              else
              {
                $title = "";
              }?>
            </tbody>
          </table>
<!--======================== End of Result Section ===========================-->
        </div>

      </div><hr>
    </section>

<!--==========================
    View all Section
  ============================-->

  </main>


  
  <!--==========================
    Footer
  ============================-->
  <!-- <footer id="footer">
    <div class="footer-top">
      <div class="container">
        
          <div class="col">
            <h3>AURESPOR</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>

      </div>
    </div>

  </footer> -->
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->
  <!-- Tables CDN -->
  <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

  <!-- JavaScript Libraries -->
  <script src="./resource/lib/jquery/jquery.min.js"></script>
  <script src="./resource/lib/jquery/jquery-migrate.min.js"></script>
  <script src="./resource/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./resource/lib/easing/easing.min.js"></script>
  <script src="./resource/lib/mobile-nav/mobile-nav.js"></script>
  <script src="./resource/lib/wow/wow.min.js"></script>
  <script src="./resource/lib/waypoints/waypoints.min.js"></script>
  <script src="./resource/lib/counterup/counterup.min.js"></script>
  <script src="./resource/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="./resource/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="./resource/lib/lightbox/js/lightbox.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../CustomLandingPage/login/script/main.js"></script>
  <script src="./resource/js/main.js"></script>

</body>
</html>
