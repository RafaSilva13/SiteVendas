<?php       

    // Inclui cabeçalho
    include 'bootstrap/header.php';
    
    // Inclui a conexão
    include 'connection.php';

    // Inclui a classe carrinho
    include 'classes/Produtos.class.php';

    session_start();

    if(isset($_SESSION['log'])) {
        $cod_cliente = $_SESSION['log'];
    }
?>

<div class="container">
    <div class="row">
        <h2 class="tituloMP">Meus Pedidos</h2>
    </div>
</div>

<div class="container containerMeusProdutos">

    <div class="row">
        
        <div class="col-lg-12 descricaoMP">

            <?php 

            if(isset($_SESSION['log']) && ($_SESSION['log'] > 0)) {
                $n = 0;
                
                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                
                $sql = "SELECT * FROM pedidos WHERE id_cliente = $cod_cliente";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {  
                        
                        $n ++;

                        $idPedido = $row['id_pedido'];

                        ?>
                        
                        <p class="textoPedido"> 
                            <span class="textoPed">Pedido <?php echo $n?></span>
                            <span class="textoCodPedido">Código do pedido: <?php echo $idPedido;?> </span>
                        </p>

                        <?php

                        $sql2 = "SELECT * FROM itens_pedidos WHERE id_pedido = $idPedido";
                        $result2 = mysqli_query($conn, $sql2);

                        if (mysqli_num_rows($result2) > 0) {
                            while($row2 = mysqli_fetch_assoc($result2)) {

                            $idProduto = $row2['id_produto'];
                            
                            foreach ($_SESSION['produtos'] as $o => $value) { 

                                if ($value->IdProduto == $idProduto)
                                { 
                                ?>
            
            <div class="card" style="padding-top: 5px; margin-bottom: 25px; padding-bottom: 5px; color: black;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-1">
                            <img class="imagemcarrinho" src="<?php echo $value->CaminhoImagem;?>">
                        </div>
                        
                        <div class="col-lg-7" style="margin-left: 35px;">
                            <p>
                                <b><?php echo $value->NomeProduto;?></b>
                                <span style="margin-top: 10px; margin-left: 14rem;">Total Produtos: R$ <?php echo number_format($value->ValorProduto * $row2['quantidade'],'2',',','.');?></span>
                                <br>
                                <span>Valor unidade: R$ <?php echo number_format($value->ValorProduto,'2',',','.');?></span>
                                
                            </p>
                        </div>

                        <div class="col-lg-3 aling-right" style="margin-top: -8px; margin-left: 3rem;">
                            <center>
                                <span><b>Quantidade:</b> <?php echo $row2['quantidade'];?></span>
                                <br>
                                <button class="btn btn-outline-danger" style="margin-top: 5px;" id="btnModal<?php echo $o;?>">Cancelar compra</button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- <script>
                $(document).ready(function(){
                    $("#btnModal<?php //echo $prod?>").click(function(){
                    apagarItem = <?php // echo $prod?>;
                        $('#modal').modal('show');
                    });
                });

            </script> -->

            <hr>

            <?php 
                                }
                            }
                        }
                    }
                }
            } 
            else 
            {
            ?>
                <p class="mensagemVazio">Nenhum pedido efeituado</p>
            <?php    
            }
            mysqli_close($conn);
            }
            else 
            {
            ?>
                <p class="mensagemVazio">Nenhum pedido efeituado</p>
            <?php    
            }
            ?>
        </div>
    </div>
</div>

<?php
    // Importa rodapé Bootstrap
    include 'bootstrap/footer.php';
?>