<?php


$cadenas = ["patata", "cebolla", "sal", "pimienta","te","agua"];

$cadenaCorta = $cadenas[0];
$cadenaLarga = $cadenas[0];


foreach ($cadenas as $cadena){

    $longitud = strlen($cadena);
    if($longitud > strlen($cadenaLarga)){
        $cadenaLarga = $cadena;
    } elseif ($longitud < strlen($cadenaCorta)){
        $cadenaCorta = $cadena;
    }


}
echo " La palabra mas corta es $cadenaCorta y la mas larga es $cadenaLarga";