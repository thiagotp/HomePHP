<?php

$json = '[{"nome":"Thiago","idade":20},{"nome":"Pri","idade":25}]';

//O parâmetro true serve para que seja transformado em um array e não em objeto
$data = json_decode($json, true);

var_dump($data)

?>