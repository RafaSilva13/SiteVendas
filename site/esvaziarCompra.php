<?php
    session_start();

    $_SESSION['itensCarrinho'];

    unset( $_SESSION['itensCarrinho']);

    header('location: carrinho.php?pE'); 
?>