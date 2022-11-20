<?php
    session_start();

    $_SESSION['itensCarrinho'];

    session_destroy();

    header("Location: carrinho.php");
?>