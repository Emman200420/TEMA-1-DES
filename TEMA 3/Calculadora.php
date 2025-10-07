<?php

function sumar($a,$b){

    $suma = $a + $b ;

    echo $suma;
    return $suma;

}

function esPar($a){

    if($a % 2 == 0){
        echo "es Par .\n";
    }else{
        echo"no es Par .\n ";
    }return $a;
}

function factorial($a){
    if($a == 1){
        return 1;}
    else{
        return $a * factorial($a - 1); 
    }
    
   

}
echo" la factorial seria " . factorial($a);


$a = $argv[1];
$b = $argv[2];

sumar($a,$b);
esPar($a);
factorial($b);
?>