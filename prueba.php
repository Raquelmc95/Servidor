<?php declare(strict_types=1); require_once "libreria.php"?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAYS II FUNCIONES</title>
    
</head>
<body>
    <h1>Gestos de manos. Ejercicio 1</h1>
    
    <p style="font-size: 8em;"><span><?php echo dameEmoji(); ?></span></p>

    <br><br>

    <h1>Negacion de Bits. Ejercicio 2</h1>
    <p><?php echo dameSecuencia();?></p>

    <br><br>

    <h1>Partida de dados. Ejercicio 3</h1>
    
    <?php 
    $jugadores = [];
    reparteAñadeDados($jugadores,4);
    mostrarDadosJugador($jugadores);    
    ?>
    <p>Resumen Partidas:</p>
    <p>
        <?php 
            $victorias = resumenPartida($jugadores);
            for ($i=0; $i <count($victorias) ; $i++) { 
                echo "Jugador " . $i . " ha ganado " . $victorias[$i] . " partidas" . "<br>";
            }
        ?>
    </p>
    <p>Resultados: </p>
    <?php $ganador = dameGanador($jugadores, 2);?>
    <?php if(is_int($ganador)):?>
        <p>En la partida 2 ha ganado el jugador <?=$ganador;?></p>
    <?php else: ?>
        <p>Han quedado empate los jugadores: <?=$ganador;?></p>
    <?php endif; ?>

    <p>Ganador final de todas las partidas: </p>
    <p><?php echo ganadorFinal($victorias);?></p>
    
    <br>
    <h1>Eliminar valores repetidos. Ejericicio 4</h1>
    <?php $cartas=[];?>
    <p>Cartas de corazon: <?=dameCarta($cartas);?></p>
    <p>Eliminamos los repetidos:</p>
    <p>Cartas sin repetidos de corazon: <?=sinRepetidos($cartas)?></p>

    <h1>Eliminar dado. Ejercicio 5</h1>
    <?php $dados=[];?>
    <p>Dados: <?=dameDados($dados);?></p>
    <?php $eliminar = eliminarDado($dados);?>
    <p>Dado a eliminar: <?=$eliminar?></p>
    <p>Dados sin el dado a eliminar: <?=dadosSinEliminado($dados, $eliminar);?></p>

    <h1>Contar Cartas. Ejercicio 6</h1>
    <?php $barajas =[]; ?>
    <p>Cartas de  <?=mostrarCartas($barajas);?></p>
    <p>Conteo: </p>
    <?php contarCadaCarta($barajas); ?>

    <h1>Repartir Cartas. Ejericicio 7</h1>
    <?php $cartas=[];?>
    <p>Cartas: <?=generaCartas($cartas);?></p>
    <?php $longitud = count($cartas)/2?>
    <?php $jugador1 = reparteCartas($cartas, $longitud)?>
    <?php $jugador2 = reparteCartas($cartas, $longitud)?>
    <p>Cartas del jugador 1: <?php echo implode(", ", $jugador1)?></p>
    <p>Cartas del jugador 2: <?php echo implode(", ", $jugador2)?></p>
    <p>Ganador:</p>
    <?php $ganador=dimeGanador($jugador1, $jugador2);?>
    <?php if(is_int($ganador)):?>
        <p>Ha ganado el jugador <?=$ganador?></p>
    <?php else: ?>
        <p>Han quedado empate</p>   
    <?php endif; ?> 
    

</body>
</html>