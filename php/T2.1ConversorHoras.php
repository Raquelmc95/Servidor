<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
</head>
<body>

    <form action="" method="POST">

        <h1>Conversor de Tiempo</h1>
        <label for="tiempo">Segundos: </label>
        <input type="number" name="tiempo" id="tiempo">

        <input type="submit" name="convertir" value="convertir"><br><br>

        
    </form>

    <?php
        $v_tiempo = $_POST["tiempo"];
        
        /*
        if($v_tiempo==60 && $_POST['convertir']){
            $v_horas=0;
            $v_minutos=$v_tiempo/60;            
            $v_segundos=$v_tiempo%60;     
            echo $v_horas . " horas, " . $v_minutos . " minutos, " . $v_segundos . " segundos";       
        }elseif($v_tiempo>60 && $_POST['convertir']){
            $v_horas=number_format($v_tiempo/3600,0);
            $v_minutos=$v_tiempo/60;
            $v_segundos=$v_tiempo%60;
            echo $v_horas . " horas, " . $v_minutos . " minutos, " . $v_segundos . " segundos"; 
        }
        */
        if(!empty($v_tiempo) && $_POST['convertir']){
            $v_segundos=$v_tiempo%60;/*El modulo de los segundos te da el resto que son segundos*/
            $v_aux=$v_tiempo/60;            
            $v_minutos=$v_aux%60;/*El modulo de los minutos te da el resto que son minutos */            
            $v_horas=number_format($v_aux/60,0);        
            echo $v_horas . " horas, " . $v_minutos . " minutos, " . $v_segundos . " segundos";  
        }

    ?>
</body>
</html>