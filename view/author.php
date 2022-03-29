<?php
include_once "../inc/header1.php";
if (empty($_SESSION['id'])) 
{
	// include""
	// header("Location: ../../../login/login.php");
}


if (!empty($_GET['author'])) 
{
	// change function to the designated function of your assign management
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
					<h2 class="text-left" style="margin-top:10px; font-family:'Lucida Sans';" ><b>Author: <u style="color:dodgerblue;"><i><?php echo $_GET['author']?></i></u></b></h2>
				</div><br><hr>
				<div class="card-group">
				<?php
					$result =  get_author_inside_research($connect,$_GET['author'],$_GET['author']);
					if ($result->num_rows>0) 
					{
						while ($data = mysqli_fetch_array($result))
						{?>
							<div class="col-md-3 col-sm-5">
								<div class="card">
									<div class="card-body">
										<!-- change function to the designated function ofyouassign management -->
										<a href="action.php?id=<?php echo $data['id'];?>"><p class="card-title"><?php echo $data['title'];?></p></a>
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
		</div>
	</div>
	</div>