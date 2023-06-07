<?php
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $bd="odc";

    $conexao=mysqli_connect($servidor, $usuario, $senha, $bd);
    if(!$conexao){
        die("Falha na conexão. Erro: ".mysqli_connect_error());
    }

?>