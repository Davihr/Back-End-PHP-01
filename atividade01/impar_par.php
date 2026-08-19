<?php
$numero = $_POST["numero"];

function parOuImpar($numero){
    if ($numero % 2 == 0){
        return "Par";
    }else{
        return "Impar";
    }
}

if ($numero != ""){
    echo "$numero é ". parOuImpar($numero);
}else{
    echo "Nenhum número digitado";
}
?>