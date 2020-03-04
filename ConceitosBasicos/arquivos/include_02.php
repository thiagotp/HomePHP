<?php

//Incluindo o arquivo include_01.php que ontem as função que foi usada
require_once "inc/include_01.php";

$resultado = somar(10,20);

echo $resultado;

//include "inc/include_01.php"
//inlcude "../inc/include_01.php"
//require "inc/include_01.php"
/*
Diferença entre require e include

O require obriga que o arquivo que está sendo chamado exista
e exige que ele esteja funcionando, se não, ele irá apontar um
erro e parar a execução.

require e include acompanhado de once
ex: require_once ou include_once
serve para que o php não chame mais de uma vez um arquivo
evitando assim erro.


O include tenta funcionar mesmo se o arquivo não exista ou não 
esteja funcionando direito. O include é mais potente pois tem um
diretório para ajudar sua execução.
Te dá acesso ao includePath
O include permite que eu use um arquivo de um site externo.
*/


?>
