<?php
    include ("/xampp/htdocs/CustomLandingPage/config/db.php");
    // $con = mysqli_connect("localhost","root","","research_portal");
   
    if(isset($_GET['btn_login']))
    {
      // username and password sent from form 
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $password = mysqli_real_escape_string($con,$_POST['pass']); 
      
      $sql = "SELECT * FROM tblaccount WHERE email = '$email'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      // check email if exist
      if($count == 1) 
      {
        $em = $row['email'];
        $pass= $row['pass'];
        $status = $row['status'];
        $fname = $row['fname'];
        $categ = $row['ucategory'];
        
        if( $email == $em && $password == $pass)
        {
            if($status == "Active")
            {
                if($categ == "Administrator")
                {
                    // session_register("myusername");
                    $_SESSION['login_user'] = $email;
                    $_SESSION['fname'] = $fname;
                    header("location: ../CustomLandingPage/admin/admin_dashboard.php");
                }
                else
                {
                    // session_register("myusername");
                    $_SESSION['login_user'] = $email;
                    $_SESSION['fname'] = $fname;
                    header("location: ../CustomLandingPage/user/index.php");
                }
            }
            else
            {?>
                <div class="alert alert-danger" role="alert">
                    Account is Inactive!
                </div>
            <?php
            }
        }
        else
        {?>
            <div class="alert alert-danger" role="alert">
                Password do not match!
            </div>
        <?php
        }
      }
      else 
      {?>
        <div class="alert alert-danger" role="alert">
            Email doesn't Exist!
        </div>
        <?php
      }
   }
?>



