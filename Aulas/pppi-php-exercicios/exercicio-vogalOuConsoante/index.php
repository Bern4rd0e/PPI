<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $letra = strtolower($_GET["letra"]);

    if ($letra == "a" || $letra == "e" || $letra == "i" ||
    $letra == "o" || $letra == "u") {
        $acao = "A letra é vogal";
    } else {
        $acao = "A letra é consoante";
    }
    
    echo "<p>Ação $acao </p>";

    ?>
</body>
</html>