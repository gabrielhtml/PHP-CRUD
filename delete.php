<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>CRUD Funcionários</title>
</head>
<body>
    <header class="content_header">
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="select.php">Ver registros</a></li>
                <li><a href="forms_update.php">Atualizar Registros</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="form">
            <form action="deletar.php" method="POST">
                <fieldset class="caixa">
                <h1>Deletar Funcionário</h1>
                    <div class="codigo_funcionario">
                        <label>ID Funcionario:</label>
                        <input type="number" name="id" required placeholder="ID do funcinário">
                        <button type="submit">Deletar funcionário</button>
                    </div>
                </fieldset>
            </form>
        </section>
    </main>
    <footer>

    </footer>
</body>
</html>