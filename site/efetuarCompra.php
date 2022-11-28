<?php

    // Inclui a classe Produtos
    include 'classes/Produtos.class.php';
   
    // Inclui a classe Pedidos
    include 'classes/Pedido.class.php';

    // Inclui a conexão
    include 'connection.php';

    session_start();

    
    if(isset($_SESSION['itensCarrinho'])){

        if(isset($_SESSION['log']) && ($_SESSION['log'] > 0)) 
        {
            $id_log = $_SESSION['log'];
        
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            $sql = "INSERT INTO pedidos (id_pedido, id_cliente, date_time_pedido)
            VALUES (null, $id_log, CURRENT_TIMESTAMP())";
            
            if ($conn->query($sql) === TRUE)
            {
                $ultimoId = mysqli_insert_id($conn);

                $pedido = new Pedidos;
                $pedido->Id_pedido = $ultimoId;
                $pedido->Id_cliente = $id_log;

                $idUltPed = $pedido->Id_pedido;

                foreach ($_SESSION['itensCarrinho'] as $produto => $quatidade) 
                {
                    if ($quatidade != 0) {
                        $cod_produto = $_SESSION['produtos'][$produto]->IdProduto;

                        $sql2 = "INSERT INTO itens_pedidos (id_itens_pedidos, id_pedido, id_produto, quantidade)
                        VALUES (null, $idUltPed, $cod_produto, $quatidade)";
                    }

                    if ($conn->query($sql2) === TRUE) 
                    {
                        header('location: esvaziarCompra.php'); 
                    } 
                }
                
            } 
            else 
            {
                header('location: carrinho.php?erro'); 
            }
            
            mysqli_close($conn);
        }
        else 
        {
            header('location: login.php?lp'); 
        }
    }
    else 
    {
        header('location: carrinho.php?cV'); 
    }
    
?>