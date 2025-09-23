<?php

for ($i = 0; $i < 5; $i++ ){

    for($j = 0; $j < 5 ; $j++){

        if(($i + $j) % 2 == 0 ){
            echo " ⬛ ";
        }else{
            echo " ⬜ ";
        }

    }echo "\n";
}
?>