<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


     

    <?php
    $persona = ["Emman", "20" , "jlr0020@alu.medac.es"];
    echo"<h1>Mi nombre es $persona[0], mi edad es $persona[1], mi correo es $persona[2]</h1>";
    ?>

      <h1 id="mensaje"></h1>

      
    <script>
        document.getElementById("mensaje");
        var hora = new Date().getHours();


        if(hora > 6 && hora < 12 ){
           document.getElementById("mensaje").innerHTML="buenos dias";
        }else if (hora > 18){
             document.getElementById("mensaje").innerHTML="buenos tardes";
        }else{
             document.getElementById("mensaje").innerHTML="buenos noches";
        }
    </script>
</body>
</html>