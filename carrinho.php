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
        <h2 class="tituloCarrinho">Carrinho de Compras</h2>
    </div>
</div>

<div class="container containerCarrinho">


    <div class="row">
        
        <div class="col-lg-9 descricao">

            <?php if(isset($_SESSION['itensCarrinho'])) { 
                foreach($_SESSION['itensCarrinho'] as $prod => $itens) { ?>
                
                <div class="card" style="padding: 0px; color: black;">
                    <div class="card-body">
                        <div class="row" style="margin-right: -160px;">
                            <div class="col-lg-1">
                                <img class="imagemcarrinho" src="<?php echo $_SESSION['produtos'][$prod]->CaminhoImagem;?>">
                            </div>
                            
                            <div class="col-lg-6" style="margin-left: 35px;">
                                <p>
                                    <b><?php echo $_SESSION['produtos'][$prod]->NomeProduto;?></b>
                                    <span style="margin-left: 80px;">Valor unidade: R$ <?php echo number_format($_SESSION['produtos'][$prod]->ValorDesconto,'2',',','.');?></span>
                                    <br>       
                                    <span style="margin-top: 10px;">Total Produtos: R$ <?php echo number_format($_SESSION['produtos'][$prod]->ValorDesconto * $itens,'2',',','.');?></span>
                                </p>
                            </div>

                            <div class="col-lg-4 aling-right" style="margin-top: 10px; margin-left: -4%;">
                                <center>
                                    <div class="btn-group inline" role="group">
                                        <a type="button" class="btn btn-outline-secondary border-secondary" style="margin-right: -1px;" href="reduzirProd.php?cod=<?php echo $prod;?>">-</a>
                                        <input style="width: 4ch" class="form-control border-secondary rounded-0" type="number" id="quantidade<?php echo $prod;?>" value="<?php echo $itens?>">
                                        <a type="button" class="btn btn-outline-secondary border-secondary" href="aumentarProd.php?cod=<?php echo $prod;?>">+</a>
                                    </div>

                                    <button class="btn btn-danger" id="btnModal<?php echo $prod?>">Apagar</button>
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
                    <p class="mensagemVazio">Nenhum item adicionado</p>
                <?php
                }
                ?>
        </div>
        
        <div class="col-lg-3 valores">
            
            <?php 
                $soma = 0.00;
                $itens = 0;
                
                if(isset($_SESSION['itensCarrinho'])) {
                    foreach ($_SESSION['itensCarrinho'] as $key => $value) {
                        $soma += ($_SESSION['produtos'][$key]->ValorDesconto * $value);
                        $itens += $value;    
                    }
                }
            ?>

        <div class="row" style="height:70%; padding-right: 0;">
            <p class="t_itens">Total de itens: <span><?php echo $itens?></span></p>
        </div>
            

            <div class="row"style="height: 20%; padding-right: 0; margin-bottom: auto;">
                
                <hr style="border: 1px solid;">
                
                <div class="row" style="margin-left: -8px;">
                    <p class="v_itens">Valor Total: R$ <span><?php echo number_format($soma,'2',',','.');?></span></p>
                </div>

                <hr style="border: 1px solid;">
                
                <div class="row" style="margin-left: 0px;">
                    <a type="button" class="btn btn-secondary" href="areaEsvaziar.php">Esvaziar Carrinho</a>
                </div>
                
                <div class="row" style="margin-top: 5px; margin-left: 0px;">
                    <button type="button" class="btn btn-primary">Efetuar Compra</button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal" tabindex="1" id="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" class="tituloModal">
                    Confirmação
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="textoModal">Deseja deletar o item do carrinho?</p>
            </div>
            <div class="modal-footer" style="margin-top: -2px;">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger" onclick="apagar()">Apagar</button>                        
            </div>
        </div>
    </div>
</div>

<script>
    
    function apagar() {
        window.location.href = "codigoApagar.php?id=" + apagarItem;
    }

</script>

<?php

    // Importa rodapé Bootstrap
    include 'bootstrap/footer.php';
?>