<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2 </title>
</head>
<body>
    <header>
        <h1>Numeros da operações</h1>
    </header>
    <main>
        <form action="Controller.php" method="POST">
            <label for="numero1">primeiro Número:</label>
            <br>
            <input type="number" name="numero1" id="numero1" placeholder="Digite o primeiro número">
            <br><br>
            <label for="numero2">Segundo Número:</label>
            <br>
            <input type="number" name="numero2" id="numero2" placeholder="Digite o segundo número">
            <br><br>
            <label for="">selecione uma operação:</label>
            <br>
             <select name="calculo" id="calculo">
                <option value="" selected disabled>Selecionar ...</option>
                <option value="somar">somar</option>
                <option value="subtrair">subtrair</option>
                <option value="dividir">dividir</option>
                <option value="multiplicar">multiplicar</option>
             </select>
            <button type="submit">ENVIAR</button>
        </form>
    </main>
</body>
</html>