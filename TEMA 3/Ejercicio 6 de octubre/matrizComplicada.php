<?php

//deberia que sea esto: 

/*

0 0 0 0 0 0 0
0 x x x x x 0
0 x 0 0 0 x 0
0 x 0 x 0 x 0
0 x 0 0 0 x 0
0 x x x x x 0
0 0 0 0 0 0 0

*/

$longitud = 7;


for ($i = 0; $i < $longitud; $i++) {
    for ($j = 0; $j < $longitud; $j++) {
        if ($i == 0 || $i == $longitud - 1 || $j == 0 || $j == $longitud - 1) {
            echo " O ";
        } else if ($i == 1 || $i == $longitud - 2 || $j == 1 || $j == $longitud - 2 || ($i == 3 && $j == 3)) {
            echo " X ";
        } else {
            echo " O ";
        }
    }
    echo "\n";
}


?>