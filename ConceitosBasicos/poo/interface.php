<?php
//Interface serve para criar funções que serão obrigatórias na classe em que
//ela for implementada;
interface Veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

class Civic implements Veiculo{
    public function acelerar($velocidade){
        echo "O veículo acelerou até ". $velocidade. " km/h";
    }
    public function frenar($velocidade){
        echo "O veículo frenou até ". $velocidade. " km/h";
    }
    public function trocarMarcha($marcha){
        echo "O veículo engatou a marchar ". $marcha;
    }
}

$carro = new civic();
    $carro->trocarMarcha(1);
    echo "<br>";
    $carro->acelerar(80);
    echo "<br>";
    $carro->frenar(50);
    echo "<br>";
?>