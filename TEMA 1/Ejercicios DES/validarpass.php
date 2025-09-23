<?php

function validarPass(string $pass): bool
{
    if (strlen($pass) < 8) {
        echo "\n La contraseña debe tener al menos 8 caracteres";
        return false;
    }

    $tieneMayus = (bool)preg_match("/[A-Z]/", $pass);
    $tieneMinus = (bool)preg_match("/[a-z]/", $pass);
    $tieneDig   = (bool)preg_match("/\d/", $pass);

    if (!$tieneMayus) {
        echo "\n Falta letra mayúscula";
    }
    if (!$tieneMinus) {
        echo "\n Falta letra minúscula";
    }
    if (!$tieneDig) {
        echo "\n Falta un digito";
    }

    return $tieneMayus && $tieneMinus && $tieneDig;
}

$p = "Contrasena1234";

if (validarPass($p)) {
    echo "\nContraseña segura";
} else {
    echo "\nContraseña no segura";
}

?>
