<?php


function sumar($a, $b){

    $suma = $a + $b ;

    echo $suma;
    return $suma;

}

//scanner is argv in php
$a = $argv[1];
$b = $argv[2];

sumar($a , $b);
?>