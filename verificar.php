
<?php

    include ('connection.php')

    // Verifica se a variavel existe

    if(isset($_POST['usuario']) || isset($_POST['senha'])) {

        // Verifica se tem algum campo sem preencher

        if(strlen($_POST['usuario']) == 0){
            echo "Preencha o nome de usuário";
        } else if (strlen($_POST['senha']) == 0){
            echo "Preencha a senha";

        } else {

            // Limpa a string

            $usuario = $conn -> real_escape_string($_POST['usuario']);
            $senha = $conn -> real_escape_string($_POST['senha']);

            // Banco de Dados

            $sql_code = "SELECT * FROM clientes WHERE usuario = '$username' AND senha = '$password'";

            // Avisa se deu algum erro

            $sql_query = $conn -> query($sql_code) or die("Falha na execução do código" . $conn -> error);

            header (sprintf('location: %s', $_SERVER['HTTP_REFERER'])); exit;

        }

        
    }
?>