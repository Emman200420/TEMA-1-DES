<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon</title>
</head>
<body>
<style>
    body{
        background-color: grey;
    }
    .card{

        background-color: grey;
            border-radius: 15px;
            
            padding: 25px;

            width: 100%;
            max-width: 320px;

            text-align: center;
            margin: 0 auto;
    }


</style>


<?php
$url = "https://pokeapi.co/api/v2/pokemon/pikachu";
$json = file_get_contents($url);
$data = json_decode($json, true);

$imageUrl = $data["sprites"]["front_default"];
$name = ucfirst($data["name"]); 



$maximodelnombre = '';
$maximovalor = 0;

foreach ($data["stats"] as $stat) {
    if ($stat["base_stat"] > $maximovalor) {
        $maximovalor = $stat["base_stat"];
        $maximodelnombre = $stat["stat"]["name"];
    }
}
?>

<div class="card">


<h1><?php echo  $name  ?></h1>
<?php echo '<img src="' . $imageUrl . '" />';?>
<p>Su estadística más alta es <strong><?php echo $maximodelnombre; ?></strong> con un valor de <strong><?php echo $maximovalor; ?></strong>.</p>


</div>






</body>
</html>