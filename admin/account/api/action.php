<?php
include_once "../inc/header.php";
if (empty($_SESSION['id'])) {
	// include""
	header("Location: ./login/login.php");
}
?>

<!--View Account-->
<?php 
//updating of account
if (isset($_POST['id'])) {
	// change function to the designated function of your assign management
	// also correct each string of the sql with your form
 		$result = update_journalaction($connect,$_POST['author'],$_POST['title'],$_POST['datepub'],$_POST['description'],$_POST['id']);
 		if ($result == "1") {
			echo'<div style="position:relative;top: 100px;"';
 			message("Account updated successfully!",1);
 		}
 	}
// deleting of account 
 if (isset($_GET['del'])) {
	//  change function to the designated function of your assign management
 	$result = delete_accountaction($connect,$_GET['del']);
 	if ($result =="1") {
		//  change location to the page of your assign mangement
 		header("Location: ./admin/account/account.php");
 		message("Account deleted successfully!","1");
 	}
 }

// editing of account
if (isset($_GET['edit'])) {
	// change function to the designated function of your assign management
	$data = get_accountaction($connect,$_GET['edit']);
	?>
	<br><br><br><br>
	<div class="container">
		<table class="table table-bordered " >
			<thead class="thead-dark">
			
				<tr>
					<th scope="cols" colspan="3" class="p-0">
						<!--  -->
						<h5> <a href="./account.php?id=<?php echo $data['id'];?>&ref=journal"><button class="btn btn-dark btn-sm">← Back to Account</button></a> </h5>
					</th>
				</tr>
			</thead>
			<form method="post">
			<tbody>
				<tr>
					<td>
						<!-- change this form to what must be edited to your assign management -->
						<div class="form-group">
           <label for="name">Name</label>
           <input type="text" class="form-control" id="name" name="name" required>
         </div>
           <div class="form-group">
             <label for="email">Email</label>
             <input type="text" class="form-control" id="email" name="email">
           </div>
           <div class="form-group">
							<label for="pass">Password</label>
							<textarea class="form-control" id="pass" name="pass"></textarea>
					</div>

          <div class="form-group">
               <select class="browser-default custom-select"  id="ucategory"
                  class="form-control"
                  name="ucategory"
                  value=" ">
                  <option selected disabled>Category</option>
                  <option value="User">User</option>
                  <option value="Administrator">Administrator</option>
                </select>
                </div>

         <div class="form-group">
               <select class="browser-default custom-select"  id="au_member"
                  class="form-control"
                  name="au_member"
                  value=" ">
                  <option selected disabled>Member of Arellano Community?</option>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
                </div>
        </div>

						<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $data['id'];?>">

						<div class="form-group" align="right">
							<button class="btn btn-primary btn-sm">Save Account</button> <a class="btn btn-dark btn-sm" href="./account.php?id=<?php echo $data['id'];?>&ref=journal">Cancel</a>
						</div>
					</td>

				</tr>
			</tbody>
		</form>
		</table>
		</div>
		</div>

<?php } ?>

<?php 

// Get Research id
if (!empty($_GET['id'])) {
	// change function to the designated function of your assign management
	$data = get_journal($connect,$_GET['id']);
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
					<div class="badge badge-info text-wrap" style="width: 4rem;padding:5px;" >
					<!-- change to.. -->
					<span >Acount</span>
					</div>
					<h2 class="text-left" style="margin-top:10px;" ><?php echo $data['title']?></h2>
						<button class="btn btn-primary btn-sm float-right" style="position:relative;bottom:40px;" ><i class="fa fa-download"> Download fulltext PDF&nbsp;</i></button>
						<button class="btn btn-outline-primary btn-sm float-right" style="position:relative;bottom:40px;" ><i class="fa fa-file-text"> Download fulltext PDF&nbsp;</i></button>
							
						

					<p class="font-weight-normal text-left" style="width:50%;"><?php echo ($data['description']); ?></p>
					<p class="font-weight-sm-light text-left" style="font-size: 15px;margin-top:10px;" ><?php echo date("Y-m-d",strtotime($data['datepub']));?></p>
					<p style="margin-top:10px;"><b>Authors:</b></p>
					<p style="margin-top:10px;"><a href=""><?php echo $data['author']?></a></p>
					</div>
					</div>
					</div>
	<br<br><br>
	<div class="container">
		<div id="result"></div>
			<div class="modal-footer">
				<!-- change location of href..-->
				<a href="./admin/account/account.php"><button class="btn btn-dark btn-sm">Back</button></a>
					<div class="dropdown">
						<button class="btn btn-light btn-sm" type="button" id="option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-ellipsis-h"></i>
						</button>
						
						<div class="dropdown-menu" aria-labelledby="option">
							<a class="dropdown-item" href="action.php?edit=<?php echo $data['id']?>">Edit</a>
							<a class="dropdown-item" href="#<?php echo $data['id'];?>" data-toggle="modal" data-target="#delete">Delete</a>
						</div>
					</div>		
			</div>	
		</div>
	
<?php } ?>

