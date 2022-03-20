<?php
    // $con = mysqli_connect("localhost","root","","research_portal");
    include ("/xampp/htdocs/CustomLandingPage/config/db.php");
    // include ("/xampp/htdocs/CustomLandingPage/uploadfiles");

// THE IDEA OF SAVING OF THE LIST OF AUTHOR IS BY SAVING THE RESEARCH ID TO THE DATA TABLE OF THE AUTHORS.


    if(isset($_POST['btnsubmit']))
{
    //check if empty and post method
    $has_title = isset($_POST['title']) && $_POST['title']!="";
    $has_abs = isset($_POST['abstract']) && $_POST['abstract']!="";
    $has_dpub = isset($_POST['dpub']) && $_POST['dpub']!="";
    $has_fstudy = isset($_POST['fstudy']) && $_POST['fstudy']!="";

    // INITIALIZE THE ID
    $id = date("YmdHis");
    $date1 = date("Y/m/d");
    $time1 = date("G:m:s");


    // GET VALUE OF MAIN AUTHOR AND CO AUTHORS

    // VERIFY IF THE METHODS ARE POST
    if ($has_title && $has_abs && $has_dpub && $has_fstudy)
    {
        //value from db
        $title = $_POST['title'];
        $abs = $_POST['abstract'];
        $dpub =$_POST['dpub'];
        $fstudy = $_POST['fstudy'];
        $m_author = $_POST['main_author'];
        $c_author = $_POST['co_author'];
        $fs = $_POST['fstudy'];
        $tags= $_POST['tags'];

        // UPLOADING PDF FILE
        if( isset( $_FILES['pdfFile'] ) ) {
            if ($_FILES['pdfFile']['type'] == "application/pdf") {
                $source_file = $_FILES['pdfFile']['tmp_name'];
                $dest_file = "/xampp/htdocs/CustomLandingPage/uploadfiles/".$_FILES['pdfFile']['name'];
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
                        echo "File location : /xampp/htdocs/CustomLandingPage/uploadfiles".$_FILES['pdfFile']['name']."<br/>";
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

        // UPLOAD TO TBL-RESEARCH
            $pdf_file ="../uploads/".$_FILES['pdfFile']['name']."";
            $result = mysqli_query($con, "INSERT INTO tblresearch (`id`, `title`, `abstract`, `main_author`, `co_authors`, `date_publish`, `field_of_study`, `department`, `pdf_file`, `views`, `cites`, `tagging`) VALUES  ('$id', '$title', '$abs', '','','$dpub','$fstudy','','$pdf_file','','','$tags')");
            if($result > 0)
            {?>
                <div class="alert alert-success" role="alert">
                Research paper <?php $id ?> successfully added!
                </div>
                <?php
                // LOGS
                mysqli_query($con, "INSERT INTO tbllogs (`date`, `time`, `action`, `management`, `account`) VALUES ('$date1','$time1', 'Uploaded New Book $title with ','CMS by','Admin')");
                header("Location: ##");
            }
            else
                {?>
                <div class="alert alert-danger" role="alert">
                Failed to Upload!
                </div>
                <?php
            }
            // UPLOAD TO TBL-AUTHORS
            $result1 = mysqli_query($con, "UPDATE tblauthor set pdf_file WHERE id = ".$id."");
            if($result1 > 0 )
            {
                // 
            }
    } 
    else
    {?>
        <div class="alert alert-danger" role="alert">
        Fill in all the fields!
        </div>
    <?php
    }

    // ADDING TO THE AUTHOR TABLE

}
?>