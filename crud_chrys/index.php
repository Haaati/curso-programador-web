<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Básico</title>
</head>
<body>

    <h1>Cadastro de alunos</h1>
    <form action="cadastrar.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="name" placeholder="Digite o nome do aluno" required>

        <br><br>

        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade" min="0" placeholder="Digite a idade do aluno" required>

        <br><br>

        <button type="submit">Cadastrar</button>
    </form>

    <br>

    <a href="listar.php">Ver alunos</a>

</body>
</html>