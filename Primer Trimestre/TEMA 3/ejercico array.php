<?php

$numeroMax = 0;

$array = [4, 8, 9, 3];
  
for($i = 0; $i <= 3; $i++){
    if($array[$i] > $numeroMax){
        $numeroMax = $array[$i];
    }
}
echo $numeroMax;
?>