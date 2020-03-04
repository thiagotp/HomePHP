<?php

class Endereco {
    private $logradouro;
    private $numero;
    private $cidade;


    public function __construct($a,$b,$c){
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct(){
        var_dump("DESTRUIR");
    }

    public function __toString(){
        return $this->logradouro.", ".$this->numero.", ".$this->cidade;
    }

    public function getLogradouro(){
        return $this->logradouro;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function getCidade(){
        return $this->cidade;
    }


    public function setLogradouro($logradouro){
        $this->logradouro = $logradouro;
    }
    public function setNumero($numero){
        $this->numero = $numero;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
}

$meuEndereco = new Endereco("brotas","174","Salvador");



var_dump($meuEndereco);

echo "<br>";
echo $meuEndereco;
echo "<br>";
unset($meuEndereco);


?>