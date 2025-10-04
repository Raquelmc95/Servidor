<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EjercicioT2.0</title>
</head>
<body>
    <h1>CONVERSOR DE MONEDAS</h1>
    <?php

        //Ejercicio 1
        define("eurPta", 166.386);
        define("ptaEur", number_format(1/166.386,3));

        echo "EurPta: " . eurPta . "<br>";
        echo "PtaEur: " . ptaEur . "<br>";

        //Ejercicio 2
    ?>
    <form action="" method="post"> <!--el action vacio envia la informacion a la misma pagina-->

        <!--Cantidad-->
        <label for="moneda">Moneda: </label>
        <input type="number" name="moneda" id="moneda"></input><br>

        <!--Radios-->
        <input type="radio" name="tipoConversion" value="peseta" checked>Convertir a pesetas
        <input type="radio" name="tipoConversion" value="euro" >Convertir a euros
        <br>

        <!--Boton-->
        <input type="submit" name="Convertir" value="Convertir" >

    </form>

    <?php
        //Leer valor de variables input
        $v_moneda=$_POST["moneda"];
        $v_tipoConversion=$_POST["tipoConversion"];

        if(isset($_POST['Convertir']) && !empty($v_moneda)){
            //Convertir a pesetas
            if($v_tipoConversion=="peseta"){
                $v_resultado= eurPta * $v_moneda;
                echo "<br>" . $v_moneda . " Euros son " . $v_resultado . " pesetas ";
            }else{
                //Convertir a euros
                $v_resultado= ptaEur * $v_moneda;
                echo "<br>" . $v_moneda . " Pesetas son " . $v_resultado . " euros ";
            }
            

        }else{
            echo "La conversión no es posible, introduce";
        }
    ?>
    
</body>
</html>