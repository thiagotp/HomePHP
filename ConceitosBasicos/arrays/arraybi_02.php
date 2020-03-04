<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' =>'Thiago',
    'idade'=>20
));


array_push($pessoas, array(
    "nome" =>"Pri",
    "idade"=>25
));

print_r($pessoas);
echo "<br>";

print_r($pessoas[1]["nome"]);

?>