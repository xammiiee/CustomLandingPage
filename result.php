
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
  <link href="./resource/css/style.css" rel="stylesheet">
  <link href="./resource/css/addons.css" rel="stylesheet">

</head>
<!-- Try lng mag push -->
<body>

<?php
  // session_start();
  include "./admin/research/inc/db.php";
  include "./admin/research/functions/DB.func.php";
  include "./admin/research/functions/functions.php";
  include "./admin/research/functions/Message.func.php";
  
  if(empty($_SESSION['id']))
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
       <a href="index.php" class="scrollto"><img src="./resource/img/logo.png" alt="" class="img-fluid">&nbsp;<strong>AURESPOR</strong></a>
      </div>
      <!-- Condition for user -->
      <nav class="main-nav float-right d-none d-lg-block" >
        <ul>
<!-- ================================================ -->
        <?php
          if(!empty($_SESSION['id'])) 
          { 
            if ($_SESSION['role']=="Administrator")
            {?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#"id="navbarDropdown" role="button"data-toggle="dropdown" aria-haspopup="true"aria-expanded="false">Management</a>
              <?php 
              
            }
            ?>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php if ($_SESSION['role'] == "Administrator") { ?>
              <a class="dropdown-item" href="../CustomLandingPage/admin/account/account.php">Account</a>
              <?php } ?>
              <?php if ($_SESSION['role'] == "Administrator") { ?>
              <a class="dropdown-item" href="../CustomLandingPage/admin/research/research.php">Research</a>
              <?php } ?>
              <?php if ($_SESSION['role'] == "Administrator") { ?>
              <a class="dropdown-item" href="../CustomLandingPage/admin/author/author.php">Author</a>
              <?php } ?>
              
              <?php if ($_SESSION['role'] == "Administrator") { ?>
              <a class="dropdown-item" href="../CustomLandingPage/admin/journal/journal.php">Journal</a>
              <?php } ?>
              
              <?php if ($_SESSION['role'] == "Administrator") { ?>
              <a class="dropdown-item" href="../CustomLandingPage/admin/article/article.php">Article</a>
              <?php } ?>
              <?php if ($_SESSION['role'] == "Administrator") { ?>
              <a class="dropdown-item" href="../CustomLandingPage/admin/author/author.php">Author</a>
              <?php } ?>
              <?php if ($_SESSION['role'] == "Administrator") { ?>
              <a class="dropdown-item" href="../CustomLandingPage/admin/events/index.php">Events</a>
              <?php } ?>
              <?php if ($_SESSION['role'] == "Administrator") { ?>
              <a class="dropdown-item" href="../CustomLandingPage/admin/news/index.php">News</a>
              <?php } ?>
            </div>
                </li>
                  <li><a><?php echo $_SESSION['name'];?></a></li>
                  <li class="nav-item dropdown" >
                  <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user"></i>&nbsp;</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="../profile/profile.php" >Profile</a>
                      <a class="dropdown-item" href="#aboutus">About Us</a>
                      <a class="dropdown-item" href="../CustomLandingPage/signup/logout.php">Signout</a>
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
          <input name="a" class="form-control form-control-md d-inline" type="text" placeholder="<?php //echo $_GET['a'];?>" aria-label=".form-control-lg example" style="width: 35%;" value="<?php echo $_GET['a'];?>">
          <select class="custom-select d-inline" id="search_type" name="u" style="width: 10%; margin-bottom:2.5px;">
          <?php
          if($_GET['u'] =="r")
          {
            ?><option selected value="r">Researches</option>
            <option value="j">Journals</option>
            <option value="a">Articles</option>
            <option value="n">News</option>><?php
          }
          elseif($_GET['u'] =="j")
          {
            ?><option value="r">Researches</option>
            <option selected value="j">Journals</option>
            <option value="a">Articles</option>
            <option value="n">News</option><?php
          }
          elseif($_GET['u'] =="a")
          {
            ?><option value="r">Researches</option>
            <option value="j">Journals</option>
            <option selected value="a">Articles</option>
            <option value="n">News</option><?php
          }
          elseif($_GET['u'] =="n")
          {
            ?><option value="r">Researches</option>
            <option value="j">Journals</option>
            <option value="a">Articles</option>
            <option selected value="n">News</option><?php
          }
          else
          {
            ?>
            <option selected value="r">Researches</option>
            <option value="j">Journals</option>
            <option value="a">Articles</option>
            <option value="n">News</option>
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
         <ul class="list-inline" id="filtering">
            <li class="list-inline-item" >
            <select class="custom-select d-inline" id="filter1" name="u" style="width:190px;" value="">
               <option>Sort by Relevance</option>
               <option>Sort by Most Views</option>
               <option>Sort by Citation Count</option>
            </select>
            </li>

            <li class="list-inline-item" id="filtering1">
            <select class="custom-select d-inline" id="filter2" name="x" style="width:190px;" value="">
               <option selected disabled>Field of Study</option>
               <option>Art</option>
               <option>Business</option>
               <option>Computer Science</option>
               <option>Education</option>
               <option>Law</option>
               <option>Medicine</option>
               <option>Political Science</option>
               <option>Psychology</option>
            </select>
            </li>
         
            <a href=""><button class="btn btn-primary btn-sm" id="filter-submit"><i class="fa fa-filter"></i>  Filter</button></a>
            <a href=""><button class="btn btn-primary btn-sm" id="filter-reset"><i class="fa fa-refresh"></i>  Reset</button></a>
          </ul>
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
                  
                  if($_GET['u'] == "r")
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
                                 <h4 class="title"><a href="./view/action.php?u=r&id=<?php echo $data['id'];?>" class="cls" id="<?php echo $data['id'];?>" ><span ><?php echo $data['title'];?></span></a></h4>
                                 <ul class="list-inline" style="padding-left: 40px; font-size: small;">
                                    <li class="list-inline-item" value="<?php echo $data['main_author'];?>"><b><u><span><?php echo $data['main_author'];?></span></u></b></li>
                                    
                                    <?php
                                    foreach (explode(",", $data['co_authors']) as $variable => $tk) {
                                    $variable>0;
                                    $variable++;
                                    ?><li class="list-inline-item" value="<?php echo $tk;?>"><u><?php echo ",$tk";?></u></li> <?php
                                    }
                                    ?>

                                    <li class="list-inline-item" value="<?php echo $data['date_publish'];?>"><b> * Published <span><?php echo $data['date_publish'];?></span></b></li>
                                    
                                    <li class="list-inline-item" value="<?php echo $data['field_of_study'];?>" id="display-fstudy"><b> * <span><?php echo $data['field_of_study'];?></span></b></li>
                                    
                                 </ul>
                                 <p class="description" value="<?php echo $data['abstract'];?>"><span><?php echo $data['abstract'];?></span></p>
                                 <ul class="list-inline" style="padding-left: 40px; font-size: small;">
                                    <li class="list-inline-item" id="rView<?php echo $data['id'];?>" value="<?php echo $data['views'];?>"><b>Views: <?php echo $data['views'];?></b></li>
                                    <li class="list-inline-item" id="rCite<?php echo $data['id'];?>" value="<?php echo $data['cites'];?>"><b>Cite: <?php echo $data['cites'];?></b></li>
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
                  elseif($_GET['u'] == "j")
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
                                 <h4 class="title"><a href="./view/action.php?u=j&id=<?php echo $data['id'];?>" class="cls" id="<?php echo $data['id'];?>"><span><?php echo $data['title'];?></span></a></h4>
                                 <ul class="list-inline" style="padding-left: 40px; font-size: small;">
                                    <li class="list-inline-item" value="<?php echo $data['author'];?>"><b><u><span><?php echo $data['author'];?></span></u></b></li>
                                    
                                    <li class="list-inline-item" value="<?php echo $data['datepub'];?>"><b> * Published <span><?php echo $data['datepub'];?></span></b></li>
                                    
                                    <li class="list-inline-item" value="<?php echo $data['fstudy'];?>"><b> * <span><?php echo $data['fstudy'];?></span></b></li>
                                    
                                 </ul>
                                 <p class="description" value="<?php echo $data['decription'];?>"><span><?php echo $data['decription'];?></span></p>
                                 <ul class="list-inline" style="padding-left: 40px; font-size: small;">
                                    <li class="list-inline-item" id="jView<?php echo $data['id'];?>" value="<?php echo $data['views'];?>"><b>Views: <?php echo $data['views'];?></b></li>
                                    <li class="list-inline-item" id="jCite<?php echo $data['id'];?>" value="<?php echo $data['cites'];?>"><b>Cite: <?php echo $data['cites'];?></b></li>
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
                  elseif($_GET['u'] == "a")
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
                            <h4 class="title"><a href="./view/action.php?u=a&id=<?php echo $data['id'];?>" class="cls" id="<?php echo $data['id'];?>"><span><?php echo $data['title'];?></span></a></h4>
                              <ul class="list-inline" style="padding-left: 40px; font-size: small;">
                                <li class="list-inline-item" value="<?php echo $data['a_author'];?>"><b><u><span><?php echo $data['a_author'];?></span></u></b></li>
                                    
                                <li class="list-inline-item" value="<?php echo $data['a_date_pub'];?>"><b> * Published <span><?php echo $data['a_date_pub'];?></span></b></li>
                                    
                                <li class="list-inline-item" value="<?php echo $data['field_of_study'];?>"><b> * <span><?php echo $data['field_of_study'];?></span></b></li>
                              </ul>
                                 <p class="description" value="<?php echo $data['a_description'];?>"><span><?php echo $data['a_description'];?></span></p>
                                 <ul class="list-inline" style="padding-left: 40px; font-size: small;">
                                    <li class="list-inline-item" id="aView<?php echo $data['id'];?>" value="<?php echo $data['a_views'];?>"><b>Views: <?php echo $data['a_views'];?></b></li>
                                    <li class="list-inline-item" id="aCite<?php echo $data['id'];?>" value="<?php echo $data['a_cites'];?>"><b>Cite: <?php echo $data['a_cites'];?></b></li>
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
                  elseif($_GET['u'] == "n")
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
                              <h4 class="title"><a href="./view/action.php?u=n&id=<?php echo $data['id'];?>" class="cls" id="<?php echo $data['id'];?>"><span><?php echo $data['name'];?></span></a></h4>
                              <ul class="list-inline" style="padding-left: 40px; font-size: small;">
                                <li class="list-inline-item" value="<?php echo $data['author'];?>"><b><u><span><?php echo $data['author'];?></span></u></b></li>
                                   
                                <li class="list-inline-item" value="<?php echo $data['email'];?>"><b> * Published <span><?php echo $data['email'];?></span></b></li>
                                    
                              </ul>
                              <p class="description" value="<?php echo $data['mobile'];?>"><span><?php echo $data['mobile'];?></span></p>
                              <ul class="list-inline" style="padding-left: 40px; font-size: small;">
                                <li class="list-inline-item" id="nView<?php echo $data['id'];?>" value="<?php echo $data['views'];?>"><b>Views: <?php echo $data['views'];?></b></li>
                                <li class="list-inline-item" id="nCite<?php echo $data['id'];?>" value="<?php echo $data['cites'];?>"><b>Cite: <?php echo $data['cites'];?></b></li>
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
  <!-- <script src="contactform/contactform.js"></script> -->

  <!-- Template Main Javascript File -->
  <script src="./view/main.js"></script>
  <script src="./view/filter.js"></script>
  <script src="./resource/js/main.js"></script>

</body>
</html>
