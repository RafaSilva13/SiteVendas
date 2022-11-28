<?php 
    // Inclui a classe produtos
    include 'classes/Produtos.class.php';
    
    class Carrinho{
        function Inserir($codigo, $quantidade){
            $_SESSION['itensCarrinho'][intval($codigo)] += $quantidade;
        }
    }
?>