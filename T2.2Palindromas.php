<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Palindromas</title>
</head>
<body>
<!--Crea variables con palabras y verifica si son palíndromos (se leen igual al revés). Utiliza alguna función que te ayude a realizar el ejercicio en la página oficial de PHP.-->
    <form action="" method="POST">
        <h1>Verificar palíndromos</h1>

        <label for="palabra">Palabra: </label>
        <input type="text" name="palabra" id="palabra">

        <input type="submit" value="convertir">
    </form>

    <?php
    /**
     * Detecta si es un palindromo y retorna un booleano
     * @param string $palabra: palabra a comparar
     * @return bool Retorna verdadero o falso
     * 
     */
        $v_frase=$_POST['palabra'];
        $v_reves=strrev($v_frase);

        if(!empty($v_frase) && $_POST['convertir']){
            echo "La palabra " . $v_frase . " es palíndroma";
        }else{
            echo "La palabra " . $v_frase . " no es palíndroma";
        }

    ?>
</body>
</html>