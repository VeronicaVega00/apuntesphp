<?php
echo '<h1> <n> Variables globales </n> </h1>';



echo '<ul> <h4> Variables de servidor </h4>';
echo '<li> Direccion IP de mi servidor <n> '.$_SERVER['SERVER_ADDR'].' </n></li>';
echo '<li> Nombre  mi servidor '.$_SERVER['SERVER_NAME'].'</li>';
echo '<li> Software de mi servidor '.$_SERVER['SERVER_SOFTWARE'].'</li>';
echo '<li> Navegador Web desde donde accedemos '.$_SERVER['HTTP_USER_AGENT'].'</li>';
echo '<li> Direccion IP de mi usuario<n> '.$_SERVER['REMOTE_ADDR'].' </n></li>';


echo '</ul>'


?>