<?php
echo '<h1> trabajando con arrays </h1>';
echo "<hr>";

//hacer un programa que tenga un array de 8 numeros
//recorrelo y mostrarlo
//ordenarlo y mostrarlo
//mostrar la longitud
//buscar algo

$arrar = [2,8,4,3,2,3,6,5];

echo '<p> recorrerlo y mostrarlo </p>';
foreach ($arrar as $x) {
    echo $x.'<br>';
}
echo '<p> ordenarlo y mostrarlo </p>';
sort($arrar);

foreach ($arrar as $x) {
    echo $x.'<br>';
}

echo '<p>  mostrar la longitud del array  </p>';

echo count($arrar).'usando count';
echo '<br>';
echo sizeof($arrar).'usando sizeof';




?>