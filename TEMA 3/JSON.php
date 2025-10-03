<?php

$json = '{ "nombre" : "Juan", "edad" : 28}';

$data = json_decode($json , true);

echo $data["nombre"];





$JSON = "Ejemplo.json";

$array = ["nombre" => "Pepe" , "edad" => 28];

$archivo = fopen($JSON, "w");

$texto = json_encode ($array , JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

fwrite($archivo, $texto );
fclose($archivo);


?>