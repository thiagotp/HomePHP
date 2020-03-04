<?php
//Exemplo da URL
//localhost/HomePHP/ConceitosBasicos/variaveis/exemplo_04.php?a=123&b=456

//GET é um array super global que tem todas as variáveis recebidas pela URL 
$nome = $_GET["a"];
//convertendo o dado que chegou da URL para o tipo que eu quero
$nome2 = (int)$_GET["b"];

//pegando o IP do provedor de acesso do usuário
$ip = $_SERVER["REMOTE_ADDR"];
//verificando o que o usuário está acessando
$what = $_SERVER["SCRIPT_NAME"];

var_dump($nome);
echo "</br>";
var_dump($nome2);
echo "</br>";
var_dump($ip);
echo "</br>";
var_dump($what);
?>