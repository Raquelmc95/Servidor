<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADENAS</title>
</head>
<body>
    <?php
    //Variables
    $edad=40;

    //Lógica
    echo "<P>Esto es una cadena. Edad: $edad </p>";
    echo "<P>Esto es una cadena. Edad: \$edad </p>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<P>Esto \"es\"es una cadena.</p>";
    echo '<P>Esto "es"es una cadena. Edad: $edad </p>';
    echo '<P>Esto "es"es una cadena. Edad: '. $edad . '</p>';

    //isset es boleano y unset es para saber si una variable esta vacia
     if (isset($nombre)) {
            echo $nombre;    
            // Solo muestra el nombre si la variable tiene algún valor
        } else {
            echo "El nombre no está definido";
        }
?>
</body>
</html>
