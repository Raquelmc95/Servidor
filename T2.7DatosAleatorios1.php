<?php
//Ejercicio 1 - Código de color
//Escriba un programa que cada vez que se ejecute muestre un código de color RGB elegido
//al azar. Un código de color puede tener el formato rgb(rojo, verde, azul), donde rojo, verde y
//azul son números enteros entre 0 y 255.
$v_color1=rand(0,255);
$v_color2=rand(0,255);
$v_color3=rand(0,255);
echo "<h1 style='color: rgb(" . $v_color1 . ", " . $v_color2 . ", " . $v_color3 . ")';> Código de color </h1>"  ;

?>
