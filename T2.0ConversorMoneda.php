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

        //Ejercicio 1 Realiza lo siguiente en una página web.
        //Define 2 constantes.
        //EurPta con valor 166.386
        //PtaEur con valor 1/166.386
        //Y te debe mostrar por pantalla lo siguiente:
        //Valor de la constante "EurPta": '166.386'
        //Valor de la constante "PtaEur": '0.0060101210438378'

        define("eurPta", 166.386); //Si no hay objetos mejor definir las constantes asi con define y no con const
        define("ptaEur", number_format(1/166.386,3));

        echo "EurPta: " . eurPta . "<br>";
        echo "PtaEur: " . ptaEur . "<br>";

        //Ejercicio 2 Utilizando las constantes anteriores, 
        //escribe una página con un formulario en el que se le podrá introducir una cifra (que serán euros o pesetas) y 
        // mediante dos botones se podrá pasar esa cifra a pesetas o a euros.
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
        $v_moneda=intval($_POST["moneda"]);//para asegurarnos que es un numero porque se lo traga si pones una cadena y al realizar la operacion te salta un error si metes una cadena
        $v_tipoConversion=$_POST["tipoConversion"];//me va a poner el value que es o peseta o euro lo que seleccione el usuario en el radio

        if(isset($_POST['Convertir']) && !empty($v_moneda)){//el isset te da si ha pulsado ese boton si no me trae null y seria false 
            //Convertir a pesetas
            if($v_tipoConversion=="peseta"){
                $v_resultado= eurPta * $v_moneda;
                echo "<br>" . $v_moneda . " Euros son " . $v_resultado . " pesetas ";
            }elseif($v_tipoConversion=="euro"){
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