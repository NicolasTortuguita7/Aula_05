<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saida código</title>
</head>
<body>
    <header>
        <h1>O Total da compra</h1>
    </header>
    <main>
        <p>Nome do cliente:<?= $nomeCliente;?></p>
        <p>Nome do Produto:<?= $nomeProduto;?></p>
        <br><br>
        <p>Preço do Produto:<?= $Preco;?></p>
        <p>Quantidade:<?= $quantidade;?></p>
        <br><br>
        <p>Subtotal:<?= $subtotal;?></p>
        <p>desconto:<?= $desconto;?></p>
        <br><br>
        <p>Total:<?=$total;?></p>
    </main>
</body>
</html>