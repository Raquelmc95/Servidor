<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diccionario de meses</title>
</head>
<body>
<!--Ejercicio 4 - Diccionario de meses
Escribe un programa php que muestre una página con un desplegable que muestre el "idioma origen" y otro el "idioma destino". Al pulsar el botón traducir, debe mostrar Una tabla con dos columnas, una con los meses en idioma de origen, y otra, traducido.

Puedes usar también un encabezado para toda la tabla.-->
    <h1>Meses del año</h1>
    <form action="" method="POST">
        <select name="origen" id="origen">
            <option name="idioma "value="idioma">Idioma Origen</option>
            <option name="español" value="español">Español</option>
            <option name="ingles" value="ingles">Inglés</option>
            <option name="frances" value="frances">Francés</option>
            <option name="aleman" value="aleman">Alemán</option>
        </select>
        <select name="destino" id="destino">
            <option name="idioma "value="idioma">Idioma Destino</option>
            <option name="español" value="español">Español</option>
            <option name="ingles" value="ingles">Inglés</option>
            <option name="frances" value="frances">Francés</option>
            <option name="aleman" value="aleman">Alemán</option>
        </select>
        <input type="submit" name="traducir" value="Traducir"><br><br>
    
    </form>    
    <?php
    $v_origen=$_POST["origen"];
    $v_destino=$_POST["destino"];
    $v_meses=[
            "español" => ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciemnre"], 
            "ingles" => ["January", "February", "March", "April", "May", "June", "July", "August", "Septembre", "October", "November", "Decemeber"], 
            "frances" => ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Julilet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"], 
            "aleman" => ["Januar", "Februar", "Marz", "April", "Mai", "Juni", "Juli", "August", "September", "Oktober", "November", "Dezember"]
    ];
    if (isset($_POST["traducir"])) {
        echo "<h3>Traducción de $v_origen a $v_destino</h3>";
        echo "<table border='1' cellpadding='5'>";
        echo "<tr><th>$v_origen</th><th>$v_destino</th></tr>";

        for ($i = 0; $i < 12; $i++) {
            echo "<tr><td>{$v_meses[$v_origen][$i]}</td><td>{$v_meses[$v_destino][$i]}</td></tr>";
        }

        echo "</table>";
    }
    ?>
</body>
</html>