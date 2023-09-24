<!-- 
    escribir un programa que imprima por pantalla
    los cuadrados de los 40 primeros numero naturales
 -->
<?php

$a=1;
while ($a <= 40) {
    $resultado = $a*$a;
    echo " El resultado del cuadrado de $a es $resultado".'<br>';
    $a++;
}

?>