<?php

$conn = new PDO("sqlsrv:Database=dbphp7;server:localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");
//ConnectionPooling tem a ver com mantes o estado da conexão. Se a conexão fica ligada
//ou termina a cada execução de alguma coisa
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

//Server da mesma maneira que o fetchArray mas sem o uso do while
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);
?>