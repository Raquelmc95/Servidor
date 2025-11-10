<?php
//Ejercicio 4 - Ciudades
//Escriba un array de ocho ciudades de España. Elimina al azar una de ellas y muestra el
//nuevo array de ciudades.
echo "<h1>Arrays de ciudades</h1><br>";
$v_ciudades = ["Sevilla", "Cordoba", "Jaen", "Malaga", "Madrid", "Barcelona", "Murcia", "Cadiz"];
$v_num=rand(0,7);

echo "Arrays de Ciudades sin modificar";
echo "<pre>";
print_r($v_ciudades);
echo "</pre>";

unset($v_ciudades[$v_num]);

echo "Arrays de Ciudades con modificación";
echo "<pre>";
print_r($v_ciudades);
echo "</pre>";

?>