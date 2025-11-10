<?php
//Escriba un programa:
//Que muestre primero un grupo de entre 5 y 15 cartas de corazones numeradas del 1 al 10 al azar (carpeta cartas).
//Que muestre de nuevo el grupo inicial, pero habiendo eliminado del grupo los valores repetidos.

echo "<h1>Eliminar valores repetidos</h1>";
echo "<h2>Entres estas 9 cartas corazones...</h2>";

$salida=[];
$grupo=rand(5,15);

for($i=0; $i<$grupo; $i++){
    $salida[$i]=rand(1,10);
}
for($i=0; $i<count($salida); $i++){
    $num = $salida[$i];
    echo 'img< src="cartas\c' . $num . '.svg" alt="Carta" width="80" heigth="100">';
}
echo "<pre>";
echo print_r($salida);
echo "</pre>";

$salida["Corazon"]=array_values(array_unique($salida["Corazon"]));
$longitud = count($salida["Corazon"]);

echo "<h2>Hay " . $longitud . " cartas de corazones distintas";
echo "<pre>";
echo print_r($salida);
echo "</pre>";

?>