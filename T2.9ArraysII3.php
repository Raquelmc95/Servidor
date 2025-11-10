<?php
//Escriba un programa que enfrente a dos jugadores tirando una serie de dados al azar.
//Cada jugador tira el dado de 6 veces.
//Los dados se comparan en orden (el primero con el primero, el segundo con el segundo, etc.) y gana el jugador que obtenga el número más alto.
//Mostrar un resumen con cuántas rondas ha ganado cada jugador.
//Mostrar que jugador ha ganado la partida completa.
//NOTA: A la hora de mostrar los dados de cada jugador utiliza la estructura foreach

//Declaramos los arrays de los jugadores
$jugador1=[];
$jugador2=[];
$contJug1=0;
$contJug2=0;
$empates=0;
for($i=0; $i<6; $i++){
    //Sacamos un numero al azar de dado
    $dado=rand(1,6);
    //Lo insertamos en la tabla del jugador
    $jugador1[$i]=$dado;
    $dado=rand(1,6);
    $jugador2[$i]=$dado;

    //Comparamos la primera jugada de cada jugador y sumamos la jugada del ganador
    if($jugador1[$i]>$jugador2[$i]){
        $contJug1++;
    }else if($jugador1[$i]<$jugador2[$i]){
        $contJug2++;    
    }else{
        $empates++;

    }
}
echo "<h2>Partida de dados</h2>";
echo "<h3>Jugador 1</h3>";
foreach($jugador1 as $jugadas){
    echo $jugadas . ", ";
}
echo "<h3>Jugador 2</h3>";
foreach($jugador2 as $jugadas){
    echo $jugadas . ", ";
}
echo "<h2>Resumen de las jugadas</h2>";
echo "<p>El jugador 1 ha ganado " . $contJug1 . " rondas</p>";
echo "<p>El jugador 2 ha ganado " . $contJug2 . " rondas</p>";
echo "<p>Y los jugadores han empatado " . $empates . " vez</p>";

echo "<h2>Resultados</h2>";
if($contJug1==$contJug2){
    echo "<p>Los jugadores han quedado empate</p>";
}else if($contJug1>$contJug2){
    echo "<p>El jugador 1 ha ganado la partida completa</p>";
}else if($contJug1<$contJug2){
    echo "<p>El jugador 2 ha ganado la partida completa</p>";
}