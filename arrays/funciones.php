<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
$singles = ['2pac', 'drake', 'jennifer lopez', 'alfredo', 'zfh'];
$numer =[0,4,6,3,2,4,6,7,6,66];

echo 'asort ordena de forma alfabetica <br>';
asort($singles);
echo var_dump($singles).'<br>';
echo 'arsort ordena alf de forma inversa <br>';
arsort($singles);
echo var_dump($singles).'<br>';

echo 'sort ordena los array de numeros <br>';
sort($numer);
echo var_dump($numer).'<br>';



array_push($singles , 'ariana grandee');//agrega normal
array_push($singles , 'juan manuel');//agrega normal
array_push($singles , 'miguel');//agrega normal





// array_pop($singles);  // elimina el ultimo

unset($singles[0]); //elimina el que yo señale


//sacar un elemento aleatorio
$numero = array_rand($singles);
echo $singles[$numero];


//reverse

$revertido = array_reverse($numer);


print_r($revertido);


//buscar en un array

echo '<p> buscar en un array > </p>';

 $res =array_search('miguel', $singles);
 echo $singles[$res];

 echo '<p> contarcuantos hay en un > </p>';


echo count($singles);
echo sizeof($singles)

?>