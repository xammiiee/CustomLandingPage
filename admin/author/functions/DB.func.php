<?php
// ACCOUNT SECTION FUNCTION
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


// getting roles of user
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

// ============================================JOURNAL SECTION FUNCTION============================================//

function get_research($connect){
	//ORDER BY deadline ASC
	$sql = "SELECT * FROM tblresearch";
	$result = $connect->query($sql);
		return $result;
}

function get_researchaction($connect,$id){
	$sql = "SELECT * FROM tblresearch WHERE id='$id'";
	$result = $connect->query($sql);
	if ($result->num_rows > 0) {
		return $result->fetch_assoc();
	} else {
		return "0";
	}
}

// edit author's profile
function get_author($connect){
	$sql = "SELECT * FROM tblauthor";
	$result = $connect->query($sql);
		return $result;
}
// viewing author's profile
function get_authors($connect,$id){
	$sql = "SELECT * FROM tblauthor WHERE id='$id'";
	$result = $connect->query($sql);
	if ($result->num_rows > 0) {
		return $result->fetch_assoc();
	} else {
		return "0";
	}
}

function create_authoraction($connect,$name, $email, $profession,$description,$fstudy,$created,$filelocation){
	$sql = "INSERT INTO tblauthor VALUES ('','$name','$email','$profession','$description','$fstudy','$created','$filelocation')";
	$result = $connect->query($sql);
	if ($result === true) {
		return 1;
	} else {
		return 0;
	}
}

function update_authoraction($connect,$name,$profession,$fstudy,$description,$id){
	$sql = "UPDATE tblauthor SET name='$name',profession='$profession',fstudy='$fstudy',description='$description' WHERE id=$id";
	$result = $connect->query($sql);
	if ($result === true) {
		return 1;
	} else {
		return 0;
	}
}

function delete_authoraction($connect,$id){
	$sql = "DELETE FROM tblauthor WHERE id=$id";
	$result = $connect->query($sql);
	if ($result === true) {
		return "1";
	} else {
		return "0";
	}
}

function get_research_by_id($connect,$id){
	$sql = "SELECT * FROM research WHERE id=$id";
	$result = $connect->query($sql);
	if ($result->num_rows > 0) {
		return $result->fetch_assoc();
	} else {
		return "0";
	}
}




?>


