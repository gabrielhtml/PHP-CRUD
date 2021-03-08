<?php
    include "conexao.php";

    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $codigo = $_POST['codigo'];

    mysqli_query($link,"INSERT INTO funcionarios(nome_funcionario, cargo, codigo_funcionario)VALUES('$nome','$cargo','$codigo')");
    header('location:index.php');
?>