<?php

$a = 10;
$b = 20;

//Passagem de parâmetro por valor
function trocaValor($a){

    $a += 50;

    return $a;
}

//Passagem de parâmetro por referência
function trocaValores(&$b){

    $b += 50;

    return $b;
}

echo trocaValor($a);
echo "<br>";
echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo trocaValores($b);
echo "<br>";
echo $b;


?>