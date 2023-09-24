<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de informacion en php</title>

</head>
<body>
    <div>
        <h2>Formulario PHP</h2>
        <form method="POST" action="recibir.php">
            <p>
            <label for="nombre"> nombre </label>
            <input type="text" name="nombre">
        </p>
        <p>
            <label for="apellidos"> apellidos </label>
            <input type="text" name="apellido">
        </p>
        <button value="Enviar">Enviar </button>
        </form>

    </div>
    
</body>
</html>