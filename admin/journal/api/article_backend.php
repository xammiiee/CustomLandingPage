<?php
include_once "inc/header.php";
if (empty($_SESSION['id'])) {
	header("Location: login.php");
}
?>

<!--View Article-->
<?php 

if (isset($_POST['id'])) {
 		$result = update_article($connect,$_POST['aauthor'],$_POST['atitle'],$_POST['adescription'],$_POST['adatepub'],$_POST['id']);
 		if ($result == "1") {
			echo'<div style="position:relative;top: 100px;"';
 			message("Article updated successfully!",1);
 		}
 	}

 if (isset($_GET['del'])) {
 	$result = delete_article($connect,$_GET['del']);
 	if ($result =="1") {
 		header("Location: article.php");
 		message("Article deleted successfully!","1");
 	}
 }


if (isset($_GET['edit'])) {
	$data = get_article($connect,$_GET['edit']);
	?>
	<br><br><br><br>
	<section id="intro" class="clearfix">
	<div class="container">
		<table class="table table-bordered " >
			<thead class="thead-dark">
				<tr>
					<th scope="cols" colspan="3" class="p-0">
						<h5> <a href="article_backend.php?id=<?php echo $data['id'];?>&ref=article"><button class="btn btn-dark btn-sm">← Back to project</button></a> </h5>
					</th>
				</tr>
			</thead>
			<form method="post">
			<tbody>
				<tr>
					<td>
						<div class="form-group">
							<label for="aauthor">Author</label>
							<input type="text" class="form-control" id="aauthor" name="aauthor" value="<?php echo $data['aauthor'];?>">
							<div class="form-group">
								<label for="atitle">Title</label>
								<input class="form-control" id="atitle" name="atitle" value="<?php echo $data['atitle'];?>">
							</div>
							<div class="form-group">
								<label for="adescription">Description</label>
								<textarea class="form-control" id="adescription" name="adescription" rows="10"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="adatepub">Date Publish</label>
							<input type="date" class="form-control" id="adatepub" name="adatepub" value="<?php echo $data['adatepub'];?>">
						</div>

						<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $data['id'];?>">

						<div class="form-group" align="right">
							<button class="btn btn-primary btn-sm">Save Project</button> <a class="btn btn-dark btn-sm" href="/article_backend.php?id=<?php echo $data['id'];?>&ref=article">Cancel</a>
						</div>
					</td>

				</tr>
			</tbody>
		</form>
		</table>
		</div>
		</div>
		</section>
<?php } ?>

<?php 
if (!empty($_GET['id'])) {
	$data = get_article($connect,$_GET['id']);
	?>
<br><br><br><br>
	<!--View Article-->
	<div class="container">
			<div class="card float-left" style="width: 70%;" >
				<div style="line-height: 20px;">
					<style>
						body{
							background: rgb(2,0,36);
							background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(193,193,245,1) 0%, rgba(40,40,228,1) 0%, rgba(109,109,232,1) 100%, rgba(255,255,255,1) 100%);
						}
						h2,p{
							padding:0;
							margin:0;
						}
					
					</style>
				<div class="card-body" class >
					<div class="badge badge-info text-wrap" style="width: 4rem;padding:5px;" >
					<span >Article</span>
					</div>
					<br>	<br>
					<span class="text-left" style="font-size:22px;font-weight:800px;"><?php echo $data['atitle']?></span>
					<p class="font-weight-normal text-left" style="width:60%;margin-top:10px;"><?php echo ($data['adescription']); ?></p>
					<p class="font-weight-sm-light text-left" style="font-size: 15px;margin-top:10px;" ><?php echo date("Y-m-d",strtotime($data['adatepub']));?></p>
					<p style="margin-top:10px;"><b>Authors:</b></p>
					<p style="margin-bottom:5px;"><a href=""><?php echo $data['aauthor']?></a></p>
					<p style="margin-top:10px;font-size:13px;">Tags:</p>
					<div class="badge badge-muted  bg-dark" style="width: 3rem;padding:2px;" ><?php echo $data['atags']?></div>
				</div>
					<button class="btn btn-success btn-sm float-right lowercase" style="position:relative;bottom:250px;font-size:12px;margin-right:20px;" ><i class="fa fa-download">&nbsp;fulltext PDF</i></button>
					<button class="btn btn-outline-success btn-sm float-right" style="clear:both;position:relative;bottom:250px;margin-right:20px;"><i class="fa fa-file-text"> &nbsp;Read here</i></button>
			</div>
			<div class="modal-footer" style=" position:absolute;bottom:0;" > 
				<a href="article.php"><button class="btn btn-dark btn-sm">Back</button></a>
					<div class="dropdown">
						<button class="btn btn-light btn-sm" type="button" id="option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-ellipsis-h"></i>
						</button>
						<div class="dropdown-menu" aria-labelledby="option">
							<a class="dropdown-item" href="article_backend.php?edit=<?php echo $data['id']?>">Edit</a>
							<a class="dropdown-item" href="#<?php echo $data['id'];?>" data-toggle="modal" data-target="#delete">Delete</a>
						</div>
					</div>		
			</div>	
		</div>
		
	<br<br><br>
<?php } ?>
<div class="float-right">
<script>(function () {
	if (window.screen.width >= 630) {
		document.write('<div style="float:left; width: 300px;">\
			<div id="bg_599626510"></div><script data-cfasync="false" type="text/javascript" src="//platform.bidgear.com/ads.php?domainid=5996&sizeid=2&zoneid=6510"><\/script>\
			<div id="bg_599626511"></div><script data-cfasync="false" type="text/javascript" src="//platform.bidgear.com/ads.php?domainid=5996&sizeid=2&zoneid=6511"><\/script>\
			');
			} 
			}());</script>
	</div>