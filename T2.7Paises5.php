<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paises</title>
</head>
<body>
<!--Ejercicio 5 - Países
Crea un array de claves valores de países con la siguiente información de cada país:
● Capital
● Población aproximada
● Idiomas principales de ese país
● ¿Si tiene costa?-->
    <h1>Información sobre países</h1>
    <form action="" method="POST">
        <select name="seleccion" id="seleccion">
            <option name = "selecciona" value="Selecciona">selecciona</option>
            <option name = "españa" value="España">España</option>
            <option name = "francia" value="Francia">Francia</option>
            <option name = "alemania" value="Alemania">Alemania</option>
            <option name = "rumania" value="Rumania">Rumania</option>
        </select>

        <input type="submit" name="ver" value="Ver">
    </form>
</body>
</html>
<?php
$v_paises=[
"España"=>["Capital" => "Madrid", "Poblacion_aproximada" => "Parla", "Idioma" => "Castellano", "Costa" => "No"],
"Francia"=>["Capital" => "Paris", "Poblacion_aproximada" => "Lyon", "Idioma" => "Francés", "Costa" => "No"],
"Alemania"=>["Capital" => "Berlin", "Poblacion_aproximada" => "Munich", "Idioma" => "Alemán", "Costa" => "No"],
"Rumania"=>["Capital" => "Bucarest", "Poblacion_aproximada" => "Constanca", "Idioma" => "Rumano", "Costa" => "Si"]
];


if(isset($_POST["ver"])){
    $v_pais=$_POST["seleccion"];
    switch($v_pais){
        case "españa":
            echo $v_paises["España"]["Capital"] . "<br>";
            echo $v_paises["España"]["Poblacion_aproximada"] . "<br>";
            echo $v_paises["España"]["Idioma"] . "<br>";
            echo $v_paises["España"]["Costa"] . "<br>";
            break;
        case "francia":
            echo $v_paises["Francia"]["Capital"] . "<br>";
            echo $v_paises["Francia"]["Poblacion_aproximada"] . "<br>";
            echo $v_paises["Francia"]["Idioma"] . "<br>";
            echo $v_paises["Francia"]["Costa"] . "<br>";
            break;
        case "alemania":
            echo $v_paises["Alemania"]["Capital"] . "<br>";
            echo $v_paises["Alemania"]["Poblacion_aproximada"] . "<br>";
            echo $v_paises["Alemania"]["Idioma"] . "<br>";
            echo $v_paises["Alemania"]["Costa"] . "<br>";
            break;
        case "rumania":
            echo $v_paises["Rumania"]["Capital"] . "<br>";
            echo $v_paises["Rumania"]["Poblacion_aproximada"] . "<br>";
            echo $v_paises["Rumania"]["Idioma"] . "<br>";
            echo $v_paises["Rumania"]["Costa"] . "<br>";
            break;
        default:
            echo "No has seleccionado ningún país";
    }
}
?>