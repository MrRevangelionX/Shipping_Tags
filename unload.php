<?php 
    session_start();
    $_SESSION['$token'] = "";
    session_destroy();
    header('location: ship_tags.php');
?>