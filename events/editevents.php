<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$event_name=$_POST['event_name'];
	$event_description=$_POST['event_description'];
	$date=$_POST['date'];
	$time = $_POST['time'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE tblevents SET event_name='$event_name',event_description='$event_description',$date='$date' WHERE id=$id");

	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM tblevents WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$event_name = $user_data['event_name'];
	$event_description = $user_data['event_description'];
	$date = $user_data['date'];
	$time = $user_data['time'];
}
?>
<html>
<head>	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<title>Edit User Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="editevents.php">
		<table>
			<tr> 
				<td>event_name</td>
				<td><input type="text" name="name" value=<?php echo $event_name;?>></td>
			</tr>
			<tr> 
				<td>event_description</td>
				<td><input type="text" name="mobile" value=<?php echo $event_description;?>></td>
			</tr>
			<tr> 
				<td>DATE</td>
				<td>
				<div class='input-group date' id='datetimepicker1'>
                     <input type='text' class="form-control"name=email value=<?php echo $date;?>/>
                     <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                     </span>
                  </div>

				</td>
			</tr>
			<tr> 
				<td>TIME</td>
				<td>
				<div class='input-group date' id='datetimepicker1'>
                     <input type='text' class="form-control"name=email value=<?php echo $time;?>/>
                     <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                     </span>
                  </div>

				</td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

<script>
  $(function () {
    $('#datetimepicker1').datetimepicker();
 });
</script>