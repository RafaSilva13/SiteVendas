<?php
    session_start();

    $_SESSION["log"] = 0;
    unset($_SESSION['usuario']);

    header('location: index.php?f');
?>