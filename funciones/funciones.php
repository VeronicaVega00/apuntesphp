

<?php
echo '<h1> Ejercicios con funciones </h1>';

function calculadora($n1, $n2){
    $suma = $n1 +$n2;
    $resta = $n1 -$n2;
    $multiplicacion = $n1 *$n2;
    $divi = $n1 -$n2;
    echo '<th>';
    echo " total de la suma de $n1 + $n2 = $suma".'<br>';
    echo " total de la Resta de $n1 - $n2 = $resta".'<br>';
    echo " total de la Division de $n1 / $n2 = $divi".'<br>';
    echo " total de la Multiplicacion de $n1 * $n2 = $multiplicacion".'<br>';
}

calculadora(10,20)

?>