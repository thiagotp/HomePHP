<?php

$pessoa = array('nome'=>'Thiago',
'idade'=>26);

foreach ($pessoa as $index => &$value) {
   if(gettype($value) === 'integer') $value += 10;
   
    echo $value. " ";
}
echo "<br>";
print_r($pessoa);

?>