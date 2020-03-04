<?php

class Carro {
    private $modelo;
    private $motor;
    private $ano;

    //GETS - retornam valores
    public function getModelo(){
       return $this->modelo;
    }
    public function getMotor():float{
        return $this->motor;
    }
    public function getAno(){
        return $this->ano;
    }

    //SETS - atribuem valores
    public function setModelo($modelo){
        echo $modelo;
        $this->modelo = $modelo;
    }
    public function setMotor($motor){
        $this->motor = $motor;
    }
    public function setAno($ano){
        $this->ano = $ano;
    }

    public function exibir(){
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );
    }
}

$car = new Carro();

$car->setModelo("Ford Ka");
$car->setMotor("1.5");
$car->setAno("2017/2018");

echo $car->getModelo();
echo "<br>";
echo $car->getMotor();
echo "<br>";
echo $car->getAno();
echo "<br>";

print_r($car->exibir());
echo "<br>";
var_dump($car->exibir());

?>