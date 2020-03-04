<?php

$condicao = true;

while($condicao){

    $numero = rand(1,10);

    if($numero === 3){
        echo "A condição é falsa! <br>";
        $condicao = false;
        
    }else{

    echo $numero . " <br>";
    }
}

?>