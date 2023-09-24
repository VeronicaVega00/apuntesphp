<!-- 


 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla htm de las tablas multiplicar</title>
</head>
<body>
    
</body>
</html>


 <?php 
echo "<table border='1'><tr>";

for($i = 1; $i <= 10; $i++) {
    $resultado =  1 *$i;
    echo "<td>$i * $i = $resultado</td>";
}

echo "</tr></table>";


echo "<table border='1'><tr>";

for($i = 1; $i <= 10; $i++) {
    $resultado =  2 *$i;
    echo "<td>$i * $i = $resultado</td>";
}

echo "</tr></table>";
?>


 ?>