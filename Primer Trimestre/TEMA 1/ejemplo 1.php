<?php
$nombre = "Emman";
$apellido = "RAMOS";

$my_int = 6;
$my_int2 = 10;
$salida_int = $my_int + $my_int2;

$my_array = [$nombre,$my_int,$my_int2];

array_push($my_array,$nombre);
print_r($my_array);
echo $my_array[1];
echo gettype($my_int);

$my_dict = array("nombre" => "Paco");
print_r($my_dict);

echo $salida_int . "\n";
echo $my_int +2 . "\n";
echo $my_int . "\n";

echo " Mi nombre es " . $nombre . " " . $apellido ." ";


//If
$var1 = 1;
$var2 = 2;
if ($var1 < $var2) {
    echo "\n Hola Mundo";
}
else if ($var2 < 100){
    echo "\n eRROR";
}
else {
    echo "\n Adios mundo";
}


$edad = 20;

//condicional simple
if ($edad > 18) {
    echo "\n ya eres mayor";
    
} else {
    echo "\n no eres menor";
}


//condicional con else if
if ($edad < 18) {
    echo "\n eres niño";
} else if ($edad >= 18 && $edad < 30) {
    echo "\n eres joven";
} else if ($edad >= 30 && $edad < 60) {
    echo "\n eres adulto";
} else {
    echo "\n te queda poco";
}




//Contador 
$i = 0;
while($i < 128){$i++;}
echo"\n El contador ha llegado a " . $i . " impresiones";

//for
$j = 0;
for($i =0; $i <= 10 ; $i = $i + 3){

    $j = $j + $i;
}
echo "\n". $j;
echo "\n". $i;

//Matriz i
for ($i = 0; $i < 5; $i++ ){

    for($j = 0; $j < 5 ; $j++){

        if($i == $j){
            echo " X ";
        }else{
            echo " O ";
        }
    }echo "\n";
}

//Matriz ii
for ($i = 0; $i < 5; $i++ ){

    for($j = 0; $j < 5 ; $j++){

        if($j == 1){
            echo " X ";
        }else{
            echo " O ";
        }
    }echo "\n";
}

//longitud
$longitud = 7;

for ($i = 0; $i < $longitud; $i++ ){

    for($j = 0; $j < $longitud ; $j++){

    if ($j < $longitud - 1 && $j > 0 && $i !=0 && $i != $longitud -1){
       echo " X ";
    } else {
        echo " O ";
    }
} echo"\n"; 
}
