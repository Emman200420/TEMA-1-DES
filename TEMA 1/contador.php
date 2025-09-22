<?php
// Cuantos numeros divisibles entre 2 y 3 echo $contador.

$contador = 0;
$N = 100;

for ($i = 1; $i <= $N; $i++) {
    if ($i % 2 == 0 && $i % 3 == 0) {
        $contador++;
    }
}
echo $contador;



?>