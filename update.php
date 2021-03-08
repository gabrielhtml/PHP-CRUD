<?php
    include "conexao.php";

    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $codigo = $_POST['codigo'];
    $id = $_POST['id'];

    $query = mysqli_query($link,"UPDATE funcionarios SET nome_funcionario = '$nome', cargo = '$cargo', codigo_funcionario = '$codigo' WHERE id_funcionario = $id");
    header('location:select.php');
?>