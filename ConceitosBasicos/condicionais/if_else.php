<?php

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 68;

$qualASuaIdade = 30;

if($qualASuaIdade < $idadeCrianca){
  echo "Criança";
}else if($qualASuaIdade < $idadeMaior){
  echo "Adolecente";
}else if($qualASuaIdade < $idadeMelhor){
  echo "Adulto";
}else{
  echo "Idoso";
}


//Operador ternário
echo "<br>";
echo ($qualASuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade";

?>