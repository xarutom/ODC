<?php
include("../../BD/conexao.php");
include("../fornecedor/validaDadosFornecedor.php");
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
    <link rel="stylesheet" href="../../ESTILOS/login-fornecedor.css">
</head>
<body>
    <header class="header">
        <a href="../../SITE/index.php"><img src="../../imagens/conteudo/LogoODCt.png" class="logo"></a>
        <nav>
            <li><a class="menu" href="../../SITE/sobre.php">Sobre</a></li>
            <li><a class="menu" href="../cliente/login.php">Conta</a></li>
            <li><a class="menu" href="../../SITE/carrinho.php">Carrinho</a></li>
        </nav>
    </header>
    <nav>
        <p class="banner">
            <li><a class="menuhorizontal" href="../../SITE/index.php">Início</a></li>
        </p>
    </nav>

    <?php
    if (isset($erro))
        foreach ($erro as $msg) {
            echo "<script>alert('$msg');</script>";
        }
    ?>

    <form class="form-login-fornecedor" action="#" method="post">
        <div class="container">
            <fieldset>
                <section class="campo-titulo">
                    <h4>Acesse sua conta</h4>
                </section>
            
                <label for="cnpj">CNPJ</label>
                <input class="campo-cnpj-fornecedor" value="<?php if (isset($_SESSION)) echo $_SESSION['cnpj'] ?>" name="cnpj" placeholder="00.000.000/0000-00" type="text" id="cnpj">
    
                <label for="senha">Senha</label>
                <input class="campo-senha-fornecedor" name="senha" type="password" id="senha" placeholder="informe sua senha">
    
                <input class="campo-botao-fornecedor" value="Entrar" type="submit">
    
                <section class="campo-redireciona-fornecedor">
                 <a class="campo-recupera-senha-fornecedor" href="recuperaSenhaFornecedor.php">Esqueci minha senha</a>
                  <a class="campo-cadastrar-fornecedor" href="cadastraFornecedor.php">CADASTRE-SE</a>
                    <!-- <span class="campo-time-fornecedores">E faça parte do time de fornecedores</span> -->
                </section>
            </fieldset>

        </div>
    </form>

</body>

</html>