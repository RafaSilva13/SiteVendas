<?php
    
    // Incluindo Classe Estoque
    include 'classes/Produtos.class.php';

    // Inicio da sessão;
    session_start();
    
    // Pega o id do item pela URL 
    $id = $_GET['id'];

    
    if($id != "") { 
        // Limpa a posição do vetor desejada
        unset($_SESSION['itensCarrinho'][$id]);

        // Reorganiza as posições do vetor
        array_values($_SESSION['itensCarrinho']);

        // Retorna para pagina inicial
        header("Location: carrinho.php");
    }

?>