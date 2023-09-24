<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Suma</title>
</head>
<body>
    <h1>Calculadora de Suma de Números Pares e Impares</h1>
    <form method="POST">
        <label for="numero">Ingrese un número entero positivo:</label>
        <input type="number" name="numero" id="numero" min="1" required>
        <input type="submit" value="Calcular Suma">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        $sumaPares = 0;
        $sumaImpares = 0;

        if ($numero >= 1) {
            for ($i = 1; $i <= $numero; $i++) {
                if ($i % 2 == 0) {
                    // Si es par, agregar a la suma de pares
                    $sumaPares += $i;
                } else {
                    // Si es impar, agregar a la suma de impares
                    $sumaImpares += $i;
                }
            }
            echo "<p>Suma de números pares: $sumaPares</p>";
            echo "<p>Suma de números impares: $sumaImpares</p>";
        } else {
            echo "<p>Por favor, ingrese un número entero positivo mayor o igual a 1.</p>";
        }
    }
    ?>
</body>
</html>
