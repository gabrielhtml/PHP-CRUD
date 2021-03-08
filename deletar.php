<?php
    include 'conexao.php';

    $id = $_POST['id'];

    mysqli_query($link,"DELETE FROM funcionarios WHERE id_funcionario = '$id'");
    header('location:select.php');
?>