<?php

$Nota1 = (Float)$_POST['Nota1'];
$Nota2 = (Float)$_POST['Nota2'];

$media = ($Nota1 + $Nota2) / 2;
 if ($media > 7){
    $situacao = "Aprovado";
}elseif($media >= 5 && $media < 7){ 
    $situacao = "Recuperação";
}else{
    $situacao = "Reprovado";
} 

require_once "view_saida.php";
?>