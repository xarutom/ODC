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
    <link rel="stylesheet" href="../../ESTILOS/login.css">
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

<div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
    
    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="post" action="#"> 
          <h2 class="titulo-login">Fornecedor</h2> 
          <p> 
            <label for="email_login">Seu cnpj</label>
            <input id="cnpj" value="<?php if (isset($_SESSION)) echo $_SESSION['cnpj'] ?>" name="cnpj" required="required" type="text" placeholder="00.000.000/0000-00"/>
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
                <a class="senha" href="recuperaSenhaFornecedor.php">Esqueci minha senha</a>
                <p class="campo-links">
                   
                </p>
          </p>
          
          <p class="link">
            Ainda não tem conta?
            <a href="cadastraFornecedor.php">Cadastre-se</a>
          </p>
        </form>
      </div>

    </div>
  </div> 
</body>
</html>