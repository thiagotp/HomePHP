<?php

//Polimorfismo é quando métodos com o mesmo nome em classes diferentes(herdadas)
//tem comportamento diferente

abstract class Animal{
    public function falar(){
        return "som";
    }

    public function mover(){
        return "anda";
    }
}

class Cachorro extends Animal{
    public function falar(){
        return "Late";
    }
}

class Gato extends Animal{
    public function falar(){
        return "Mia";
    }
}


class Passaro extends Animal{
    public function falar(){
        return "Pia";
    }
    //Editando o método e ainda chamando o método da classe pai
    public function mover(){
        return "Voa e ".parent::mover();
    }
}
$pluto = new Cachorro();
$gato = new Gato();
$passaro = new Passaro();


echo $pluto->falar(). "<br>";
echo $pluto->mover(). "<br>";
echo '========================='."<br>";
echo $gato->falar(). "<br>";
echo $gato->mover(). "<br>";
echo '========================='."<br>";
echo $passaro->falar(). "<br>";
echo $passaro->mover(). "<br>";

?>