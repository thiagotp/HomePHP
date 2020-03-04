<?php

class Usuario{
  private $idusuario;
  private $deslogin;
  private $dessenha;
  private $dtcadastro;

  public function getIdusuario(){
    return $this->idusuario;
  }

  public function getDeslogin(){
    return $this->deslogin;
  }

  public function getDessenha(){
    return $this->dessenha;
  }

  public function getDtcadastro(){
    return $this->dtcadastro;
  }

  public function setIdusuario($value){
    $this->idusuario = $value;
  }

  public function setDeslogin($value){
    $this->deslogin = $value;
  }

  public function setDessenha($value){
    $this->dessenha = $value;
  }

  public function setDtcadastro($value){
    $this->dtcadastro = $value;
  }

  //Buscando no banco pelo id
  public function loadById($id){
    $sql = new SQL();

    $result = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID",array(
      ":ID"=>$id
    ));
    
    //verificando se existe alguma coisa na posição 0
    if(isset($result[0])){
      $row = $result[0];
      //Setando as variáveis do objeto com as informações do banco de dados
      $this->setIdusuario($row["idusuario"]);
      $this->setDeslogin($row["deslogin"]);
      $this->setDessenha($row["dessenha"]);
      $this->setDtcadastro(new DateTime($row["dtcadastro"]));
    }
  }

  //Exibindo as informações do banco de dados
  public function __toString(){
    return json_encode(array(
      "idusuario"=>$this->getIdusuario(),
      "deslogin"=>$this->getDeslogin(),
      "dessenha"=>$this->getDessenha(),
      "dtcadastro"=>$this->getDtcadastro()->format("d/m/y H:i:s")
    ));
  }
}

?>