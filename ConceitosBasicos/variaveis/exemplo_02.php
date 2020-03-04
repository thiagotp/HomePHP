<?php

//Padrão de escrita de variável
$anoCompleto = 1994;

//Número apenas no final de variáveis
$nome1 = "Thiago";

$nome2 = "Teixeira";
//O único caractere especial permitido é o underline
$_underline = "_";

echo $nome1;

echo "<br/>";

//Concatenação de variáveis 
$nomeCompleto = $nome1 . " " . $nome2;

echo $nomeCompleto;



//"UNSET" faz com que a variável seja deletada ou apagada da memória do programa
unset($nome1);

//O isset serve como uma validação para saber se a variável existe
if(isset($nome1)){
    echo $nome1;
}




?>