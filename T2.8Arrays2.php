<?php
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

$v_resultado = array_merge_recursive($v_primero,$v_segundo);
echo "<pre>";
echo print_r($v_resultado);
echo "</pre>";
?>