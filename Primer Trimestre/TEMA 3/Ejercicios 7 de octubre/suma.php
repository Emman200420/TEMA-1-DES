<?php


function sumar($a, $b){

    $suma = $a + $b ;

    echo $suma;
    return $suma;

}

//scanner is argv in php
$a = $argv[2];
$b = $argv[3];

sumar($a , $b);
?>