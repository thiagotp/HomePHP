<?php

require_once("config.php");

$sql = new Sql();
//PEGANDO DADOS DO BANCO DE DADOS
$sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

//IDENTIFICANDO O TITULO PARA AS COLUNAS CSV

foreach($usuarios[0] as $key => $value){
  array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");

$fwrite ($file, implode(",", $headers). "\r\n");
//FOREACHE PARA PERCORRER AS LINHAS
foreach($usuarios as $row){
  $data = array();
  //FOREACH PARA PERCORRER OS VALORES DAS LINHAS(COLUNAS)
  foreach ($row as $key => $value) {
    array_push($data,$value);
  }

  fwrite($file, implode(",",$data). "\r\n");
}

fclose($file);
?>