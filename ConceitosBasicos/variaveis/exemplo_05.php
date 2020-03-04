<?php

$nome = "Thiago";

//$message;
//Variável que não foi encontrada no escopo da função teve que ser transformada em global usando a palavra reservada
function teste(){
    global $nome ;
    echo $nome;
}

//Continua undefined
function teste2(){

    echo $nome." agora no teste 2";
    
}
//Usando uma variável global que foi declarada dentro de uma função fora do seu escopo
function testa(){
    global $message;
    $message = "as";
}
testa();

global $message;
echo $message;
teste(); 
teste2();

?>