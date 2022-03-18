<?php

    // include "../../../config/db.php";
    $con = mysqli_connect("localhost","root","","research_portal");

    $query ="SELECT fullname FROM tblauthor ORDER BY fullname ASC";

    $result = $con->query($query);
?>