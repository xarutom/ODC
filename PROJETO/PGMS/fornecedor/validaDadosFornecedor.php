<?php
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