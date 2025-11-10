<?php 
    //Integra librerias
    require_once('funcionesPoker.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Mostrar las manos-->
    <h2>Repartimos y Mostramos las cartas de cada jugador</h2>
    <?php 
        //Repartir 5 cartas a cada jugador
        $juego = repartir(2);
        imprimeCartas($juego);
    ?>
    <h2>El jugador 1 quiere decartar: </h2> <?php ?>
    <h2>Descartamos 2 cartas de cada jugador y Mostramos de nuevo sus cartas</h2>
    <?php 
        //El jugador 1 y jugador 2 pueden cambiar sus cartas
        $juego = descarteJugador($juego);
        imprimeCartas($juego);
    ?>
    <h2>El ganador de la partida es el jugador: <?=dameGanador($juego)?></h2>
</body>
</html>