<?php
include("../../BD/conexao.php");
include("validaDados.php");
// $consulta = "SELECT email, senha FROM cliente";
// $con = mysqli_query($conexao, $consulta) or die . mysqli_error($conexao);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ODC | Orgânicos de Casa</title>
    <link rel="icon" type="image/x-icon" href="..\..\imagens\conteudo\faviconODCt.ico">
    <link rel="stylesheet" href="../../ESTILOS/base.css">
    <link rel="stylesheet" href="../../ESTILOS/login.css">
</head>
<style>

</style>

<body>
    <header class="header">

        <a href="../../site/index.php"><img src="../../imagens/conteudo/LogoODCt.png" class="logo"></a>

        <nav>
            <li><a class="menu" href="../../SITE/index.php">Início</a></li>
            <li><a class="menu" href="../../SITE/sobre.php">Sobre</a></li>
            <li><a class="menu" href="../../PGMS/cliente/login.php">Conta</a></li>
        </nav>

    </header>
    <nav>
        <p class="banner"></p>
    </nav>

    <?php
    if (isset($erro))
        foreach ($erro as $msg) {
            echo "<script>alert('$msg');</script>";
        }
    ?>

    <div class="container">
        <a class="links" id="paralogin"></a>
        <a class="links" id="paracadastro"></a>

        <div class="content">
            <!--FORMULÁRIO DE LOGIN-->
            <div id="login">
                <form method="post" action="">
                    <h2>Login</h2>
                    <p>
                        <label for="email_login">Seu e-mail</label>
                        <input value="<?php if (isset($_SESSION)) echo $_SESSION['email'] ?>" id="email_login" name="email" required="required" type="text" placeholder="contato@htmlecsspro.com" />
                    </p>

                    <p>
                        <label for="senha_login">Sua senha</label>
                        <input id="senha_login" name="senha" required="required" type="password" placeholder="1234" />
                    </p>

                    <p>
                        <input type="checkbox" name="manterlogado" id="manterlogado" value="" />
                        <label for="manterlogado">Manter-me logado</label>
                    </p>

                    <p class="campo-links">
                        <input class="botao-logar" type="submit" value="Logar" />
                        <a class="senha" href="recuperaSenhaCliente.php">Esqueci minha senha</a>
                    <p class="campo-links">

                    </p>
                    </p>

                    <p class="link">
                        Ainda não tem conta?
                        <a href="./cadastraCliente.php">Cadastre-se</a>

                        <a href="../fornecedor/loginFornecedor.php">Fornecedor</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
