<?php
$numero1 = $_POST["numero1"]??0;
$numero2 = $_POST["numero2"]??0;

$soma = $numero1 + $numero2;
echo "$numero1 + $numero2 = $soma";
?>