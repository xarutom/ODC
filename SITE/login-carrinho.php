<?php
// include("../BD/conexao.php");
// $consulta = "SELECT * FROM produto WHERE categoria = categoria";
// $con = mysqli_query($conexao, $consulta) or die . mysqli_error($conexao);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ODC | Meu carrinho</title>
    <link rel="icon" type="image/x-icon" href="..\imagens\conteudo\faviconODCt.ico">
    <link rel="stylesheet" href="..\estilos\base.css">
    <link rel="stylesheet" href="..\estilos\carrinho.css">
    <link rel="stylesheet" href="..\estilos\secao-logo.css">
    <link rel="stylesheet" href="..\estilos\lista-itens.css">
    <link rel="stylesheet" href="..\estilos\filtro.css">
    <link rel="stylesheet" href="..\estilos\baner.css">
    <link rel="stylesheet" href="..\estilos\index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
       
    </style>
</head>

<body>
    <header style="position: fixed; width: 100%;" class="header">
        <a href="index.php"><img src="../imagens/conteudo/LogoODCt.png" class="logo" alt="logo organicos de casa"></a>
        <nav>
            <ul class="lista-links">
                <li><a class="menu" href="index.php">Início</a></li>
                <li><a class="menu" href="sobre.php">Sobre</a></li>
                <li><a class="menu" href="../PGMS/cliente/login.php">Conta</a></li>
            </ul>
        </nav>
    </header>


    <section class="secao-logo-carrinho">
        <div class="container">
            <h1>Orgânicos de casa com<br> até 50% de economia</h1>
            
            <img class="logo-carrinho" src="https://www.mercadodiferente.com.br/_next/image?url=%2Fimages%2Fbox%2Fimagem-header-diferente.png&w=750&q=75" alt="">
        </div>
    </section>
    <h2 style="text-align: center; margin-top: 20px;">Carrinho</h2>
    <div class="banner-oferta">
        <p>A  gente leva até você vegetais fresquinhos & sem frescura</p>
        <!-- <img class="logo-oferta" src="https://naturaldaterra.com.br/media/wysiwyg/HIF-0013-23I_-_FEIRA_-_CATEGORIA_-_970x150_-_NT_-_01.png?auto=webp&format=png&quality=85" alt=""> -->

    </div>
    <!-- lista aba carrinho -->
    <section class="secao-produtos">
        <div class="container-aside">
            <aside>
                <h3 class="titulo-filtro">Filtrar pesquisa</h3>
                <ul class="lista-filtro">
                    <h4 class="subtitulo-filtro">Categorias</h4>
                    <li class="lista-item-filtro"><a class="legenda-item fruta">Fruta</a><hr>
                        <span class="legenda-produto">Abacate</span>
                        <span class="legenda-quantidade">(1)</span><br>

                        <span class="legenda-produto">Abacaxi</span>
                        <span class="legenda-quantidade">(1)</span><br>

                        <span class="legenda-produto">Laranja</span>
                        <span class="legenda-quantidade">(1)</span><br>

                        <span class="legenda-produto">Limão</span>
                        <span class="legenda-quantidade">(1)</span><br>

                        <span class="legenda-produto">Maça</span>
                        <span class="legenda-quantidade">(1)</span><br>

                        <span class="legenda-produto">Morango</span>
                        <span class="legenda-quantidade">(1)</span><br>
                    </li>
                    <li class="lista-item-filtro"><a class="legenda-item legume">Legume</a><hr>
                        <span class="legenda-produto">Moranga</span>
                        <span class="legenda-quantidade">(1)</span><br>

                        <span class="legenda-produto">Alface Crespa</span>
                        <span class="legenda-quantidade">(1)</span><br>

                        <span class="legenda-produto">Cebolinha</span>
                        <span class="legenda-quantidade">(1)</span><br>

                        <span class="legenda-produto">Couve</span>
                        <span class="legenda-quantidade">(1)</span><br>

                        <span class="legenda-produto">Rabenete</span>
                        <span class="legenda-quantidade">(1)</span><br>

                        <span class="legenda-produto">Salsa</span>
                        <span class="legenda-quantidade">(1)</span><br>

                        <span class="legenda-produto">Cebola Roxa</span>
                        <span class="legenda-quantidade">(1)</span><br>

                        <span class="legenda-produto">Cenoura</span>
                        <span class="legenda-quantidade">(1)</span><br>

                        <span class="legenda-produto">Mandioquinha</span>
                        <span class="legenda-quantidade">(1)</span><br>

                        <span class="legenda-produto">Milho Verde</span>
                        <span class="legenda-quantidade">(1)</span><br>

                        <span class="legenda-produto">Pimentão Verde</span>
                        <span class="legenda-quantidade">(1)</span><br>

                        <span class="legenda-produto">Tomate</span>
                        <span class="legenda-quantidade">(1)</span>
                    </li>
                </ul>
            </aside>
        </div>
        
        <ul class="list-group lista">
        </ul>
    </section>
    
    <script   src="../js/listaProdutos.js"></script>
</body>
</html>