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

    $number = $_GET["numero"];

    if ($number % 2 == 0) {
        $acao = "O número é par";
    }elseif ($number % 2 != 0) {
        $acao = "O número é impar";
    }
    echo "<p>Ação $acao </p>";

    ?>
</body>
</html>