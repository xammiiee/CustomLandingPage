<?php
include_once "./resource/inc/header.php";
if (empty($_SESSION['id'])) {
	// include""
	header("Location: ./login/login.php");
}
?>

<!--View Author-->
<?php 
//updating of Research
if (isset($_POST['id'])) {
	// change function to the designated function of your assign management
	// also correct each string of the sql with your form
 		$result = update_journalaction($connect,$_POST['name'],$_POST['email'],$_POST['profession'],$_POST['description'],$_POST['id'],$_POST['created'],$filelocation,"0");
 		if ($result == "1") {
			echo'<div style="position:relative;top: 100px;"';
 			message("Research updated successfully!",1);
 		}
 	}
// deleting of journal
 if (isset($_GET['del'])) {
	//  change function to the designated function of your assign management
 	$result = delete_journalaction($connect,$_GET['del']);
 	if ($result =="1") {
		//  change location to the page of your assign mangement
 		header("Location: ./admin/research/research.php");
 		message("Research deleted successfully!","1");
 	}
 }

// editing of Research
if (isset($_GET['edit'])) {
	// change function to the designated function of your assign management
	$data = get_journalaction($connect,$_GET['edit']);
	?>
	<br><br><br><br>
	<div class="container">
		<table class="table table-bordered " >
			<thead class="thead-dark">
			
				<tr>
					<th scope="cols" colspan="3" class="p-0">
						<!--  -->
						<h5> <a href="action.php?id=<?php echo $data['id'];?>&ref=journal"><button class="btn btn-dark btn-sm">← Back to project</button></a> </h5>
					</th>
				</tr>
			</thead>
			<form method="post">
			<tbody>
				<tr>
					<td>
						<!-- change this form to what must be edited to your assign management -->
						<div class="form-group">
							<label for="author">Author Name</label>
							<input type="text" class="form-control" id="author" name="author" value="<?php echo $data['author'];?>">
							<div class="form-group">
								<label for="title">Title</label>
								<input class="form-control" id="title" name="title" value="<?php echo $data['title'];?>">
							</div>
							<div class="form-group">
								<label for="description">Description</label>
								<textarea class="form-control" id="description" name="description" rows="10"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="datepub">Date Publish</label>
							<input type="date" class="form-control" id="datepub" name="datepub" value="<?php echo $data['datepub'];?>">
						</div>

						<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $data['id'];?>">

						<div class="form-group" align="right">
							<button class="btn btn-primary btn-sm">Save Project</button> <a class="btn btn-dark btn-sm" href="/project.php?id=<?php echo $data['id'];?>&ref=journal">Cancel</a>
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
					<span >Research</span>
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
				<a href="./admin/research/research.php"><button class="btn btn-dark btn-sm">Back</button></a>
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

