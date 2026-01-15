<?php

function esPerfecto($numero) {
    $sumaDivisores = 0;
    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $sumaDivisores += $i;
        }
    }
    return $sumaDivisores == $numero;
}

if (esPerfecto(28)) {
    echo " es perfecto \n ";
} else {
    echo "no es perfecto \n ";
}

function Dividir($numero){
    return $numero % 2 == 0;
}

if (Dividir(27)){
    echo 'es divisible';
} else {
    echo 'no es divisible';
}
?>