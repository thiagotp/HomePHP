<?php

require_once "config.php";
//caminho para o armazenamento da sessão
echo session_save_path();

echo "<br>";

echo session_status();

echo "<br>";

switch(session_status()){

    case PHP_SESSION_DISABLED:
        echo "as sessões estiveram desabilitadas";
        break;
   case PHP_SESSION_NONE:
        echo "as sessões estiveram habilitadas, mas nenhuma existe";
        break;
    case PHP_SESSION_ACTIVE:
        echo "as sessões estiveram habilitadas e uma existe";
        break;         
    default:
    break;
}

?>