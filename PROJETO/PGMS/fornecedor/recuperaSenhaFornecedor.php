<?php
 include("../fornecedor/NovaSenha.php");
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
    <link rel="stylesheet" href="../../ESTILOS/senha.css">
</head>

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
        </p>
    </nav>


    <form class="form-recupera-senha" method="POST" action="#">
        <div class="container">
            <fieldset>
                <h3 class="titulo-recupera-senha">Recuperação de senha</h3>
                <p class="legenda-recuperacao-senha">Para recuperar a sua senha, informe seu endereço de email<br>que nós enviaremos um link para alteração da senha.</p>

                <input class="campo-email" name="email" placeholder="Seu e-mail" type="text">
                <input class="campo-botao" name="ok" value="ok" type="submit">
            </fieldset>
        </div>
    </form>
</body>
</html>