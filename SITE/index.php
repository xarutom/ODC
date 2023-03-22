<?php
    include("../BD/conexao.php");
    $consulta = "SELECT * FROM produto WHERE categoria = categoria" ;
    $con = mysqli_query($conexao, $consulta) or die .mysqli_error($conexao);

    // while($result = mysqli_fetch_array($con)){
    // // echo $result['codproduto'];
    //    echo '<br>';
    //    echo $result['descricao'] . $result['quantidade'];
    // }

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
            <section class="inicio">
                <form action="#" method="post">
                    <section class="flexmenu">
                        <aside>
                           
                            <ul>
                                <form action="#" method="post">
                               
                                    <li class="column">
                                        <button type="button"  name="todos-os-produtos" class="menuvertical">Todos os Produtos</button>
                                        <?php 
                                            //$fruta = $_POST['Fruta'];
                                            //$sql = 'SELECT * FROM produto WHERE  categoria = '
                                        ?>
                                    </li>
                                    <li class="column">

                                        <button type="button"  name="Fruta" class="menuvertical fruta" id="menor">Frutas</button>
                                        <?php 
                                        //    $fruta = $_POST['Fruta'];
                                        //    $sql = "SELECT * FROM produto WHERE  categoria = $fruta";
                                        //    $con = mysqli_query($conexao, $sql)
                                        ?>
                                    </li>
                                    <li class="column">
                                        <button type="button"  name="Legume" class="menuvertical legume" id="menor">Legumes</button>
                                    </li>
                                    <li class="column">
                                        <button type="button"  name="Verdura" class="menuvertical verdura" id="menor">Verduras</button>
                                    </li>
                                </form>
                           </ul>
                        </aside>
                    </section>
                </form>
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
            <h1 class="footer">teste footer</h1>
        </footer>
        <script language="javascript" src="ODC/js/index.js"></script>
</body>
</html>