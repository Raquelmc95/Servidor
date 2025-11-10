<?php
//Escriba un programa que muestre un emoji de un gesto de manos al azar, con diferentes tonos de piel. 
// Las entidades numéricas para los distintos emoji son: 
// 128070, 128071, 128072, 128073, 128074, 128075, 128076, 128077, 128078, 128079, 128080, 128133, 128170, 128400, 128405, 128406, 128588, 128591, 129295, 129304, 129305, 129306, 129307, 129308, 129310, 129311, 129330.
//Los tonos de color de piel se consiguen con los modificadores Fitzpatrick &#127995; &#127996; &#127997; &#127998; y &#127999;  
// Hay varias formas de combinar los modificadores Fitzpatrick con emojis. 
// En este ejercicio aparecen las secuencias más simples, en las que el modificador se escribe a continuación del carácter del emoji. 
// Ejemplo: echo "<p><span style=\"font-size: 8em\">&#númeroEmoji;&#númeroPiel</span></p>";

echo "<p><span style=\"font-size: 8em\">&#númeroEmoji;&#númeroPiel</span></p>";
$numEmoji = [ 128070, 128071, 128072, 128073, 128074, 128075, 128076, 128077, 128078, 128079, 128080, 128133, 128170, 128400, 128405, 128406, 128588, 128591, 129295, 129304, 129305, 129306, 129307, 129308, 129310, 129311, 129330];
$numPiel = [127995, 127996, 127997, 127998, 127999];

$auxE = rand(0, count($numEmoji)-1);
$auxP = rand(0, count($numPiel)-1);

echo "<h1>Gesto de manos al azar</h1>";

echo "<p><span style='font-size: 8em'>&#" . $numEmoji[$auxE] . "</span></p>";
echo "<p><span style='font-size: 8em'>&#" . $numEmoji[$auxE] . ";&#" . $numPiel[$auxP] . "</span></p>";
?>
