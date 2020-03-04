<?php

class Sql extends PDO{
  private $conn;

  public function __construct(){
    $this->conn = new PDO("mysql:host=localhost;dbname=nomedobanco","usuario","senha");
  }

  //Esse método irá verificar quais os parâmetros existentes e seu valores
  private function setParams($statment,$parameters = array()){
    foreach ($parameters as $key => $value) {
      $this->setParam($key,$value);
    }
  }
  //Esse método irá setar os parâmetros na query sql
  private function setParam($statment, $key, $value){
    $statment->bindParam($key,$value);
  }

  //Esse método vai receber a query e vai tratar para relacionar os parametros na query
  public function query($rawQuery, $params=array()){
    $stmt = $this->conn->prepare($rawQuery);
    
    $this->setParams($stmt,$params);
    $stmt->execute();
    return $stmt;
  }

  //Retornando os dados do banco de dados de acordo com a query
  public function select($rawQuery, $params=array()):array{
    $stmt = $this->query($rawQuery,$params);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}

?>