<?php
// Hacer un programa que muestre los numeros entre



echo '<h1> Ejercicio 5 </h1>';

if (isset($_GET['n1'] ) && isset($_GET['n2'])) {
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];

for ($i =$n1 ; $i <= $n2 ; $i++ ){

    if ($i % 2 != 0) {
            echo " El numero es impar $i <br>";
    }else{
        echo " El numero es par $i <br>";

    }

}
}else{
echo 'Los parametros estan mal';
}
?>


