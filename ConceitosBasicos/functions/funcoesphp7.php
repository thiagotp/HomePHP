<?php

//"int... $valores" declaração de fluxo escalares
function soma(int ...$valores){
    return array_sum($valores);
}

echo soma(2,2,2,4,5);
echo "<br>";
echo soma(25,35);
echo "<br>";
//Como falei que eram inteiros ele só somou a parte inteira
echo soma(1.5,3.2);
echo "<br>";

//":string" Dizendo qual tipo de retorno a função irá me dar
function somar(int ...$valores):string{
    return array_sum($valores);
}

echo var_dump(somar(2,2,2,4,5));
echo "<br>";
echo var_dump(somar(25,35));
echo "<br>";
//Comvar_dump(o falei que eram inteiros ele só somou a parte inteira
echo var_dump(somar(1.5,3.2));
echo "<br>";

?>