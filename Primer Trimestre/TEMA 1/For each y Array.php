<?php

 $frutas = ["Manzana", "Melon", "Fresa"];
  
 //reccorer con for
 for($i = 0; $i< count($frutas); $i++)
    echo $frutas[$i] . "\n";

 //reccorer con foreach
 foreach($frutas as $fruta) {
    echo $fruta . "\n";
   }
  //arrays associativos
  $alumno =["nombre" => "Pepito",
  "edad" => 5,
  "correo" => "pepito.mail.com"];

  foreach ($alumno as $clave => $valor){
    echo "$clave -- $valor \n";
  }
  
  //modificar los valores de un array
  $numeros = [1,2,3];

  foreach ($numeros as &$numero){
    $numero *=2;
  }

  print_r($numero);

  // Ejercicio 1 tenemos un array indexado de colores y mediante 
  //la funcion in_array queremos saber si contiene el color azul
  $colors = ["blue",  "violet", "green"];

  if(in_array("blue",$colors)){
    echo"\n theres a color blue";
  }else{
    echo"\n theres no color blue";
  }

  // Ejercico 2 tenemos un array indexado de colores y sin usar 
  //funciones queremos saber si contiene el color azul
  foreach ($colors as $colorblue){
    if ($colorblue == "blue"){
      echo"\n theres color blue";
    break;
  }else {
    echo"\n theres no color blue";
    break;
     }
   }

  //Ejercicio 3 Crear un array de numeros relleno y otro de numeropares vacio
  //llenar el de numeros pares con los numeros pares del primer array

  $numeros = [12, 27, 15, 2];
  $numerospares = [];

  $numerospares[] = 4;
  array_push($numerospares, 24);


  //Ejercicio 4 Modificar el ejercicio anterior para que en lugar de 
  // geuardar los numeros pares, guarde los numeros multiplos de 5 

  //Ejercico 5 Dado el siguiente codigo, imprime la suma de las 
  //en promedio de las edades 

  $edades = [10,20,21,25];
  $suma = 0;
  $promedio = 0;

  

  


?>