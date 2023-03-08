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
    <style>
        form { border: 5px solid #024e1b; border-radius: 15px; float: left; padding: 12px; margin-left: 500px; margin-top: 50px; font: 16px; font-family: Poppin, Verdana, sans-serif; color: #025e1d;}
        form input{ padding: 4px; width: 500px; display:rgb(3, 212, 177); }
        form .btn{ width: 200px; cursor:pointer; font-size: 18px;}
    </style>
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
            </p><br>
        </nav><br>
<body>
    <h1>Meu Cadastro</h1>
    
    <form action="incluirUsuario.php"  method="post">
    <p>DADOS PESSOA FÍSICA</p><br>
        <input type="text" placeholder="Nome" name="nome">
        <br><br>
        <input type="text" placeholder="Sobrenome" name="sobrenome">
        <br><br>
        <input type="text" placeholder="Data de Nascimento" name="dataNascimento">
        <br><br>
        <input type="text" placeholder="Celular" name="celular">
        <br><br>
        <input type="e-mail" placeholder="E-mail" name="email">
        <br><br>
        <input type="password" placeholder="Senha" name="senha">
        <br><br><br>
        
    <p>ENDEREÇO</p><br>
        <input type="text" placeholder="CEP"name="cep">
        <br><br>
        <input type="text" placeholder="Rua/Avenida/Travessa" name="endereco">
        <br><br>
        <input type="text" placeholder="Número Estabelecimento" name="numero">
        <br><br>
        <input type="text" placeholder="Complemento" name="complemento">
        <br><br>
        <input type="text" placeholder="Estado" name="estado">
        <br><br>
        <input type="text" placeholder="Cidade" name="cidade">
        <br><br>
        <input type="text" placeholder="Bairro/Destrito" name="bairro">
        <br><br><br>
        <button type="submit" class="btn">Cadastrar</button>
        <button type="submit"  class="btn" formaction="login.php">Sair</button>
    </form>
   <div></div>
</body>
</html>