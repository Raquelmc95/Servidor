<?php
//Ejercicio 3 - Números
//Escriba un programa que muestre un número del cero al 9 al azar y escriba en letras el
//valor obtenido.
echo "<h1>Números aleatorios</h1>";
$v_numeros=rand(0,9);
echo $v_numeros . " - ";

switch($v_numeros){
    case 0:
        echo "Cero";
        break;
    case 1:
        echo "Uno";
        break;
    case 2:
        echo "Dos";
        break;
    case 3:
        echo "Tres";
        break;
    case 4:
        echo "Cuatro";
        break;
    case 5:
        echo "Cinco";
        break;
    case 6:
        echo "Seis";
        break;
    case 7:
        echo "Siete";
        break;
    case 8:
        echo "Ocho";
        break;
    case 9:
        echo "Nueve";
        break;
    default:
        echo "El número no corresponde";
}
?>