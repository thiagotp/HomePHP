<?php
//DSN - Data Searching Name
//tipo de banco, nome do banco e onde ele está,       usuario  senha
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "root");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

//Server da mesma maneira que o fetchArray mas sem o uso do while
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($results);

//Navegando pelo resultado do fetchAll
foreach ($variable as $row) {
    foreach ($row as $key => $value) {
        echo "<strong>".$key.":</strong>".$value."</br>";
    }
    echo "=====================================================<br>";
}

?>