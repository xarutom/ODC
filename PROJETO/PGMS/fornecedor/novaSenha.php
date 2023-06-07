<?php
include("../../BD/conexao.php");
if(isset($_POST['ok'])){
    $error = "";

    $email= $conexao->escape_string($_POST['email']);

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $erro[] = "E-mail inválido.";

    }

    $sql_code = "SELECT senha, codFornecedor FROM fornecedor WHERE email = '$email'";
    $sql_query = $conexao->query($sql_code) or die ($error);
    $dado = $sql_query->fetch_assoc();
    $total = $sql_query->num_rows;

    if($total == 0)
        $erro[] = "O e-mail informado não existe no banco de dados.";

    if(count($erro) == 0 && $total > 0){

        $novasenha = substr(md5(time()), 0, 6);
        $nscriptografada = md5(md5($novasenha));
        

        if(mail($email, "Sua nova senha", "Sua nova senha: ".$novasenha)){

            $sql_code = "UPDATE fornecedor SET senha = '$nscriptografada' WHERE email = '$email'";
            $sql_query = $mysqli->query($sql_code) or die ($mysqli->error);

        }
    }
}

substr(md5(time()), 0, 6);