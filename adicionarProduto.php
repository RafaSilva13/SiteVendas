<?php
    // Inclui a classe carrinho
    include 'classes/Carrinho.class.php';

    // Inicio da sessão;
    session_start();

    $cod = $_GET['id'];
    
    $item = new Carrinho;
    $item->Inserir($cod, 1);

    // Retorna para pagina inicial
    header("Location: index.php?include=true");
?>