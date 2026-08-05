<?php
$n1 = $_GET[("n1")]??'';
$n2 = $_GET[("n2")]??'';

$resultado = $n1 + $n2;

echo ("$n1 + $n2 = ");
echo $resultado;
//Para testar
//http://localhost/davi.com.br/variaveis_get.php?n1=3&n2=2
?>