<form method="GET" action="post_get_mesma_pagina.php">
    Produto: <br>
    <input type="text" name="produto" value=""><br>
    Cor: <br>
    <input type="text" name="cor" value=""><br>
    Tipo: <br>
    <input type="text" name="tipo" value=""><br>

    <input type="submit" value="Cadastrar">

</form>

<?php
$cor = $_GET["cor"]??"";
$tipo = $_GET["tipo"]??"";
$produto = $_GET["produto"]?? "(Não selecionado)";
if (isset($_POST["cor"])){
    echo"<p>A cor do $produto é $cor do tipo $tipo</p>";
}
?>