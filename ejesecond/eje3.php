<?php
//comprobar si una variable esta vacia y si esta vacia
//rellenarla con texto en minuscula pero convertido a mayuscula y negrita


$array ='';

if (empty($array)) {
    echo 'esta vacia';
    $array ='es informacion nueva';
    $mayus = strtoupper($array);
    echo  '<h1 style="text-transform:uppercase"><b>'.$array.' usando el estilo</b> </h1>'; 
    echo  '<h1 "><b>'.$mayus.' usando mayus</b> </h1>'; 



}else{
    echo 'no esta vacia';
}
?>