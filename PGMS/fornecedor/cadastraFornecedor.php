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
        </p>
    </nav>

    <body style="background-color: #94e2c4">
        
    <h1 class="titulo-empresa">Minha Empresa</h1>
        <div class="container">
            <!-- <h1>DADOS PESSOA JURÍDICA</h1> -->
            <div class="content">
                <form method="post" action="incluirFornecedor.php" class="row g-3 form" id="form">
                <h3>Detalhes da empresa</h3>
                    <div class="col-md-6">
                        <label for="cnpj" class="legenda-campo">Cnpj</label>
                        <input type="text" class="form-control" id="cnpj" name="cnpj"  placeholder="42423533/53353-53">
                    </div>
                    <div class="col-md-6">
                        <label for="inscricao" class="legenda-campo">inscricao</label>
                        <input type="text" class="form-control" id="inscricao" name="inscricaoEstadual" placeholder="inscricaoEstadual">
                    </div>
                    <div class="col-md-6">
                        <label for="razao-social" class="legenda-campo">Razão Social</label>
                        <input type="text" class="form-control" id="razao-social" name="razaoSocial" placeholder="Razão Social">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="legenda-campo">E-mail</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="exemplo - hotmail@com">
                    </div>
                    <div class="col-md-6">
                        <label for="telefone" class="legenda-campo">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(dd) 99999-9999">
                    </div>
                    <div class="col-md-6">
                        <label for="senha" class="legenda-campo">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="********">
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
                            <option selected>Selecione</option>
                            <option value="São Paulo">São Paulo</option>
                            <option value="Rio de Janeiro">Rio de Janeiro</option>
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
                        <button type="submit" class=" botao-cadastrar">cadastrar</button>
                        <button type="submit" class="botao-sair"><a class="link-login" href="loginFornecedor.php">Sair</a></button>
                    </div>
                </form>
            </div>
        </div>
        <script src="../../js/cepFornecedor.js"></script>
    </body>
</html>