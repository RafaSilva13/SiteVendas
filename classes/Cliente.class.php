<?php
    class Clientes{
        var $IdCliente;
        var $NomeCliente;
        var $EmailCliente;
        var $TelefoneCliente;
        var $Username;
        var $Senha;

        function add($Nome, $Email, $Telefone, $User, $Senha){
            // Conexão com o banco de dados
            include 'connection.php';

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            $sql = "INSERT INTO clientes (id_cliente, nome_completo, email, telefone, username, senha)
            VALUES (null, '$Nome', '$Email', '$Telefone', '$User', '$Senha')";
            
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
            
            mysqli_close($conn);
        }
    }
?>