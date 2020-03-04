<?php

$frase = "A repetição é a mãe da retenção.";

//Diz a posição que a palavra procurada está
$q = strpos($frase, "mãe");

$palavra = "mãe";
//Pega os elementos que estão de uma determinada localização no texto até outra
/**
 * 1º - variável que contem o texto
 * 2º - onde irá iniciar a procura
 * 3º - o limite da procura
 */
$texto = substr($frase, 0, $q);

var_dump($q);
echo "<br>";
var_dump($texto);
echo "<br>";

//strlen serve para pegar o tamanho da string
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
var_dump($texto2);

?>