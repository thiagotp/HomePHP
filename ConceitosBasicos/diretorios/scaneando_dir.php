<?php

$images = scandir("images");

$data = array();


foreach ($images as $key) {
  //O in_array faz uma busca dentro de um array
  if(!in_array("$img",array(".",".."))){
    //Pegando o nome do arquivo
    $filename = "images".DIRECTORY_SEPARATOR.$img;

    $info = pathinfo($filename);
    $info["size"]= filesize($filename);
    $info["modified"]= date("d/m/Y H:i:s", filemtime($filename));
    $info["url"] = "http://localhost/diretorios".str_replace("\\","/",$filename);
    array_push($data, $info);
  }
}

echo json_encode($data);
?>