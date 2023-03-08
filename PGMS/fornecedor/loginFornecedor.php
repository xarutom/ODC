<?php
    include("../../BD/conexao.php");
    $consulta = "SELECT email, senha FROM fornecedor";
    $con = mysqli_query($conexao, $consulta) or die .mysqli_error($conexao);

    if(isset($_POST['cnpj']) && strlen($_POST['cnpj']) > 0){
    
        if(!isset($_SESSION))
            session_start();
        
        $_SESSION['cnpj'] = $conexao->escape_string($_POST['cnpj']);
        $_SESSION['senha'] = $_POST['senha'];
    
        $sql_code = "SELECT senha, razaoSocial, idFornecedor FROM fornecedor WHERE cnpj = '$_SESSION[cnpj]'";
        $sql_query = $conexao->query($sql_code) or die ($conexao->error);
        $dado = $sql_query->fetch_assoc();
        $total = $sql_query->num_rows;
    
        if($total == 0){
            $erro[] = "CNPJ não cadastrado.";
        }else{
    
            if($dado['senha'] ==  $_SESSION['senha']){
    
                $_SESSION['usuario'] = $dado['idFornecedor'];
            }
            else{
                $erro[] = "Senha incorreta.";
            }
        }
    
        if(!isset($erro)){
            echo "<script>alert('Login efetuado com sucesso'); location.href='loginFornecedor.php';</script>";
            
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ODC | Orgânicos de Casa</title>
    <link rel="icon" type="image/x-icon" href="..\..\imagens\conteudo\faviconODCt.ico">
    <link rel="stylesheet" href="..\..\estilos\base.css">
    <link rel="stylesheet" href="..\..\estilos\conta.css">
    </head>
    <style>
        form { border: 5px solid #024e1b; border-radius: 15px; float: left; padding: 12px; margin-left: 500px; margin-top: 50px; font: 16px; font-family: Poppin, Verdana, sans-serif; color: #025e1d;}
        form input{ padding: 4px; width: 500px; display:rgb(3, 212, 177); }
        form .btn{ width: 220px; cursor:pointer; font-size: 25px;}
    </style>
    <body>
        <header class="header">
            <a href="../../SITE/index.php"><img src="../../imagens/conteudo/LogoODCt.png" class="logo"></a>
                <nav>
                    <li><a class="menu" href="../../SITE/sobre.php">Sobre</a></li>
                    <li><a class="menu" href="../cliente/login.php">Conta</a></li>
                    <li><a class="menu" href="../../SITE/carrinho.php">Carrinho</a></li>
                </nav>
        </header>
            <nav>
                <p class="banner">
                    <li><a class="menuhorizontal" href="../../SITE/index.php">Início</a></li>
                </p><br>
            </nav><br>
        <?php 
            if(isset($erro))
                foreach($erro as $msg){
                    echo "<script>alert('$msg');</script>";
            }
        ?> 
        <div><br>
            <form action="" method="post">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;Acesse sua conta<br> <br>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CNPJ<br>&nbsp;&nbsp;&nbsp;&nbsp;<input value="<?php if(isset($_SESSION))echo $_SESSION['cnpj'] ?>" name="cnpj" placeholder="00.000.000/0000-00" type="text"></p><br>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SENHA<br>&nbsp;&nbsp;&nbsp;&nbsp;<input name="senha" type="password" ></p><br>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;<input value="Entrar" type="submit"></p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="recuperaSenhaFornecedor.php">Esqueci minha senha</a></p><br>
                <br>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="cadastraFornecedor.php">CADASTRE-SE <br></a>&nbsp;&nbsp;&nbsp;&nbsp;E faça parte do time de fornecedores da Orgânicos de Casa.   </p><br>
            </form><br>
        </div>
    </body>
</html>