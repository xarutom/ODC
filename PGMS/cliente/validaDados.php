<?php

if (isset($_POST['email']) && strlen($_POST['email']) > 0) {

    if (!isset($_SESSION))
        session_start();

    $_SESSION['email'] = $conexao->escape_string($_POST['email']);
    $_SESSION['senha'] = $_POST['senha'];

    $sql_code = "SELECT senha, nome, codCliente FROM cliente WHERE email = '$_SESSION[email]'";
    $sql_query = $conexao->query($sql_code) or die($conexao->error);
    $dado = $sql_query->fetch_assoc();
    $total = $sql_query->num_rows;

    if ($total == 0) {
        $erro[] = "E-mail não cadastrado.";
    } else {

        if ($dado['senha'] ==  $_SESSION['senha']) {

            $_SESSION['usuario'] = $dado['nome'];
        } else {
            $erro[] = "Senha incorreta.";
        }
    }

    if (!isset($erro)) {
        echo "<script>alert('Login efetuado com sucesso'); location.href='../../site/login-carrinho.php';</script>";
    }
} 