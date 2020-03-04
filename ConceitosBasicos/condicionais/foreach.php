<?php

$meses= array("janeiro","fevereiro","março",
"abril","maio","junho",
"julho","agosto","setembro",
"outubro","novembro","dezembro");


//KEY - indice do array   VALUE => Valor contido naquela posição do array
foreach ($meses as $index => $value) {
    echo "O índice é: ".$index." e o valor é ".$value."<br><br>";
}

//Primeiro parâmetro é o array e o parâmetro depois do "as" é a variável que representao conteúdo naquela posição
foreach ($meses as $mes) {
    echo "$mes"."<br>";
}

?>
