<?php
    session_start();

    $_SESSION["log"] = 0;

    header('location: index.php');
?>