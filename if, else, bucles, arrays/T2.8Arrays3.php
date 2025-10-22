<?php
//Ejercicio 3 - Números aleatorios en array
//Escribe un programa que genere 6 números aleatorios de 1 al 6 y los guarde en un array.
//Una vez generado el array:

//Mostrar cuántas veces aparece cada uno de los valores, del 1 al 6, en el array generado.
//Obtener otro número al azar entre 1 y 6. Con ese número obtenido comprobar si se encuentra en el array generado y en caso de que así sea mostrar todos los índices donde aparezca ese número.
//Mostrar el array original ordenada de mayor a menor.
//Mostrar el array sin valores duplicados y sin huecos en los índices.
for($i=1; $i<=6; $i++){
    $v_numeros=rand(1,6);
    $v_tabla[]=$v_numeros;
}
echo "<pre>";
echo print_r($v_tabla);
echo "</pre>";

$v_cont1=0;
$v_cont2=0;
$v_cont3=0;
$v_cont4=0;
$v_cont5=0;
$v_cont6=0;
foreach($v_tabla as $datos){ 
    if($datos==1){
        $v_cont1++;
    }else if($datos==2){
        $v_cont2++;
    }else if($datos==3){
        $v_cont3++;
    }else if($datos==4){
        $v_cont4++;
    }else if($datos==5){
        $v_cont5++;
    }else{
        $v_cont6++;
    }
}
echo "En la tabla hay del nº 1: " . $v_cont1 . ", <br> del nº 2: " . $v_cont2 . ", <br> del nº 3: " . $v_cont3 . ", <br> del nº 4: " . $v_cont4 .
    ", <br> del nº 5: " . $v_cont5 . ", <br> y del nº 6: " . $v_cont6;

$v_numero=rand(1,6);
$cont="";
foreach($v_tabla as $indice => $datos){
    if($datos==$v_numero){
        $cont.=$indice . ", ";
    }
}
echo "<br><br>Los índices en los que aparece el numero " . $v_numero . " es en el: " . $cont;
echo "<br><br>Tabla original ordenada:";
sort($v_tabla);
echo "<pre>";
echo print_r($v_tabla);
echo "</pre>";

?>