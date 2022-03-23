<?php
include "inc/header.php";
if (empty($_SESSION['id'])) {
}
?>

<!-- #Account-->
<section id="intro" class="clearfix">
  <div class="container">
  <h3 style="color:#fff;">&nbsp;<b> Account Management </b></h3>
    <div class="card-group">
          <div class="col-md-3 col-sm-5">
            <div class="card">
              <div class="card-body">
                <!-- <i class="fa fa-users fa-2x " style="color:#007bff"></i><h2 class="float-right"><?php echo get_users($connect)->num_rows;?></h2> -->
                 <h5 class="card-title">All Account</h5>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-5">
            <div class="card">
              <div class="card-body"> 
               <!-- <i class="fa fa-eyefa fa-upload fa-2x" style="color:#007bff"></i><h2 class="float-right"><?php echo get_activeaccounts($connect)->num_rows;?></h2> -->
                <h5 class="card-title">Active</h5>     
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-5">
            <div class="card">
              <div class="card-body"> 
               <!-- <i class="fa fa-power-off fa-2x" style="color:#007bff"></i><h2 class="float-right"><?php echo get_inactiveaccounts($connect)->num_rows;?></h2> -->
                <h5 class="card-title">Inactive</h5>     
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
      </div>
    </div>
</section>

<div class="container">
<!-- Create task button -->
<button type="button" class="btn btn-outline-dark btn-md" data-toggle="modal" data-target="#create-project">
  Create New Account
</button>
<a href="account.php"><button type="button" class="btn btn-outline-dark btn-md">
  Refresh
</button>
</a>

<br/>
<br/>

<!-- Create New Projects -->

<div class="modal fade" id="create-project" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="create-project-label" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered " role="document">
   <div class="modal-content">
     <form method="post" action="account_mng.php">
       <div class="modal-header">
         
         <h5 class="modal-title" id="create-project-label">Create Account</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <div class="form-group">
           <label for="fname">First Name</label>
           <input type="text" class="form-control" id="fname" name="fname">
           </div>
           <div class="form-group">
             <label for="lname">Last Name</label>
             <input type="text" class="form-control" id="lname" name="lname">
           </div>
           <div class="form-group">
             <label for="email">Email</label>
             <input type="text" class="form-control" id="email" name="email">
           </div>
       </div>
       <input type="hidden" name="created" value="<?php echo date("Y-m-d"); ?>"/>
       <input type="hidden" name="create" value="create"/>
       <div class="modal-footer">
         <button class="btn btn-primary">Save</button>
         <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
       </div>
     </form>
   </div>
 </div>
</div>

<nav class="navbar">
          <form class="form-inline">
            <button class="btn btn-outline-lightblue btn-md" type="button" id="filter-all">All</button>
            <input id="txtsearch_title" type="search" class="form-control" placeholder="Search" style=" width: 250px">
            <button class="btn btn-outline-lightblue btn-md" type="button" id="filter-title">Title</button>
            <button class="btn btn-outline-lightblue btn-md" type="button" id="filter-author">Author</button>
            <button class="btn btn-outline-lightblue btn-md" type="button" id="filter-fstudy">Field of Study</button>
            <button class="btn btn-outline-lightblue btn-md" type="button" id="filter-mostview">Most View</button>
            <button class="btn btn-outline-lightblue btn-md" type="button" id="filter-mostcited">Most Cited</button>
          </form>
        </nav>

<!--Projects-->
<div class="table-responsive-lg">
 <table id="projects" class="table table-hover">
   <thead>
     <tr>
       <th scope="col" class="d-none">Default Sort Fixer</th>
       <th scope="col">ID</th>
       <th scope="col">First name</th>
       <th scope="col">Last name</th>
       <th scope="col">Email</th>
       <th scope="col">Password</th>
       <th scope="col">Status</th>
       <th scope="col">Category</th>
       <th scope="col">Member</th>
     </tr>
   </thead>
   <tbody>
     <?php
     $result = get_users($connect);
     if ($result->num_rows>0) {
     while ($data = mysqli_fetch_array($result)) {
       ?>
       <tr>
         <td><?php echo $data['id']?></td>
         <td><?php echo $data['fname']?></a></td>
         <td><?php echo $data['lname']?></a></td>
         <td><?php echo $data['email']?></a></td>
         <td><?php echo $data['pass']?></a></td>
         <td><?php echo $data['status']?></a></td>
         <td><?php echo $data['ucategory']?></a></td>
         <td><?php echo $data['au_member']?></a></td>
       <td align="center"><div class="dropdown">
         <button class="btn btn-light" type="button" id="option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fa fa-ellipsis-h"></i>
         </button>
         <div class="dropdown-menu" aria-labelledby="option">
           <a class="dropdown-item" href="project.php?id=<?php echo $data['id']?>">View</a>
           <a class="dropdown-item" href="project.php?edit=<?php echo $data['id']?>">Edit</a>
           <?php if ($_SESSION['id']==1) {?><a class="dropdown-item" href="#<?php echo $data['id'];?>" data-toggle="modal" data-target="#delete-<?php echo $data['id'];?>">Delete</a><?php } ?>
         </div>
       </div>
     </td>
   </tr>

<!-- Delete Popup -->
<div style="margin-top: 200px;width: 30%;margin-left: 35%;margin-right: 35%;" class="modal fade" id="delete-<?php echo $data['id'];?>" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="deleteLabel">Delete Account</h5>
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
<script>
 $(function() {
   $('#projects').DataTable();
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