<?php

$conn - new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ? ");

$id = 1;

$stmt->execute(array($id));

//volta a query
$conn->rollback();
//confirma a query
$conn->commit();

echo "Cadastro Deletado";
?>
