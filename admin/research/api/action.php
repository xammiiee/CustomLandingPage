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

include_once "../inc/header1.php";

if (empty($_SESSION['id'])) {
	// include""
	header("Location: ../../../../login/login.php");
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
						<h5> <a href=""><button class="btn btn-dark btn-sm">← Back to project</button></a> </h5>
						<center><h5><span>EDIT RESEARCH</span></h5></center>
					</th>
				</tr>
			</thead>
			<form method="post">
			<tbody>
				<tr>
					<td>
						<!-- change this form to what must be edited to your assign management -->
						<!-- TITLE -->
						<div class="form-group">
							<label class="label">Title</label>
							<textarea rows="2" cols="60" type="text "name="title" id="title" class="form-control" value =''><?php echo $data['title'];?></textarea>
						</div>

						<!-- MAIN AUTHOR -->
						<div class="form-group">
								<label class="label">Main Author</label><br>
								<input class="form-control" id="m_author" name="m_author" value="<?php echo $data['main_author'];?>" disabled>
							</div>
						
						<!-- CO AUTHOR -->
						<div class="row">
							
							<div class="col">
								<label class="label">Co-Author(s) *</label><br>
								<input class="form-control" id="c_authors" name="c_authors" value="<?php echo $data['co_authors'];?>" disabled>
							</div>
							<div class="col" id="co-author-list" >

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
								<input type="text" name="dpub" id="dpub" class="form-control" value="<?php echo $data['date_publish'];?>" disabled/>
							</div>
						</div>

						<!-- FIELD OF STUDY -->
						<div class="col">
							<div class="form-group">
								<label class="label">Field of Study *</label><br>
								<select class="custom-select" id="fstudy" name="fstudy">
								<option selected disabled><?php echo $data['field_of_study'];?></option>
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
							<?php
							if(isset($_GET['bt']))
							{
								$comma_separated = implode(",", $mytags);
								echo $comma_separated;
							}
							?>
							<label class="label">Tag(s) *</label>
							<select class="custom-select" id="drop-tags">
								<option selected disabled> </option>
								<?php
								$result = get_research_id($connect,$_GET['edit']);
								if ($result->num_rows>0) 
								{
								  if($data['tagging'] != "Computer" || $data['tagging'] != "WebDesign" || $data['tagging'] != "InternetSecurity")
								  {?>
									<option value="Computer" id="Computer">Computer</option>
									<option value="WebDesign" id="WebDesign">Web Design</option>
									<option value="InternetSecurity" id="InternetSecurity">Internet Security</option>
								  <?php
								  }
								}
								?>
								
							</select>
							<div class="input-group-append">
								<button class="btn btn-info" type="button" id="btn-tags" name="btntags">Add</button>
							</div>
						</div>
						<div class="col">
							<label>--Tags Added--</label>
							<ul class="list-group" id="tags-list" >
								<?php
								$mytags = array();

								$result = get_research_id($connect,$_GET['edit']);
								if ($result->num_rows>0) 
								{
								  while ($data = mysqli_fetch_array($result)) 
								  {
									 {
										echo  "<option>".$data['tagging']."</option>";
										$mytags =  array($data['tagging']);
									 }
								  }
								}
								?>
							</ul>
						</div>
						</div><br>
						<div class="form-group">
							<?php
							// $travel = 
							// $added = explode(",", $_POST["added"]);
							// $travel = array_merge($travel, $added);
							
							
							// echo "<p> Here is the list with your additions:</p>";
							
							// echo "<ul>";
							
							// foreach ($travel as $t)
							// 	 {
							// 	 echo "<li>$t</li>";
							// 	 }
							
							// echo "</ul>";
							?>
							<label for="files">Add (pdf, txt or docs)</label>
							<input type="file" class="form-control-file" id="files" name="files">
						</div>
						<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $data['id'];?>">

						<div class="form-group" align="right">
							<button class="btn btn-primary btn-sm">Save Edit</button> <a class="btn btn-dark btn-sm" href="/action.php?id=<?php echo $data['id'];?>&ref=research">Cancel</a>
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
		<div id="result">
		<a href="../research.php"><button class="btn btn-dark btn-sm"  style="float:left">Back</button></a>
		</div>	
	</div><br><br>
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
							<?php
									foreach (explode(",", $data['co_authors']) as $variable => $tk) {
									$variable>0;
									$variable++;
									?><li class="list-inline-item"><a href="author.php?author=<?php echo "$tk";?>"><u><?php echo "$tk";?></u></a></li> <?php
									// echo '$variable_'.$variable.' is ' .$tk.'<br>';
									}
							?>
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


