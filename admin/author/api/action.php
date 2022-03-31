<?php
include_once "../inc/header_1.php";
if (empty($_SESSION['id'])) {
	// include""
	
}
?>

<!--View Author-->
<?php 
//updating of author
if (isset($_POST['id'])) {
	
 		$result = update_authoraction($connect,$_POST['name'],$_POST['profession'],$_POST['fstudy'],$_POST['description'],$_POST['id']);
 		if ($result == "1") {
			echo'<div style="position:relative;top: 100px;"';
 			message("Author updated successfully!",1);
 		}
 	}
// deleting of author
 if (isset($_GET['del'])) {

 	$result = delete_authoraction($connect,$_GET['del']);
 	if ($result =="1") {
		
 		header("Location: action.php");
 		message("Author deleted successfully!","1");
 	}
 }

// editing of author
if (isset($_GET['edit'])) {
	$data = get_authors($connect,$_GET['edit']);
	?>
	<br><br><br><br>
	<div class="container">
		<table class="table table-bordered" style="width:80%;margin:auto;">
			<thead class="thead-dark">
				<tr>
					<th scope="cols" colspan="3" class="p-0">
						<!--  -->
						<h5> <a href="action.php?id=<?php echo $data['id'];?>&ref=author"><button class="btn btn-dark btn-sm">← Back to project</button></a> </h5>
					</th>
				</tr>
			</thead>
			<form method="post">
			<tbody>
				<tr>
					<td>
						<!-- change this form to what must be edited to your assign management -->
						<div class="form-group">
							<label for="name">Author Name</label>
							<input type="text" class="form-control" id="name" name="name" value="<?php echo $data['name'];?>">
							<div class="form-group">
								<label for="profession">Profession</label>
								<input class="form-control" id="profession" name="profession" value="<?php echo $data['profession'];?>">
							</div>
							<div class="form-group">
								<label for="fstudy">Field of Study</label>
								<input class="form-control" id="fstudy" name="fstudy" value="<?php echo $data['fstudy'];?>">
							</div>
							<div class="form-group">
								<label for="description">Description</label>
								<textarea class="form-control" id="description" name="description" rows="10"></textarea>
							</div>
						</div>
						<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $data['id'];?>">
						<div class="form-group" align="right">
							<button class="btn btn-primary btn-sm">Save Project</button>
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
if (!empty($_GET['id'])) {
	$data = get_authors($connect,$_GET['id']);
	?>
<br><br><br><br>
	<!--View Research-->
	<div class="container" >
        <div class="card">
         <div class="card-body">
			<style>
				body{background-color:#f4f4f4;}h4,p{margin: 0;padding:0;}
				p{font-weight:600px;font-size:14px;}
				</style>
	 		<div class="container" ">
			 	<div class="text-left">
              		<div class="row">
						<div class="col-2">
						<img src="/CustomLandingPage/admin/profile/uploads/ayanokoji.jpg" class="rounded-circle w-cover" alt="..." width="100"   >
						</div>
						<div style="position:relative;right:40px;top:15px;font-weight:800px;">
							<h4 style="margin-bottom:5px;font-size:30px;">
							<?php echo $data['name']?></h4>
							<p class="text-muted"><?php  echo $data['fstudy'];?> &nbsp;&#x22C5;&nbsp;<?php echo  date("F Y",strtotime($data['created']));?></p>
							<p class="text-muted"><?php  echo $data['profession'];?></p>
						</div>
                	</div>
            	</div>
        	 </div>
			 <div class="card-body " >
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<a class="nav-link active" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="true">About</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="research-tab" data-toggle="tab" href="#research" role="tab" aria-controls="research" aria-selected="false">Research</a>
						</li>
					</ul>
						<div class="tab-content " id="myTabContent">
								<div class="tab-pane fade show active  " id="about" role="tabpanel" aria-labelledby="about-tab" >
									<h3 class="text-muted">About</h3>
									<!-- <div class="card"> -->
										<!-- <div class="card-body"> -->
											<div class="row">
												<div class="col-sm-6">
													<h5 class="card-title text-muted">All Publications</h5>
													<?php echo get_author($connect)->num_rows;?>
												</div>
												<div class="col-sm-6">
													<h5 class="card-title text-muted">Views</h5>
													<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
												</div>   
											</div>
										<!-- </div> -->
									<!-- </div> -->
									<div class="card-body"></div>
									<div class="row">
										<div class="col-sm">
											<!-- <div class="card"> -->
												<!-- <div class="card-body"> -->
													<h5 class="text-muted">Intro</h5>
													<hr>
														<p class="card-text"><?php echo $data['description'];?></p> 
												</div>
											<!-- </div> -->
										<!-- </div> -->
									</div>
									</div>
								<div class="tab-pane fade" id="research" role="tabpanel" aria-labelledby="research-tab">...</div>
							</div>
          		</div>
		</div>
    </div>
 </div>						
	<br<br><br>
	<div class="container">
		<div id="result"></div>
			<div class="modal-footer">
				<!-- change location of href..-->
				<a href="../author.php"><button class="btn btn-dark btn-sm">Back</button></a>
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

