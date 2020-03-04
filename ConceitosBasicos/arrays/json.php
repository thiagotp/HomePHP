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

echo json_encode($pessoas);




?>
