<?php

$n = 10;
TablaMultiplicar($n);

function TablaMultiplicar($n) {
    for ($i = 1; $i <= 10; $i++) {  // Aquí mostramos la tabla hasta el 10
        $resultado = $n * $i;
        echo "\n" . $n . " * " . $i . " = " . $resultado;
    }
}
?>
