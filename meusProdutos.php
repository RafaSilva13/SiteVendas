<?php
    // Importa cabeçalho Bootstrap
    include 'bootstrap/header.php';

    // Inclui a classe
    include 'classes/Produtos.class.php';

    // Inicia a sessão
    session_start();

?>


<div class="container">
    <div class="row">
        <h2 class="tituloMP">Meus Pedidos</h2>
    </div>
</div>

<div class="container containerMeusProdutos">

    <div class="row">
        
        <div class="col-lg-12 descricaoMP">

            <?php if(isset($_SESSION['itensCarrinho'])) { 
                foreach($_SESSION['itensCarrinho'] as $prod => $itens) { 
            ?>
            
            <div class="card" style="padding-top: 10px; color: black;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-1">
                            <img class="imagemcarrinho" src="<?php echo $_SESSION['produtos'][$prod]->CaminhoImagem;?>">
                        </div>
                        
                        <div class="col-lg-7" style="margin-left: 35px;">
                            <p>
                                <b><?php echo $_SESSION['produtos'][$prod]->NomeProduto;?></b>
                                <span style="margin-top: 80px; margin-left: 150px;">Código do pedido: </span>
                                <br>
                                <span>Valor unidade: R$ <?php echo number_format($_SESSION['produtos'][$prod]->ValorDesconto,'2',',','.');?></span>
                                <span style="margin-top: 10px; margin-left: 107px;">Total Produtos: R$ <?php echo number_format($_SESSION['produtos'][$prod]->ValorDesconto * $itens,'2',',','.');?></span>
                                
                            </p>
                        </div>

                        <div class="col-lg-3 aling-right" style="margin-top: -8px; margin-left: 0%;">
                            <center>
                                <span><b>Quantidade:</b> <?php echo $itens?></span>
                                <br>
                                <button class="btn btn-danger" style="margin-top: 5px;" id="btnModal<?php echo $prod?>">Cancelar compra</button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            
            <hr>

            <script>
                $(document).ready(function(){
                    $("#btnModal<?php echo $prod?>").click(function(){
                    apagarItem = <?php echo $prod?>;
                        $('#modal').modal('show');
                    });
                });

            </script>

            <?php } 
            } else if ((!isset($_SESSION['itensCarrinho'])) || ((isset($_SESSION['itensCarrinho'])) && ($itens === 0))) {
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