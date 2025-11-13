<?php
/* La recursividad es una tecnica donde una funcion se  llama a si misma,par resolver e problema atomizado.

Dos piezas claves:
    -Caso base.
    -Caso recursivo.
 */
$num = 7;

Parafactorial($num);
function Parafactorial($num){

    if($num == 1)
        return 1;
    //Caso base 
    else 
        return $num * Parafactorial($num - 1);

    //caso recursivo

}
echo "\n La factorial sera " . Parafactorial($num);






function fivonachi($num){
    if($num == 1)
        return 1;
    else if ($num == 0)
        return 0;
    else 
        return fivonachi($num - 1) + fivonachi($num - 2);
}

echo "\n la fivonachi es " . fivonachi($num);




$n = 7;

function cuentaregresiva($n){

    if ($n == 1){
        echo'1';

    }else {
        echo $n . "\n";
        cuentaregresiva($n-1);

    }
}

cuentaregresiva($n);



?>