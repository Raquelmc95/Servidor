<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturacion</title>
</head>
<body>
<!--Define constantes para:

IVA (21%)
IRPF (15%)
Portes fijos (5€)
Calcula el total de una factura con precio base, aplicando IVA en %, aplicando descuento en % y sumando portes. Muestra desglose completo.

Fórmula (precio base - descuentos + portes, y luego IVA).-->
    <form action="" method="POST">
        <h1>Facturacion simple</h1>
        <label for="precio">Introduce el precio base: </label>
        <input type="number" name="precio" id="precio"><br>

        <label for="descuento">Incluye el descuento: </label>
        <input type="number" name="descuento" id="descuento"><br>

        <input type="submit" name="enviar" value="Enviar">
    </form>
    
    
</body>
<?php
$iva=0.21;
$irpf=0.15;
$portes_fijos=15;
$v_base=$_POST["precio"];
$v_descuento=$_POST["descuento"];
if(isset($_POST['enviar'])){
    if(!empty($v_base)){
        $v_resultado=$v_base-(($v_descuento/100)*$v_base);
        $v_resultado+=$portes_fijos;
        $v_resultado+=$iva*$v_resultado;
        $v_resultado+=$irpf*$v_resultado;
        echo "Tienes que pagar: " . round($v_resultado,2);
    }else{
        echo "No has introducido ningún precio";
    }
}

?>
</html>