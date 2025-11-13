<?php
$dinero = 47.50;
$centimos = round($dinero * 100);
$devoluciones = [50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100, 50, 20, 10, 5, 2, 1];


echo "Cambio para  $dinero $: \n ";

foreach($devoluciones as $dev ){
    if($centimos >= $dev ){
        $cantidad = round($centimos / $dev);
        $centimos = $centimos % $dev;

        if ($dev >= 100) {
            echo "$cantidad x " . ($dev/100) . "$\n ";
        }else{
            echo "$cantidad x " . $dev . "cent  \n ";
        }
    }
}
?>