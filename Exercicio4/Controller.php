<?php
$temperatura = (Float)$_POST["TempC"];

$fahrenheit = ($temperatura *9/5) + 32;

require_once "view_saida.php";

?>