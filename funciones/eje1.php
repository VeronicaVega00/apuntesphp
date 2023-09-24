<?php


function devuelve ($nombre, $apellido){

    $resultado = "<h1> Tu nombre completo es $nombre $apellido";

    return  pinta($resultado);

}

devuelve('ana', 'ardila');


function pinta($x){
    echo "$x";
    var_dump($x);
}
?>