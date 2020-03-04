<?php

class Pessoa{
    public $nome = "Rasmus Lerdorf";
   //protected só é manipulado por classes que herdam os atributos da classe mãe
   //ou por métodos da própria classe 
    protected $idade = 48;
    //private só pode ser manipulado por métodos da própria classe 
    private $senha = "123456";

    public function verDados(){
        echo $this->nome."<br>";
        echo $this->idade."<br>";
        echo $this->senha."<br>";
    }
}

class Programador extends Pessoa{
    public function verDados(){
       echo get_class($this)."<br>";
        echo $this->nome."<br>";
        echo $this->idade."<br>";
        echo $this->senha."<br>";
    }
}

$objeto = new Programador();

$objeto->verDados();



?>