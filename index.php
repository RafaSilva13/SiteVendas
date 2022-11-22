<?php
    // Inclui cabeçalho
    include 'bootstrap/header.php';

    // Inclui a classe carrinho
    include 'classes/Produtos.class.php';

    // Inicia a sessão
    session_start();

    // Adiciona objetos produtos
    include 'objetos/criarProdutos.php';    


    if (isset($_GET['include'])){
?>
    <script>
        $(document).ready(function(){
            $(".toast").toast('show');
        });
    </script>
<?php
    }
?>

<!-- Flexbox container for aligning the toasts -->
<div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center w-100">

    <div class="toast align-items-center text-bg-primary border-0 divToast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                <b>Item adicionado ao carrinho.</b>
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>

<div class="container containerIndex">
    <div class="row">
        
        <div class="col-lg-3 areaLateral">
            <dl>
                <dt class="tituloLateral">
                    <a onclick="ativarItens()">Categorias</a>
                </dt>
                
                <dd></dd>
                
                <dd>
                    <a class="itensPesquisa" onclick="desat1()">Bebidas</a> 
                </dd>
                
                <dd>
                    <a class="itensPesquisa" onclick="desat2()">Temperos</a> 
                </dd>
                
                <dd>
                    <a class="itensPesquisa" onclick="desat3()">Limpesa</a> 
                </dd>

                <dd>
                    <a class="itensPesquisa" onclick="desat4()">Alimentação</a> 
                </dd>
            </dl>
        </div>
        
        <div class="col-lg-9 areaProdutos">
                
            <h4 style="margin-left: 10px;">
                <b>Produtos</b>
            </h4>
            
            <hr>

            <div class="row row-cols-1 row-cols-md-3 g-3">
                
                
                <?php if (isset($_SESSION['produtos'])){
                
                $produtos = $_SESSION['produtos'];    
                foreach ($produtos as $ind => $value) { ?>

                <div class="col">
                    <div class="card card<?php echo $value->IdProduto;?>">
                        
                        <img src="<?php echo $value->CaminhoImagem;?>" class="card-img-top">
                        
                        <div class="card-body">
                            <center> 
                                <h5 class="card-title"><?php echo $value->NomeProduto;?></h5>


                                <p>
                                    <s class="inative">R$<?php echo number_format($value->ValorProduto,'2',',','.');?></s>
                            
                                    <b class="preco">R$<?php echo number_format($value->ValorDesconto,'2',',','.');?></b>
                                </p>                                  
                                <div class="row">

                                    <a href="adicionarProduto.php?id=<?php echo $value->IdProduto;?>" type="button" class="btn btn-primary btnCompra">Comprar</a>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                        
                

                <?php
                    }
                }
                ?>   
            </div>
        </div>
    </div>
</div>

<script>
    function desat1() {
        $(".card2").hide();
        $(".card3").hide();
        $(".card4").hide();
        $(".card5").hide();
        $(".card6").hide();

        $(".card1").show();
    }
    
    function desat2() {
        $(".card1").hide();
        $(".card2").hide();
        $(".card3").hide();
        $(".card4").hide();
        $(".card5").hide();

        $(".card6").show();
    }
    
    function desat3() {
        $(".card1").hide();
        $(".card4").hide();
        $(".card5").hide();
        $(".card6").hide();

        $(".card2").show();
        $(".card3").show();
    }

    function desat4() {
        $(".card1").hide();
        $(".card2").hide();
        $(".card3").hide();
        $(".card6").hide();

        $(".card4").show();
        $(".card5").show();
    }
    
    function ativarItens() {
        $(".card1").show();
        $(".card2").show();
        $(".card3").show();
        $(".card4").show();
        $(".card5").show();
        $(".card6").show();
    }
</script>

<?php
    include 'bootstrap/footer.php';
?>