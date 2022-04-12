<?php
include_once "../inc/header1.php";
if (empty($_SESSION['id'])) {

}
?>

<!--View Redearch-->
<?php 
//updating of Research
if (isset($_POST['id'])) {
	$result = update_account($connect,$_POST['name'],$_POST['email'],$_POST['pass'],$_POST['ucategory'],$_POST['au_member'],$_POST['id']);
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

// activating of account 
 if (isset($_POST['activate'])) {
	$result = activate_action($connect,$_POST['id']);
	if ($result == "1") {
		echo'<div style="position:relative;top: 100px;"';
		message("Account activated successfully!",1);
	}
}

// deactivating of account
if (isset($_POST['deactivate'])) {
	$result = deactivate_action($connect,$_POST['id']);
	if ($result == "1") {
		echo'<div style="position:relative;top: 100px;"';
		message("Account deactivated successfully!",1);
	}
}

if (isset($_POST['subscribe'])) {
	$result = subscribe_action($connect,$_POST['id']);
	if ($result == "1") {
		echo'<div style="position:relative;top: 100px;"';
		message("Account Subscribed successfully!",1);
	}
}

if (isset($_POST['unsubscribe'])) {
	$result = unsubscribe_action($connect,$_POST['id']);
	if ($result == "1") {
		echo'<div style="position:relative;top: 100px;"';
		message("Account Unsubscribed successfully!",1);
	}
}

// editing of Research
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
						<h5> <a href="/CustomLandingPage/admin/account/account.php"><button class="btn btn-dark btn-sm">← Back to project</button></a> </h5>
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
							<input type="text" class="form-control" id="name" name="name" value="<?php echo $data['name'];?>">
							<div class="form-group">
								<label for="email">Email</label>
								<input class="form-control" id="email" name="email" value="<?php echo $data['email'];?>">
							</div>
							<div class="form-group">
								<label for="pass">Password</label>
								<input type="password" class="form-control" id="pass" name="pass">
							</div>
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

						<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $data['id'];?>">

						<div class="form-group" align="right">
							<button class="btn btn-primary btn-sm">Save Project</button> <a class="btn btn-dark btn-sm" href="../account.php">Cancel</a>
						</div>
					</td>

				</tr>
			</tbody>
		</form>
		</table>
		</div>
		</div>

<?php } ?>