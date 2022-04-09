<?php
header("Content-Type:application/json");

include "/xampp/htdocs/CustomLandingPage/resource/config/db.php";
// ============================VIEWS==============================//
// Research
if (isset($_POST['view_r']) && isset($_POST['id_r'])) {
  $id = $_POST['id_r'];
  $viewcount = $_POST['view_r'];

	$result = mysqli_query($con, "UPDATE tblresearch set views = '$viewcount' WHERE id = '$id'");
   if($result > 0){
    response("Success");
	}else{
		response("Failed");
	}
} else{
  response("Invalid Request");
}

// Journal
if (isset($_POST['view_j']) && isset($_POST['id_j'])) {
   $id = $_POST['id_j'];
   $viewcount = $_POST['view_j'];
 
    $result = mysqli_query($con, "UPDATE tbljournal set views = '$viewcount' WHERE id = '$id'");
    if($result > 0){
     response("Success");
    }else{
       response("Failed");
    }
 } else{
   response("Invalid Request");
 }

//  Articles
if (isset($_POST['view_a']) && isset($_POST['id_a'])) {
   $id = $_POST['id_a'];
   $viewcount = $_POST['view_a'];
 
    $result = mysqli_query($con, "UPDATE tblarticle set a_views = '$viewcount' WHERE id = '$id'");
    if($result > 0){
     response("Success");
    }else{
       response("Failed");
    }
 } else{
   response("Invalid Request");
 }

//  News
if (isset($_POST['view_n']) && isset($_POST['id_n'])) {
   $id = $_POST['id_n'];
   $viewcount = $_POST['view_n'];
 
    $result = mysqli_query($con, "UPDATE tblnews set views = '$viewcount' WHERE id = '$id'");
    if($result > 0){
     response("Success");
    }else{
       response("Failed");
    }
 } else{
   response("Invalid Request");
 }
// =========================================================================

//CITATION
// Research
if (isset($_POST['cite_r']) && isset($_POST['id_r'])) {
   $id = $_POST['id_r'];
   $citecount = $_POST['cite_r'];
 
    $result = mysqli_query($con, "UPDATE tblresearch set cites = '$citecount' WHERE id = '$id'");
    if($result > 0){
     response("Success");
    }else{
       response("Failed");
    }
 } else{
   response("Invalid Request");
 }
 
 // Journal
 if (isset($_POST['cite_j']) && isset($_POST['id_j'])) {
    $id = $_POST['id_j'];
    $citewcount = $_POST['cite_j'];
  
     $result = mysqli_query($con, "UPDATE tbljournal set cites = '$citecount' WHERE id = '$id'");
     if($result > 0){
      response("Success");
     }else{
        response("Failed");
     }
  } else{
    response("Invalid Request");
  }
 
 //  Articles
 if (isset($_POST['cite_a']) && isset($_POST['id_a'])) {
    $id = $_POST['id_a'];
    $vciteount = $_POST['cite_a'];
  
     $result = mysqli_query($con, "UPDATE tblarticle set a_cites = '$citecount' WHERE id = '$id'");
     if($result > 0){
      response("Success");
     }else{
        response("Failed");
     }
  } else{
    response("Invalid Request");
  }
 
 //  News
 if (isset($_POST['cite_n']) && isset($_POST['id_n'])) {
    $id = $_POST['id_n'];
    $citecount = $_POST['cite_n'];
  
     $result = mysqli_query($con, "UPDATE tblnews set cites = '$citecount' WHERE id = '$id'");
     if($result > 0){
      response("Success");
     }else{
        response("Failed");
     }
  } else{
    response("Invalid Request");
  }

 function response($data){
  $response = $data;
  
  $json_response = json_encode($response);
  echo $json_response;
}
?>