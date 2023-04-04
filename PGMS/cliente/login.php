<?php
include("../../BD/conexao.php");
include("validaDados.php");
$consulta = "SELECT email, senha FROM cliente";
$con = mysqli_query($conexao, $consulta) or die . mysqli_error($conexao);

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
    <link rel="stylesheet" href="../../ESTILOS/login-cliente.css">
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
            <li><a class="menu" href="../../SITE/carrinho.php">Carrinho</a></li>
        </nav>

    </header>
    <nav>
        <p class="banner"></p>
    </nav>

    <h1 class="h1">Olá visitante!</h1>
    <?php
    if (isset($erro))
        foreach ($erro as $msg) {
            echo "<script>alert('$msg');</script>";
        }
    ?>
    <div>
        <form class="form-login formulario" action="" method="post">
            <div class="container">
                <h2>Acesse sua conta</h2>
                <section class="secao-campos">
                    <Label for="email">Email </Label>
                    <input value="<?php if (isset($_SESSION)) echo $_SESSION['email'] ?>" name="email" placeholder="Seu melhor e-mail" type="text" id="email" class="campo-email">
    
                    <label for="senha">Senha</label>
                    <input name="senha" type="password" id="senha" placeholder="Sua melhor senha" class="campo-senha">
                    <input value="Entrar" type="submit" class="campo-botao">
                    <span class="campo-descricao"><span>Fornecedor?</span><a class="campo-links" href="../fornecedor/loginFornecedor.php">ACESSE AQUI.</a></span>
                </section>
               
                <section class="secao-campo-botoes">
                    <span class="campo-descricao"><a class="campo-links campo-link-senha" href="recuperaSenhaCliente.php">Esqueci minha senha</a></span>
                    <span class="campo-descricao"><a class="campo-links" href="cadastraCliente.php"><span class="campo-descricao-conta">não tem uma conta?</span><span class="campo-cadastro">CADASTRE-SE!</span></a></span>
                </section>

            </div>
        </form>
    </div>

</body>
</html>