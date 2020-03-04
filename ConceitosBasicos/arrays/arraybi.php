<?php

$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "EcoSport";

print_r($carros);
echo "<br>";

echo $carros[1][3];

//O end me tras a última posição do array com inicio 0
echo end($carros[0]);

?>