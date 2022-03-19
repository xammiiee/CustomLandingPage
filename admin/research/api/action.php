<?php
$con = mysqli_connect("localhost","root","","research_portal");
if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $sql = "DELETE FROM tblresearch WHERE id = '$id'";
    $result = mysqli_query($con,$sql);
    if($result > 0) 
    {
        echo "<script>alert('Research Deleted!');</script>";
        header("Location: ../research.php");
    }
}
?>