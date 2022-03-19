<?php
$con = mysqli_connect("localhost","root","","research_portal");

if( isset( $_FILES['pdfFile'] ) ) {
	if ($_FILES['pdfFile']['type'] == "application/pdf") {
		$source_file = $_FILES['pdfFile']['tmp_name'];
		$dest_file = "../uploads/".$_FILES['pdfFile']['name'];
		if (file_exists($dest_file)) {
			print "The PDF file name already exists!!";
		}
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error!!");
			if($_FILES['pdfFile']['error'] == 0) {
				print "<b><u>Details : </u></b><br/>";
        ?>
        <input hidden type="text" name="pdffile" id="pdffile" class="form-control" value="<?php echo "../papers/uploads/".$_FILES['pdfFile']['name']?> " >
        <?php
        echo "File Name : ".$_FILES['pdfFile']['name']."<br.>"."<br/>";
				echo "File location : ../uploads/".$_FILES['pdfFile']['name']."<br/>";
			}
		}
	}
	else {
		if ( $_FILES['pdfFile']['type'] != "application/pdf") {
			print "Error occured while uploading file : ".$_FILES['pdfFile']['name']."<br/>";
			print "Invalid  file extension, should be pdf !!"."<br/>";
			print "Error Code : ".$_FILES['pdfFile']['error']."<br/>";
		}
	}
}
?>