<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<title>Add Events</title>
</head>

<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>


	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
	<form action="addevents.php" method="post" name="form1">
		<table >
			<tr> 
				<td>Event Name</td>
				<td><input type="text" name="event_name"></td>
			</tr>
			<tr> 
				<td>Description</td>
				<td><input type="text" name="event_description"></td>
			</tr>
			<tr> 
				<td>Dated</td>
				<td>
				<div class='input-group date' id='datetimepicker1'>
                     <input type='text' class="form-control"name=date />
                     <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                     </span>
                  </div>
				</td>
			</tr>
            <tr> 
				<td>time</td>
				<td>
				<div class='input-group date' id=''>
                     <input type='time' class="form-control"name=time />
                     <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                     </span>
                  </div>
				</td>
			</tr>

			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


	<?php
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$event_name = $_POST['event_name'];
		$event_description = $_POST['event_description'];
		$date = $_POST['date'];
        $time = $_POST['time'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO tblevents(event_name,event_description,date,time) VALUES('$event_name','$event_description','$date','$time')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>

<script>
  $(function () {
    $('#datetimepicker1').datetimepicker();
 });
</script>

<script>
  $(function () {
    $('#datetimepicker2').datetimepicker();
 });
</script>