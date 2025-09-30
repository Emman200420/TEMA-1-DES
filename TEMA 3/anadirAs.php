<?php
function anadirAs($n , $a){

    for ($i = 0; $i < $n ; $i++){
        $a = $a . "a";
    }$a .="a";
    echo $a;
}

anadirAs(0,"hol");
?>