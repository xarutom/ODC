<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ODC | Orgânicos de Casa</title>
    <link rel="icon" type="image/x-icon" href="..\..\imagens\conteudo\faviconODCt.ico">
    <link rel="stylesheet" href="..\..\estilos\base.css">
    <link rel="stylesheet" href="../../ESTILOS/cadastro-empresa.css">
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

    <body>
        <h1 class="titulo-empresa">Minha Empresa</h1>

        <form class="form-cadastro-empresa" action="incluirFornecedor.php" method="post">
            <div class="container">
                <fieldset class="campo-borda">


                    <section class="secao-titulos">
                        <h3>DADOS PESSOA JURÍDICA</h3>
                        <span class="campo-detalhes">Detalhes da empresa</span>
                        <hr>
                    </section>

                    <section class="secao-dados-empresariais">
                        <label class="campo-legenda-cnpj" for="cnpj">CNPJ
                            <input class="campo-cnpj" type="text" placeholder="CNPJ" name="cnpj" id="cnpj">
                        </label>

                        <label class="campo-legenda-inscricao-estadual" for="inscricao-estadual">Inscrição
                            <input class="campo-inscricao-estadual" type="text" placeholder="Inscrição Estadual" name="inscricaoEstadual" id="inscricao-estadual">
                        </label>

                        <br>
                        <label class="campo-legenda-email" for="email">E-mail
                            <input class="campo-email" type="e-mail" placeholder="E-mail" name="email" id="email">
                        </label>

                        <label class="campo-legenda-telefone" for="telefone">Telefone
                            <input class="campo-ddd" type="text" placeholder="dd">
                            <input class="campo-telefone" type="text" placeholder="Telefone" name="telefone" id="telefone">
                        </label>
                        
                        <br>
                        <label class="campo-legenda-razao-social" for="razao-social">Razão social
                            <input class="campo-nome-razao-social" type="text" placeholder="Nome Razao Social" name="razaoSocial" id="razao-social">
                        </label>

                        <br>
                        <label class="campo-legenda-senha" for="senha">Senha
                            <input class="campo-senha" type="password" placeholder="Senha" name="senha" id="senha">
                        </label>
                    </section>


                    <!-- <hr> -->



                    <section class="secao-titulos">
                        <h4>ENDEREÇO</h4>
                    </section>


                    <section class="secao-localidade">
                        <label class="campo-legenda-cep" for="cep">Cep
                            <input class="campo-cep" type="text" placeholder="CEP" name="cep" id="cep">
                        </label>

                        <label class="campo-legenda-endereco" for="endereco">Endereço
                            <input class="campo-endereco" type="text" placeholder="Rua / Avenida / Travessa" name="endereco" id="endereco">
                        </label>
                         
                        <br>
                        <label class="campo-legenda-numero" for="numero">Número
                            <input class="campo-numero" type="text" placeholder="Número Estabelecimento" name="numero" id="numero">
                        </label>

                        
                        <label class="campo-legenda-complemento" for="complemento">Complemento
                            <input class="campo-complemento" type="text" placeholder="Complemento" name="complemento" id="complemento">
                        </label>

                       <br>
                        <label class="campo-legenda-estado for="estado">Estado
                            <input class="campo-estado" type="text" placeholder="Estado" name="estado" id="estado">
                        </label>

                        <label class="campo-legenda-cidade" for="cidade">Cidade
                            <input class="campo-cidade" type="text" placeholder="Cidade" name="cidade" id="cidade">
                        </label>
                        
                        <br>
                        <label class="campo-legenda-bairro" for="bairro">Bairro
                            <input class="campo-bairro" type="text" placeholder="Bairro/Destrito" name="bairro" id="bairro">
                        </label>
                    </section>

                    <section class="secao-botoes">
                        <button type="submit" class="botao-cadastro">Cadastrar</button>
                        <button type="submit" class="botao-redireciona-login" formaction="loginFornecedor.php">Sair</button>
                    </section>
                </fieldset>
            </div>
        </form>
    </body>

</html>