<?php
include_once "../inc/header1.php";
if (empty($_SESSION['id'])) 
{
	// include""
	// header("Location: ../../../login/login.php");
}


if (!empty($_GET['id'])) 
{
	// change function to the designated function of your assign management
	$data = get_author_with_paper($connect,$_GET['id']);
	// include "";
	
	?>
	<br><br><br><br>
	<!--View Research-->
	<div class="container">
	<div class="card">
		<div class="card-body">
			<div style="line-height: 20px;">
				<style>
					h2,p
					{
						padding:0;
						margin:0;
					}
				</style>
				<div class="badge badge-info text-wrap" style="width: 8rem; padding:5px;" >
				<!-- change to.. -->
				<span >Author's Papers</span>
				</div>
				<div>
					<h2 class="text-left" style="margin-top:10px; font-family:'Lucida Sans';" ><b><?php echo $data['name']?>b></h2>
					<ul class="list-inline" style="font-size: small;">
						<li class="list-inline-item"><a href=""><u><?php echo $data['main_author']?></u></a></li>
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

	<br><br><br>
	<div class="container">
		<h2>Related Studies</h2><br>
			<!-- <div class="row"> -->
		<div class="card-group">
		<?php
			$result1 = get_researchrelated($connect,$fstudy,$tags);
			if ($result1->num_rows>0) 
			{
				while ($data1 = mysqli_fetch_array($result1))
				{?>
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
	}?>
		</div>
	</div>