<?php

echo '<h1> Bucle for </h1>';

$resultado =0;

for ($i=0; $i <=100 ; $i++) { 
    $resultado+= $i;
    echo "$resultado";
    $i++;
}

echo $resultado;



$num =2;
for ($i=0; $i <=10 ; $i++) { 
    $resultado = $num*$i;
    echo "<p>  $resultado </p>";
    if ($resultado ===12) {
        echo 'ok';
        break;

    }
}




?>