<?php
    /**
     * Reparte de un mazo 5 cada a cada jugador 
     * 
     * @param int $numJug - Número de jugadores para el reparto
     * @return array - Array multidimensional (jugador - cartas)
     */

    function repartir(int $numJug):array{
        //Inicializamos el juego
        $juego = array();
        $mazo = [
            "corazon"  => [1,2,3,4,5,6,7,8,9,10,11,12],
            "diamante" => [1,2,3,4,5,6,7,8,9,10,11,12],
            "trebol"   => [1,2,3,4,5,6,7,8,9,10,11,12],
            "picas"    => [1,2,3,4,5,6,7,8,9,10,11,12],
        ];
        //Inicializamos jugadores
        for ($i=1; $i <=$numJug; $i++) {
            //repartimos 5 cartas al jugador 1 y asi a todos los jugadores
            for ($j=0; $j <5 ; $j++) { 
                //generamos un palo al azar del mazo es decir corazon, diamante etc
                $palo = array_rand($mazo);

                //generamos un indice del palo que haya salido en la variable palo
                $indiceCarta=array_rand($mazo[$palo]);

                //Nos da un numero al azar de ese palo es decir una carta el 1, 2, 3
                $numCarta= $mazo[$palo][$indiceCarta];

                //En el juego[1][0]="", es decir al jugador 1 le asignamos el valor de la carta al azar en la posicion de la columna 0
                //juego =[1=>["corazon"=>1],["picas"=>2], ["trebol"=>3]
                //          2=>["corazon"=>1],["picas"=>2], ["trebol"=>3]]
                $juego[$i][$j]= [$palo=>$numCarta];

                //Eliminamos esa carta del mazo de cartas para que no se repita a los siguientes jugadores
                unset($mazo[$palo][$indiceCarta]);
                
            }
            
        }

        //Retornamos el array
        return $juego;

    }
    function imprimeCartas(array $cartas){
        echo "<pre>";
        echo print_r($cartas);
        echo "</pre>";
    }
    /**
     * Elimina dos cartas de los jugadores al azar y les añade otras dos al azar
     * @param array $juego: recibimos un arrays por referencia relleno
     * @return array $juego: retornamos el array de juego modificado
     * */
    function descarteJugador(array $juego): array{
        //devuelve un indice del array de juego es decir juego[1 => 
        // 0 =>["corazon"=>7], 
        // 1=>["pica"=>6]],
        //quedaria asi el array de juego
        $mazo = [
            "corazon"  => [1,2,3,4,5,6,7,8,9,10,11,12,13],
            "diamante" => [1,2,3,4,5,6,7,8,9,10,11,12,13],
            "trebol"   => [1,2,3,4,5,6,7,8,9,10,11,12,13],
            "picas"    => [1,2,3,4,5,6,7,8,9,10,11,12,13],
        ];
        for ($i=1; $i <=count($juego); $i++) {
            for($j=0; $j<2; $j++){
                //generamos un indice al azar del arrays juegos del jugador i que es el 1 por ejemplo 1=>[0=>["corazon"=>2]] 
                $carta = array_rand($juego[$i]);
                //eliminamos ese indice del jugador i por ejemplo el juego[1=>0=>["picas"=>3]]
                unset($juego[$i][$carta]);
                //reindexamos el arrays juego
                $juego[$i]=array_values($juego[$i]);
            }
            for ($k=0; $k < 2; $k++) { 
                //generamos un palo al azar del mazo
                $palo=array_rand($mazo);
                //sacamos un indice del mazo
                $indicePalo=array_rand($mazo[$palo]);
                //sacamos la carta de ese palo con ese indicie
                $num=$mazo[$palo][$indicePalo];
                //lo añadimos al jugador i 
                $juego[$i][]=[$palo=>$num];
                //eliminamos del mazo esa carta que hemos generado al azar
                unset($mazo[$palo][$indicePalo]);
            }    
            
        }

        return $juego;
    }
    /**
     * Devuelve true o false si el jugador quiere descarse dos cartas o no
     * @param array $juego, int $jug: le pasamos el juego y el jugador para que analice sus cartas
     * @return bool: devuelve true si el jugador quieres descartar cartas y false si no quiere descartas cartas
     * 
     */
    function quieroDescartar(array $juego, int $jug): bool{
        return (trio($juego, $jug) || pareja($juego, $jug) || cartaAlta($juego, $jug));
    }
       
    function descarteCartas(array $juego, int $jug){
        $cartasJugador = $juego[$jug];
        $mazo = [
            "corazon"  => [1,2,3,4,5,6,7,8,9,10,11,12,13],
            "diamante" => [1,2,3,4,5,6,7,8,9,10,11,12,13],
            "trebol"   => [1,2,3,4,5,6,7,8,9,10,11,12,13],
            "picas"    => [1,2,3,4,5,6,7,8,9,10,11,12,13],
        ];
        if(trio($juego, $jug)){
            $numPalos=[];
            foreach($cartasJugador as $palos=>$num){
                $numPalos[$num]=$palos;
                
            }
            foreach($numPalos as $num =>$palo){
                if(count($palo)<3){
                    unset($cartasJugador[$palo][$num]);
                    
                }
            }
        
            for($i=0; $i<2; $i++){
                $paloAleatorio=array_rand($mazo);
                $numAleatorio=array_rand($mazo[$paloAleatorio]);
                $cartasJugador=array_push([$paloAleatorio][$numAleatorio]);
                unset($mazo[$paloAleatorio][$numAleatorio]);
            }

        }elseif(pareja($juego, $jug)){
            foreach($juego[$jug] as $cartas){
                foreach($cartas as $palos=>$num){
                    $cartasJugador[$palos]=$num;
                }
            }
            $numPalos=[];
            foreach($cartasJugador as $palos=>$num){
                $numPalos[$num]=$palos;
                
            }
            foreach($numPalos as $num =>$palo){
                $cont=0;
                if(count($palo)<2 && $cont<2){
                    unset($cartasJugador[$palo][$num]);
                    $cont++;
                    
                }
            }

            
        
            for($i=0; $i<2; $i++){
                $paloAleatorio=array_rand($mazo);
                $numAleatorio=array_rand($mazo[$paloAleatorio]);
                $cartasJugador[$paloAleatorio][]=$numAleatorio;
                unset($mazo[$paloAleatorio][$numAleatorio]);
            }

        }else{
            foreach($juego[$jug] as $cartas){
                foreach($cartas as $palos=>$num){
                    $cartasJugador[$palos]=$num;
                }
            }
            asort($cartasJugador);
            for($i=0; $i<2; $i++){
                array_shift($cartasJugador);
                $paloAleatorio=array_rand($mazo);
                $numAleatorio=array_rand($mazo[$paloAleatorio]);
                $cartasJugador[$paloAleatorio][]=$numAleatorio;
                unset($mazo[$paloAleatorio][$numAleatorio]);
            }
            

        }
        


    }
    /**
     * Devuelve el jugador que tenga la mejor combinacion de cartas, en este caso los jugadores son numeros desde el 1
     * @param array $juego: le pasamos el array de juego 
     * @return string: nos devuelve el jugador que ha ganado y su jugada
     */
    function dameGanador(array $juego): string{
        $jugadores = array_keys($juego); // obtiene las claves (jugadores)
        $jugadas = [];
    
        // Definimos jerarquía de jugadas (mayor valor = mejor jugada)
        $ranking = [
            "cartaAlta" => 1,
            "pareja" => 2,
            "doblePareja" => 3,
            "trio" => 4,
            "escalera" => 5,
            "color" => 6,
            "full" => 7,
            "poker" => 8,
            "escaleraColor" => 9
        ];
    
        // Detectamos la jugada de cada jugador
        foreach ($jugadores as $jug) {
            if (escaleraColor($juego, $jug)) {
                $jugadas[$jug] = "escaleraColor";
            } elseif (poker($juego, $jug)) {
                $jugadas[$jug] = "poker";
            } elseif (full($juego, $jug)) {
                $jugadas[$jug] = "full";
            } elseif (color($juego, $jug)) {
                $jugadas[$jug] = "color";
            } elseif (escalera($juego, $jug)) {
                $jugadas[$jug] = "escalera";
            } elseif (trio($juego, $jug)) {
                $jugadas[$jug] = "trio";
            } elseif (doblePareja($juego, $jug)) {
                $jugadas[$jug] = "doblePareja";
            } elseif (pareja($juego, $jug)) {
                $jugadas[$jug] = "pareja";
            } else {
                $jugadas[$jug] = "cartaAlta";
            }
        }
        //ahora jugadas es asi jugadas=[[1=>"escaleraColor"],[2=>"poker"]]
        // Ahora comparamos quién tiene la mejor jugada
        $ganador = null;
        $mejorValor = 0;
        $tipoJugada= "";

        foreach ($jugadas as $jug => $tipo) {
            if ($ranking[$tipo] > $mejorValor) {
                $mejorValor = $ranking[$tipo];
                $ganador = $jug;
                $tipoJugada=$tipo;
            }
        }

        return $ganador . "-" . $tipoJugada;
    }
    /**
     * Devuelve true o false si el jugador tiene escalera de color
     * @param array $juego int $jug: le pasamos el juego y el jugador para comprobar si tiene escaleras
     * @return: nos devuelve true o false si se cumple que tiene escalera o no
     */
    function escaleraColor(array $juego, int $jug):bool{
        $palos=[];
        //agrupamos cartas por palos, es decir $palos =["corazon" =>[1,2], "picas"=>[2]]
        foreach($juego[$jug] as $cartas){
            foreach($cartas as $palo =>$num){
                $palos[$palo][]=$num;
            }
        }
        //comprobamos cada palo
        foreach($palos as $palo =>$numeros){
            sort($numeros);//arrays de los numeros y los ordenamos
            //recorremos ese arrays
            for ($i=1; $i <count($numeros) ; $i++) { 
                $consecutivos=1;
                //ejemplo numeros=[1,2,3,4,7] comprabamos si el numero 2 es igual al 1+1 si es igual es que es consecutivo y se suma 1
                if($numeros[$i]==$numeros[$i-1]+1){
                    $consecutivos++;
                    if($consecutivos>=5){
                        return true;
                    }
                }else{
                    $consecutivos=1;
                }
            }
        }
        return false;
        
        
    }
    /**
     * Devuelve true o false si el jugador tiene 4 cartas del mismo valor
     * @param array $juego int $jug: le pasamos el array de juego y el jugador a comprobar
     * @return bool: si cumple retorna true y si no retorna false
     */
    function poker(array $juego, int $jug):bool{
        $numeros=[];
        //esto genera un arrays de numeros=[2=>["corazon", "trebol"], 3=>["diamante"]]
        foreach($juego[$jug] as $cartas){
            foreach($cartas as $palo=>$num){
                $numeros[$num][]=$palo;
            }
        }
        //Comprobamos ejemplo que el arrays numeros[2] tenga una longitud igual a 4, si esto se cumple tiene 4 cartas del mismo valor 
        foreach($numeros as $num =>$palo){
            if(count($palo)==4){
                return true;
            }
        }
        return false;
    }
    /**
     * Devuelve true o false si el jugador tiene trio y pareja
     * @param array $juego, int $jug: le pasamos el array del juego y el jugador a comprobar sus cartas
     * @return bool: retornamos true si lo cumple false si no lo cumple
     */
    function full(array $juego, int $jug):bool{
        $numeros=[];
        //esto genera un arrays de numeros=[2=>["corazon", "trebol"], 3=>["diamante"]]
        foreach($juego[$jug] as $cartas){
            foreach($cartas as $palo=>$num){
                $numeros[$num][]=$palo;
            }
        }
        $trio=false;
        $pareja=false;

        foreach($numeros as $num =>$palo){
            if(count($palo)==3){
                $trio=true;
            }
            if(count($palo)==2){
                $pareja=true;
            }
        }
        return $trio && $pareja;

    }
    /**
     * Devuelve true o false segun si tiene 5 cartas del mismo palo
     * @param array $juego, int $jug: le pasamos el array del juego y el jugador a comprobar sus cartas
     * @return bool: retornamos true si lo cumple false si no lo cumple
     */
    function color(array $juego, int $jug):bool{
        $palos=[];
        //rellenamos palos asi palos=["corazon"=>[1,2,3]]
        foreach($juego[$jug] as $cartas){
            //cartas = [["corazon"=>1],["trebol=>2]]
            foreach($cartas as $palo => $num){
                $palos[$palo][]=$num;
            }
        }
        //si la longitud del arrays numeros=[1,2,4,5,6] es igual a 5 hay cartas del mismo palo
        foreach($palos as $palo =>$cartasPalo){
            if(count($cartasPalo)>=5){
                return true;
            }
        }

        return false;

    }
    /**
     * Devuelve true o false si el jugador tiene escalera, es decir, 5 cartas consecutivas
     * @param array $juego, int $jug: le pasamos el array del juego y el jugador a comprobar sus cartas
     * @return bool: retornamos true si lo cumple false si no lo cumple
     */
    function escalera(array $juego, int $jug):bool{
        $numeros=[];
        /**
        * $juego = [
        *   1 => [  // jugador 0
        *           ["corazon" => 1],
        *           ["trebol"  => 2],
        *           ["pica"    => 3],
        *           ["diamante"=> 4],
        *           ["corazon" => 5],
        *       ],
        *   2 =>    [  // jugador 1
        *           ["trebol"  => 7],
        *           ["pica"    => 8],
        *           ["corazon" => 9],
        *       ]
        *];

         */
        foreach($juego[$jug] as $carta){
            //cartas = [["corazon"=>1],["trebol=>2]] y numeros=[1,5,2,6]
            foreach($carta as $palo => $num){
                $numeros[]=$num;
            }
        }
        $numeros=array_unique($numeros);
        sort($numeros);
        $consecutivos=1;
        for ($i=1; $i <count($numeros) ; $i++) { 
            
            if($numeros[$i]==$numeros[$i-1]+1){
                $consecutivos++;
                if($consecutivos>=5){
                    return true;
                }
            }else{
                $consecutivos=1;
            }
        }
        return false;
        
    }
    /**
     * Devuelve true o false si el jugador tiene trio, 3 cartas del mismo valor
     * @param array $juego, int $jug: le pasamos el array del juego y el jugador a comprobar sus cartas 
     * @return bool: retornamos true si lo cumple false si no lo cumple
     */
    function trio(array $juego, int $jug):bool{
        $numeros=[];

        foreach($juego[$jug] as $cartas){
            //el currente de devuelve el valor de cada arrays asociativo en este caso tengo ["corazo"=>1], ["trebol"=>2] pues me da los numeros, es decir los valores de cada clave
            $numeros[]=current($cartas);
        }
        
        //Estoy devuelve el max de esto [2]=>3, [3]=>1 y si el max es igual a 3 me da true y si no me da false porque cuenta el max de los valores no de las claves
        return max(array_count_values($numeros))==3;       
    }
    /**
     * Devuelve true o false si el jugador tiene dos parejas diferentes
     * @param array $juego, int $jug: le pasamos el array del juego y el jugador a comprobar sus cartas 
     * @return bool: retornamos true si lo cumple false si no lo cumple
     * 
     */
    function doblePareja(array $juego, int $jug):bool{
        $numeros=[];

        foreach($juego[$jug] as $cartas){
            foreach($cartas as $palo => $num){
                $numeros[$num][]=$palo;
            }
        }
        //tendria numeros=[2=>["corazon","trebol"]]
        $contadorPareja=0;
        foreach($numeros as $num => $palo){
            if(count($palo)>=2){
                $contadorPareja++;
                if($contadorPareja==2){
                    return true;
                }
            }

        }
        return false;
    }
    /**
     * Devuelve true o false si el jugador tiene dos cartas del mismo valor es decir que el numero sea el mismo y el palo diferente
     * @param array $juego, int $jug: le pasamos el array del juego y el jugador a comprobar sus cartas 
     * @return bool: retornamos true si lo cumple false si no lo cumple
     */
    function pareja(array $juego, int $jug):bool{
        $numeros=[];

        foreach($juego[$jug] as $cartas){
            foreach($cartas as $palo => $num){
                $numeros[$num][]=$palo;
            }
        }
        //tendria numeros=[2=>["corazon","trebol"]]

        foreach($numeros as $num =>$palo){
            if(count($palo)==2){
                return true;
            }
        }
        return false;


    }
    /**
     * Devuelve true o false si el jugador no tiene ninguna combinacion de cartas
     * @param array $juego, int $jug: le pasamos el array del juego y el jugador a comprobar sus cartas 
     * @return bool: retornamos true si lo cumple false si no lo cumple
     * 
     */
    function cartaAlta(array $juego, int $jug):bool{
        if(!pareja($juego,$jug) && !doblePareja($juego,$jug) && !trio($juego,$jug) && !escalera($juego,$jug) && !color($juego, $jug) && !full($juego,$jug) && !poker($juego,$jug) && !escaleraColor($juego,$jug)){
            return true;
        }
    }
    return false;

?>