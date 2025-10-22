<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversiones</title>
</head>
<!--1.- Realiza un ejercicio que asigne los siguientes valores a variables $a1 a $a10 y después te muestre la variable y el tipo, usando gettype($var).

347

2147483647

-2147483647

23.7678

3.1416

"347" 

“3.1416" 

"Solo literal" 

"12.3 Literal con número"-->
<body>
    <form action="" method="POST">
        <h1>Conversiones</h1>
        
    </form>
    <?php
    $valores=[$a1 => 347, $a2 => 2147483647, $a3 => -2147483647, $a4 => 23.7678, $a5 => 3.1416, $a6 => "347", $a7 => "3.1416", $a8 => "solo literal", $a9 => "12.3 Literal con número"];

    for($i=1; $i<=10; $i++){
        $aux="a"+$i;
        echo $aux;
        echo $valores[$aux] . ": " . gettype($valores[$aux]);
    }  
    

    ?>
    
</body>
</html>