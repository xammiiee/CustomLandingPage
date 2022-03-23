<?php
$con = mysqli_connect("localhost","root","","research_portal");

// DELETE =============================================================================
if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $sql = "DELETE FROM tblaccount WHERE id = '$id'";
    $result = mysqli_query($con,$sql);
    if($result > 0) 
    {
        echo "<script>alert('Account Deleted!');</script>";
        header("Location: ../account.php");
    }
}

// VIEW ===============================================================================
if(isset($_GET['view']))
{
    // $status = $_GET[''];
    $id =$_GET['view'];

    $sql = "SELECT * FROM tblaccount WHERE id = '$id'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count == 1)
    {?>
        <center><div style="height: 900px; width: 80%;">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Research Viewer</h5>
            <a href="../admin/admin_dashboard.php"><button type="button" class="btn-close"></button></a>
            </div>
            <div class="body">
                <?php $pdf_file = $row['pdf_file'];?>
                <center><iframe src="<?php echo "$pdf_file"?>" width="80%" height="900px">
                </iframe></center>
            </div>
        </div></center>
        <?php
    }
}

// EDIT ==================================================================================

if(isset($_GET['edit']))
    {
        $id = $_GET['edit'];

        $sql = "UPDATE tblaccount set  WHERE id = '$id'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        // check email if exist
            if($count == 1) 
            {
                $fname = $row['fname'];
                $lname = $row['lname'];
                $email = $row['email'];
                $pass= $row['pass'];
                $categ = $row['ucategory'];
                
                echo "<script>alert('Account Edited.');</script>";
            }
    }
?>