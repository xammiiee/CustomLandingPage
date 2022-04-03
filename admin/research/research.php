<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<?php
if (isset($_SESSION['id'])) 
{ 
  if($_SESSION['role'] == "Administrator")
  {

  }
  elseif($_SESSION['role'] == "User")
  {
  }
}
// ==================================================================
include "/xampp/htdocs/CustomLandingPage/admin/research/inc/header.php";
// include "../../resource/"
$loggedUser = $_SESSION['id'];
if ($loggedUser == "") 
{
  // include ""
  header("Location: ../../login/login.php");
}
else
{
  ?>
  <!-- #Research-->
  <section id="intro" class="clearfix">
    <div class="container">
    <h3 style="color:#fff;">&nbsp;<b> Research Management </b></h3>
      <div class="card-group">
            <div class="col-md-3 col-sm-5">
              <div class="card">
                <div class="card-body">
                  <!-- change function to the designated function of your assign management -->
                  <i class="fa fa-book fa-2x " style="color:#007bff"></i><h2 class="float-right"><?php 
                  echo get_research($connect)->num_rows;?></h2>
                   <h5 class="card-title">All Research</h5>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-5">
              <div class="card">
                <div class="card-body"> 
                 <i class="fa fa-upload fa-2x" style="color:#007bff"></i>
                  <h5 class="card-title">Recent upload</h5>     
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-5">
              <div class="card">
                <div class="card-body">
                  <!-- change function to the designated function of your assign management -->
                 <i class="fa fa-user-plus fa-2x" style="color:#007bff"></i><h2 class="float-right"><?php 
                //  echo get_users($connect)->num_rows;?></h2>
                  <h5 class="card-title">All Creator</h5>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                
                </div>
              </div>
            </div>
        </div>
      </div>
  </section>
            
  <br>
<?php
}
// BACKEND CODE
// for co-authors
if(isset($_POST["prim_skills"]))
{
 $prim_skills = '';
 foreach($_POST["prim_skills"] as $row)
 {
  $prim_skills .= $row . ', ';
 }
 $prim_skills = substr($prim_skills, 0, -2);
 $query = "INSERT INTO skills(skills) VALUES('".$prim_skills."')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}

if (isset($_GET['del'])) {
  // change function to the designated function of your assign management
  $result = delete_researchaction($connect,$_GET['del']);
  if ($result =="1") {
    message("Research deleted successfully!","1");
  }
}

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
    if(isset($_POST["co-author"]))
    {
      $c_author = '';
      foreach($_POST["co-author"] as $row)
      {
        $c_author .= $row . ', ';
      }
      $c_author = substr($c_author, 0, -2);
    }

    if(isset($_POST["tags"]))
    {
      $tagging = '';
      foreach($_POST["tags"] as $row)
      {
        $tagging .= $row . ', ';
      }
      $tagging = substr($tagging, 0, -2);
    }

    $result = create_researchaction($connect,$_POST['title'],$_POST['abstract'],$_POST['txtmain-author'],$c_author,$_POST['dpub'],$_POST['fstudy'],$Pdf_file,"", "", $tagging);
      if ($result == 1) {
        message("Research created successfully!",1);
      } else {
        message("Could not create Research!",0);
      }
}
}
?>

<div class="container">
<!-- Create task button -->
<button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#adding-research">
<i  class="fa fa-plus"></i>
</button>
<!-- change location of href -->
<a href="./research.php"><button type="button" class="btn btn-outline-primary btn-sm">
<i class="fa fa-refresh" aria-hidden="true"></i>
</button>
</a>

<!-- Create New Research -->

<div class="modal fadeInDown  adding-research-lg " id="adding-research" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document" style="border-radius: 10px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="box">
      <center><h1>Add New Research Paper</h1></center>
      <form action="" method="POST" name="form" enctype="multipart/form-data" id="adding-research-form">

        <!-- TITLE -->
        <div class="form-group">
          <label class="label">Title *</label>
          <textarea rows="2" cols="60" type="text "name="title" id="title" class="form-control"></textarea>
        </div>

        <!-- MAIN AUTHOR -->
          <div class="col">
            <div class="form-group">
            <label class="label">Main Author *</label><br>
            <select class="custom-select" id="txtmain-author" name="txtmain-author">
            <option selected> </option>
            <?php
            $result = get_author($connect);
            if ($result->num_rows>0) 
            {
              while ($data = mysqli_fetch_array($result)) 
              {
                {
                  echo  "<option value=".$data['name'].">".$data['name']."</option>";
                }
              }
            }
            ?>
            </select>
            </div>
          </div>

          <!-- CO-AUTHORS -->
          <div class="col">
          <label class="label">Co-Authors *</label><br>
          <style>
            #co-authors{
              width: 100%;
              color: black;
            }
          </style>
          <select class="form-control selectpicker md" data-live-search="true" id="co-authors" name="txtco-authors">
            <option selected disabled></option>
          <?php
            $result = get_author($connect);
            if ($result->num_rows>0) 
            {
              while ($data = mysqli_fetch_array($result)) 
              {
                {
                  echo  "<option>".$data['name']."</option>";
                }
              }
            }
            ?>
        </select>
        </div><br>
        

        <!-- ABSTRACT -->
      <div class="form-group">
        <label class="label">Abstract *</label>
        <textarea rows="5" cols="60" type="text "name="abstract" id="title" class="form-control"></textarea>
      </div>

      <div class="row">
        <!-- DATE PUBLISH -->
        <div class="col">
          <div class="form-group">
            <label>Date Publish *</label>
            <input type="date" name="dpub" id="dpub" class="form-control" />
          </div>
        </div>

        <!-- FIELD OF STUDY -->
        <div class="col">
          <div class="form-group">
            <label class="label">Field of Study *</label><br>
            <select class="custom-select" id="fstudy" name="fstudy">
            <option selected> </option>
            <option value="Accounting and Finance">Accounting and Finance</option>
            <option value="Business and Economics">Business and Economics</option>
            <option value="Computer Studies">Computer Studies</option>
            <option value="Hospitality">Hospitality</option>
            <option value="Nursing">Nursing</option>
            </select>
          </div>
        </div>
      </div>

      <div class="row">

        <!-- TAGS -->
        <div class="col">
          <label class="label">Tag(s) *</label><br>
          <select class=" form-control selectpicker md" multiple data-live-search="true" id="tags" name="tags">
            <option selected disabled> </option>
            <option value="Computer" id="Computer">Computer</option>
            <option value="WebDesign" id="WebDesign">Web Design</option>
            <option value="InternetSecurity" id="InternetSecurity">Internet Security</option>
          </select>
        </div>
        
      </div><br>
      <div class="form-group">
          <label for="files">Add (pdf, txt or docs)</label>
          <input type="file" class="form-control-file" id="files" name="files">
        </div>
        
      <input type="hidden" name="created" value="<?php echo date("Y-m-d"); ?>"/>
      <input type="hidden" name="create" value="create"/>
      <div class="modal-footer">
         <button class="btn btn-primary" id="submit" name="btnsubmit">Save</button>
         <button class="btn btn-secondary" data-dismiss="modal" >Cancel</button>
      </div>
      </form>
    </div>
      </div>
    </div>
  </div>
</div>

<!--Journal-->
<div class="table-responsive-lg">
  <!-- change table id based on your managemnet -->
  <!-- <table class="table table-striped table-bordered" cellspacing="0" width="100%"> -->
 <table id="research" class="table table-hover">
   <thead>
     <tr>
       <th scope="col" class="d-none">Default Sort Fixer</th>
       <th scope="col">ID</th>
       <th scope="col">Title</th>
       <th scope="col">Main Author</th>
       <th scope="col">Co-Author(s)</th>
       <th scope="col">Date Published</th>
       <th scope="col">Field of Study</th>
       <th scope="col">Views</th>
       <th scope="col">Cited</th>
       <th scope="col" align="center">Action</th>
     </tr>
   </thead>
   <tbody id="myTable">
     <?php
     
    //get author id inside research
     $result = get_research($connect);
     if ($result->num_rows>0) {
     while ($data = mysqli_fetch_array($result)) {
       ?>
       <tr>
         <td scope="row" class="d-none"><?php echo date("Y-m-d",strtotime($data['datepub']));?></td>
         <td><?php echo $data['id']?></td>
         <td><?php echo $data['title']?></td>
         <td><?php echo $data['main_author']?></td>
         <td><?php echo $data['co_authors']?></td>
         <td><?php echo $data['date_publish']?></td>
         <td><?php echo $data['field_of_study']?></td>
         <td><?php echo $data['views']?></td>
         <td><?php echo $data['cites']?></td>
         <td><?php
        //  $user = get_user_data($connect,$_SESSION['id']);
        //  echo $user['name'];
         ?>
       </td>
       <!-- Action Column -->
       <td>
         <div class="dropdown"  style="float:left">
         <button class="btn btn-light btn-sm" type="button" id="option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fa fa-ellipsis-h"></i>
         </button>
         <div class="dropdown-menu" aria-labelledby="option">
           <a class="dropdown-item" href="./api/action.php?id=<?php echo $data['id']?>">View</a>
           <a class="dropdown-item" href="./api/action.php?edit=<?php echo $data['id']?>">Edit</a>
           <?php if ($_SESSION['role']=="Administrator") {?><a class="dropdown-item" href="#<?php echo $data['id'];?>" data-toggle="modal" data-target="#delete-<?php echo $data['id'];?>">Delete</a><?php } ?>
         </div>
       </div>
     </td>
   </tr>

     <!-- Delete Popup -->
 <div style="margin-top: 200px;width: 30%;margin-left: 35%;margin-right: 35%;" class="modal fade" id="delete-<?php echo $data['id'];?>" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="deleteLabel">Delete Journal</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         Are you sure you want to delete?
       </div>
       <div class="modal-footer">
         <a href="?del=<?php echo $data['id'];?>"><button type="button" class="btn btn-danger">Yes</button></a>
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
       </div>
     </div>
   </div>
 </div>
   <?php
 }
}
 ?>
</tbody>
</table>
<div class="col-md-12 text-center">
  <ul class="pagination pagination-lg pager" id="myPager"></ul>
</div>
</div>
</div>

<script src="assets/datatables.min.js"></script>
<script src="./script/main.js"></script>
<script>
  $(document).ready(function () {
    $('#myTable').pageMe({
      pagerSelector:'#myPager',
      showPrevNext:true,
      hidePageNumbers:false,
      perPage:4});
});
//  $(function() {
//   //  change id with the id of the table
//    $('#research').DataTable();
//    $(function() {
//      var table = $('#research').DataTable({
//        "columnDefs": [{
//          "visible": false,
//          "targets": 2
//        }],
//        "ordering": false,
//        "displayLength": 25,
//        "drawCallback": function(settings) {
//          var api = this.api();
//          var rows = api.rows({
//            page: 'current'
//          }).nodes();
//          var last = null;
//          api.column(2, {
//            page: 'current'
//          }).data().each(function(group, i) {
//            if (last !== group) {
//              $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
//              last = group;
//            }
//          });
//        }
//      });
//            // Order by the grouping
//            $('#research tbody').on('click', 'tr.group', function() {
//              var currentOrder = table.order()[0];
//              if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
//                table.order([2, 'desc']).draw();
//              } else {
//                table.order([2, 'asc']).draw();
//              }
//            });
//        });
//  });
//  $('#research').DataTable({
//    dom: 'Bfrtip',
//    buttons: [
//    'copy', 'csv', 'excel', 'pdf', 'print'
//    ]
//  });
//  $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');


//  script for co-author
$('#txtco-authors').multiselect({
nonSelectedText: 'Select Your Skills',
enableFiltering: true,
enableCaseInsensitiveFiltering: true,
buttonWidth:'400px'
});

$('#adding-research-form').on('submit', function(event){
event.preventDefault();
var form_data = $(this).serialize();
$.ajax({
url:"research.php",
method:"POST",
data:form_data,
success:function(data)
{
$('#txtco-authors option:selected').each(function(){
$(this).prop('selected', false);
});
$('#txtco-authors').multiselect('refresh');
alert(data);
}
});
});
</script>



    
  <!--==========================
    Footer
  ============================-->
  <!-- <footer id="footer">
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
  </footer> -->
  

