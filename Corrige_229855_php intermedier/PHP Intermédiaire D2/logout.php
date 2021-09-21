<?php require('includes/session.php'); ?>

<?php
    session_unset();
    session_destroy();
    header('location:login.php');
?>
