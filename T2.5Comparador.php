<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparador de Numeros</title>
</head>
<body>
<!--Realizar la comparación de 3 números introducidos en un formulario:


a) Con estructura IF
b) Con estructura Switch

La salida nos indicará "A es mayor que B, y ambos, mayor que C."-->
    <form action="" method="POST" style>
        <label for="primero">Numero A: </label>
        <input type="number" name="primero" id="primero"><br><br>

        <label for="segundo">Numero B: </label>
        <input type="number" name="segundo" id="segundo"><br><br>

        <label for="tercero">Numero C: </label>
        <input type="number" name="tercero" id="tercero"><br><br>

        <input type="submit" name="compararIF" value="Comparar con IF">
        <input type="submit" name="compararSW" value="Comparar con Switch">
    </form>
    
</body>
<?php
$v_a=$_POST["primero"];
$v_b=$_POST["segundo"];
$v_c=$_POST["tercero"];

if(isset($_POST["compararIF"])){
    if(!empty($_POST["primero"]) && !empty($_POST["segundo"]) && !empty($_POST["tercero"])){
        if($v_a>$v_b && $v_a>$v_c && $v_b>$v_c){
            echo "A es mayor que B, y ambos, mayor que C";
        }elseif($v_b>$v_a && $v_b>$v_c && $v_a>$v_c){
            echo "B es mayor que A, y ambos, mayor que C";
        }elseif($v_c>$v_a && $v_c>$v_b && $v_a>$v_b){
            echo "C es mayor que A, y ambos, mayor que B";
        }else{
            echo "A, B y C son iguales";
        }
    }else{
        echo "Tienes que rellenar los tres campos";
    }   
    
}else{
    echo "No se ha pulsado el botón de comparar con IF";
}
echo "<br>";
if(isset($_POST["compararSW"])){
    if(!empty($_POST["primero"]) && !empty($_POST["segundo"]) && !empty($_POST["tercero"])){
        switch(true){//podemos poner aqui true y si se cumple algun case entra
            case ($v_a>$v_b && $v_a>$v_c && $v_b>$v_c):
                echo "A es mayor que B, y ambos, mayor que C";
                break;
            case ($v_b>$v_a && $v_b>$v_c && $v_a>$v_c):
                echo "B es mayor que A, y ambos, mayor que C";
                break;
            case($v_c>$v_a && $v_c>$v_b && $v_a>$v_b):
                echo "C es mayor que A, y ambos, mayor que B";
                break;
            default:
                echo "A, B y C son iguales";        
        }   
    }else{
        echo "Tienes que rellenar los tres campos";
    }   
}else{
    echo "No se ha pulsado el botón de comparar con Switch";
}

?>
</html>