<?php


//O "true" nesse exemplo serve para transformar em case sensitive
define("BANCO_DE_DADOS", [
        '127.0.0.1',
        'root',
        'password',
        'teste'
], true);

print_r(BANCO_DE_DADOS);

?>