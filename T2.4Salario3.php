<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario</title>
</head>
<body>
<!--3.- Escribe un programa salario.php que calcule el salario de un trabajador una vez que se le descuente el impuesto.

Se usarán las variables: $salario, $impuesto, que vendrá dada en porcentaje.

Se deberá descontar el porcentaje del impuesto por ciento a $salario y se guardará en la variable $resultado. Después deberá mostrarse una de la siguiente información:

“El salario sin descontar el impuesto: xxxxx”

“El salario 'xxxx' una vez descontado: zzzz”

Deberán mostrarse las comillas, y el título de la página será: Salario.

Los datos del salario y del impuesto se introducirán mediante un formulario.

Habrá 2 botones, uno para que muestre la primera información y otro para que te muestre la segunda.-->
    <form action="" method="POST">
        <h1>Salario</h1>

        <label for="salario">Salario: </label>
        <input type="number" name="salario" id="salario"><br>

        <label for="impuesto">Impuesto en %: </label>
        <input type="number" name="impuesto" id="impuesto"><br>
        
        <input type="submit" name="calculoS" value="Salario">
        <input type="submit" name="calculoI" value="Impuesto"><br><br>

        <?php
        if(!empty($_POST["salario"])){
            if(isset($_POST["calculoS"])){
                 echo "El salario sin descontar el impuesto es: " . $_POST["salario"];
            }
            if(isset($_POST["calculoI"])){
                $v_salario=$_POST["salario"];
                $v_impuesto=$_POST["impuesto"]/100;
                $v_total=$v_salario-($v_salario*$v_impuesto);
                echo "El salario es " . $v_total . " una vez descontado el impuesto del: " . $_POST["impuesto"] . "%";
            }
        }else{
            echo "No se ha introducido ningún salario";
        }
        ?>
    </form>
    
</body>
</html>