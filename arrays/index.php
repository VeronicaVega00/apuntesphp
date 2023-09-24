<?php 

echo '<h1> Como funcionan los arrays </h1>';

$peliculas = array('batman', 'spiderman', 'el señor de los amillos');
$singles = ['2pac', 'drake', 'jennifer lopez'];
$personas =[
    array('nombre' => 'Juan', 'apellido' => 'anaya'),
    array('nombre' => 'ana', 'apellido' => 'Pérez'),
    array('nombre' => 'arina', 'apellido' => 'padilla'),

];

$datos =['nombre' => 'Juan', 'apellido' => 'anaya'];
echo var_dump($datos['nombre']).'<br>';





echo "$singles[2]";



echo '<ul>';
for ($i=0; $i <count( $singles) ; $i++) { 
    echo  " <li> $singles[$i] </li>";
}
echo '</ul>';


//for each es basicamente especial para recorrer arys
echo '<ul>';
foreach ($peliculas as $x => $cantante){
    echo " <li> la posicion  del $cantante es $x </li>";


}
echo '</ul>';


echo '<br>';
foreach ( $personas as $x){
    print_r($x);
    if ($x['apellido'] =='padilla') {
        echo 'termino';
        break;
    }
}


?>