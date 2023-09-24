<?php
$array = [1, 4, 6, 2];
$string = "";
$int = 234;
$bool = false;

$prueba = array(
    "uno" => $array,
    "dos" => $string,
    "tres" => $int,
    "cuatro" => $bool
);

foreach ($prueba as $nombre => $valor) {
    if (is_array($valor)) {
        echo "$nombre es un array<br>";
    } elseif (is_int($valor)) {
        echo "$nombre es un entero<br>";
    } elseif (is_bool($valor)) {
        echo "$nombre es un booleano<br>";
    } elseif (is_string($valor)) {
        echo "$nombre es un string<br>";
    } else {
        echo "$nombre es de un tipo desconocido<br>";
    }
}



?>