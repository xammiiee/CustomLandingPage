<?php
include "/xampp/htdocs/CustomLandingPage/admin/research/inc/header.php";
// include "../../resource/"
if (empty($_SESSION['id'])) {
// include ""
}

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
                // echo get_journal($connect)->num_rows;?></h2>
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
 <!--<header class="section-header">
      <h3>Journal Management</h3>
    </header> -->
<?php
if (isset($_GET['del'])) {
  // change function to the designated function of your assign management
  $result = delete_journalaction($connect,$_GET['del']);
  if ($result =="1") {
    message("Research deleted successfully!","1");
  }
}
if ($_SERVER['REQUEST_METHOD'] =="POST") {
  if (isset($_POST['create'])) {
    // change function to the designated function of your assign management
    // also correct each string of the sql with your form
    $result = create_journalaction($connect,$_POST['author'],$_POST['title'],$_POST['description'],$_SESSION['id'],$_POST['datepub'],$_POST['created']);
    if ($result == 1) {
      message("Research created successfully!",1);
    } else {
      message("Could not create Journal!",0);
    }
  }
}
// upload file section
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
  }else{
     print_r($errors);
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

<br/>
<br/>

<!-- Create New Research -->

<div class="modal fadeInDown  adding-research-lg " id="adding-research" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="box">
      <center><h1>Add New Research Paper</h1></center>
      <form action="" method="POST" name="form" enctype="multipart/form-data">

        <!-- TITLE -->
        <div class="form-group">
          <label class="label">Title *</label>
          <textarea rows="2" cols="60" type="text "name="title" id="title" class="form-control"></textarea>
        </div>

        <!-- MAIN AUTHOR -->
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
                  echo  "<option value=".$data['fullname'].">".$data['fullname']."</option>";
                }
              }
            }
            ?>
            </select>
          </div>
        
        <!-- CO AUTHOR -->
        <div class="row">
          
          <div class="col">
          <label class="label">Co-Author(s) *</label><br>
          <select class="custom-select" id="txtco-authors" name="co-author">
          <option selected disabled> </option>
          <?php
          $result = get_author($connect);
          if ($result->num_rows>0) 
          {
            while ($data = mysqli_fetch_array($result)) 
            {
              {
                echo  "<option value=".$data['id']." id=".$data['fullname'].">".$data['fullname']."</option>";
              }
            }
          }
          ?>
          </select>
          <div class="input-group-append">
            <button class="btn btn-info" type="button" id="btn-co-author">Add</button>
          </div>
          </div>

          <div class="col" id="co-author-list" >
            <label>--Co-Authors Added--</label>
          <ul class="list-group" id='co-list'>
            <?php
              $a="list-group-item";
              foreach($result as $row)
              {
                echo  "<li class ='list-group-item' value='".$row['id']."' id='".$row['fullname']."'>".$row['fullname']."</li>";
              }
            ?>
          </ul>
          </div>
        </div>

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
          <label class="label">Tag(s) *</label>
          <select class="custom-select" id="drop-tags">
            <option selected disabled> </option>
            <option value="Computer" id="Computer">Computer</option>
            <option value="WebDesign" id="WebDesign">Web Design</option>
            <option value="InternetSecurity" id="InternetSecurity">Internet Security</option>
          </select>
          <div class="input-group-append">
            <button class="btn btn-info" type="button" id="btn-tags">Add</button>
          </div>
        </div>
        <div class="col">
          <label>--Tags Added--</label>
          <ul class="list-group" id="tags-list">
          </ul>
        </div>
      </div><br>
      <div class="form-group">
      <label for="" class="form-label">File Pdf *</label><br>
        <div style="padding: 10px; border: 1px solid #999">
          <input type="hidden" name="MAX_FILE_SIZE" value="20000000"/><input
            type="file" name="pdfFile">
        </div>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-info" id="submit" name="btnsubmit" >
            Submit
        </button>
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
   <tbody>
     <?php
     $result = get_research($connect);
     if ($result->num_rows>0) {
     while ($data = mysqli_fetch_array($result)) {
       ?>
       <tr>
         <td scope="row" class="d-none"><?php echo date("Y-m-d",strtotime($data['datepub']));?></td>
         <td><?php echo $data['id']?></td>
         <td><a href="action.php?id=<?php echo $data['id']?>&ref=research"><?php echo $data['title']?></a></td>
         <td><?php echo $data['main_author']?></a></td>
         <td><?php echo $data['co_authors']?></a></td>
         <td><?php echo $data['date_publish']?></td>
         <td><?php echo $data['field_of_study']?></td>
         <td><?php echo $data['views']?></td>
         <td><?php echo $data['cites']?></td>
         <td><?php
        //  $user = get_user_data($connect,$data['creator']);
        //  echo $user['name'];
         ?>
       </td>
       
       <td><?php 
      //  echo date("Y-m-d",strtotime($data['created']));?></td>
       <!-- Action Column -->
       <td align="center"><div class="dropdown">
         <button class="btn btn-light btn-sm" type="button" id="option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fa fa-ellipsis-h"></i>
         </button>
         <div class="dropdown-menu" aria-labelledby="option">
           <a class="dropdown-item" href="action.php?id=<?php echo $data['id']?>">View</a>
           <a class="dropdown-item" href="action.php?edit=<?php echo $data['id']?>">Edit</a>
           <?php if ($_SESSION['role']==1) {?><a class="dropdown-item" href="#<?php echo $data['id'];?>" data-toggle="modal" data-target="#delete-<?php echo $data['id'];?>">Delete</a><?php } ?>
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
</div>
</div>

<script src="assets/datatables.min.js"></script>
<script src="./script/main.js"></script>
<script>
 $(function() {
  //  change id with the id of the table
   $('#research').DataTable();
   $(function() {
     var table = $('#example').DataTable({
       "columnDefs": [{
         "visible": false,
         "targets": 2
       }],
       "ordering": false,
       "displayLength": 25,
       "drawCallback": function(settings) {
         var api = this.api();
         var rows = api.rows({
           page: 'current'
         }).nodes();
         var last = null;
         api.column(2, {
           page: 'current'
         }).data().each(function(group, i) {
           if (last !== group) {
             $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
             last = group;
           }
         });
       }
     });
           // Order by the grouping
           $('#example tbody').on('click', 'tr.group', function() {
             var currentOrder = table.order()[0];
             if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
               table.order([2, 'desc']).draw();
             } else {
               table.order([2, 'asc']).draw();
             }
           });
       });
 });
 $('#example23').DataTable({
   dom: 'Bfrtip',
   buttons: [
   'copy', 'csv', 'excel', 'pdf', 'print'
   ]
 });
 $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
</script>



    
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

  

