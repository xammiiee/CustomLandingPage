<?php
session_start();
session_destroy();
if (empty($_SESSION['id'])) {
    header("Location: ../login/login.php");
}
?>