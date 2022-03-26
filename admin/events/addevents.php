<html>
<head>

</head>

<body>


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
		header("Location: index.php");
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