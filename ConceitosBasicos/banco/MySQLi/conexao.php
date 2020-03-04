<?php


//Parêmetros "server","usuario","senha","banco"
$conn = new mysqli("localhost", "root", "root", "tb_exemplo");


//Testando se ocorreu algum erro na conexão
if($conn->connect_error){
    echo "Error: ".$conn->connect_error; 
    exit;
}

//Dando um insert
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?,?)");
//Identifiando qual o parâmetro que irá ser recebido pelas "?"
//primeiro o tipo dos dados "ss" duas strings e depois os parâmetros
$stmt->bind_param("ss",$login,$pass);

$login = "user";
$pass = "12345";
//Executando depois de ter preparado tudo
$stmt->execute();


?>