<?php

$nomeCliente = $_POST["nomeC"];
$nomeProduto = $_POST["nomeP"];
$Preco = (Float)$_POST["PrecoP"];
$quantidade = $_POST["Quatidade"];

$subtotal = $Preco * $quantidade;
$desconto = $Preco * 0.10;
$total = $desconto + $subtotal;
if ($total > 200){
    $situacao = "Parabèns Você conseguiu um desconto de 10%";
}else {
    $situacao = "Você não conseguiu o desconto de 10%";
}
require_once "view_saida.php";
?>