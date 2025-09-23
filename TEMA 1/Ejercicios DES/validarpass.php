<?php

function validarPass(String $pass):bool
{
if (strlen($pass) < 8 ) return false;
$tieneMayus = (bool)preg_match("/[A-Z]/" , $pass);
$tieneMinus = (bool)preg_match("/[a-z]/" , $pass);
$tieneDig = (bool)preg_match("/\d/" , $pass);
return $tieneMayus && $tieneMinus && $tieneDig;
}
 $p = "JBCSBUbdjbb894acnc";

 if(validarPass(pass: $p)){
    echo"Contrasena segura";
 }else{
    echo"Contrasena no segura";
 }

?>