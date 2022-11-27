<?php

    session_start();

    $cod = $_GET['cod'];
    
    if($_SESSION['itensCarrinho'][$cod] > 1) {
        $_SESSION['itensCarrinho'][$cod]--;
    }

    header("Location: carrinho.php");
?>