<?php

function __autoload($nomeClasse){
    require_once("$nomeClasse.php");
}

$carro = new Audi();
var_dump($carro);
$carro->acelerar();
?>