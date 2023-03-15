<?php
    include("../BD/conexao.php");
    $consulta = "SELECT * FROM produto WHERE categoria = 'legume'";
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
    <link rel="stylesheet" href="..\estilos\base.css">
    </head>
<body>
<header class="header">
    
    <a href="index.php"><img src="../imagens/conteudo/LogoODCt.png" class="logo"></a>
    
    <nav>
            <li><a class="menu" href="index.php">Início</a></li>
            <li><a class="menu" href="sobre.php">Sobre</a></li>
            <li><a class="menu" href="../PGMS/cliente/login.php">Conta</a></li>
            <li><a class="menu" href="carrinho.php">Carrinho</a></li>
            
        </nav>
    </header>
        <nav>
            <p class="banner">
                </p>
            </nav>
            <section class="inicio">
                
                <section class="flexmenu">
                    <aside>
                        <ul>
                            <li><a class="menuvertical" href="index.php">Todos os produtos</a></li>
                            <li><a class="menuvertical" href="ftfrutas.php">Frutas</a></li>
                            <li><a class="menuvertical" href="ftlegumes.php">Legumes</a></li>
                            <li><a class="menuvertical" href="ftverduras.php">Verduras</a></li>
                        </ul>

                    </aside>
                </section>
<section>
    <div class="titulo_prod">
        <h1 class="ofertas">Ofertas Imperdíveis</h1>
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
            <h1 class="footer">teste footer</h1>
        </footer>
</body>
</html>