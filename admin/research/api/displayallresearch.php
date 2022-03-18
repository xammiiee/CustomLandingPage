<?php
    $con = mysqli_connect("localhost","root","","research_portal");
    
    $query ="SELECT * FROM tblresearch";
    $result = $con->query($query);
?>