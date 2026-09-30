<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada do código</title>
</head>
<body>
    <header>
    <h1>Conversor de Temperatura</h1>
    </header>
    <main>
        <form action="Controller.php" method="POST">
            <label for="TempC">Temperatura em Celsius</label>
            <br>
            <input type="number" name="TempC" id="TempC" placeholder="Digite os Celsius para serrem convertidos">
            <br><br>
            <button type="submit">ENVIAR</button>
        </form>
    </main>
</body>
</html>