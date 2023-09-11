<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dia da semana</h1>

    <?php

    $day = $_GET["weekDay"];

    switch ($day) {
        case 1:
            echo "Segunda";
            break;
        
        case 2:
            echo "Terça";
            break;
        
        case 3:
            echo "Quarta";
            break;

        case 4:
            echo "Quinta";
            break;

        case 5: 
            echo "Sexta";
            break;

        case 6:
            echo "Sábado";
            break;

        case 7:
            echo "Domingo";
            break;

        default:
            echo "Número inválido";
    }

    ?>
    
</body>
</html>