<?php

function ola($texto){
  echo "Olá $texto <br>";
}

echo ola("Mundo");
echo ola("Thiago");

function olar($texto = "Mundo"){
  echo "Olá $texto <br>";
}
echo olar();
echo olar("");

?>