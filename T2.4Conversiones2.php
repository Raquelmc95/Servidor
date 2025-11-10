<?php
//2.- Escribe otro ejercicio que le asigne una serie de valores a las siguientes variables y muestre el nombre de la variable, el valor y el tipo de datos al que pertenece. 
// A continuación se le deberá forzar el tipo a lo que se indique, y mostrar el tipo nuevo al que pertenece, el nombre de la variable y su valor. Usar las funciones settype y gettype.
$valores=[
    ["a1" => 347, "tipo" => "double"],
    ["a2" => 2147483647, "tipo" => "double"],
    ["a3" => -2147483647, "tipo" => "double"],
    ["a4" => 23.7678, "tipo" => "integer"],
    ["a5" => 3.1416, "tipo" => "integer"],
    ["a6" => "347", "tipo" => "double"],
    ["a7" => "3.1416", "tipo" => "integer"],
    ["a8" => "solo literal", "tipo" => "double"],
    ["a9" => "12.3 Literal con número", "tipo" => "integer"]];

foreach($valores as $valor){
    print_r($valor);
    echo "<br>";
}
//corregir para hacerlo con settype($a1, "integer")

for($i=1; $i<=9; $i++){
    $aux=gettype($valores[$i-1]["a" . $i]);
    if($aux!=($valores[$i-1]["tipo"])){
        $valores[$i-1]["tipo"]=$aux;
    }
}
echo "<br>";
foreach($valores as $valor){
    print_r($valor);
    echo "<br>";
}

?>