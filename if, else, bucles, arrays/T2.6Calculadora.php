<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
<!--Realiza un formulario en el que haya dos campos numéricos de entrada y 
una lista desplegable que incluya las 4 operaciones básicas (sumar, restar, multiplicar, dividir). Con un botón "=", mostramos el resultado.-->
    <form action="" method="POST">
        <h1>Calculadora</h1>
        <label for="numero1">Primer número: </label>
        <input type="number" name="numero1" id="numero1"><br>

        <label for="numero2">Segundo número: </label>
        <input type="number" name="numero2" id="numero2"><br><br>

        <select name="seleccion" id="seleccion">
            <option name="selecciona" value="selecciona">Selecciona</option>
            <option name="sumar" value="sumar">Sumar</option>
            <option name="restar" value="restar">Restar</option>
            <option name="multiplicar" value="multiplicar">Multiplicar</option>
            <option name="dividir" value="dividir">Dividir</option>
        </select>
        <input type="submit" name="=" value="=">
    </form>

    <?php
    $v_num1 = $_POST["numero1"];
    $v_num2 = $_POST["numero2"];
    $v_seleccion=$_POST["seleccion"];

    if(!empty($_POST["numero1"]) && !empty($_POST["numero2"])){
        if(isset($_POST["="])){
            $v_aux=$_POST["seleccion"];
            switch($v_aux){
                case "sumar":
                    echo "La suma es: " . $v_num1+$v_num2;
                    break;
                case "restar":
                    echo "La resta es: " . $v_num1-$v_num2;
                    break;
                case "multiplicar":
                    echo "La multiplicación es: " . $v_num1*$v_num2;
                    break;
                case "dividir":
                        echo "La división es: " . $v_num1/$v_num2;                    
                    break;
                default:
                    echo "No se ha seleccionado ninguna opción";            
                    
            }

        }else{
            echo "No se ha pulsado el botón del =";
        }
    }else{
        echo "No se ha introducido ningún número";
    }
    ?>
</body>
</html>