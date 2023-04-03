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
        .form-cliente {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 60vh;
            padding: 10px;
            box-sizing: border-box;

            /* border: 1px solid #333; */
        }

        fieldset {
            width: 20vw;
            background-color: #fff;
            /* opacity: 0.8; */
            border: 0;
            /* box-shadow: 1px 1px 1px 1px; */
            border-radius: 4px;
            margin-top: 10px;
        }

        input {
            width: 15vw;
            margin-top: 4px;
            outline: none;
            /* padding: 10px; */
        }

        button {
            width: 5vw;
            margin-top: 4px;
            border-radius: 0.5px double #008000;

        }

        .cadastro {
            cursor: pointer;
            font-family: Arial, Helvetica, sans-serif;
        }

        .cadastro:hover {
            background-color: #008000;
            color: #fff;
            border: 0;
            font-family: Arial, Helvetica, sans-serif;
        }


        .sair {
            cursor: pointer;
            font-family: Arial, Helvetica, sans-serif;
        }

        .sair:hover {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #008000;
            color: #fff;
            border: 0;
        }

        h1,
        h2,
        h3 {
            font-family: Arial, Helvetica, sans-serif;
            color: #008000;
        }
        h2, h3 {
            /* border: 1px solid #008000; */
            border-bottom: 1px double #008000;
        }

        .container {
            border: 1px solid #008000;
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
            /* opacity: 0.4; */
        }
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

        <form class="form-cliente" id="form" action="incluirUsuario.php" method="post">
            <div class="container">

                <fieldset>

                    <h2>DADOS PESSOA FÍSICA</h2>
                    <input type="text" placeholder="Nome" name="nome" required>

                    <input type="text" placeholder="Sobrenome" name="sobrenome" required>

                    <input type="text" placeholder="Data de Nascimento" name="dataNascimento" required>

                    <input type="text" placeholder="Celular" name="celular" required>

                    <input type="e-mail" placeholder="E-mail" name="email" required>

                    <input type="password" placeholder="Senha" name="senha" required>


                </fieldset>
                <fieldset>

                    <h3>ENDEREÇO</h3>
                    <input type="text" placeholder="CEP" name="cep" id="cep" required>

                    <input type="text" placeholder="Rua/Avenida/Travessa" name="endereco" id="endereco" required>

                    <input type="text" placeholder="Número Estabelecimento" name="numero" id="numero" required>

                    <input type="text" placeholder="Complemento" name="complemento" id="complemento" required>

                    <input type="text" placeholder="Cidade" name="cidade" id="localidade" required>

                    <input type="text" placeholder="Bairro/Destrito" name="bairro" id="bairro" required>

                    <button type="submit" class="btn cadastro">Cadastrar</button>
                    <button type="submit" class="btn sair" formaction="login.php">Sair</button>
                </fieldset>
            </div>
        </form>
        <div></div>
        <?php  require_once("./ODC/inc/scripts.inc.php"); 
        ?>
    </body>

</html>