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
                <li><a href="select.php">Ver registros</a></li>
                <li><a href="forms_update.php">Atualizar Registros</a></li>
                <li><a href="delete.php" class="deletar">Deletar Funcionário</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="form">
            <form action="inserir.php" method="POST">
                <fieldset class="caixa">
                <h1>Inserir Funcionários</h1>
                    <div class="campo_registro">
                        <label>Nome:</label>
                        <input type="text" name="nome" required placeholder="Nome do funcionário">
                    </div>
                    <div class="campo_registro">
                        <label>Cargo:</label>
                        <input type="text" name="cargo" required placeholder="Cargo do funcionário">
                    </div>
                    <div class="codigo_funcionario">
                        <label>Código:</label>
                        <input type="number" name="codigo" required placeholder="Código do funcionário">
                        <button type="submit">Registrar funcionário</button>
                    </div>
                </fieldset>
            </form>
        </section>
    </main>
    <footer>

    </footer>
</body>
</html>