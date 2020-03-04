<?php


//Parêmetros "server","usuario","senha","banco"
$conn = new mysqli("localhost", "root", "root", "tb_exemplo");


//Testando se ocorreu algum erro na conexão
if($conn->connect_error){
    echo "Error: ".$conn->connect_error; 
    exit;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");


//O fetch_array vasculha tudo que foi retornado na variável $result e 
//olha os dados que existem (Como se fosse um cursor no MySQL)
while($row = $result->fetch_array()){
    var_dump($row);
}

while($row = $result->fetch_array(MYSQLI_ASSOC)){
    var_dump($row);
}

while($row = $result->fetch_assoc()){
    var_dump($row);
}

//Transformando o retorno em json
$j_son = array();
while($row = $result->fetch_array(MYSQLI_ASSOC)){
    array_push($j_son, $row);
}

echo json_encode($j_son);

?>