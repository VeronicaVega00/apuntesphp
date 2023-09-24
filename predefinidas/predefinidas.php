<?php
echo "<h1> Funciones pre definidas php </h1> ";
echo "<ul> ";
echo "<p> <b>Debuggear  </b></p>";
echo "<li> Var_dump() Te muestra el interior de la variable o cosa que desees ver<li>";
$nombre =' veronica';
echo var_dump($nombre);
// fechas
echo "<p> <b>Fechas  </b></p>";
echo "<li> date() hay muchas pero la mas conocida es es date() y te muestra la fecha en tiempo real
<li>";
echo date( 'd-m-y');
// hora
echo "<p> <b>Hora  </b></p>";
echo "<li> time() hay muchas pero la mas conocida es es time() y te muestra la hora en tiempo real
<li>";
echo time();

// matematicas

echo "<p> <b>Raiz cuadrada  </b></p>";
echo "<li> sqrt() sirve para sacar raices cuadradas
<li>";
echo sqrt(10);

//numero aleatorio

echo "<p> <b>Numero aleatorio  </b></p>";
echo "<li> rand(10,40) sirve para sacar numero aleatorios
<li>";
echo rand(10,40);

//numero pi
echo "<p> <b>Numero  pi  </b></p>";
echo "<li> pi() sirve para sacar el numero pi
<li>";
echo pi();

//redondear
echo "<p> <b>Funcion para redondear </b></p>";
echo "<li> round(3.90384723212) sirve para sacar el numero pi
<li>";
echo round(3.90384723212,2);

//tipo de variable

echo "<p> <b>Funcion saber el tipo de variable </b></p>";
echo "<li> gettype($nombre) sirve para sacar el tipo de variable<li>";
echo gettype($nombre);


//is float, is_int, is_string

echo "<p> <b>Funcion saber el tipo de variable id_float, is_int, is_string </b></p>";
echo "<li> is_string($nombre) sirve para saber si es un string<li>";
echo "<li> is_float($nombre) sirve para saber si es un numero decimal<li>";
echo "<li> is_int($nombre) sirve para saber si es un numero entero <li>";
echo is_float($nombre).'<br>';
echo is_int($nombre).'<br>';
echo is_string($nombre).'<br>';

echo "<li>devuelve 1 cuando es correcto <li>";


echo "<p> <b>Funcion quita los espacios </b></p>";

$frase = '                                si es funcional';
echo var_dump($frase)."<li> trim() sirve paraquitar los espacios en blanco <li>";
echo trim($frase);

echo var_dump($frase);




echo "</ul>";
if (isset($nombre)) {
    echo 'la variable existe';
}else{
    echo 'la variable no existe';
}

echo '<br>';


$vacia ="                             ";


echo"<h1> $frase</h1>";

if (empty($vacia)) {
    echo"<h1> la variable esta vacia </h1>";

}else{
    echo 'la variable tiene contenido';
}





?>