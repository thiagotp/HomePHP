<?php
//CRIANDO O ARQUIVO E ASSIM TRANSFORMANDO A
//VARIAVEL FILE EM UMA VARIAVEL INSOURCE PQ ELA FAZ REFERENCIA
//A UM ARQUIVO EXTERNO
$file = fopen("log.txt", "a+");
fwrite($file, date("Y-m-d H:i:s") . "\r\n");

fclose($file);

echo "Arquivo criado";

?>