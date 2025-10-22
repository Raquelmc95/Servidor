<?php
//Escriba un programa:
//Que muestre un número par de cartas de corazones, entre 4 y 10, al azar y no repetidas.
//Que reparta las cartas entre dos jugadores, al azar.
//Quien más sume, gana.

$cartas =[];
$num = rand(2,5)*2;
//Rellenamos las cartas sin repetidos
for($i=0; $i<$num; $i++){
    $azar = rand(1,10);
    while(in_array($azar,$cartas)){
        $azar = rand(1,10);
    }
    $cartas[$i]=$azar;
}
echo "<h2>Las $num cartas a repartir</h2>";
foreach($cartas as $carta){
    echo $carta . " ";
}

$fin=count($cartas)/2;

//Rellenamos los arrays de los jugadores sin repetidos y eliminando ese valor repartido de la baraja de cartas y reordenamos los indices
for($i=0; $i<$fin; $i++){
    $indice = rand(0,count($cartas)-1);
    $jug1[]=$cartas[$indice];
    unset($cartas[$indice]);
    $cartas=array_values($cartas);
}
for($i=0; $i<$fin; $i++){
    $indice = rand(0,count($cartas)-1);
    $jug2[]=$cartas[$indice];
    unset($cartas[$indice]);
    $cartas=array_values($cartas);
}
echo "<h2>Las " . count($jug1) . " cartas del jugador 1 </h2>";
foreach($jug1 as $carta){
    echo $carta . " ";
}
echo "<h2>Las " . count($jug2) . " cartas del jugador 2 </h2>";
foreach($jug2 as $carta){
    echo $carta . " ";
}
?>