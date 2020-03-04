<?php

require_once "config.php";

//Limpa a variável
session_unset();

//Limpa a variável e retira seu usuário
session_destroy();
echo $_SESSION['nome'];

?>