<?php

include("../../BD/conexao.php");

    if(isset($_POST['ok'])){

        $email= $conexao->escape_string($_POST['email']);

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $erro[] = "E-mail inválido.";

        }

        $sql_code = "SELECT senha, codFornecedor FROM fornecedor WHERE email = '$email'";
        $sql_query = $conexao->query($sql_code) or die ($mysqli->error);
        $dado = $sql_query->fetch_assoc();
        $total = $sql_query->num_rows;

        if($total == 0)
            $erro[] = "O e-mail informado não existe no banco de dados.";

        if(count($erro) == 0 && $total > 0){

            $novasenha = substr(md5(time()), 0, 6);
            $nscriptografada = md5(md5($novasenha));
            

            if(mail($email, "Sua nova senha", "Sua nova senha: ".$novasenha)){

                $sql_code = "UPDATE fornecedor SET senha = '$nscriptografada' WHERE email = '$email'";
                $sql_query = $mysqli->query($sql_code) or die ($mysqli->error);

            }
        }
    }

    substr(md5(time()), 0, 6);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ODC | Orgânicos de Casa</title>
    <link rel="icon" type="image/x-icon" href="..\..\imagens\conteudo\faviconODCt.ico">
    <link rel="stylesheet" href="..\..\estilos\base.css">
    <link rel="stylesheet" href="..\..\estilos\conta.css">
    </head>
    <style>
        form { border: 5px solid #024e1b; border-radius: 15px; float: left; padding: 12px; margin-left: 500px; margin-top: 50px; font: 16px; font-family: Poppin, Verdana, sans-serif; color: #025e1d;}
        form input{ padding: 4px; width: 250px; display:#03d4b1; }
        form .btn{ width: 200px; cursor:pointer; font-size: 18px;}
    </style>
<body>
    <header class="header">
    
    <a href="../../site/index.php"><img src="../../imagens/conteudo/LogoODCt.png" class="logo"></a>
    
        <nav>
            <li><a class="menu" href="../../SITE/sobre.php">Sobre</a></li>
            <li><a class="menu" href="../../PGMS/cliente/login.php">Conta</a></li>
            <li><a class="menu" href="../../SITE/carrinho.php">Carrinho</a></li>
           
        </nav>
    </header>
        <nav>
            <p class="banner">
                <li><a class="menuhorizontal" href="../../SITE/index.php">Início</a></li>
            </p><br>
        </nav><br>
<body>

    <form method="POST" action="">
        <input name="email" placeholder="Seu e-mail" type="text">
        <input name="ok" value="ok" type="submit">
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br>

    <br>
    <br><p></p>
</body>
</html>
