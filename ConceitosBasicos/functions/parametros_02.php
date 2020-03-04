<?php

function ola(){

  $parametros = func_get_args();
  return $parametros;
}

var_dump(ola("bom dia"),10);

?>