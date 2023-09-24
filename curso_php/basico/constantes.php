<?php

 echo 'Constantes PHP';

 //definir constantes
 define('nombre', 'veronica');
 define('edad' , 10);
echo '<br>';
 echo nombre;
 echo edad;
 echo '<br>';
 //CONSTANTES PRE DEFINIDAS

echo PHP_OS;
echo '<br>';

function holaMundos()  {    
    echo __FUNCTION__;

};
holaMundos()


?>
