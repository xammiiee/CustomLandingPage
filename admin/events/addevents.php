<html>
<head>
<?php
 ?>
</head>

<body>

	<?php

	// session_start();
	// Check If form submitted, insert form data into users table.
	include_once("config.php");
	if(isset($_POST['Submit'])) {
		$event_name = $_POST['event_name'];
		$event_description = $_POST['event_description'];
		$date = $_POST['date'];
        $time = $_POST['time'];
		
		// include database connection file
		
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO tblevents(event_name,event_description,date,time) VALUES('$event_name','$event_description','$date','$time')");
		
	
		if($result)
		{
			$_SESSION['status']= "Data Inserted Successfully";
			header('Location: index.php');
		}
		else
		{
			echo "Something went wrong";
		}
	
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
  
</script>