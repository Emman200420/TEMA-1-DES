<?php
function esPar($a){

    if($a % 2 == 0){
        echo "es Par \n";
    }else{
        echo"no es Par \n ";
    }return $a;
}

$a = $argv[2];

esPar($a);

?>