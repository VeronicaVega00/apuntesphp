

<?php

//hacer un array que añada valores mientras que su longitud sea menor a 120
//y muestralo por pantalla

$array =[];

for ($i=0; $i <=120; $i++) { 
    $palabra ='info';
    array_push($array, $palabra, "+", $i );
    $i++;
}

$resultado = implode(' ', $array);
echo $resultado. '<br>';

?>
