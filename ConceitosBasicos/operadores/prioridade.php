<?php

//prioridade normal da matemática
$resultado = 10 + 3 / 2;

echo $resultado;

//forçando mudança de prioridade e usando condição
$resultado2 = (10 + 3) / 2 > 5 && 10 + 5 < 20;

var_dump($resultado2);
?>