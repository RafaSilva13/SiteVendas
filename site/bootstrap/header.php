<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/5234/5234583.png">
    <title>Loja Santos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@500;600&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">  
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="navbar-brand" href="index.php">
              <img class="imagem_logo" src="https://cdn-icons-png.flaticon.com/512/5234/5234583.png" alt="imagem_logo">
            </a>
        </li>

        <li class="nav-item" style="margin: -4px;">
            <a class="nav-link" href="index.php">
              <h1 class="titulo_navbar">Loja Santos</h1>
            </a>
        </li>

        <div class="linha-vertical"></div>

        <li class="nav-item active" style="margin-top: 3px; margin-left: 10px;">
            <a class="nav-link" href="index.php">
              <h6 class="itensNav">Produtos</h6>
            </a>
        </li>

        <li class="nav-item active" style="margin-top: 3px; margin-left: 5px;">
            <a class="nav-link" href="carrinho.php">
              <h6 class="itensNav">Carrinho</h6>
            </a>
        </li>
        
        <li class="nav-item active" style="margin-top: 3px; margin-left: 5px;">
            <a class="nav-link" href="meusProdutos.php">
              <h6 class="itensNav">Meus Pedidos</h6>
            </a>
        </li>
    </ul>

    <form class="d-flex aling-right" style="padding-top: 5px; padding-bottom: 5px;" role="search">
      <a class="btn btn-outline-light btncadastro btn-sm" href="login.php?t=c" type="button">Cadastro</a>
      <a class="btn btn-light btn-sm btnlogin"  href="login.php?t=l" type="button">Login</a>
      
      <span class="textoUsuario"></span>

      <button class="btn btn-danger btn-sm btnsair" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: 1rem;" id="btnsairLog" type="button">SAIR</button>
    </form>
  </div>  
</nav>

<div class="modal" tabindex="1" id="confSairLogin">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" class="tituloModal">
                    Sair
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="textoModal">Deseja realmete sair da conta?</p>
            </div>
            <div class="modal-footer" style="margin-top: -2px;">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <a type="button" class="btn btn-danger" href="sairConta.php">Sair</a>                        
            </div>
        </div>
    </div>
</div>

<script>
  $(document).ready(function(){
    $("#btnsairLog").click(function(){
      $('#confSairLogin').modal('show');
    });
  });
</script>

<?php
  // Inicia a sessão
  session_start();
  
  if (isset($_SESSION['log']) && ($_SESSION['log'] > 0)){
?>
  <script>
    $(".btnsair").show();
    $(".btncadastro").hide();
    $(".btnlogin").hide();
    
    $(".textoUsuario").show();  
  </script>
<?php  
  } 
  else {
?>
  <script>
    $(".btnsair").hide();
    $(".btncadastro").show();
    $(".btnlogin").show();
    $(".textoUsuario").hide();
  </script>
<?php  
  }
  session_write_close();
?>

