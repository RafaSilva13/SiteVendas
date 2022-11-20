<?php
    
    session_start(); 
    
    $cod = $_GET['cod'];

    $_SESSION['itensCarrinho'][$cod]++;

    header("Location: carrinho.php");
?>