<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Palindromas</title>
</head>
<body>
    <form action="" method="POST">
        <h1>Verificar palíndromos</h1>
        <label for="palabra">Palabra: </label>
        <input type="text" name="palabra" id="palabra">

        <input type="submit" name="convertir" value="Convertir">
    </form>

    <?php
        $v_frase=$_POST['palabra'];
        $v_reves=strrev($v_frase);

        if(!empty($v_frase) && isset($_POST['convertir'])){
            if($v_frase == $v_reves){
                echo "La palabra " . $v_frase . " es palíndroma";
            }else{
                echo "La palabra " . $v_frase . " no es palíndroma";
            }
            
        }else{
            echo "La palabra no puede estar vacía";
        }

    ?>
</body>
</html>