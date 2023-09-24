<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <div>
    <form method="POST">

        <span>Ingresa el numero 1</span>
        <input type="Number" name='num1'>

        <span>Ingresa el numero 2</span>
        <input type="Number" name='num2'>

        <input type="submit" name="operacion" value="Sumar">
        <input type="submit" name="operacion" value="Restar">
        <input type="submit" name="operacion" value="Multiplicar">
        <input type="submit" name="operacion" value="Dividir">
        
    </form>

    </div>
    
</body>
</html>

<?php
// hacer op basicas
echo '<h1> Ejercicio 4 </h1>';


if ($_SERVER["REQUEST_METHOD"] =='POST') {
    $num1 = (int)$_POST['num1'];
    $num2 = (int)$_POST['num2'];
    echo "el numero 1 digitado es  $num1 y el segundo es $num2";

    $resultado =0;

    $operacion = $_POST['operacion'];

    switch ($operacion) {
        case 'Sumar':
            $resultado = $num1+ $num2;
            echo "El resultado de tu $operacion es $resultado";           
             break;
            case 'Restar':
                $resultado = $num1- $num2;
                echo "El resultado de tu $operacion es $resultado";            
                break;
                case 'Multiplicar':
                    $resultado = $num1* $num2;
                    echo "El resultado de tu $operacion es $resultado";            
                    break;
        default:
        $resultado = $num1/$num2;
        echo "El resultado de tu Division es $resultado";     
            break;
    }

}

?>