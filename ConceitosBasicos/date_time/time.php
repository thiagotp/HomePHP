<?php

echo time();

$ts = strtotime("2001-09-11");

echo (date("l, d/m/Y", $ts));


$ts2 = strtotime("+1 day");
echo (date("l, d/m/Y", $ts2));



?>