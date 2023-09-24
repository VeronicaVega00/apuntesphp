<!-- 
    sacar todos los numeros pares del 1 al 100

 -->

 <?php
echo 'Numeros par';

for ($i=0; $i <=100 ; $i++) { 

    if  ($i  % 2 ==0) {
        echo $i.'</br>';
    };
    $i++;
}

 ?>