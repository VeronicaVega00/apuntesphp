<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculadora de edad</h1>
    <form method="POST">
        <span>Digita tu año de nacimiento</span>
        <input type="text" name="fecha">
        <input type="submit" value='calcular edad'>

    </form>
</body>
</html>

<?php
define( 'ana' , '33');

echo var_dump('ana');
$actual =2023;

if ($_SERVER["REQUEST_METHOD"] =='POST') {
   $ano = (int)$_POST['fecha'];

    if ($ano>$actual) {
        echo '<h3> Digite una fecha valida </h3>';
    }else{
        $total = $actual -  $ano;
        echo $total; 
    }
 

}

?>