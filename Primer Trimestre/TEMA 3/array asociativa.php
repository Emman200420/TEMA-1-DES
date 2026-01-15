<?php
$numMax = 0;
$personamax = " ";
$personas = ["juan "  => 28, "ana "  => 29, "pedro "  => 30];

foreach ($personas as $persona => $edad){

        if ($personas > $persona){

            $numMax = $personas;
            $personamax = $personas;
        }

    }echo "$persona -- $edad ";
?>