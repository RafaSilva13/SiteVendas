<?php
    // Inclui cabeçalho
    include 'bootstrap/header.php';

    // Inclui a classe carrinho
    include 'classes/Produtos.class.php';

    // Inicia a conexão com o banco de dados
    include 'connection.php';

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
                    <a class="itensPesquisa" onclick="desat1()">Geral</a> 
                </dd>
                
            </dl>
        </div>
        
        <div class="col-lg-9 areaProdutos">
                
            <h4 style="margin-left: 10px;">
                <b>Produtos</b>
            </h4>
            
            <hr>

            <div class="row row-cols-1 row-cols-md-3 g-3">
                
                
                <?php 
                
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                
                $sql = "SELECT * FROM produtos";
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                ?>
                

                <div class="col">
                    <div class="card card<?php echo $value->IdProduto;?>">
                        
                        <img src="<?php echo $row["url_imagem"];?>" class="card-img-top">
                        
                        <div class="card-body">
                            <center> 
                                <h5 class="card-title"><?php echo $row["descricao"];?></h5>

                                <p>                                
                                    <b class="preco">R$<?php echo number_format($row["preco"],'2',',','.');?></b>
                                </p>                                  
                                <div class="row">
                                
                                    <a href="adicionarProduto.php?id=<?php echo $row["id_produto"];?>" type="button" class="btn btn-primary btnCompra">Comprar</a>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                
                <?php
                    }
                } else {
                    echo "0 results";
                }
                
                mysqli_close($conn);
                ?>        
                    
            </div>
        </div>
    </div>
</div>

<script>
    function desat1() {
        $(".card1").show();
        $(".card2").show();
        $(".card3").show();
        $(".card4").show();
        $(".card5").show();
        $(".card6").show();
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