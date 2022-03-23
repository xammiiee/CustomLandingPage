<?php
    $con = mysqli_connect("localhost","root","","research_portal");
    
    $query ="SELECT * FROM tblauthor";

    $result = $con->query($query);
    $query = mysqli_query($con, $query);
    $result_count = mysqli_num_rows($query);

?>