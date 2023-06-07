
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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

    <body style=" background-color: #94e2c4;">
        <div class="container">
            <div class="content">
                <form method="post" action="incluirUsuario.php"  class="row g-3 form">
                <h3>Cadastro</h3>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="legenda-campo">Nome</label>
                        <input type="text" class="form-control" id="" name="nome"  placeholder="Seu nome">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="legenda-campo">Sobrenome</label>
                        <input type="text" class="form-control" id="" name="sobrenome" placeholder="Sobrenome">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="legenda-campo">Data de nascimento</label>
                        <input type="text" class="form-control" id="" name="dataNascimento" placeholder="data de nascimento">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="legenda-campo">Celular</label>
                        <input type="text" class="form-control" id="" name="celular" placeholder="(dd) 99999-9999">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="legenda-campo">E-mail</label>
                        <input type="text" class="form-control" id="" name="email" placeholder="exemplo - hotmail@com">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="legenda-campo">Senha</label>
                        <input type="password" class="form-control" id="inputPassword4" name="senha" placeholder="********">
                    </div>
                    <h4>Endereço</h4>

                    <div class="col-md-6">
                        <label for="cep" class="legenda-campo">Cep</label>
                        <input type="text" class="form-control" id="cep" name="cep" placeholder="0000-0000">
                    </div>
                    <div class="col-md-6">
                        <label for="endereco" class="legenda-campo">Rua/Avenida/Travessa</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="endereço">
                    </div>
                    <div class="col-md-6">
                        <label for="cidade" class="legenda-campo">Cidade</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="cidade">
                    </div>
                    <div class="col-md-6">
                        <label for="bairro" class="legenda-campo">Bairro</label>
                        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="cidade">
                    </div>
                    <div class="col-md-4">
                        <label for="estado" class="legenda-campo">Estado</label>
                        <select id="estado" class="form-select" name="estado">
                            <option selected ></option>
                            <option value="São-Paulo">São Paulo</option>
                            <option value="Rio-de-Janeiro">Rio de Janeiro</option>
                            <option value="Goias">Goias</option>
                            <option value="Parana">Parana</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="complemento" class="legenda-campo">Complemento</label>
                        <input type="text" class="form-control" id="complemento" name="complemento" placeholder="apartamento/casa">
                    </div>
                    <div class="col-md-2">
                        <label for="numero" class="legenda-campo">Número</label>
                        <input type="text" class="form-control" id="numero" name="numero" placeholder="n°">
                    </div>

                    <div class="col-12 campo-botoes link-botao">
                        <button type="submit" class="botao-cadastrar">cadastrar</button>
                        <a class="link-login botao-sair" href="login.php">Sair</a>
                    </div>
                </form>
            </div>
        </div>
        <script src="../../js/cepCliente.js"></script>
    </body>
</html>