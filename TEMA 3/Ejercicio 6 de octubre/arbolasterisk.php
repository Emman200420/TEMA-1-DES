<?php

/*


*
**
***
****
*****




*/
function imprimirTriangulos($asterisk){
    
    for ($i = 1; $i <= $asterisk; $i++){ 
        for($j = 1; $j <= $i; $j++){
            echo "*";
        }
        echo "\n"; 
    }
}

imprimirTriangulos(5);


?>