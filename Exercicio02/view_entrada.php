<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>
<body>
    <header>
        <h1>Cadastro do aluno</h1>
    </header>
    <main>
        <form action="logicaController.php" method="POST">
            <label for="nome">Nome do aluno:</label>
            <br>
            <input type="text" name="nome" id="nome" placeholder="Digite o nome do aluno">
            <br><br>

            <label for="Nota1">Nota1</label>
            <br>
            <input type="number" name="Nota1" id="Nota1" placeholder="digite a primeira nota do aluno">
            <br><br>

            <label for="Nota2">Nota2</label>
            <br>
            <input type="number" name="Nota2" id="Nota2" placeholder="digite a segunda nota do aluno">
            <br><br>
            <button type="submit">ENVIAR</button>
            
        </form>
    </main>
</body>
</html>