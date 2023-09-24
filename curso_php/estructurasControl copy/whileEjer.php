
<?php
echo '<hr>';
echo '<h1> Tabla de multiplicar </h1>';
echo '<p> Hacer una tabla de multiplicar con parametros recibidos por un get</p>';

$numero = (int)$_GET['numero'];
echo $numero;
echo '<br>';
$contador =1;
while ($contador <= 10) {
    echo "$numero *$contador =".($numero*$contador).'<br>';
    $contador++;
};


echo '<hr>';
echo '<h1> DO WHILE </h1>';
echo '<p>Evalua la condicion al final</p>';

$edad = 17;
$contador=1;
do{
    echo "Tienes acceso al local privado $contador".'<br>';
    $contador ++;
}while($edad >=18 && $contador <=10);




?>