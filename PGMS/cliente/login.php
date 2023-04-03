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
    <link rel="stylesheet" href="../../ESTILOS/conta.css">
</head>
<style>

    .form-login {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100vw;
        height: 60vh;
    }

    .container {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        border: 1px solid #000;
        border-radius: 5px ;
        height: 40vh;
        width: 24vw;
        background-color: #fff;
        /* flex-wrap: wrap; */
    }

    h1{
        font-family: Arial, Helvetica, sans-serif;
    }
    h2 {
        color: #32CD32	;
        border-bottom: 1px solid #32CD32;
    }

    .secao-campos {
        display: flex;
        flex-direction: column;
        border-bottom: 1px solid #fff;
    }

    .secao-campo-botoes {
        /* margin-top: 5px; */
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: row;
        /* background-color: #99e599; */
        width: 20vw;
        /* padding: 27px 0; */
        line-height: 20px;
    }

    .campo-email, .campo-senha {
        width: 15vw;
        margin-top: 10px;
        height: 3vh;
        outline: none;
    }

    .campo-email::placeholder, .campo-senha::placeholder {
        font-family: Arial, Helvetica, sans-serif;
    }
    label {
        margin-top: 8px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .campo-botao{
        margin-top: 10px;
        width: 5vw;
        cursor: pointer;
        font-family: Arial, Helvetica, sans-serif;
    }

    .campo-botao:hover {
        background-color: #008000;
        color: #fff;
        border: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    .campo-links {
        font-size: 13px;
        color: #000;
        border: 1px solid #fff;
        /* background-color: #32CD32; */
        color: #000;
       
    }

    .campo-descricao {
        font-size: 13px;
        padding: 0;
        margin: 0;
    }

    .campo-cadastro {
        /* border: 1px solid #99e599; */
        background-color: #fff;
       
    }

    .campo-descricao-conta {
        font-weight: 500;
    }

    .campo-link-senha {
        font-weight: 500;
    }

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
        <form class="form-login" action="" method="post" class="formulario">
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
                <hr>
                <section class="secao-campo-botoes">
                    <span class="campo-descricao"><a class="campo-links campo-link-senha" href="recuperaSenhaCliente.php">Esqueci minha senha</a></span>
                    <span class="campo-descricao"><a class="campo-links" href="cadastraCliente.php"><span class="campo-descricao-conta">não tem uma conta?</span><span class="campo-cadastro">CADASTRE-SE!</span></a></span>
                </section>

            </div>
        </form>
    </div>

</body>
</html>