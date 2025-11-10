<?php
/**
 * Te devuelve un string que es el emoji 
 * 
 * @return string: devuelve una cadena que es el emoji
 * 
 */

//EJERCICIO 1
function dameEmoji():string{
    //lista de emojis
    $numEmoji = [ 128070, 128071, 128072, 128073, 128074, 128075, 128076, 128077, 128078, 128079, 128080, 128133, 128170, 128400, 128405, 128406, 128588, 128591, 129295, 129304, 129305, 129306, 129307, 129308, 129310, 129311, 129330];
    
    //modificadores de tonos de piel
    $numPiel = [127995, 127996, 127997, 127998, 127999];

    //Obtenemos un aleatorio de cada lista
    $emoji = $numEmoji[array_rand($numEmoji)];//esto te devuelve un indice del arrays numero emoji
    $piel=$numPiel[array_rand($numPiel)];

    /*$auxE = rand(0, count($numEmoji)-1);
    $auxP = rand(0, count($numPiel)-1);

    return "&#" . $numEmoji[$auxE] . "&#" . $numPiel[$auxP]; //esto devuelve un string concatenado*/

    return "&#$emoji;&#$piel";


}
/**
 * Te devuelve una secuencia de bits y su comlementaria
 * @return string: te devuelve una cadena con la secuencia de los bits
 * 
 */

//EJERCICIO 2
function dameSecuencia():string{
    $bit = [0, 0, 0, 0, 0, 1, 1, 1, 1, 1];//5 ceros y 5 uno
    shuffle($bit);//los mezclamos aleatoriamente

    for ($i=0; $i<count($bit); $i++){
        $rever[$i]= ($bit[$i]==0) ? 1 : 0;//si es 0 =>1 y si es 1=>0
        //podiamos hacerlo asi tb
        /*if($bit[$i]==0){
            $rever[$i]=1;
        }else{
            $rever[$i]=0;
        }*/
    }

    return implode(" ", $bit) . " - " . implode(" ", $rever);


}
/**
 * Te rellena un arrays de dados aleatorias para cada jugador
 * @param array $jugadores $n: recibimos el array pasado como referencia y el numero de jugadores
 */

//EJERCICIO 3
function reparteAñadeDados(array &$jugadores, int $n):void{//paso el arrys de jugadores vacio y el numero de jugadores
    //la i son los jugadores y la j son los dados a repartir, los jugadores se lo pasamos por la funcion
    for($i=0; $i<$n; $i++){
        for($j=0; $j<6; $j++){
            //Sacamos un numero al azar de dado y lo incluimos en la fila del jugador uno 
            $dado=rand(1,6);
            $jugadores[$i][$j]=$dado;
        }
    }
}
/**
 * Te devuelve el ganador de la partida a traves de un string o de un numero
 * 
 * @param array $jugadores, int $partida: le pasamos el arrays de jugadores y la partida de la cual queremos el ganador
 * @return: nos devuelve un string con los ganadores ya que puede haber empates o el ganador de la partida si no hay empates
 */
function dameGanador(array &$jugadores, int $partida){ //pasamos los jugadores y los dos jugadores que queremos que hagan sus partidas
    //$numJugadores = count($jugadores); //contamos los jugadores que tiene el arrays si queremos contar los dados que han sido repartidos seria &jugadores[0]
    
    //Obtener la columna de la partida para todos los jugadores, me da un array con los dados de esa partida para cada jugador
    $dadosPartida=array_column($jugadores, $partida);

    //Obtenemos el maximo dado de esa partida
    $mayorPunto = max($dadosPartida);

    //Guardamos todos los jugadores que tienen ese dado
    $jugadas=[];
    for($i=0; $i<count($dadosPartida); $i++){
        if($dadosPartida[$i]==$mayorPunto){//si el dado del jugador 0 es igual al dado mas alto 
            $jugadas[] =[$i, $dadosPartida[$i]];//añadimos el jugador y su dado al arrays jugadas y quedaria asi [jugador, dado]
        }
    }
    //Resolvemos el ganador o el empate 
    
    if(count($jugadas)>1){//si hay mas de un ganador
        $ganador = array_column($jugadas, 0);//me guarda el jugador que se encuentra en la columna 0 en un arrays jugadas[[0,6], [1,6]]
        return implode(",", $ganador);//imprime los jugadores 
    }else{
        return $jugadas[0][0];//devuelve el jugador que ha ganado jugadas[[0,6]] me devolveria el 0
    }

}
/**
 * Te imprime un string con el jugador y sus dados
 * @param array $jugadores: le pasamos el arrays de jugadores por referencia ya con los dados de cada jugador
 * 
 */
function mostrarDadosJugador(array &$jugadores): void{ //pasamos el array de jugadores e imprimimos los dados de cada jugador
    foreach($jugadores as $jugador => $dados)
        {
        echo nl2br ("Jugador ". $jugador . ": " . implode(", ", $dados) . "\n");
    }

}
/**
 * Devuelve cuantas rondas ha ganado cada jugador
 * @param array $jugadores: recibe el array de jugadores con sus partidas
 * @return array: devuelve un array con el indice que es el jugador y el valor es las partidas que ha ganado
 * 
 */
function resumenPartida(array &$jugadores): array{
    $numJugadores = count($jugadores);//contamos los jugadores que hay 
    $partidas = count($jugadores[0]);//contamos las partidas que hay 
    $victorias = array_fill(0, $numJugadores, 0);//crea un arrays desde el indice 0 hasta el numero de jugadores que haya relleno de 0 asi victoria[0,0,0,0]

    for($p=0; $p<$partidas; $p++){
        $ganador= dameGanador($jugadores, $p);//enviamos el array de los jugadores y sus partidas y la partida que seria 0,1 para que nos de el ganador o si hay mas de uno
        if (is_int($ganador)) {//si hay solo un ganador y es el ganador ej 1
            $victorias[$ganador]++;//suma 1 victoria al jugador guarda en vistorias victorias[0,1,0,0] y asi va sumando a cada 0 el ganador que salga
        }
        //si devuelve un una lista no se suma
    }
    return $victorias;
}
/**
 * Devuelve el ganador absoluto  o "Empate"
 * @param array $victorias: recibimos el array de victorias de cada jugador
 * @return string: devuelve el empate o el jugador 
 * 
 */
function ganadorFinal(array $victorias):string{
    $max = max($victorias);//la maxima puntuacion del array ejemplo [1,3,2,3] devuelve el 3
    $indice = array_keys($victorias, $max);//nos guarda en arrays los indice que tenga el max ejemplo [2,3,1,3] devuelve [1,3]

    return (count($indice)>1) ? "Empate entre jugadores: " . implode(", ", $indice) : "Jugador " . $indice[0];

}
/**
 * Rellena el array y lo imprime
 * @param array $cartas: le pasamos un arrya por referencia vacio y lo rellenamos
 * @return string: devuelve un string monstrando  las cartas de corazon 
 */

//EJERCICIO 4
function dameCarta(array &$cartas): string{
    $num = rand(5,15);
    for($i=0; $i<$num; $i++){
        $carta = rand(1,10);
        $cartas["corazon"][$i] = $carta;
    }
    /*foreach($cartas as $palo => $numero){
        echo $palo . ": " . implode(", ", $numero) . "\n";
    }*/

    return implode(",", $cartas["corazon"]);//devolvemos el arrays como cadena

}
/**
 * Elimina los repetidos de un arrays
 * @param array $cartas: le pasamos el arrays por referencia relleno en la funcion anterior y nos imprime el arrays sin los repetidos
 * @return string: devuelve un string monstrando  las cartas de corazon sin repetidos
 */
function sinRepetidos(array &$cartas):string{
    $cartas["corazon"] = array_unique($cartas["corazon"]);//elimina los duplicados de un arrays
    /*foreach($cartas as $palo => $numero){
        echo $palo . ": " . implode(", ", $numero) . "\n";  
    }*/
    return implode(",", $cartas["corazon"]);

}
/**
 * Imprime un arrays de dados al azar del 1 al 6
 * @param array $dados: le pasamos por referencia un array de dados vacios
 * @return string: devuelve un string con los dados del arrays dados
 * 
 */

//EJERCICIO 5
function dameDados(array &$dados):string{
    $num = rand(1,10);
    for($i=0; $i<$num; $i++){
        $dados[] = rand(1,6);//mete en el arrays daddos del 1 al 6 al azar
    }
    /*foreach($dados as $numero){
        echo $numero . ", ";
    }*/
    return implode(", ", $dados);
}
/**
 * Te devuelve un dado a eliminar del arrays pasado por referencia
 * @param array $dados: le pasamos un arrays por referencia
 * @return int: devuelve el dado a eliminar
 */
function eliminarDado(array &$dados): int{
    $indice = rand(0, count($dados)-1);
    return $dados[$indice];
}
/**
 * Imprime los dados sin el dado a eliminar pasado como parametro
 * @param array $dados, int $eliminar: arrays de dados y el dado a eliminar
 * 
 */
function dadosSinEliminado(array &$dados, $eliminar){
    $dados = array_diff($dados, [$eliminar]); //elimina del arrays todos los valores que contenga la variable $eliminar
    foreach($dados as $numeros){
        echo $numeros . ", ";
    }
}
/**
 * Imprime la baraja de cartas
 * @param array $baraja: recibe un array por referencia vacio y se llena en la funcion y se muestra
 */

//EJERCICIO 6
function mostrarCartas(array &$baraja){
    $num = rand(10,20);//Cantidad aleatoria entre 10 y 20
    for ($i=0; $i <$num ; $i++) { 
        $baraja["corazones"][$i]=rand(1,10);//relleno la baraja con numeros aleatorios entre 1 y 10
    }
    /*foreach($baraja as $carta => $numero){
        echo "corazones: " . implode(", ", $numero);
    }*/
    echo "corazones: " . implode(", ", $baraja["corazones"]);

}
/**
 * Imprime las veces que aparece una carta en el array barajas
 * @param array $baraja: recibe un array por referencia
 * 
 */
function contarCadaCarta(array &$barajas){
    $conteo=[];
    foreach($barajas["corazones"] as $numero){ //si queremos solo lo que hay en la clave corazones se hace asi
        if(isset($conteo[$numero])){//esto valora si esta relleno el conteo con ese indice y si no, lo crea con el numero 1
            $conteo[$numero]++;
        }else{
            $conteo[$numero]=1;
        }
    }
    foreach($conteo as $carta => $valor){
        echo $valor . " veces el " . $carta . " de corazon<br>";
    }
}
/**
 * Devuelve un string con las cartas generadas
 * @param array $cartas: le pasamos un array por referencia vacio
 * @return string: devolvemos un string del array de cartas
 * 
 */
//EJERCICIO 7
function generaCartas(array &$cartas):string{
    //para que salgan numeros pares entre 4 y 10 
    $num = rand(2,5)*2;
    //Rellenamos las cartas sin repetidos
    for($i=0; $i<$num; $i++){
        $azar = rand(1,10);
        //mientras que el arrays existe ese numero que genere otro y cuando no este que salga
        while(in_array($azar,$cartas)){
            $azar = rand(1,10);
        }
        $cartas[$i]=$azar;
    }
    /*foreach($cartas as $carta){
        echo $carta . " ";
    }*/
    return implode(", ", $cartas);
}
/**
 * Devuelve un string con las cartas repartidas
 * @param array $cartas: le pasamos un array por referencia relleno
 * @return array: devolvemos un array con las cartas del jugador
 * 
 */
function reparteCartas(array &$cartas, int $longitud):array{
    
    for($i=0; $i<$longitud; $i++){
        $indice = rand(0,count($cartas)-1);//generamos un numero al azar desde 0 hasta la longitud de las cartas menos 1
        $jug1[]=$cartas[$indice];//añadimos la carta correspondiente a ese indice al jugador 
        unset($cartas[$indice]);//eliminarmos esa carta de la baraja
        $cartas=array_values($cartas);//reordenamos los indices
    }
    return $jug1;
}
/**
 * Nos devuelve el jugador que ha ganado la partida de cartas
 * @param array $jugador1, $jugador2: le pasamos como parametros un array con las cartas de cada jugador
 * @return int: devolvemos el jugador que ha ganado la partida
 * 
 */
function dimeGanador(array $jugador1, array $jugador2): int{
    $sumaJugador1=0;
    $sumaJugador2=0;
    foreach($jugador1 as $carta){
        $sumaJugador1+=$carta;
    }
    foreach($jugador2 as $carta){
        $sumaJugador2+=$carta;
    }

    if($sumaJugador1>$sumaJugador2){
        return 1;
    }else{
        return 2;
    }
}
?>