<?php
    include("../../BD/conexao.php");
    $consulta = "SELECT email, senha FROM cliente";
    $con = mysqli_query($conexao, $consulta) or die .mysqli_error($conexao);

    if(isset($_POST['email']) && strlen($_POST['email']) > 0){
    
        if(!isset($_SESSION))
            session_start();
        
        $_SESSION['email'] = $conexao->escape_string($_POST['email']);
        $_SESSION['senha'] = $_POST['senha'];
    
        $sql_code = "SELECT senha, nome, codCliente FROM cliente WHERE email = '$_SESSION[email]'";
        $sql_query = $conexao->query($sql_code) or die ($conexao->error);
        $dado = $sql_query->fetch_assoc();
        $total = $sql_query->num_rows;
    
        if($total == 0){
            $erro[] = "E-mail não cadastrado.";
            
        }else{
    
            if($dado['senha'] ==  $_SESSION['senha']){
    
                $_SESSION['usuario'] = $dado['nome'];
                
            }
            else{
                $erro[] = "Senha incorreta.";
            
            }
        }
    
        if(!isset($erro)){
            echo "<script>alert('Login efetuado com sucesso'); location.href='../../site/index.php';</script>";
        
        }
    }
    else {
        
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
        form .btn{ width: 200px; cursor:pointer; font-size: 18px;}
    </style>
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
            </p><br>
        </nav><br>
        <h1>Olá visitante!</h1>            
        <?php 
            if(isset($erro))
                foreach($erro as $msg){
                    echo "<script>alert('$msg');</script>";
            }
        ?>
        <div>
            <form action="" method="post">
                <p>&nbsp;&nbsp;&nbsp;Acesse sua conta<br> <br>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-MAIL<br>&nbsp;&nbsp;&nbsp;<input value="<?php if(isset($_SESSION))echo $_SESSION['email'] ?>" name="email" placeholder="" type="text"></p><br>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SENHA<br>&nbsp;&nbsp;&nbsp;<input name="senha" type="password" ></p><br>
                <p>&nbsp;&nbsp;&nbsp;<input value="Entrar" type="submit"></p>
                <p>&nbsp;&nbsp;&nbsp;<a href="recuperaSenhaCliente.php">Esqueci minha senha</a></p><br><br>
                <br>
                &nbsp;&nbsp;Não tem uma conta? <a href="cadastraCliente.php">CADASTRE-SE!</a>
                <br>&nbsp;&nbsp;Fornecedor?<a href="../fornecedor/loginFornecedor.php"> ACESSE AQUI.</a>
            </form><br>
        </div>
        
</body>
</html>