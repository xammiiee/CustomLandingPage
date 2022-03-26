<?php
   include_once("/xampp/htdocs/CustomLandingPage/config/db.php");
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($con,"SELECT * FROM tblaccount where email = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['fname'];
   $login_categ = $row['ucategory'];
   $login_id= $row['id'];

if(!isset($_SESSION['login_user']))
{
    header("location:../index.php");
    die();
}
else
{
   // redirect the user depend on the category
   if($login_categ == "Administrator")
   {
      header("location: ../admin/index.php");
   }
   else
   {
      header("location: ../user/index.php");
   }
}
?>