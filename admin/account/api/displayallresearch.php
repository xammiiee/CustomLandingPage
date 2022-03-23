<?php
    $con = mysqli_connect("localhost","root","","research_portal");
    
    $query ="SELECT * FROM tblaccount";

    $result = $con->query($query);
    $query = mysqli_query($con, $query);
    $result_count = mysqli_num_rows($query);

?>

<?php
    $con = mysqli_connect("localhost","root","","research_portal");
    
    $query ="SELECT * FROM tblaccount WHERE status = 'Active'";

    $activeresult = $con->query($query);
    $query = mysqli_query($con, $query);
    $activeresult_count = mysqli_num_rows($query);
?>

<?php
    $con = mysqli_connect("localhost","root","","research_portal");
    
    $query ="SELECT * FROM tblaccount WHERE status = 'Inactive'";

    $inactiveresult = $con->query($query);
    $query = mysqli_query($con, $query);
    $inactiveresult_count = mysqli_num_rows($query);
?>