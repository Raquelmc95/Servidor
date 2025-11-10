<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emoticono</title>
</head>
<body>

    
</body>
</html>
<?php
//Ejercicio 2 - Emoticono
//Escriba un programa que cada vez que se ejecute muestre un emoticono elegido al azar
//entre los caracteres Unicode 128512 y 128586.
//Nota: Para mostrar el emoticono en HTML hay que anteponer &# al número
$v_emoticono=rand(128512,128586);
echo "<p> Emoticono: &#" . $v_emoticono . "</p>";
?>