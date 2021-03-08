<?php
    include "conexao.php";

    $registros = mysqli_query($link, "SELECT * FROM funcionarios");

    echo'<a href="index.php"> Voltar ao início </a><br><br>';
    echo'<a href="forms_update.php"> Atualizar mais funcionários </a><br><br>';
    echo '<a href="delete.php"> Deletar mais funcionários </a><br><br>';

    while($vetor = mysqli_fetch_array($registros)){
        $id = $vetor['id_funcionario'];
        $nome = $vetor['nome_funcionario'];
        $cargo = $vetor['cargo'];
        $codigo = $vetor['codigo_funcionario'];  
        echo"Registro:<br><br>";
        echo"ID do funcionário: $id<br>";
        echo"Nome do funcionário: $nome<br>";
        echo"Cargo: $cargo<br>";
        echo"Código do funcionário: $codigo<hr>";
    }
?>