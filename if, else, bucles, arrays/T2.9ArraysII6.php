<?php
//Escriba un programa:
//Que muestre primero un grupo de entre 10 y 20 cartas de corazones numeradas del 1 al 10 al azar.
//Que indique cuántas veces ha aparecido cada una de las cartas.

$grupo = rand(10,20);
//rellenamos el arrays de numero al azar entre 1 y 10 
echo "<h2>$grupo cartas de corazones</h2>";
for($i=0; $i<$grupo; $i++){
    $cartas[]=$azar=rand(1,10);;
}
echo "<p>";
foreach($cartas as $carta){
    echo $carta . " ";
}
echo "</p>";

echo "<h2>Conteo</h2>";
$conteo=[];
//Generamos un arrays asociativo donde el indice es la carta y el valor es el contador 
foreach($cartas as $carta){
    if(isset($conteo[$carta])){
        $conteo[$carta]++;
    }else{
        $conteo[$carta]=1;
    }

}
foreach($conteo as $carta => $valor){
    echo $valor . " del " . $carta . " corazon<br>";
}





?>