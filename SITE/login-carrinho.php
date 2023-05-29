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
    <link rel="stylesheet" href="..\estilos\baner.css">
    <link rel="stylesheet" href="..\estilos\index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
    <header style=" width: 100%; height: 15vh; display: flex; align-items: center; justify-content: space-between; padding: 20px;" class="header">
        <a href="index.php"><img src="../imagens/conteudo/LogoODCt.png" class="logo" alt="logo organicos de casa"></a>
        <nav>
            <ul class="lista-links">
                <li><a style="color: #fff;" class="menu" href="index.php">Início</a></li>
                <li><a style="color: #fff;" class="menu" href="sobre.php">Sobre</a></li>
                <li><a style="color: #fff;" class="menu" href="../PGMS/cliente/login.php">Conta</a></li>
            </ul>
        </nav>
        
    </header>

  

    <!-- <section class="secao-logo-carrinho">
        <div class="container">
        </div>
    </section> -->

    <div class="banner-oferta">
        <h2 style="text-align: center; margin-top: 20px;">Carrinho</h2>
        <p>A gente leva até você vegetais fresquinhos & sem frescura</p>
        <!-- <img class="logo-oferta" src="https://naturaldaterra.com.br/media/wysiwyg/HIF-0013-23I_-_FEIRA_-_CATEGORIA_-_970x150_-_NT_-_01.png?auto=webp&format=png&quality=85" alt=""> -->
    </div>

      <header class="cabecalho-filtro">
        <nav>
            <a class="filtro-frutas" href="#"><img src="../IMAGENS/frutas-2.png" alt="">Frutas</a>
            <a class="filtro-legumes" href="#"><img src="../IMAGENS/cenoura.png" alt="">Legumes</a>
            <a class="filtro-verduras" href="#"><img src="../IMAGENS/vegetal (1).png" alt="">Verduras</a>
            <a class="filtro-todos-os-produtos" href="#">Todos os produtos</a>
        </nav>
    </header>

    <div class="container-modal">
        <div class="legendas">
            <h1>Infomações</h1>
            <p>
                Compra realizada com sucesso
            </p>
        </div>
        <button onclick="fecharModal()">fechar</button>
    </div>

    <!-- lista aba carrinho -->
    <main>
        <div class="content">
            <section>
                <table>
                    <thead>
                        <tr>
                       
                            <th><img  src="../IMAGENS/carrinho.png" alt=""> Produto</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>Total</th>
                            <th>-</th>
                        </tr>
                    </thead>
                    <tbody>
                     
                    </tbody>
                </table>
            </section>
            <aside>
                <div class="box">
                    <header>Resumo da compra</header>
                    <div class="info">
                        <div><span>Sub-total</span><span>R$ 418</span></div>
                        <div><span>Frete</span><span>Gratuito</span></div>
                        <div>
                            <button>
                                Adicionar cupom de desconto
                                <i class="bx bx-right-arrow-alt"></i>
                            </button>
                        </div>
                    </div>
                    <footer>
                        <span>Total</span>
                        <span>R$ 418</span>
                    </footer>
                </div>
                <button onclick="criaModal()" class="botao-modal">Finalizar Compra</button>
            </aside>
        </div>
    </main>

    <!-- <section class="secao-logo-carrinho">
        <div class="container">
        </div>
    </section> -->
    <!-- <footer>
        <h3>Copyright © Orgânicos de casa. Todos os direitos reservados.</h3>
    </footer> -->
    <script type="module" src="../js/listaProdutos.js"></script>
</body>
</html>