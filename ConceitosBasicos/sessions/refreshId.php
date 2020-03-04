<?php


//para resgatar um id antigo eu posso declarar ele antes do require 
require_once "config.php";

session_regenerate_id();

echo session_id()."<br>";

var_dump($_SESSION);
?>