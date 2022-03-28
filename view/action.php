<?php
include_once "../inc/header1.php";
if (empty($_SESSION['id'])) {
	// include""
	header("Location: ../../../login/login.php");
}
?>
<!--View Research-->
<?php 
//updating of Research
if (isset($_POST['id'])) {
	// change function to the designated function of your assign management
	// also correct each string of the sql with your form
 		$result = update_researchaction($connect,$title, $abstract, $main_author, $co_author, $datepub, $fstudy, $pdf_file, $views, $cite, $tagging);
 		if ($result == "1") {
			echo'<div style="position:relative;top: 100px;"';
 			message("Research updated successfully!",1);
 		}
 	}

// deleting of journal
 if (isset($_GET['del'])) {
	//  change function to the designated function of your assign management
 	$result = delete_researchaction($connect,$_GET['del']);
 	if ($result =="1") {
		//  change location to the page of your assign mangement
 		header("Location: ./admin/research/research.php");
 		message("Research deleted successfully!","1");
 	}
 }

// editing of Research
if (isset($_GET['edit'])) {
	// change function to the designated function of your assign management
	$data = get_researchaction($connect,$_GET['edit']);
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
if (!empty($_GET['id'])) 
{
	// change function to the designated function of your assign management
	$data = get_researchaction($connect,$_GET['id']);
	// include "";
	$pdf_file = $data['pdf_file'];
	$fstudy = $data['field_of_study'];
	$tags = $data['tagging'];
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
					<div class="badge badge-info text-wrap" style="width: 5rem; padding:5px;" >
					<!-- change to.. -->
					<span >Research</span>
					</div>
					<div>
						<button type ="button" class="btn btn-primary btn-sm float-right" style="position:relative;bottom:40px;" name="btn-download"><span class="fa fa-download"> Download Fulltext PDF&nbsp;</span></button>
						<a href="../../research/<?php echo $data['pdf_file']?>"><button type ="button" class="btn btn-outline-primary btn-sm float-right" style="position:relative;bottom:40px;" name="btn-fullview"><i class="fa fa-file-text"> View Fulltext PDF&nbsp;</i></button></a>
					</div>
					<div>
						<h2 class="text-left" style="margin-top:10px; font-family:'Lucida Sans';" ><b><?php echo $data['title']?></b></h2>
						<ul class="list-inline" style="font-size: small;">
							<li class="list-inline-item"><a href="author.php?author=<?php echo $data['main_author'];?>"><u><?php echo $data['main_author']?></u></a></li>
							<li class="list-inline-item"><a href="author.php?author=<?php echo $data['co_authors'];?>"><u><?php echo $data['co_authors']?></u></a></li>
							<li class="list-inline-item ">* Published <?php echo $data['date_publish'];?></li>
							<li class="list-inline-item">* <?php echo $data['field_of_study'];?></li>
						</ul>
						
					</div>
					<p class="font-weight-normal text-left" style="width:80%;"><?php echo ($data['abstract']); ?></p>
					<button type="button" class="btn btn-sm badge badge-info text-wrap" style="width: 5rem; padding:6px; float:right"><span>Cite</span></button>
		</div>
		</div>
	</div>
	</div>

	<br<br><br>
	<div class="container">
		<div id="result"></div>
			<div class="modal-footer">
				<!-- change location of href..-->
				<a href="./admin/research/research.php"><button class="btn btn-dark btn-sm">Back</button></a>	
			</div>	
	</div>
	
	<!-- Related Studies -->
	<br<br><br>
	<div class="container">
		<h2>Related Studies</h2><br>
		<!-- <div class="row"> -->
		<div class="card-group">
		<?php
		$result1 = get_researchrelated($connect,$fstudy,$tags);
		if ($result1->num_rows>0) {
			while ($data1 = mysqli_fetch_array($result1))
			{
				if($data1['id'] != $_GET['id'])
				{
				?>
				
					<div class="col-md-3 col-sm-5">
					<div class="card">
						<div class="card-body">
							<!-- change function to the designated function ofyouassign management -->
							<a href="action.php?id=<?php echo $data1['id'];?>"><p class="card-title"><?php echo $data1['title'];?></p></a>
							<p class="card-text"><small class="text-muted"><?php ?></small></p>
						</div>
					</div>
					</div>
			<?php
				}
			}
		}
		?>
		</div>
		</div>
	<!-- </div> -->
	<br><br>	
	
<?php
}
?>


