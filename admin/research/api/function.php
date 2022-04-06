<?php
include "/xampp/htdocs/CustomLandingPage/admin/research/inc/core.php";

if(isset($_POST['btnsubmit']))
{
   if ($_SERVER['REQUEST_METHOD'] =="POST") {
      // UPLOAD FILE
      if(isset($_FILES['files'])){
        $errors= array();
        $file_name_array = explode('.',$_FILES['files']['name']);
        $file_size =$_FILES['files']['size'];
        $file_tmp =$_FILES['files']['tmp_name'];
        $file_type=$_FILES['files']['type'];
        $file_ext=strtolower(end($file_name_array));
        
        $extensions= array("pdf","txt","docx");
        
        if(in_array($file_ext,$extensions)=== false){
           $errors[]="extension not allowed, please choose a PDF or DOCX file.";
        }
        
        if($file_size > 2097152){
           $errors[]='File size must be excately 2 MB';
        }
        
        if(empty($errors)==true){
          // location
           move_uploaded_file($file_tmp,"uploads/".$_FILES['files']['name']);
           $Pdf_file = "uploads/".$_FILES['files']['name']."";
        }else{
           print_r($errors);
        }
      }
    
      // UPLOAD DATA FROM FORM
      if (isset($_POST['btnsubmit'])) {
        // change function to the designated function of your assign management
        // also correct each string of the sql with your form

       $title=$_POST['title'];
       $abstract=$_POST['abstract'];
       $main_author=$_POST['txtmain-author'];
       $cco_author=$_POST["txtco-authors"];
       $datepub=$_POST['dpub'];
       $fstudy=$_POST['fstudy'];
       $tagging=$_POST["tags"];

        if(isset($_POST["txtco-authors"]) && (isset($_POST["tags"])))
        {
          $c_author = '';
          $tagging = '';
          foreach($_POST["txtco-authors"] as $row)
          {
            $c_author .= $row . ', ';
          }
          $c_author = substr($c_author, 0, -2);
    
          foreach($_POST["tags"] as $row)
          {
            $tagging .= $row . ', ';
          }
          $tagging = substr($tagging, 0, -2);
        }
         $sql = "INSERT INTO tblresearch VALUES ('','$title','$abstract','$main_author','$c_author','$datepub','$fstudy','', '$pdf_file','','', '$tagging')";
         $result = $connect->query($sql);
         if ($result > 0) {
            message("Research created successfully!",1);
         } else {
            message("Could not create Research!",0);
         }
    }
    }
}

?>