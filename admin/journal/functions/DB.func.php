<?php

//Insert data into any table
function add_data($query,$connect,$message){
	$result = $connect->query($query);
	if ($result === true) {
		$messagetype = "1";
	} else {
		$messagetype = "0";
	}
	$message1 = $connect->error;
	message($message,$messagetype);
}

//Check if data and return result
function select_data($query,$connect){
	$result = $connect->query($query);
	return $result;
}

//Update data into a table
function update_data($query,$connect,$message){
	$result = $connect->query($query);
	if ($result->num_rows > 0) {
		return $result;
	}
	if ($result === true) {
		$messagetype = "1";
	} else {
		$messagetype = "0";
	}
	$message1 = $connect->error;
	message($message,$message1,$messagetype);
}

//Delete data and return message
function delete_data($query,$connect,$message){
	$result = $connect->query($query);
	if ($result->num_rows > 0) {
		return $result;
	}
	if ($result === true) {
		$messagetype = "1";
	} else {
		$messagetype = "0";
	}
	$message1 = $connect->error;
	message($message,$message1,$messagetype);
}


function get_users($connect){
	$sql = "SELECT * FROM tblaccount ORDER BY id ASC";
	$result = $connect->query($sql);
	if ($result->num_rows > 0) {
		return $result;
	}
}

function get_user_data($connect,$id){
	$sql = "SELECT * FROM tblaccount WHERE id=$id";
	$result = $connect->query($sql);
	if ($result->num_rows > 0) {
		return $result->fetch_assoc();
	}
}



function get_roles($connect){
	$sql = "SELECT * FROM roles";
	$result = $connect->query($sql);
	if ($result->num_rows > 0) {
		return $result;
	}
}

function get_role_name($connect,$id){
	$sql = "SELECT * FROM roles WHERE id=$id";
	$rslt = $connect->query($sql);
	$result = $rslt->fetch_assoc();
	if ($rslt->num_rows > 0) {
		return $result['name'];
	} else {
		return "No role found";
	}
}

function get_projects($connect){
	//ORDER BY deadline ASC
	$sql = "SELECT * FROM projects WHERE status='' OR status=0 OR status=1";
	$result = $connect->query($sql);
		return $result;
}

function get_project($connect,$id){
	$sql = "SELECT * FROM projects WHERE id='$id'";
	$result = $connect->query($sql);
	if ($result->num_rows > 0) {
		return $result->fetch_assoc();
	} else {
		return "0";
	}
}

function create_project($connect,$author,$title,$creator,$datepub,$created){

	$sql = "INSERT INTO projects VALUES ('','$author','$title','$creator','$datepub','$created',0)";
	$result = $connect->query($sql);
	if ($result === true) {
		return 1;
	} else {
		return 0;
	}
}

function update_project($connect,$author,$title,$datepub,$id){

	$sql = "UPDATE projects SET name='$author',title='$title',datepub='$datepub' WHERE id=$id";
	$result = $connect->query($sql);
	if ($result === true) {
		return 1;
	} else {
		return 0;
	}
}

function delete_project($connect,$id){
	$sql = "DELETE FROM projects WHERE id=$id";
	$result = $connect->query($sql);
	if ($result === true) {
		return "1";
	} else {
		return "0";
	}
}

function get_project_by_id($connect,$id){
	$sql = "SELECT * FROM projects WHERE id=$id";
	$result = $connect->query($sql);
	if ($result->num_rows > 0) {
		return $result->fetch_assoc();
	} else {
		return "0";
	}
}


