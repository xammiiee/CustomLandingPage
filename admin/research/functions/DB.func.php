<?php
// ==========================================ACCOUNT SECTION FUNCTION===============================================//

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

// ============================================RESEARCH SECTION FUNCTION============================================//

function get_research($connect){
	//ORDER BY deadline ASC
	$sql = "SELECT * FROM tblresearch";
	$result = $connect->query($sql);
		return $result;
}

function get_research_id($connect, $id){
	//ORDER BY deadline ASC
	$sql = "SELECT * FROM tblresearch WHERE id= '$id'";
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

function get_researchrelated($connect, $fstudy, $tags){
	$sql = "SELECT * FROM tblresearch WHERE field_of_study ='$fstudy' OR tagging = '$tags'";
	$result1 = $connect->query($sql);
		return $result1;
}

function create_researchaction($connect,$title, $abstract, $main_author, $datepub, $fstudy, $pdf_file, $tags){
	$sql = "INSERT INTO tblresearch VALUES ('','$title','$abstract','$main_author','','$datepub','$fstudy','', '$pdf_file','','', $tags)";
	$result = $connect->query($sql);
	if ($result === true) {
		return 1;
	} else {
		return 0;
	}
}

function update_researchaction($connect,$title, $abstract, $main_author, $co_author, $datepub, $fstudy, $pdf_file, $tagging,$id){
	$sql = "UPDATE tblresearch SET title='$title',abstract='$abstract',main_author='$main_author',co_author='$co_author', date_publish='$datepub', field_of_study='$fstudy', tagging ='$tagging', pdf_file='$pdf_file' WHERE id=$id";
	$result = $connect->query($sql);
	if ($result === true) {
		return 1;
	} else {
		return 0;
	}
}

function delete_researchaction($connect,$id){
	$sql = "DELETE FROM tblresearch WHERE id=$id";
	$result = $connect->query($sql);
	if ($result === true) {
		return "1";
	} else {
		return "0";
	}
}

function get_research_by_title($connect,$title){
	//value from db
	$bsearch = $title;
	//save the keyword from the url
	$trim_search = trim($bsearch);

	$display_words = "";
	// seperate each of the keywords
	$keywords = explode(' ', $trim_search); 
	//loop to search 
	foreach($keywords as $word)
	{
		$sql_string = "SELECT * FROM tblresearch WHERE abstract LIKE '%" . $word . "%' OR title LIKE '%" . $word ."%' OR";
	}

 	$sql_string = substr($sql_string, 0, strlen($sql_string) - 3);
	$result = $connect->query($sql_string);
		return $result;
}

function get_journal_by_title($connect,$title){
	//value from db
	$bsearch = $title;
	//save the keyword from the url
	$trim_search = trim($bsearch);

	$display_words = "";
	// seperate each of the keywords
	$keywords = explode(' ', $trim_search); 
	//loop to search 
	foreach($keywords as $word)
	{
		$sql_string = "SELECT * FROM tbljournal WHERE description LIKE '%" . $word . "%' OR title LIKE '%" . $word ."%' OR";
	}

 	$sql_string = substr($sql_string, 0, strlen($sql_string) - 3);
	$result = $connect->query($sql_string);
		return $result;
}

function get_article_by_title($connect,$title){
	//value from db
	$bsearch = $title;
	//save the keyword from the url
	$trim_search = trim($bsearch);

	$display_words = "";
	// seperate each of the keywords
	$keywords = explode(' ', $trim_search); 
	//loop to search 
	foreach($keywords as $word)
	{
		$sql_string = "SELECT * FROM tblarticle WHERE description LIKE '%" . $word . "%' OR title LIKE '%" . $word ."%' OR";
	}

 	$sql_string = substr($sql_string, 0, strlen($sql_string) - 3);
	$result = $connect->query($sql_string);
		return $result;
}

function get_news_by_title($connect,$title){
	//value from db
	$bsearch = $title;
	//save the keyword from the url
	$trim_search = trim($bsearch);

	$display_words = "";
	// seperate each of the keywords
	$keywords = explode(' ', $trim_search); 
	//loop to search 
	foreach($keywords as $word)
	{
		$sql_string = "SELECT * FROM tblnews WHERE name LIKE '%" . $word . "%' OR mobile LIKE '%" . $word ."%' OR";
	}

 	$sql_string = substr($sql_string, 0, strlen($sql_string) - 3);
	$result = $connect->query($sql_string);
		return $result;
}
// =====================================================================
function get_author($connect){
	//ORDER BY deadline ASC
	$sql = "SELECT * FROM tblauthor";
	$result = $connect->query($sql);
		return $result;
}

function get_author_inside_research($connect,$m_author,$c_author){
	//ORDER BY deadline ASC
	$sql = "SELECT * FROM tblresearch WHERE main_author LIKE '%".$m_author."%' OR 'co_authors' LIKE '%".$c_author."%' ";
	$result = $connect->query($sql);
		return $result;
}

function get_author_with_paper($connect, $a_id){
	//ORDER BY deadline ASC
	$sql = "SELECT * FROM tblauthorredirect WHERE author_id= '$a_id' ORDER BY id ASC";
	$result = $connect->query($sql);
		return $result;
}

function create_researchredirecting($connect,$a_id,$a_name, $r_id, $r_title){
	//ORDER BY deadline ASC
	$sql = "INSERT INTO tblauthorredirect (id, author_id, author, paper_id, title, date) VALUES ('','$a_id','$a_name','$r_id','$r_title','')";
	$result = $connect->query($sql);
		return $result;
}

// ================================================
// Journal
function get_journalaction($connect,$id){
	$sql = "SELECT * FROM tbljournal WHERE id='$id'";
	$result = $connect->query($sql);
	if ($result->num_rows > 0) {
		return $result->fetch_assoc();
	} else {
		return "0";
	}
}

function get_journalrelated($connect, $fstudy, $tags){
	$sql = "SELECT * FROM tbljournal WHERE field_of_study ='$fstudy' OR tagging = '$tags'";
	$result1 = $connect->query($sql);
		return $result1;
}

// Article
function get_articleaction($connect,$id){
	$sql = "SELECT * FROM tblarticle WHERE id='$id'";
	$result = $connect->query($sql);
	if ($result->num_rows > 0) {
		return $result->fetch_assoc();
	} else {
		return "0";
	}
}

function get_articlerelated($connect, $fstudy, $tags){
	$sql = "SELECT * FROM tblarticle WHERE field_of_study ='$fstudy' OR tagging = '$tags'";
	$result1 = $connect->query($sql);
		return $result1;
}

// News
function get_newsaction($connect,$id){
	$sql = "SELECT * FROM tblnews WHERE id='$id'";
	$result = $connect->query($sql);
	if ($result->num_rows > 0) {
		return $result->fetch_assoc();
	} else {
		return "0";
	}
}

function get_newsrelated($connect, $fstudy, $tags){
	$sql = "SELECT * FROM tblnews WHERE field_of_study ='$fstudy' OR tagging = '$tags'";
	$result1 = $connect->query($sql);
		return $result1;
}
?>


