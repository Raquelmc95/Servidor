<?php
//Ejercicio 1 - Tabla de multiplicar
//Escribe un programa que cada vez que se ejecute genere un número entre 1 y 10 al azar y a continuación guarde en un array la tabla de multiplicar de dicho número. Saca también el valor mínimo y máximo del array generado.
//NOTA: Para generar el array utiliza la función range.
echo "<h1>Tabla de multiplicar</h1><br>";
$v_num=rand(1,10);
$v_tabla=range($v_num, $v_num*10,$v_num);

foreach($v_tabla as $inidice => $valor){
    echo $v_num . "*" . $inidice +1 . "=" . $valor . "<br>";
}
echo "<pre>";
echo print_r($v_tabla);
echo "</pre>";


$v_max=max($v_tabla);
$v_min=min($v_tabla);

echo "El valor mínimo de la tabla es: $v_min";
echo "<br>";
echo "El valor máximo de la tabla es: $v_max";

?>