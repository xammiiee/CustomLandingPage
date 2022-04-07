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


// getting roles of user
function get_roles($connect){
	$sql = "SELECT * FROM roles";
	$result = $connect->query($sql);
	if ($result->num_rows > 0) {
		return $result;
	}
}

function get_role_name($connect,$id){
	$sql = "SELECT * FROM roles  WHERE id=$id";
	$rslt = $connect->query($sql);
	$result = $rslt->fetch_assoc();
	if ($rslt->num_rows > 0) {
		return $result['name'];
	} else {
		return "No role found";
	}
}


// get author new update 27/03/2022 - 19:56
function get_authors($connect){
	$sql = "SELECT * FROM tblauthor ORDER BY id ASC";
	$result = $connect->query($sql);
	if ($result->num_rows > 0) {
		return $result;
	}
}

function get_author($connect){
	$sql = "SELECT * FROM tblauthor";
	$result = $connect->query($sql);
		return $result;
}

//journal

function get_journal($connect){
	//ORDER BY deadline ASC
	$sql = "SELECT * FROM tbljournal";
	$result = $connect->query($sql);
		return $result;
}

function get_journalaction($connect,$id){
	$sql = "SELECT * FROM tbljournal WHERE id='$id'";
	$result = $connect->query($sql);
	if ($result->num_rows > 0) {
		return $result->fetch_assoc();
	} else {
		return "0";
	}
}

function create_journalaction($connect,$title,$description,$author,$datepub,$creator,$created,$filelocation,$tagging){
	
	$sql = "INSERT INTO tbljournal VALUES ('','$title','$description','$author','$creator','$datepub','$created','','$filelocation','$tagging')";
	$result = $connect->query($sql);
	if ($result === true) {
		return 1;
	} else {
		return 0;
	}
}

function update_journalaction($connect,$author,$title,$description,$datepub,$id){

	$sql = "UPDATE tbljournal SET author='$author',title='$title',description='$description',date_pub='$datepub' WHERE id=$id";
	$result = $connect->query($sql);
	if ($result === true) {
		return 1;
	} else {
		return 0;
	}
}

function delete_journalaction($connect,$id){
	$sql = "DELETE FROM tbljournal WHERE id=$id";
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

//article

function get_articles($connect){
	//ORDER BY deadline ASC
	$sql = "SELECT * FROM tblarticle";
	$result = $connect->query($sql);
		return $result;
}

function get_article($connect,$id){
	$sql = "SELECT * FROM tblarticle WHERE id='$id'";
	$result = $connect->query($sql);
	if ($result->num_rows > 0) {
		return $result->fetch_assoc();
	} else {
		return "0";
	}
}


function create_article($connect,$a_title,$a_description,$a_author,$a_creator,$a_datepub,$a_created,$a_filelocation,$a_tagging){

	$sql = "INSERT INTO tblarticle VALUES ('','$a_title','$a_description','$a_author','$a_creator','$a_datepub','$a_created','$a_filelocation','$a_tagging','0')";
	$result = $connect->query($sql);
	if ($result === true) {
		return 1;
	} else {
		return 0;
	}
}

function update_article($connect,$a_title,$a_description,$a_author,$a_datepub,$id){

	$sql = "UPDATE tblarticle SET a_title='$a_title',a_description='$a_description',a_author='$a_author',a_datepub='$a_datepub' WHERE id=$id";
	$result = $connect->query($sql);
	if ($result === true) {
		return 1;
	} else {
		return 0;
	}
}

function delete_article($connect,$id){
	$sql = "DELETE FROM tblarticle WHERE id=$id";
	$result = $connect->query($sql);
	if ($result === true) {
		return "1";
	} else {
		return "0";
	}
}

function get_article_by_id($connect,$id){
	$sql = "SELECT * FROM tblarticle WHERE id=$id";
	$result = $connect->query($sql);
	if ($result->num_rows > 0) {
		return $result->fetch_assoc();
	} else {
		return "0";
	}
}

