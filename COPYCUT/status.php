<?php
include "inc/config.php";

//Project Management
if (isset($_GET['project'])) {
	if (isset($_GET['finish'])) {
		$sql = "UPDATE projects SET status=2 WHERE id=".$_GET['finish'];
		$result = $connect->query($sql);
		if ($result === true) {
			echo 1;
		} else {
			echo 0;
		}
	}

	if (isset($_GET['restart'])) {
		$sql = "UPDATE projects SET status=0 WHERE id=".$_GET['restart'];
		$result = $connect->query($sql);
		if ($result === true) {
			echo 1;
		} else {
			echo 0;
		}
	}

	if (isset($_GET['start'])) {
		$sql = "UPDATE projects SET status=1 WHERE id=".$_GET['start'];
		$result = $connect->query($sql);
		if ($result === true) {
			echo 1;
		} else {
			echo 0;
		}
	}

	if (isset($_GET['delete'])) {
		$sql = "DELETE FROM projects WHERE id=".$_GET['delete'];
		$result = $connect->query($sql);
		if ($result === true) {
			header("location: ./".$_GET['ref'].".php");
		} else {
			echo 0;
		}
	}
}



//User Data
if (isset($_GET['user'])) {
	if (isset($_GET['rate'])) {
		$sql = "SELECT rate FROM users WHERE id=".$_GET['rate'];
		$result = $connect->query($sql);
		if ($result->num_rows>0) {
			echo $result->fetch_assoc()['rate'];
		} else {
			echo 0;
		}
	}
}
?>