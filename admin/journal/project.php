<?php
include_once  "inc/header.php";
if (empty($_SESSION['id'])) {
}
?>
<!--View Project-->
<?php 

if (isset($_POST['id'])) {
 		$result = update_project($connect,$_POST['author'],$_POST['title'],$_POST['datepub'],$_POST['id']);
 		if ($result == "1") {
 			message("Journal updated successfully!",1);
 		}
 	}

 if (isset($_GET['del'])) {
 	$result = delete_project($connect,$_GET['del']);
 	if ($result =="1") {
 		header("Location: journal_dashboard.php");
 		message("Journal deleted successfully!","1");
 	}
 }


if (isset($_GET['edit'])) {
	$data = get_project($connect,$_GET['edit']);
	?>

	<br><br><br><br>
	<div class="container">
		<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th scope="cols" colspan="3" class="p-0">
						<h5> <a href="journal_dashboard.php?id=<?php echo $data['id'];?>&ref=projects"><button class="btn btn-dark btn-sm">← Back to project</button></a> </h5>
					</th>
				</tr>
			</thead>
			<form method="post">
			<tbody>
				<tr>
					<td>
						<div class="form-group">
							<label for="author">Author Name</label>
							<input type="text" class="form-control" id="author" name="author" value="<?php echo $data['author'];?>">
							<div class="form-group">
								<label for="title">title</label>
								<input class="form-control" id="title" name="title" value="<?php echo $data['title'];?>">
							</div>
						</div>
						<div class="form-group">
							<label for="datepub">Date Publish</label>
							<input type="date" class="form-control" id="datepub" name="datepub" value="<?php echo $data['datepub'];?>">
						</div>

						<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $data['id'];?>">

						<div class="form-group" align="right">
							<button class="btn btn-primary btn-sm">Save Project</button> <a class="btn btn-dark btn-sm" href="project.php?id=<?php echo $data['id'];?>&ref=projects">Cancel</a>
						</div>
					</td>

				</tr>
			</tbody>
		</form>
		</table>

<?php 
} ?>
</div>

<br><br><br>
	<!--View Project-->
	<div class="container">
	<table class="table table-bordered">
		<thead class="thead-dark">
			<tr>
				<th scope="cols" colspan="3" class="p-0">
					<h5> <a href="journal_dashboard.php"><button class="btn btn-dark btn-sm">← Back to projects </button></a> <?php echo $data['author']?></h5>
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td width="40%">
					<div class="row">
						<div class="col-4 border-right border-bottom p-1">datepub</div>
						<div class="col-8 border-bottom p-1"><?php echo date("Y-m-d",strtotime($data['datepub']));?></div>
						<div class="col-4 border-right border-bottom p-1">Creator</div>
						<div class="col-8 border-bottom p-1"><?php $user = get_user_data($connect,$data['creator']); echo $user['name']; ?></div>
						<div class="col-4 border-right p-1">Created On</div>
						<div class="col-8 p-1"><?php echo date("Y-m-d  h:i:sa",strtotime($data['created']));?></div>
					</div>
				</td>
			</tr>
		</tbody>
	</table>


	<div id="result"></div>
	<div class="modal-footer">
			<div class="dropdown">
				<button class="btn btn-light btn-sm" type="button" id="option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-ellipsis-h"></i>
				</button>
				<div class="dropdown-menu" aria-labelledby="option">
					<a class="dropdown-item" href="project.php?edit=<?php echo $data['id']?>">Edit</a>
					<a class="dropdown-item" href="#<?php echo $data['id'];?>" data-toggle="modal" data-target="#delete">Delete</a>
				</div>
			</div>
		
	</div>
	</div>
	<script src="assets/datatables.min.js"></script>
	
	


