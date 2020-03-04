<?php

class Pessoa {
    public $nome;
    public function falar():string{
        return "O meu nome é ". $this->nome;
    }
}
//OBS: o $this->variavel serve para fazer mensão a um atributo em qualuer método

$person = new Pessoa();

$person->nome = "Thiago";

echo $person->falar();

?>