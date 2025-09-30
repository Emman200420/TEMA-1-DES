<?php

$json = '{ "nombre" : "Juan", "edad" : 28}';

$data = json_decode($json , true);

echo $data["nombre"];
?>