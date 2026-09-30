<?php

$numero1 = (float)$_POST['numero1'];
$numero2 = (float)$_POST['numero2'];
$operacao = $_POST['calculo'];
$soma = 0;

if($operacao == "somar"){
    $soma = $numero1 + $numero2;
}elseif($operacao == "subtrair"){
    $soma = $numero1 - $numero2;
}elseif($operacao == "dividir"){
    $soma = $numero1 / $numero2;
}else{
    $soma = $numero1 * $numero2; 
}
require_once "view_saida.php";

?>