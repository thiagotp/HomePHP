<?php

$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1990;
$salario = 5500.05;
$bloqueado = false;
echo $ano.$nome;
echo "</br>";

////////////////////////////////////////////////
//Array
$frutas = array("abacaxi", "laranja", "manga");
echo $frutas[2];
echo "</br>";
//Objeto
$nascimento = new DateTime();
var_dump($nascimento);
echo "</br>";
//Leitura de arquivo
$arquivo = fopen("exemplo_03.php", "r");
var_dump($arquivo);
echo "</br>";

$nulo = NULL;

?>