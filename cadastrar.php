<?php 

    include 'classes/Cliente.class.php';

    $Cliente = new Clientes;

    $Cliente->add($_POST['nomeCad'], $_POST['emailCad'], $_POST['telefoneCad'], $_POST['usuarioCad'], $_POST['senhaCad']);

    header('location: index.php?cad');
?>