<?php

interface Veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}
//Abstact é uma maneira de fazer um grupo de atributos e ações pré defidas para que outras classes
//herdem os mesmos métodos e atributos dela
abstract class Automovel implements Veiculo{
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

class Audi extends Automovel{
    public function empurrar(){

    }
    
}

$carro = new Audi();

$carro->acelerar(200);

?>