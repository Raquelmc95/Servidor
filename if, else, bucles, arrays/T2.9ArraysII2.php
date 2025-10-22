<?php
//Actualice la página para mostrar una secuencia aleatoria de bits y su complementaria.

$bit = [0, 0, 0, 0, 0, 1, 1, 1, 1, 1];

shuffle($bit);

echo "<h3>Secuencia aleatoria de bits</h3>";

echo "A: " . implode(" ", $bit);

for ($i=0; $i<10; $i++){
    if($bit[$i]==0){
        $rever[$i]=1;
    }else{
        $rever[$i]=0;
    }
}

echo "<br>";
echo "A: " . implode(" ", $rever);

?>