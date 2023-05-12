<?php
    session_start();
    include("../../BD/conexao.php");
    $consulta = "SELECT * FROM produto WHERE categoria = 'verdura'";
    $con = mysqli_query($conexao, $consulta) or die .mysqli_error($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ODC | Orgânicos de Casa</title>

    <link rel="icon" type="image/x-icon" href="..\..\imagens\conteudo\faviconODCt.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../ESTILOS/reset.css">
    <link rel="stylesheet" href="../../ESTILOS/perfil.css">
     
</head>
<body>
    <header class="header">    
        <a class="logo-inicio" href="../../SITE/index.php"><img class="logo-inicio" src="../../imagens/conteudo/LogoODCt.png" ></a>    
    <nav>
        <ul class="menu">
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Meus Anúncios</a></li>
        </ul>
    </nav>
    </header>
    
</body>
</html>