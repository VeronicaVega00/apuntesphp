<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" >
</body>
</html>
<?php
$dia = 5;
switch ($dia) {

    case 1:
        echo 'Es lunes';
        break;

        case 2:
            echo 'Es martes';
            break;

            case 3:
                echo 'Es miercoles';
                break;
                case 4:
                    echo 'Es jueves';
                    break;
                    case 5:
                        echo 'Es viernes';
                        break;
                        case 6:
                            echo 'Es sabado';
                            break;
                            case 7:
                                echo 'Es domingo';
                                break;
    
    default:
    echo 'es un numero invalido';
        break;
}
?>
