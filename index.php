<?php

    // Inclui cabeçalho
    include 'bootstrap/header.php';

    // Inclui a classe carrinho
    include 'classes/Produtos.class.php';
    
    // Adiciona objetos produtos
    include 'objetos/criarProdutos.php';    

    if (isset($_GET['include'])){
?>
    <script>
        $(document).ready(function(){
            $(".itemToast").toast('show');
        });
    </script>
<?php
    }

    if (isset($_GET['cad'])){
?>
    <script>
        $(document).ready(function(){
            $(".cadToast").toast('show');
        });
    </script>
<?php
    }

    if (isset($_GET['log'])){
?>
    <script>
        $(document).ready(function(){
            $(".logToast").toast('show');
        });
    </script>
<?php
    }
?>

<!-- Flexbox container for aligning the toasts -->
<div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center w-100">

    <div class="toast align-items-center text-bg-primary border-0 divToast itemToast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                <b>Item adicionado ao carrinho.</b>
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>

<!-- Flexbox container for aligning the toasts -->
<div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center w-100">

    <div class="toast align-items-center text-bg-primary border-0 divToast cadToast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                <b>Usuário cadastrado!</b>
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>

<!-- Flexbox container for aligning the toasts -->
<div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center w-100">

    <div class="toast align-items-center text-bg-primary border-0 divToast logToast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                <b>Login Efeituado!</b>
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
                    <div class="card card<?php echo $ind?>">
                        
                        <img src="<?php echo $value->CaminhoImagem;?>" class="card-img-top">
                        
                        <div class="card-body">
                            <center> 
                                <h5 class="card-title"><?php echo $value->NomeProduto;?></h5>


                                <p>                            
                                    <b class="preco">R$<?php echo number_format($value->ValorProduto,'2',',','.');?></b>
                                </p>                                  
                                <div class="row">

                                    <a href="adicionarProduto.php?id=<?php echo $ind;?>" type="button" class="btn btn-primary btnCompra">Comprar</a>
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

<?php
    include 'bootstrap/footer.php';

    session_write_close();
?>