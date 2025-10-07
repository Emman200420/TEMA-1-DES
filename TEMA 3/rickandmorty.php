<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rick and Morty</title>
    
</head>
<body>
    <style>
        img{

            width: 200px;
            height: 200px;
        }
        body {
            background-color: pink;
            font-family: "Lucida Console", "Courier New", monospace;

        }
        .card {
            background-color: grey;
            border-radius: 15px;
            
            padding: 25px;

            width: 100%;
            max-width: 320px;

            text-align: center;
            margin: 0 auto;
        }

        .paraid{
            background-color: #4188e6ff;
            padding:5px;
            width:105px;

            border-radius: 100px;

            text-align: center;
            margin: 0 auto;

            color:white;

            font-weight:bold;
            font-size:20px;

                }

            button{

                padding: 25px;
                font-size: 20px;
                background-color: yellow;
                border: none;
                font-family: "Lucida Console", "Courier New", monospace;
                border-radius: 25px;
                

            }

    </style>

         


<?php

$aleatorio = rand(1 , 826);
$url = "https://rickandmortyapi.com/api/character/$aleatorio" ;
$personaje = json_decode(file_get_contents($url), true);

    $id = $personaje ["id"];
    $nombre = $personaje["name"];
    $imagen = $personaje["image"];
    $especie = $personaje["species"];
    $estado = $personaje["status"];


   $estadoSi = "";
if ($estado === "Alive") {
    $estadoSi = "🟢";
} elseif ($estado === "Dead") {
    $estadoSi = "🔴";
}elseif ( $estado === "unknown"){
    $estadoSi ="⚫";
}

//contador de rick

?>


  <center><h1>Rick and morty API</h1></center>

<div class="card">

 <div class="paraid"> <p> ID: <?php echo $id;?></p> </div>
 <br>
<img src = "<?php echo $personaje['image']; ?>" alt ="<?php echo $personaje['name']; ?>">
<br>
<p> Nombre: <?php echo $nombre; ?></p>
<br>
<p> Especie: <?php echo $especie; ?></p>
<br>
<p> Estado: <?php echo $estado . " " . $estadoSi; ?></p>

<button onclick="location.reload()">Reiniciar</button>
</div>


<div class="card2">

<p> Detalles</p>

<p> Ricks: </p>

 <p>Kills: </p>

 <p>Alive: </p>


</div>




</body>
</html>
