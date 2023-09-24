<?php
$year = 2020;
echo '<br>';
echo '<h1> Operadores de incremento y decremento</h1> ';
echo '<br>';
echo '<ul>';
echo '<h4>Año incial: <b>'.$year. '</b> </h4>  ';
$year++;
echo '<li> Incremento es <n> $variable++ </n>'. $year.'</li>';
$year--;
echo '<li> Decremento es <n> $variable++ </n>'. $year.'</li>';
++$year;
echo '<li> Pre-incremento es <n> ++$variable </n>'. $year.'</li>';
--$year;
echo '<li> Pre-Decremento es <n> --$variable </n>'. $year.'</li>';
echo '</ul>';

?>