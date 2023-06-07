<?php
include("../BD/conexao.php");
$consulta = "SELECT * FROM produto WHERE categoria = 'verdura'";
$con = mysqli_query($conexao, $consulta) or die . mysqli_error($conexao);
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
            <li class="pages"><a class="menu" href="index.php">Início</a></li>
            <li class="pages"><a class="menu" href="sobre.php">Sobre</a></li>
            <li class="pages"><a class="menu" href="../PGMS/cliente/login.php">Conta</a></li>
        </nav>
    </header>

    <nav>
        <p class="banner"></p>
    </nav>

    <section class="inicio">

        <section class="flexmenu">
            <aside>
                <ul>
                    <li class="column">
                        <a href="index.php"><button class="menuvertical">Todos os Produtos</button></a>
                    </li>
                    <li class="column">
                        <a href="ftfrutas.php"><button class="menuvertical" id="menor">Frutas</button></a>
                     </li>
                    </li>
                    <li class="column">
                        <a href="ftlegumes.php"><button class="menuvertical" id="menor">Legumes</button></a>
                    </li>
                    <li class="column">
                        <a href="ftverduras.php"><button class="menuvertical" id="menor">Verduras</button></a>
                    </li>
                </ul>
            </aside>
        </section>

        <section>
            <div class="titulo_prod">
                <h1 class="ofertas">Ofertas Imperdíveis</h1>
            </div>
            <div>
                <section class="flex">
                    <?php while ($dado = $con->fetch_array()) { ?>
                        <div class="icone_prod">
                            <a href="#">
                                <div class="img_prod">

                                    <img class="produto" src="../imagens/Produtos/<?php echo $dado['categoria']; ?>/<?php echo $dado['descricao']; ?>.png">
                                </div>
                                <div class="produto_desc">

                                    <p><?php echo $dado['descricao']; ?><br></p>
                                    <p>R$ <?php echo number_format($dado['preco'], 2, ',', '.'); ?><br></p>

                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </section>
            </div>
        </section>
    </section>

    <footer>
        <section class="footer">

            <section class="part2">

                <section class="card">
                    <div class="card">
                        <a class="link-card" href="sobre.php">
                            <h1 class="h1-card">Sobre nós</h1>
                            <p class="p-card">Saiba mais sobre nossa história, não fique de fora</p>
                        </a>
                    </div>
                    <div class="card">
                        <a href="../PGMS/cliente/login.php" class="link-card">
                            <h1 class="h1-card">Faça parte!</h1>
                            <p class="p-card">Venha ser um agricultor familiar e poder crescer juntos</p>
                        </a>
                    </div>
                </section>
                <section class="options">
                    <div class="end">
                        <p class="p-op" id="op">Rua Dr. Zuquim, 298 - Santana, São Paulo - SP <br> 02035-020</p>
                    </div>
                    <div class="contact">
                        <h1 class="h1-op" id="con">
                            Entre em contato
                            <br>
                            conosco
                            <br> <br>
                            21 7165-9098
                        </h1>
                    </div>
                    <div class="sac">
                        <a href="#" class="h1-op">
                            <h1 class="h1-op" id="op">
                                Reclame Aqui!
                            </h1>
                        </a>

                    </div>
                </section>

                <section class="footer-footer">
                    <div class="subgrp">
                        <div class="icons">

                            <a href="https://www.instagram.com" target="_blank">
                                <img class="icon-footer" src="IconIndex/instagram.png" alt="Instagram" srcset="">
                            </a>
                            <a href="https://web.whatsapp.com" target="_blank">
                                <img class="icon-footer" src="IconIndex/whatsapp.png" alt="Instagram">
                            </a>
                            <a href="https://pt-br.facebook.com" target="_blank">
                                <img src="IconIndex/facebook.png" alt="" class="icon-footer-end">
                            </a>
                        </div>
                    </div>
                </section>
            </section>
        </section>
    </footer>
</body>

</html>