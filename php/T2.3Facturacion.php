<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturación</title>
</head>
<body>
    <h1>Sistema de facturación simple</h1>
    <form action="" method="POST">
        <label for="precio">Precio base: </label>
        <input type="number" name="precio" id="precio"><br>

        <label for="descuento">Introduce descuento aplicado: </label>
        <input type="number" name="descuento" id="descuento"><br>

        <input type="submit" name="calcular" value="Calcular">
    </form>
    <?php
        $v_precio=$_POST['precio'];
        $v_descuento=$_POST['descuento'];
        $v_iva=0.21;
        $v_irpf=0.15;
        $v_portesFijos=5;

        if(!empty($v_precio) && !empty($v_descuento) && isset($_POST['calcular'])){
            $v_total=($v_precio-$v_descuento);
            $v_total+=$v_portesFijos;
            $v_total-=($v_total*$v_irpf);
            $v_total+=$v_total*$v_iva;            
            
            echo "El total a pagar es: ". number_format($v_total,2);
        }else{
            echo "Rellena todos los campos";
        }
    
    ?>

</body>
</html>