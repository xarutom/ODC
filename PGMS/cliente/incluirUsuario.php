<?php
    include("../../BD/conexao.php");
    
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $datanascimento = $_POST['dataNascimento'];
    $email= $_POST['email'];
    $celular = $_POST['celular'];    
    $senha= $_POST['senha'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];    
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];    
    $bairro = $_POST['bairro'];
   
    $sql="INSERT INTO cliente(nome, sobrenome, dataNascimento, email, celular, senha, cep, logradouro, numero, complemento, estado, cidade, bairro)
            VALUES ('$nome',
            '$sobrenome',
            '$datanascimento',
            '$email',
            '$celular',
            '$senha',
            '$cep',
            '$endereco',
            '$numero',
            '$complemento',
            '$estado',
            '$cidade',
            '$bairro')";

    if(mysqli_query($conexao, $sql)){
        echo "<script>alert('Usuário cadastrado com sucesso'); location.href='login.php';</script>";
            
    }
    else{
        echo "Erro".mysqli_connect_error($conexao);
    }

    mysqli_close($conexao);
?>