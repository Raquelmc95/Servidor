<?php
//Escriba un programa:
//Que muestre primero una tirada de un número de dados al azar (número de tiradas aleatorio: mínimo 1, máximo 10).
//Que muestre a continuación un dado al azar.
//Que muestre de nuevo la tirada inicial, pero habiendo eliminado de la tirada los dados que coincidan con el dado suelto (si hay alguno).
//NOTA: A la hora de mostrar los dados utiliza la estructura foreach.

echo "<h1>Eliminar dados</h1>";
$dados =[];
//Rellenamos los dados de 6 dados al azar entre el 1 y el 10
for($i=0; $i<6; $i++){
    $numAzar = rand(1,10);
    $dados[$i]=$numAzar;

}

echo "<h3>Tirada de 6 dados</h3>";
foreach ($dados as $dado){
    echo $dado . " ";
}

//Imprimimos el dado a eliminar al azar
echo "<h3>Dado a eliminar</h3>";
$numAzar = rand(0,6);
$eliminar = $dados[$numAzar];
echo $eliminar;

echo "<h3>Dados restantes</h3>";
$nuevosDados=[];
//Generamos un nuevo arrays de dados sin el eliminado
foreach ($dados as $dado){
    if ($dado != $eliminar){
        $nuevosDados[] = $dado;
    }
}
foreach ($nuevosDados as $dado){
    echo $dado . " ";
}


?>

