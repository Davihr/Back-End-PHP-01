<?php

$tempo = "sol";


if ($tempo == "chuva"){
    echo ("Está $tempo e não vou à escola");
}elseif ($tempo == "sol"){
    echo ("Está $tempo e vou à escola");
}elseif ($tempo == "nevando"){
    echo ("Está $tempo e não vou à escola");
}elseif ($tempo == "nublado"){
    echo ("Está $tempo e vou à escola");
}else{
    echo ("Está acontecendo tudo menos chuva, então vou para a escola");
}
?>