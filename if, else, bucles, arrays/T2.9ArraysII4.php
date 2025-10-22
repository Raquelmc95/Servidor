<?php
//Escriba un programa:
//Que muestre primero un grupo de entre 5 y 15 cartas de corazones numeradas del 1 al 10 al azar (carpeta cartas).
//Que muestre de nuevo el grupo inicial, pero habiendo eliminado del grupo los valores repetidos.

echo "<h1>Eliminar valores repetidos</h1>";
echo "<h2>Entres estas 9 cartas corazones...</h2>";
$cartas = ["Corazon" => [1,2,3,4,5,6,7,8,9,10,11,12]];
$salida=["Corazon"=>[]];

for($i=1; $i<10; $i++){
    $azar=rand(0,11);
    $salida["Corazon"][$i]=$cartas["Corazon"][$azar];
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