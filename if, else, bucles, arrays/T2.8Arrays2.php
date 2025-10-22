<?php
//Ejercicio 2 - Tabla de alumnos con su edad
//Dadas las siguientes tablas con nombre y edad de los alumnos de dos clases diferentes:
//Crea dos arrays independientes para guardar los datos de cada una de las tablas
//anteriores y muestra por pantalla la información de ambas.
//A continuación une ambas tablas en una sóla y muestra los datos de esta nueva tabla.
$v_primero=[
    ["Nombre"=>"Juan", "Edad"=>21],
    ["Nombre"=>"Maria", "Edad"=>19],
    ["Nombre"=>"Pedro", "Edad"=>24],
    ["Nombre"=>"Antonio", "Edad"=>30],
    ["Nombre"=>"Carmen", "Edad"=>24],
    ["Nombre"=>"Carlos", "Edad"=>26],
    ["Nombre"=>"Lucia", "Edad"=>22]
];

echo "<pre>";
echo print_r($v_primero);
echo "</pre>";

$v_segundo=[
    ["Nombre"=>"Jaime", "Edad"=>27],
    ["Nombre"=>"Luisa", "Edad"=>21],
    ["Nombre"=>"Aitor", "Edad"=>33],
    ["Nombre"=>"Macarena", "Edad"=>22],
    ["Nombre"=>"Maria", "Edad"=>27],
    ["Nombre"=>"Pedro", "Edad"=>28],
    ["Nombre"=>"Juan", "Edad"=>24]
];

echo "<pre>";
echo print_r($v_segundo);
echo "</pre>";


echo "<pre>";
echo print_r($v_primero+$v_segundo);
echo "</pre>";
?>