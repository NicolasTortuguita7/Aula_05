<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada das Views</title>
</head>
<body>
    <header>
        <h1>Compras</h1>
    </header>
    <main>
        <form action="Controller.php" method="POST">
            <label for="">Nome do cliente:</label>
            <br>
            <input type="text" name="nomeC" id="nomeC" placeholder="digite o nome do cliente">
            <br><br>
            <label for="nomeP">Nome do Produto</label>
            <br>
            <input type="text" name="nomeP" id="nomeP" placeholder="Digite o nome do produto">
            <br><br>
            <label for="PrecoP">Preço do produto</label>
            <br>
            <input type="number" name="PrecoP" id="PrecoP" placeholder="digite o preço do produto">
            <br><br>
            <label for="Quantidade">Quantidade de Produto:</label>
            <br>
            <input type="numeber" name="Quatidade" id="Quantidade" placeholder="digite a quantidade de produto">
            <button type="submit">ENVIAR</button>
        </form>
    </main>
</body>
</html>