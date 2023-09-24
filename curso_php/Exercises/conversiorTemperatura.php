<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de temperatura</title>
</head>
<body>
    <div>
        <h1>Conversor de temperatura</h1>
        <form method="POST">
            <span>Ingresa la temperatura en grados Celsius</span>
            <input type="number" name="celsius">
            <input type="submit" value="Transformar">
        </form>
    </div>
    
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $celsius = (int)$_POST['celsius'];
    if ($celsius <= 0) {
        $fahrenheit = 32;
        echo " $celsius celius   equivalen a  $fahrenheit fahrenheit ";
    }else{
        $farenheigth = ($celsius *(9/5))+32;
        echo " $celsius celius   equivalen a  $farenheigth fahrenheit ";

    }
}
?>
