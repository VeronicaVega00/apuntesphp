<?php
echo ' <h1> CONDICIONALES EN PHP </h1>';

$edad =19;
$ciudad = 'Madrid';
$continente = 'Europa';

if ($edad >=18 && $continente ==='Europa') {
    echo 'Es usted mayor de edad';
    echo '<br>';
    echo 'Pertenece a la ciudad de '.$ciudad;
}else{
    echo 'es usted menor de edad';
}


//ejemplo 
echo '<br>';
echo '<hr>';
$dia= 1;
if ($dia ===1) {
    echo 'es lunes';
}elseif($dia ===2){
    echo 'es martes';
}elseif ($dia ===3){
echo 'es miercoles';
}elseif($dia ===4){
    echo 'es jueves';
}elseif ($dia ===5 ){
    echo 'es viernes';
}else{
    echo 'Es fin de semana';
}

echo '<br>';
echo '<hr>';
$edad = 9;
if ( $edad>=18 && $edad<=64) {
    echo 'Estas en condiciones para trabajar';
}else{
    echo 'No puedes trabajar';
}



?>