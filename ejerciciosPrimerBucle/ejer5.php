<!-- 
    Hacer un programa que muestre los numeros entre

 -->

<?php
echo '<h1> Ejercicio 5 </h1>';

if (isset($_GET['n1'] ) && isset($_GET['n2'])) {
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];

    for ($i =$n1 ; $i <= $n2 ; $i++ ){

        echo "$i <br>";

    }
}else{
    echo 'Los parametros estan mal';
}
?>
