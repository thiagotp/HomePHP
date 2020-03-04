<?php

$conn - new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN,:PASSWORD)");

$login = "thiago";
$senha = "1234567";

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$senha);

$stmt->execute();

echo "dados inseridos com sucesso!";
?>