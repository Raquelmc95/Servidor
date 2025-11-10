<?php
$num = rand(1,10);
$tablaMultiplicar = range(0, $num*10, $num);

echo $num . "<br>";
echo print_r($tablaMultiplicar);
?>