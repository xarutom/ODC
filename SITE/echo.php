<?php
    include("../BD/conexao.php");
    $consulta = "SELECT * FROM produto WHERE categoria = 'verdura'";
    $con = mysqli_query($conexao, $consulta) or die .mysqli_error($conexao);
?>