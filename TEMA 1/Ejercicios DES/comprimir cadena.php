<?php


function comprimirCadena (string $s): string
{
    // Tenemos que usar strlen

    $cont = 1;
    $out = "";
    $n = strlen($s);

    if ($n == 0 ) return "";

    for ($i = 1 ; $i < $n; $i++){

        if ($s[$i] == $s [$i - 1 ]){
            $cont++;

        }else{

            $out = $out . $s[$i - 1 ] . $cont;
            $cont = 1;

        }

    }
    $out .= $s[$n - 1] . $cont;
    return $n;
}



echo comprimirCadena("aabbcc"), PHP_EOL;

?>