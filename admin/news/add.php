<html>
<head>

	<title>Add News</title>
</head>

<body>
	<a href="index2.php">Go to Home</a>
	<br/><br/>

	
	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO tblnews(name,email,mobile) VALUES('$name','$email','$mobile')");
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

