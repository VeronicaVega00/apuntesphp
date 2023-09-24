
<?php
 $nombre = $_POST['nombre'];
 $apellido = $_POST['apellido'];

echo ' <h1> Informacion Del Formulario </h1>';
 echo ' <h4> Nombre : '.$nombre.'</h4>';
 echo ' <h4> Apellido : '.$apellido.'</h4>';

 echo var_dump($_POST)
?>