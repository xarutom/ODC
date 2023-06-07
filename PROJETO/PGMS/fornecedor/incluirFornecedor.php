<?php
    include("../../BD/conexao.php");
    
    $cnpj=$_POST['cnpj'];
    $inscricaoEstadual=$_POST['inscricaoEstadual'];
    $razaoSocial=$_POST['razaoSocial'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];      
    $senha=$_POST['senha'];
    $cep=$_POST['cep'];
    $endereco=$_POST['endereco'];
    $numero=$_POST['numero'];
    $complemento=$_POST['complemento'];    
    $estado=$_POST['estado'];
    $cidade=$_POST['cidade'];    
    $bairro=$_POST['bairro'];
   
    $sql="INSERT INTO fornecedor(cnpj, inscricaoEstadual, razaoSocial, email, telefone, senha, cep, logradouro, numero, complemento, estado, cidade, bairro)
            VALUES ('$cnpj', '$inscricaoEstadual', '$razaoSocial', '$email', '$telefone', '$senha', '$cep', '$endereco', '$numero', '$complemento', '$estado', '$cidade', '$bairro')";

    if(mysqli_query($conexao, $sql)){
        echo "<script>alert('Fornecedor cadastrado com sucesso.'); location.href='loginFornecedor.php';</script>";
        
    }
    else{
        echo "Erro".mysqli_connect_error($conexao);
    }

    mysqli_close($conexao);
?>