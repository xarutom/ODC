<?php
    include("../BD/conexao.php");
    $consulta = "SELECT * FROM produto WHERE categoria = categoria";
    $con = mysqli_query($conexao, $consulta) or die .mysqli_error($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ODC | Orgânicos de Casa</title>
    <link rel="icon" type="image/x-icon" href="..\imagens\conteudo\faviconODCt.ico">
    <link rel="stylesheet" href="../ESTILOS/base.css">
    </head>
<body>
    <header class="header">
    
    <a href="index.php"><img src="../imagens/conteudo/LogoODCt.png" class="logo"></a>
    
    <nav>
            <li class="pages"><a class="menu" href="index.php">Início</a></li>
            <li class="pages"><a class="menu" href="sobre.php">Sobre</a></li>
            <li class="pages"><a class="menu" href="../PGMS/cliente/login.php">Conta</a></li>
            <li class="pages"><a class="menu" href="carrinho.php">Carrinho</a></li>
            
        </nav>
    </header>
        <nav>
            <p class="banner">
                </p>
            </nav>

            <section class="banner-inicio">
                <div class="img-banner">
                    <a href="#">
                        Imagem Aqui
                    </a>
                </div>
            </section>

            <section class="inicio">
                    <section class="flexmenu">
                        <aside>
                            <ul>
                                <li class="column"><a href="index.php"><button class="menuvertical" onclick="(function(){window.alert('teste de OnClick')})()">Todos os Produtos</button></a></li>
                                <li class="column"><a href="index.php?categoria=Fruta"><button class="menuvertical" id="menor">Frutas</button><a href="index.php?categoria=categoria"></a></li></li>
                                <li class="column"><button class="menuvertical" id="menor">Legumes</button></li></li>
                                <li class="column"><button class="menuvertical" id="menor">Verduras</button></li></li>
                        </ul>
                    </aside>
                </form>
                </section>
                <section>
    <div class="titulo_prod">
        <h1 class="ofertas">Ofertas Imperdíveis</h1>
        <img src="" alt="">
    </div>
    <div>
        <section class="flex">
            <?php while ($dado = $con->fetch_array()){ ?>
                <div class="icone_prod">
                    <a href="#">
                        <div class="img_prod">
                            
                            <img class="produto" src="../imagens/Produtos/<?php echo $dado['categoria'] ;?>/<?php echo $dado['descricao'] ;?>.png">
                    </div>
                        <div class="produto_desc">

                        <p><?php echo $dado['descricao'] ;?><br></p>
                        <p>R$ <?php echo number_format($dado['preco'], 2, ',', '.') ;?><br></p>
                        
                    </div>
                </a>
            </div>
            <?php } ?>
        </section>
    </div>
</section>
    </section>
        
        <footer>
            <section class="separation"></section>
            <section class="cards">
                <div class="card-atendimento">Atendimento</div>
                <div class="card-informacoes">Informações</div>
                <div class="card-duvidas">Dúvidas</div>
            </section>
            <section class="sub-cards">
                <div class="pagamento">
                    Formas de Pagamento
                </div>
                <div class="redessociais">
                    Redes Sociais
                </div>
                
            </section>
            
        </footer>
</body>
</html>